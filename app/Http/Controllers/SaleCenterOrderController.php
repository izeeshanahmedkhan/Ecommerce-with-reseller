<?php

namespace App\Http\Controllers;

use App\Models\SaleCenterOrder;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SaleCenterOrderController extends Controller
{

    public function assign(Request $request){

        $request->validate([

            'salecenter_id' => ['required'],

        ]);

        $SaleCenterOrder = new SaleCenterOrder();

        $SaleCenterOrder->fill($request->all());

        $SaleCenterOrder->save();

        Session::flash('message','Product Assign to Sale Center Successfully');
        Session::flash('alert-type','success');
        return back();

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salecenter_id = auth()->user()->salecenters->first()->id;

        $orders = SaleCenterOrder::where('salecenter_id',$salecenter_id)->get();

        return view('salecenter.orders.index',['orders'=>$orders ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SaleCenterOrder  $saleCenterOrder
     * @return \Illuminate\Http\Response
     */
    public function show(SaleCenterOrder $saleCenterOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SaleCenterOrder  $saleCenterOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(SaleCenterOrder $order)
    {
        return view('salecenter.orders.edit',['order'=>$order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SaleCenterOrder  $saleCenterOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SaleCenterOrder $order)
    {
        SaleCenterOrder::where('id',$order->id)->update(['status'=>$request->get('status')]);

        Session::flash('message','Status Updated Successfully');
        Session::flash('alert-type','success');
        return redirect()->route('sale_center_order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SaleCenterOrder  $saleCenterOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(SaleCenterOrder $saleCenterOrder)
    {
        //
    }
}
