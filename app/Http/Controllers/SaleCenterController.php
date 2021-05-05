<?php

namespace App\Http\Controllers;

use App\Models\SaleCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SaleCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $SaleCenters =  SaleCenter::all();

        return view('admin.salecenters.index',['SaleCenters'=>$SaleCenters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.salecenters.create');
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
            'owner_name'=> ['required', 'string', 'max:255'],
            'address'=> ['required', 'string','max:255'],
            'city'=> ['required', 'string', 'max:255'],
            'area'=> ['required', 'string', 'max:255'],
            'contact'=> ['required','string', 'max:255'],
            'email'=> ['required','email'],
            'picture_of_cnic'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'messaging_service_name'=> 'required|string|max:255',
            'messaging_service_no'=> 'required|string|max:255',
            'social_media_name_1'=> 'required|string|max:255',
            'link_1'=> 'required|string|max:255',
            'social_media_name_2'=> 'required|string|max:255',
            'link_2'=> 'required|string|max:255',
            'social_media_name_3'=> 'required|string|max:255',
            'link_3'=> 'required|string|max:255',
            'bank_account_title'=> 'required|string|max:255',
            'bank_name'=> 'required|string|max:255',
            'account_or_iban_no'=> 'required|string|max:255',
            'money_transfer_no'=> 'required|string|max:255',
            'money_transfer_service'=> 'required|string|max:255',
            'status'=> 'required',
        ]);

        $saleCenter = new SaleCenter();
        $saleCenter->fill($request->all());


        $image = $request->file('picture_of_cnic');
        $image_name = $image->getClientOriginalName();
        $image->storeAs('/images/SaleCenterImages',$image_name);

        $saleCenter->picture_of_cnic = $image_name;
        $saleCenter->save();

        Session::flash('message','Sale Center Added Successfully');
        Session::flash('alert-type','success');
        return redirect()->route('saleCenter.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SaleCenter  $saleCenter
     * @return \Illuminate\Http\Response
     */
    public function show(SaleCenter $saleCenter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SaleCenter  $saleCenter
     * @return \Illuminate\Http\Response
     */
    public function edit(salecenter $salecenter)
    {

        return view('admin.salecenters.edit',['salecenter'=>$salecenter]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SaleCenter  $saleCenter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, salecenter $salecenter)
    {

        $request->validate([
            'name'=> ['required', 'max:255'],
            'owner_name'=> ['required', 'string', 'max:255'],
            'address'=> ['required', 'string','max:255'],
            'city'=> ['required', 'string', 'max:255'],
            'area'=> ['required', 'string', 'max:255'],
            'contact'=> ['required','string', 'max:255'],
            'email'=> ['required','email'],
            'messaging_service_name'=> 'required|string|max:255',
            'messaging_service_no'=> 'required|string|max:255',
            'social_media_name_1'=> 'required|string|max:255',
            'link_1'=> 'required|string|max:255',
            'social_media_name_2'=> 'required|string|max:255',
            'link_2'=> 'required|string|max:255',
            'social_media_name_3'=> 'required|string|max:255',
            'link_3'=> 'required|string|max:255',
            'bank_account_title'=> 'required|string|max:255',
            'bank_name'=> 'required|string|max:255',
            'account_or_iban_no'=> 'required|string|max:255',
            'money_transfer_no'=> 'required|string|max:255',
            'money_transfer_service'=> 'required|string|max:255',
            'status'=> 'required',
        ]);


        if($request->picture_of_cnic != null){

            $salecenter->fill($request->all());

            $image = $request->file('picture_of_cnic');

            $image_name = $image->getClientOriginalName();
            $image->storeAs('/images/SaleCenterImages',$image_name);

            $salecenter->picture_of_cnic = $image_name;
            $salecenter->save();

        }
        else{

            $image = $salecenter->picture_of_cnic;

            $salecenter->fill($request->all());
            $salecenter->picture_of_cnic = $image;
            $salecenter->save();
        }


        Session::flash('message','Sale Center Updated Successfully');
        Session::flash('alert-type','success');
        return redirect()->route('saleCenter.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SaleCenter  $saleCenter
     * @return \Illuminate\Http\Response
     */
    public function destroy(salecenter $salecenter)
    {

        $salecenter->delete();

        Session::flash('message','Sale Center Deleted Successfully');
        Session::flash('alert-type','success');
        return redirect()->route('saleCenter.index');
    }
}
