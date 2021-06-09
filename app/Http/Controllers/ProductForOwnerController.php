<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Models\Product;
use App\Models\ProductForOwner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductForOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $owners = Owner::all();

        return view('admin.productforowners.index',['owners'=>$owners,'products'=>$products]);
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
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductForOwner  $productForOwner
     * @return \Illuminate\Http\Response
     */
    public function show(ProductForOwner $productForOwner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductForOwner  $productForOwner
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductForOwner $productForOwner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductForOwner  $productForOwner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductForOwner $productForOwner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductForOwner  $productForOwner
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductForOwner $productForOwner)
    {
        //
    }
}
