<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Offer;
use App\Models\Order;
use App\Models\Billing;
use App\Models\Product;
use App\Models\ResellerCart;
use App\Notifications\OrderProcessed;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders  = Order::orderby('id','DESC')->get()->unique('order_number');

        return view('admin.orders.index',['orders'=>$orders]);

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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => ['required', 'string'],
            'address' => ['required'],
            'country' => ['required'],
            'state' => ['required'],
            'city' => ['required'],
            'postal_code' => ['required', 'string'],
            'contact' => ['required','string','regex:/^((\+92))\d{10}$/'],
            'cod' => ['required'],

        ]);


        $user = Auth::User();

        if($request->get('reseller_cart') != null){

            $cart = ResellerCart::where('user_id', $user->id)->get();
        }
        else{

            $cart = Cart::where('user_id', $user->id)->get();
        }



        if(count($cart) !== 0){

            $order_num = Str::random(5);

            $billing = new Billing();

            $billing->user_id = $user->id;
            $billing->name = $request->get('name');
            $billing->email = $user->email;
            $billing->address = $request->get('address');
            $billing->country = $request->get('country');
            $billing->province = $request->get('state');
            $billing->city = $request->get('city');
            $billing->postal_code = $request->get('postal_code');
            $billing->contact = $request->get('contact');
            $billing->total_amount = $request->get('total_amount');
            $billing->order_number = $order_num;

            $billing->save();

            foreach ($cart as $c) {

                $order = Order::create(['order_number' => $order_num, 'quantity' => $c->quantity, 'size_id' => $c->size_id, 'colour_id' => $c->colour_id, 'product_id' => $c->product_id, 'user_id' => $user->id, 'payment_type' => $request->get('cod'), 'total_amount' => $request->get('total_amount')]);

                $product = Product::where('id',$c->product_id)->first();

                $new_quantity = $product->quantity - $c->quantity;

                Product::where('id',$c->product_id)->update(['quantity'=>$new_quantity]);

                ResellerCart::destroy($c->id);

            }

            $request->user()->notify(new OrderProcessed($order));

            if(!empty(Session('vouchercode')['no_of_times'])){

            $new_no_of_times = Session('vouchercode')['no_of_times'] - 1;

            Offer::where('code',Session('vouchercode')['code'])->update(['no_of_times'=>$new_no_of_times]);

            Session::forget('vouchercode');

            Session::save();

            }

            if($request->get('reseller_cart') != null){

                return view('reseller.thankyouorder',['order_num'=>$order_num]);

            }
            else{

                return view('frontend.thankyouorder',['order_num'=>$order_num]);

            }

        }
        else{

            session::flash('message',"Add An Item To Cart");
            session::flash('alert-type','error');

            return redirect('/home');

        }




    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $orders = Order::where('order_number',$order->order_number)->get();

        return view('admin.orders.show',['orders'=>$orders]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('admin.orders.edit',['order'=>$order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $orders = Order::where('order_number',$order->order_number)->get();

        if($request->get('status') == 5){

            foreach ($orders as $item){

                $product = Product::where('id',$item->product_id)->first();

                $new_quantity = $product->quantity + $item->quantity;

                Product::where('id',$item->product_id)->update(['quantity'=>$new_quantity]);

                Order::where('id',$item->id)->update(['status'=>$request->get('status')]);

            }
        }

        if($request->get('status') != 5) {

            foreach ($orders as $item) {

                Order::where('id', $item->id)->update(['status' => $request->get('status')]);
            }

        }

        Session::flash('message','Status Updated Successfully');
        Session::flash('alert-type','success');
        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $orders = Order::where('order_number',$order->order_number)->get();

        if($order->status == 5){

            foreach ($orders as $item){

                Order::where('id',$item->id)->delete();

            }

            Session::flash('message','Order Deleted Successfully');
            Session::flash('alert-type','success');
            return redirect()->route('order.index');

        }
        elseif($order->status != 5){

            foreach ($orders as $item){

                $product = Product::where('id',$item->product_id)->first();

                $new_quantity = $product->quantity + $item->quantity;

                Product::where('id',$item->product_id)->update(['quantity'=>$new_quantity]);

                Order::where('id',$item->id)->delete();

            }

            Session::flash('message','Order Deleted Successfully');
            Session::flash('alert-type','success');
            return redirect()->route('order.index');
        }
    }
}
