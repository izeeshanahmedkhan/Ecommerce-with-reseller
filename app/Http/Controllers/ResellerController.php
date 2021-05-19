<?php

namespace App\Http\Controllers;

use App\Models\Reseller;
use App\Models\User;
use App\Models\ResellerUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ResellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resellers =  Reseller::all();

        return view('admin.resellers.index',['resellers'=>$resellers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.resellers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> ['required', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255','unique:users'],
            'password' => ['required', 'string', 'min:5'],
            'city'=> ['required', 'string', 'max:255'],
            'area'=> ['required', 'string', 'max:255'],
            'address'=> ['required', 'string','max:255'],
            'contact'=> ['required','string','regex:/^((\+92))\d{10}$/'],
            'messaging_service_no'=> 'nullable|string|max:255',
            'messaging_service_name'=> 'nullable|string|max:255',
            'cnic_no'=> 'required|string|max:255',
            'cnic_front' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cnic_back'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'social_media_name_1'=> 'nullable|string|max:255',
            'link_1'=> 'nullable|string|max:255',
            'social_media_name_2'=> 'nullable|string|max:255',
            'link_2'=> 'nullable|string|max:255',
            'bank_account_title'=> 'required|string|max:255',
            'bank_name'=> 'required|string|max:255',
            'bank_branch'=> 'required|string|max:255',
            'account_or_iban_no'=> 'required|string|max:255',
            'money_transfer_no'=> 'required|string|max:255',
            'money_transfer_service'=> 'required|string|max:255',
            'status'=> 'required',
        ]);

        $checkCnicNo = Reseller::where('cnic_no',$request->cnic_no)->get();

        if(sizeof($checkCnicNo) == false){

            $reseller = new Reseller();

            $reseller->name = $request->get('name');
            $reseller->email = $request->get('email');
            $reseller->city = $request->get('city');
            $reseller->area = $request->get('area');
            $reseller->address = $request->get('address');
            $reseller->contact = $request->get('contact');
            $reseller->messaging_service_no = $request->get('messaging_service_no');
            $reseller->messaging_service_name = $request->get('messaging_service_name');
            $reseller->cnic_no = $request->get('cnic_no');
            $reseller->social_media_name_1 = $request->get('social_media_name_1');
            $reseller->link_1 = $request->get('link_1');
            $reseller->social_media_name_2 = $request->get('social_media_name_2');
            $reseller->bank_account_title = $request->get('bank_account_title');
            $reseller->bank_name = $request->get('bank_name');
            $reseller->bank_branch = $request->get('bank_branch');
            $reseller->account_or_iban_no = $request->get('account_or_iban_no');
            $reseller->money_transfer_no = $request->get('money_transfer_no');
            $reseller->money_transfer_service = $request->get('money_transfer_service');
            $reseller->status = $request->get('status');

            $cnic_front_image = $request->file('cnic_front');
            $cnic_front_image_name = $cnic_front_image->getClientOriginalName();
            $cnic_front_image->storeAs('/images/resellerImages',$cnic_front_image_name);

            $reseller->cnic_front = $cnic_front_image_name;

            $cnic_back_image = $request->file('cnic_back');
            $cnic_back_image_name = $cnic_back_image->getClientOriginalName();
            $cnic_back_image->storeAs('/images/resellerImages',$cnic_back_image_name);

            $reseller->cnic_back = $cnic_back_image_name;

            $reseller->save();

            $user = new User();

            $user->name = $request->get('name');
            $user->email = $request->get('email');
            $user->password = Hash::make($request->password);
            $user->o_auth = $request->password;

            $user->assignRole('reseller');

            $user->save();

            $userId = $user->id;


            $reseller->users()->attach($userId);

            Session::flash('message','Reseller Added Successfully');
            Session::flash('alert-type','success');
            return redirect()->route('reseller.index');

        }
        else{

            Session::flash('message','Reseller Already exists with this CNIC');
            Session::flash('alert-type','warning');
            return redirect()->back();

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reseller  $reseller
     * @return \Illuminate\Http\Response
     */
    public function show(Reseller $reseller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reseller  $reseller
     * @return \Illuminate\Http\Response
     */
    public function edit(Reseller $reseller)
    {
        return view('admin.resellers.edit',['reseller'=>$reseller]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reseller  $reseller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reseller $reseller)
    {
        $reseller_user = Reseller::with(['users'])->where('id',$reseller->id)->first();
        $user = $reseller_user->users()->first();

        $request->validate([
            'name'=> ['required', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255','unique:users,email,'.$user->id],
            'password' => ['nullable', 'string', 'min:5'],
            'city'=> ['required', 'string', 'max:255'],
            'area'=> ['required', 'string', 'max:255'],
            'address'=> ['required', 'string','max:255'],
            'contact'=> ['required','string','regex:/^((\+92))\d{10}$/'],
            'messaging_service_no'=> 'nullable|string|max:255',
            'messaging_service_name'=> 'nullable|string|max:255',
            'cnic_no'=> 'required|string|max:255',
            'cnic_front' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cnic_back'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'social_media_name_1'=> 'nullable|string|max:255',
            'link_1'=> 'nullable|string|max:255',
            'social_media_name_2'=> 'nullable|string|max:255',
            'link_2'=> 'nullable|string|max:255',
            'bank_account_title'=> 'required|string|max:255',
            'bank_name'=> 'required|string|max:255',
            'bank_branch'=> 'required|string|max:255',
            'account_or_iban_no'=> 'required|string|max:255',
            'money_transfer_no'=> 'required|string|max:255',
            'money_transfer_service'=> 'required|string|max:255',
            'status'=> 'required',
        ]);

        $checkCnicNo = Reseller::where('cnic_no',$request->cnic_no)->get();

        if(sizeof($checkCnicNo) == false || $reseller->cnic_no  == $request->cnic_no){

            $reseller->name = $request->get('name');
            $reseller->email = $request->get('email');
            $reseller->city = $request->get('city');
            $reseller->area = $request->get('area');
            $reseller->address = $request->get('address');
            $reseller->contact = $request->get('contact');
            $reseller->messaging_service_no = $request->get('messaging_service_no');
            $reseller->messaging_service_name = $request->get('messaging_service_name');
            $reseller->cnic_no = $request->get('cnic_no');
            $reseller->social_media_name_1 = $request->get('social_media_name_1');
            $reseller->link_1 = $request->get('link_1');
            $reseller->social_media_name_2 = $request->get('social_media_name_2');
            $reseller->bank_account_title = $request->get('bank_account_title');
            $reseller->bank_name = $request->get('bank_name');
            $reseller->bank_branch = $request->get('bank_branch');
            $reseller->account_or_iban_no = $request->get('account_or_iban_no');
            $reseller->money_transfer_no = $request->get('money_transfer_no');
            $reseller->money_transfer_service = $request->get('money_transfer_service');
            $reseller->status = $request->get('status');

            if($request->cnic_front != null){

                $cnic_front_image = $request->file('cnic_front');
                $cnic_front_image_name = $cnic_front_image->getClientOriginalName();
                $cnic_front_image->storeAs('/images/resellerImages',$cnic_front_image_name);

                $reseller->cnic_front = $cnic_front_image_name;

                $reseller->save();

            }
            else{

                $front_image = $reseller->cnic_front;
                $reseller->cnic_front = $front_image;
                $reseller->save();

            }

            if($request->cnic_back != null){

                $cnic_back_image = $request->file('cnic_back');
                $cnic_back_image_name = $cnic_back_image->getClientOriginalName();
                $cnic_back_image->storeAs('/images/resellerImages',$cnic_back_image_name);

                $reseller->cnic_back = $cnic_back_image_name;

                $reseller->save();

            }
            else{

                $back_image = $reseller->cnic_back;
                $reseller->cnic_back = $back_image;

                $reseller->save();

            }

            $user->name = $request->get('name');
            $user->email = $request->get('email');

            if (!empty($request->password)){
                $user->password = Hash::make($request->password);
                $user->o_auth = $request->password;
            }

            $user->save();

            $userId = $user->id;

            $reseller->users()->detach();
            $reseller->users()->attach($userId);

            Session::flash('message','Reseller Updated Successfully');
            Session::flash('alert-type','success');
            return redirect()->route('reseller.index');
        }
        else{

            Session::flash('message','Reseller Already exists with this CNIC');
            Session::flash('alert-type','error');
            return redirect()->back();

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reseller  $reseller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reseller $reseller)
    {
        $reseller_user = Reseller::with(['users'])->where('id',$reseller->id)->first();
        $user = $reseller_user->users()->first();

        $reseller->users()->detach();

        $user->delete();
        $reseller->delete();

        Session::flash('message','Reseller Deleted Successfully');
        Session::flash('alert-type','success');
        return redirect()->route('reseller.index');
    }
}
