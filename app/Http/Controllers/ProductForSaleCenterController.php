<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductForSaleCenter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductForSaleCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.productforresellers.index',['products'=>$products]);
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
     * @param  \App\Models\ProductForSaleCenter  $productForSaleCenter
     * @return \Illuminate\Http\Response
     */
    public function show(ProductForSaleCenter $productForSaleCenter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductForSaleCenter  $productForSaleCenter
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductForSaleCenter $productForSaleCenter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductForSaleCenter  $productForSaleCenter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductForSaleCenter $productForSaleCenter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductForSaleCenter  $productForSaleCenter
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductForSaleCenter $productForSaleCenter)
    {
        //
    }
}
