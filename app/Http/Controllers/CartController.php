<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

            $cart = Cart::where('size_id',$request->get('size'))
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

                $cart = new Cart();

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
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {

        $cart->delete();

        return back();
    }
}
