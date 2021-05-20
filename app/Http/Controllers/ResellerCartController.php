<?php

namespace App\Http\Controllers;

use App\Models\Reseller;
use App\Models\ResellerCart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;

class ResellerCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::User()->id;

        $carts = ResellerCart::where('user_id',$user_id)->get();

        return view('reseller.carts.index',['carts'=>$carts]);
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
        $request->validate([

            'quantity' => ['numeric','min:1'],

        ]);

        $cart = ResellerCart::where('size_id',$request->get('size'))
            ->where('colour_id',$request->get('colour'))
            ->where('product_id',$request->get('product'))
            ->where('user_id',Auth::User()->id)
            ->get();


        if(sizeof($cart) != false){

            $new_quantity = $cart[0]->quantity + $request->get('quantity');

            $cart[0]->quantity = $new_quantity;
            $cart[0]->size_id = $request->get('size');
            $cart[0]->colour_id = $request->get('colour');
            $cart[0]->product_id = $request->get('product');
            $cart[0]->user_id = Auth::User()->id;

            $cart[0]->save();

            session::flash('message',"Product Added Successfully");
            session::flash('alert-type','success');

            return back();

        }
        else{

            $cart = new ResellerCart();

            $cart->quantity = $request->get('quantity');
            $cart->size_id = $request->get('size');
            $cart->colour_id = $request->get('colour');
            $cart->product_id = $request->get('product');
            $cart->user_id = Auth::User()->id;

            $cart->save();

            session::flash('message',"Product Added Successfully");
            session::flash('alert-type','success');

            return back();

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ResellerCart  $resellerCart
     * @return \Illuminate\Http\Response
     */
    public function show(ResellerCart $resellerCart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ResellerCart  $resellerCart
     * @return \Illuminate\Http\Response
     */
    public function edit(ResellerCart $resellerCart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ResellerCart  $resellerCart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ResellerCart $resellerCart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ResellerCart  $resellerCart
     * @return \Illuminate\Http\Response
     */
    public function destroy(ResellerCart $cart)
    {
        $cart->delete();

        return back();
    }
}
