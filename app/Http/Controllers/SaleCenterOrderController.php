<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\SaleCenter;
use App\Models\SaleCenterOrder; 
use App\Models\ProductForSaleCenter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SaleCenterOrderController extends Controller
{

    public function assign(Request $request){

        $request->validate([

            'salecenter_id' => ['required'],

        ]);

        if($request->get('assign_full_order') != null){

            $sale_center_order = SaleCenterOrder::where('order_number',$request->get('order_number'))->first();

            if($sale_center_order != null){

                SaleCenterOrder::where('order_number',$request->get('order_number'))
                    ->update(['salecenter_id'=>$request->get('salecenter_id'),'status'=>1]);

                $orders = Order::where('order_number',$request->get('order_number'))->get();

                foreach ($orders as $order){

                    if($sale_center_order->product_id == $order->product_id){
                        continue;
                    }

                    $SaleCenterOrder = new SaleCenterOrder();

                    $SaleCenterOrder->salecenter_id = $request->get('salecenter_id');
                    $SaleCenterOrder->order_number = $request->get('order_number');
                    $SaleCenterOrder->product_id = $order->product_id;
                    $SaleCenterOrder->quantity = $order->quantity;
                    $SaleCenterOrder->colour_id = $order->colour_id;
                    $SaleCenterOrder->size_id = $order->size_id;

                    $SaleCenterOrder->save();
                }

                Session::flash('message','Order Assign to Sale Center Successfully');
                Session::flash('alert-type','success');
                return back();
            }
            else{

                $orders = Order::where('order_number',$request->get('order_number'))->get();

                foreach ($orders as $order){

                    $SaleCenterOrder = new SaleCenterOrder();

                    $SaleCenterOrder->salecenter_id = $request->get('salecenter_id');
                    $SaleCenterOrder->order_number = $request->get('order_number');
                    $SaleCenterOrder->product_id = $order->product_id;
                    $SaleCenterOrder->quantity = $order->quantity;
                    $SaleCenterOrder->colour_id = $order->colour_id;
                    $SaleCenterOrder->size_id = $order->size_id;

                    $SaleCenterOrder->save();
                }

                Session::flash('message','Order Assign to Sale Center Successfully');
                Session::flash('alert-type','success');
                return back();

            }
        }

        if($request->get('reassign_full_order') != null){

            $sale_center_order = SaleCenterOrder::where('order_number',$request->get('order_number'))->first();

            if($sale_center_order != null){

                SaleCenterOrder::where('order_number',$request->get('order_number'))
                    ->update(['salecenter_id'=>$request->get('salecenter_id'),'status'=>1]);

                $orders = Order::where('order_number',$request->get('order_number'))->get();

                foreach ($orders as $order){

                    if($sale_center_order->product_id == $order->product_id){
                        continue;
                    }

                    $SaleCenterOrder = new SaleCenterOrder();

                    $SaleCenterOrder->salecenter_id = $request->get('salecenter_id');
                    $SaleCenterOrder->order_number = $request->get('order_number');
                    $SaleCenterOrder->product_id = $order->product_id;
                    $SaleCenterOrder->quantity = $order->quantity;
                    $SaleCenterOrder->colour_id = $order->colour_id;
                    $SaleCenterOrder->size_id = $order->size_id;

                    $SaleCenterOrder->save();
                }

                Session::flash('message','Order Reassign to Sale Center Successfully');
                Session::flash('alert-type','success');
                return back();
            }
        }


        if($request->get('reassign') != null){

            SaleCenterOrder::where('order_number',$request->get('order_number'))
                ->where('product_id',$request->get('product_id'))
                ->update(['salecenter_id'=>$request->get('salecenter_id'),'status'=>1]);

            Session::flash('message','Product Reassign to Sale Center Successfully');
            Session::flash('alert-type','success');
            return back();
        }

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

        // echo $order;
        SaleCenterOrder::where('id',$order->id)->update(['status'=>$request->get('status')]);

if($request->get('status')==4)
{
     

       $productquantity_in_productforsalecenters = ProductForSaleCenter::where('product_id',$order->product_id)->where('salecenter_id',$order->salecenter_id)->first()->sold;

  ProductForSaleCenter::where('product_id',$order->product_id)->where('salecenter_id',$order->salecenter_id)->update(['sold'=>$order->quantity+$productquantity_in_productforsalecenters]);
}



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
