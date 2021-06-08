<?php

namespace App\Http\Controllers;

use App\Models\ColourImageProductSize;
use App\Models\Product;
use App\Models\ProductForSaleCenter;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $request->validate([

            'product' => ['required'],
            'inventory_category' => ['required'],
            'batch' => ['nullable'],
            'quantity' => ['nullable','numeric','min:1'],
            'salecenter_id' => ['required'],
        ]);

        $pfsc = ProductForSaleCenter::where('product_id',$request->get('product'))
            ->where('salecenter_id',$request->get('salecenter_id'))
            ->first();

        if(!empty($pfsc) And $request->get('quantity') !== null){

            $pfsc_quantity = ProductForSaleCenter::where('product_id',$request->get('product'))
                ->where('salecenter_id',$request->get('salecenter_id'))
                ->first();

            $pfsc_old_quantity = $pfsc_quantity->quantity;

            ProductForSaleCenter::where('product_id',$request->get('product'))
                ->where('salecenter_id',$request->get('salecenter_id'))
                ->update(['quantity'=>$request->get('quantity')]);



                $cips = ColourImageProductSize::where('product_id',$request->get('product'))
                ->where('colour_id',$request->get('colour'))
                ->where('size_id',$request->get('size'))->first();

                $subtract_quantity = $cips->quantity-$pfsc_old_quantity;

                ColourImageProductSize::where('product_id',$request->get('product'))
                    ->where('colour_id',$request->get('colour'))
                    ->where('size_id',$request->get('size'))
                    ->update(['quantity'=>$subtract_quantity]);

                $cips_total_new_quantity = ColourImageProductSize::where('product_id',$request->get('product'))
                ->where('colour_id',$request->get('colour'))
                ->where('size_id',$request->get('size'))
                ->first();

                $old_quantity = $cips_total_new_quantity->quantity;
                $new_quantity = $request->get('quantity');

                $total_quantity = $old_quantity + $new_quantity;

                ColourImageProductSize::where('product_id',$request->get('product'))
                    ->where('colour_id',$request->get('colour'))
                    ->where('size_id',$request->get('size'))
                    ->update(['quantity'=>$total_quantity]);

                session::flash('message',"Product Assign To SaleCenter Successfully");
                session::flash('alert-type','success');

                return back();

        }
        elseif(!empty($pfsc) And $request->get('quantity') === null){

            session::flash('message',"Already exist");
            session::flash('alert-type','error');

            return back();

        }
        else{

            $ProductForSaleCenter = new ProductForSaleCenter();

            $ProductForSaleCenter->product_id = $request->get('product');
            $ProductForSaleCenter->inventroy = $request->get('inventory_category');
            $ProductForSaleCenter->batch_id = $request->get('batch');
            $ProductForSaleCenter->quantity = $request->get('quantity');
            $ProductForSaleCenter->salecenter_id = $request->get('salecenter_id');

            $ProductForSaleCenter->save();

            $cips = ColourImageProductSize::where('product_id',$request->get('product'))
                ->where('colour_id',$request->get('colour'))
                ->where('size_id',$request->get('size'))->first();

            if($request->get('quantity') !== null){

                if ($cips->quantity === null){

                    ColourImageProductSize::where('product_id',$request->get('product'))
                        ->where('colour_id',$request->get('colour'))
                        ->where('size_id',$request->get('size'))
                        ->update(['quantity'=>$request->get('quantity')]);
                }
                else{

                    $old_quantity = $cips->quantity;
                    $new_quantity = $request->get('quantity');

                    $total_quantity = $old_quantity + $new_quantity;

                    ColourImageProductSize::where('product_id',$request->get('product'))
                        ->where('colour_id',$request->get('colour'))
                        ->where('size_id',$request->get('size'))
                        ->update(['quantity'=>$total_quantity]);
                }
            }


            session::flash('message',"Product Assign To SaleCenter Successfully");
            session::flash('alert-type','success');

            return back();

        }

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
