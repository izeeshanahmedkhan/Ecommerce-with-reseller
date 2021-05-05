<?php

namespace App\Http\Controllers;

use App\Models\Reseller;
use Illuminate\Http\Request;
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
            'city'=> ['required', 'string', 'max:255'],
            'area'=> ['required', 'string', 'max:255'],
            'address'=> ['required', 'string','max:255'],
            'contact'=> ['required','numeric', 'digits:11'],
            'messaging_service_no'=> 'required|string|max:255',
            'messaging_service_name'=> 'required|string|max:255',
            'cnic_no'=> 'required|string|max:255',
            'cnic_front' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cnic_back'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'social_media_name_1'=> 'required|string|max:255',
            'link_1'=> 'required|string|max:255',
            'social_media_name_2'=> 'required|string|max:255',
            'link_2'=> 'required|string|max:255',
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
            $reseller->fill($request->all());

            $cnic_front_image = $request->file('cnic_front');
            $cnic_front_image_name = $cnic_front_image->getClientOriginalName();
            $cnic_front_image->storeAs('/images/resellerImages',$cnic_front_image_name);

            $reseller->cnic_front = $cnic_front_image_name;

            $cnic_back_image = $request->file('cnic_back');
            $cnic_back_image_name = $cnic_back_image->getClientOriginalName();
            $cnic_back_image->storeAs('/images/resellerImages',$cnic_back_image_name);

            $reseller->cnic_back = $cnic_back_image_name;

            $reseller->save();

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
        $request->validate([
            'name'=> ['required', 'max:255'],
            'city'=> ['required', 'string', 'max:255'],
            'area'=> ['required', 'string', 'max:255'],
            'address'=> ['required', 'string','max:255'],
            'contact'=> ['required','numeric', 'digits:11'],
            'messaging_service_no'=> 'required|string|max:255',
            'messaging_service_name'=> 'required|string|max:255',
            'cnic_no'=> 'required|string|max:255',
            'cnic_front' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cnic_back'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'social_media_name_1'=> 'required|string|max:255',
            'link_1'=> 'required|string|max:255',
            'social_media_name_2'=> 'required|string|max:255',
            'link_2'=> 'required|string|max:255',
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

            $reseller->fill($request->all());

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

            Session::flash('message','Reseller Updated Successfully');
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reseller  $reseller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reseller $reseller)
    {
        $reseller->delete();

        Session::flash('message','Reseller Deleted Successfully');
        Session::flash('alert-type','success');
        return redirect()->route('reseller.index');
    }
}
