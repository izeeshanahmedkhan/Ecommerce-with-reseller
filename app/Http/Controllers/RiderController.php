<?php

namespace App\Http\Controllers;

use App\Models\Rider;
use Illuminate\Http\Request;
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
            'contact'=> ['required','string', 'max:255'],
            'cnic_no'=> 'required|string|max:255',
            'picture_of_cnic'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'messaging_service_no'=> 'required|string|max:255',
            'messaging_service_name'=> 'required|string|max:255',
            'email'=> ['required','email'],
            'bank_account_title'=> 'required|string|max:255',
            'bank_name'=> 'required|string|max:255',
            'bank_branch'=> 'required|string|max:255',
            'account_or_iban_no'=> 'required|string|max:255',
            'money_transfer_no'=> 'required|string|max:255',
            'money_transfer_service'=> 'required|string|max:255',
            'status'=> 'required',
        ]);

        $rider = new Rider();
        $rider->fill($request->all());

        $checkCnicNo = Rider::where('cnic_no',$rider->cnic_no)->get();

        if(sizeof($checkCnicNo) == false){

            $image = $request->file('picture_of_cnic');
            $image_name = $image->getClientOriginalName();
            $image->storeAs('/images/riderImages',$image_name);

            $rider->picture_of_cnic = $image_name;
            $rider->save();

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
        $request->validate([
            'name'=> ['required', 'max:255'],
            'address'=> ['required', 'string','max:255'],
            'city'=> ['required', 'string', 'max:255'],
            'area'=> ['required', 'string', 'max:255'],
            'contact'=> ['required','string', 'max:255'],
            'cnic_no'=> 'required|string|max:255',
            'picture_of_cnic'=> 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'messaging_service_no'=> 'required|string|max:255',
            'messaging_service_name'=> 'required|string|max:255',
            'email'=> ['required','email'],
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

            $rider->fill($request->all());

            if($request->picture_of_cnic != null){

                $image = $request->file('picture_of_cnic');
                $image_name = $image->getClientOriginalName();
                $image->storeAs('/images/riderImages',$image_name);

                $rider->picture_of_cnic = $image_name;
                $rider->save();

                Session::flash('message','Rider Updated Successfully');
                Session::flash('alert-type','success');
                return redirect()->route('rider.index');

            }
            else{

                $image = $rider->picture_of_cnic;

                $rider->fill($request->all());
                $rider->picture_of_cnic = $image;
                $rider->save();

                Session::flash('message','Rider Updated Successfully');
                Session::flash('alert-type','success');
                return redirect()->route('rider.index');
            }
        }
        else{

            Session::flash('message','Rider Already exists with this CNIC');
            Session::flash('alert-type','warning');
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
        $rider->delete();

        Session::flash('message','Rider Deleted Successfully');
        Session::flash('alert-type','success');
        return redirect()->route('rider.index');
    }
}
