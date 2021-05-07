<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\DeliveryCharges;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DeliveryChargesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $delivery_charges = DeliveryCharges::all();
        return view('admin.deliverycharges.index',['delivery_charges'=>$delivery_charges]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        return view('admin.deliverycharges.create',['cities' => $cities]);
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
            'city_id'=> ['required'],
            'delivery_charge'=> ['required','numeric' ,'min:1'],
        ]);

        $delivery_charges = new DeliveryCharges();

        $delivery_charges->city_id = $request->get('city_id');
        $delivery_charges->delivery_charge = $request->get('delivery_charge');

        $delivery_charges->save();

        Session::flash('message','Delivery Charge Added Successfully');
        Session::flash('alert-type','success');
        return redirect()->route('delivery_charges.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DeliveryCharges  $deliveryCharges
     * @return \Illuminate\Http\Response
     */
    public function show(DeliveryCharges $deliveryCharges)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DeliveryCharges  $deliverycharges
     * @return \Illuminate\Http\Response
     */
    public function edit(DeliveryCharges $deliverycharges)
    {
        $cities = City::all();

        return view('admin.deliverycharges.edit',['cities'=>$cities,'deliverycharge'=>$deliverycharges]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DeliveryCharges  $deliverycharges
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DeliveryCharges $deliverycharges)
    {
        $request->validate([
            'city_id'=> ['required'],
            'delivery_charge'=> ['required','numeric' ,'min:1'],
        ]);

        $deliverycharges->city_id = $request->get('city_id');
        $deliverycharges->delivery_charge = $request->get('delivery_charge');

        $deliverycharges->save();

        Session::flash('message','Delivery Charge Updated Successfully');
        Session::flash('alert-type','success');
        return redirect()->route('delivery_charges.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DeliveryCharges  $deliverycharges
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeliveryCharges $deliverycharges)
    {
        $deliverycharges->delete();

        Session::flash('message','Delivery Charge Deleted Successfully');
        Session::flash('alert-type','success');
        return redirect()->route('delivery_charges.index');
    }
}
