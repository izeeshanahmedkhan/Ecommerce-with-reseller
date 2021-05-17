<?php

namespace App\Http\Controllers;

use App\Models\Rider;
use App\Models\User;
use App\Models\RiderUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RiderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riders =  Rider::all();

        return view('admin.riders.index',['riders'=>$riders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.riders.create');
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
            'address'=> ['required', 'string','max:255'],
            'city'=> ['required', 'string', 'max:255'],
            'area'=> ['required', 'string', 'max:255'],
            'contact'=> ['required','numeric', 'digits:11'],
            'cnic_no'=> 'required|string|max:255',
            'cnic_front' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cnic_back'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'messaging_service_no'=> 'nullable|string|max:255',
            'messaging_service_name'=> 'nullable|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255','unique:users'],
            'password' => ['required', 'string', 'min:5'],
            'bank_account_title'=> 'required|string|max:255',
            'bank_name'=> 'required|string|max:255',
            'bank_branch'=> 'required|string|max:255',
            'account_or_iban_no'=> 'required|string|max:255',
            'money_transfer_no'=> 'required|string|max:255',
            'money_transfer_service'=> 'required|string|max:255',
            'status'=> 'required',
        ]);

        $checkCnicNo = Rider::where('cnic_no',$request->cnic_no)->get();

        if(sizeof($checkCnicNo) == false){

            $rider = new Rider();

            $rider->name = $request->get('name');
            $rider->address = $request->get('address');
            $rider->city = $request->get('city');
            $rider->area = $request->get('area');
            $rider->contact = $request->get('contact');
            $rider->cnic_no = $request->get('cnic_no');
            $rider->messaging_service_no = $request->get('messaging_service_no');
            $rider->messaging_service_name = $request->get('messaging_service_name');
            $rider->email = $request->get('email');
            $rider->bank_account_title = $request->get('bank_account_title');
            $rider->bank_name = $request->get('bank_name');
            $rider->bank_branch = $request->get('bank_branch');
            $rider->account_or_iban_no = $request->get('account_or_iban_no');
            $rider->money_transfer_no = $request->get('money_transfer_no');
            $rider->money_transfer_service = $request->get('money_transfer_service');
            $rider->status = $request->get('status');

            $cnic_front_image = $request->file('cnic_front');
            $cnic_front_image_name = $cnic_front_image->getClientOriginalName();
            $cnic_front_image->storeAs('/images/riderImages',$cnic_front_image_name);

            $rider->cnic_front = $cnic_front_image_name;

            $cnic_back_image = $request->file('cnic_back');
            $cnic_back_image_name = $cnic_back_image->getClientOriginalName();
            $cnic_back_image->storeAs('/images/riderImages',$cnic_back_image_name);

            $rider->cnic_back = $cnic_back_image_name;

            $rider->save();

            $user = new User();

            $user->name = $request->get('name');
            $user->email = $request->get('email');
            $user->password = Hash::make($request->password);
            $user->o_auth = $request->password;

            $user->assignRole('rider');

            $user->save();

            $userId = $user->id;

            $rider->users()->attach($userId);

            Session::flash('message','Rider Added Successfully');
            Session::flash('alert-type','success');
            return redirect()->route('rider.index');

        }
        else{

            Session::flash('message','Rider Already exists with this CNIC');
            Session::flash('alert-type','warning');
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function show(Rider $rider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function edit(Rider $rider)
    {
        return view('admin.riders.edit',['rider'=>$rider]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rider $rider)
    {
        $rider_user = Rider::with(['users'])->where('id',$rider->id)->first();
        $user = $rider_user->users()->first();

        $request->validate([
            'name'=> ['required', 'max:255'],
            'address'=> ['required', 'string','max:255'],
            'city'=> ['required', 'string', 'max:255'],
            'area'=> ['required', 'string', 'max:255'],
            'contact'=> ['required','numeric', 'digits:11'],
            'cnic_no'=> 'required|string|max:255',
            'cnic_front' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cnic_back'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'messaging_service_no'=> 'nullable|string|max:255',
            'messaging_service_name'=> 'nullable|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255','unique:users,email,'.$user->id],
            'password' => ['nullable', 'string', 'min:5'],
            'bank_account_title'=> 'required|string|max:255',
            'bank_name'=> 'required|string|max:255',
            'bank_branch'=> 'required|string|max:255',
            'account_or_iban_no'=> 'required|string|max:255',
            'money_transfer_no'=> 'required|string|max:255',
            'money_transfer_service'=> 'required|string|max:255',
            'status'=> 'required',
        ]);

        $checkCnicNo = Rider::where('cnic_no',$request->cnic_no)->get();

        if(sizeof($checkCnicNo) == false || $rider->cnic_no == $request->cnic_no){

            $rider->name = $request->get('name');
            $rider->address = $request->get('address');
            $rider->city = $request->get('city');
            $rider->area = $request->get('area');
            $rider->contact = $request->get('contact');
            $rider->cnic_no = $request->get('cnic_no');
            $rider->messaging_service_no = $request->get('messaging_service_no');
            $rider->messaging_service_name = $request->get('messaging_service_name');
            $rider->email = $request->get('email');
            $rider->bank_account_title = $request->get('bank_account_title');
            $rider->bank_name = $request->get('bank_name');
            $rider->bank_branch = $request->get('bank_branch');
            $rider->account_or_iban_no = $request->get('account_or_iban_no');
            $rider->money_transfer_no = $request->get('money_transfer_no');
            $rider->money_transfer_service = $request->get('money_transfer_service');
            $rider->status = $request->get('status');

            if($request->cnic_front != null){

                $cnic_front_image = $request->file('cnic_front');
                $cnic_front_image_name = $cnic_front_image->getClientOriginalName();
                $cnic_front_image->storeAs('/images/riderImages',$cnic_front_image_name);

                $rider->cnic_front = $cnic_front_image_name;

                $rider->save();

            }
            else{

                $rider->save();
            }

            if($request->cnic_back != null){

                $cnic_back_image = $request->file('cnic_back');
                $cnic_back_image_name = $cnic_back_image->getClientOriginalName();
                $cnic_back_image->storeAs('/images/riderImages',$cnic_back_image_name);

                $rider->cnic_back = $cnic_back_image_name;

                $rider->save();
            }
            else{

                $rider->save();

            }

            $user->name = $request->get('name');
            $user->email = $request->get('email');

            if (!empty($request->password)){
                $user->password = Hash::make($request->password);
                $user->o_auth = $request->password;
            }

            $user->save();

            $userId = $user->id;

            $rider->users()->detach();
            $rider->users()->attach($userId);

            Session::flash('message','Rider Updated Successfully');
            Session::flash('alert-type','success');
            return redirect()->route('rider.index');


        }
        else{

            Session::flash('message','Rider Already exists with this CNIC');
            Session::flash('alert-type','error');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rider $rider)
    {
        $rider_user = Rider::with(['users'])->where('id',$rider->id)->first();
        $user = $rider_user->users()->first();

        $rider->users()->detach();

        $user->delete();
        $rider->delete();

        Session::flash('message','Rider Deleted Successfully');
        Session::flash('alert-type','success');
        return redirect()->route('rider.index');
    }
}
