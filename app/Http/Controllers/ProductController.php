<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\BatchProduct;
use App\Models\CategoryProduct;
use App\Models\ColourImageProductSize;
use App\Models\Product;
use App\Models\Batch;
use App\Models\Category;
use App\Models\Colour;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Process\Process;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();

        return view('admin.products.index',['products'=>$product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $batch = Batch::all();
        $category = Category::all();
        $colour = Colour::all();
        $size = Size::all();

        return view('admin.products.create',['batches'=>$batch,'categories'=>$category,'colours'=>$colour,'sizes'=>$size]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request, Product $product)
    {

        for($i=0; $i<=$request->length; $i++) {

            $colour = $request['colour_'.$i];
            $size = $request['size_'.$i];
            $image = $request['image_'.$i];

            if ($colour == null){

                session::flash('message',"Color" . strval($i) . " filed is required");
                session::flash('alert-type','error');
                return back();
            }

            if ($size == null){

                session::flash('message',"Size" . strval($i) .  " filed is required");
                session::flash('alert-type','error');
                return back();
            }
            if ($image == null){

                session::flash('message',"Image" . strval($i) .  " filed is required");
                session::flash('alert-type','error');
                return back();
            }

        }


        $checkSkuCode = Product::where('sku_code',$request->sku_code)->get();

        if(sizeof($checkSkuCode) == 0){

            $product->name = $request->name;
            $product->status = $request->status;
            $product->stock_availability = $request->stock_availability;
            $product->sku_code = $request->sku_code;
            $product->description = trim($request->description);
            $product->owner = $request->owner;
            $product->vendor = $request->vendor;
            $product->video_link = $request->video_link;
            $product->quantity = $request->quantity;
            $product->price = $request->price;
            $product->purchase_discount = $request->purchase_discount;
            $product->purchase_cost = $request->purchase_cost;
            $product->labour_cost = $request->labour_cost;
            $product->transportation_cost = $request->transportation_cost;
            $product->list_price_for_salesman = $request->list_price_for_salesman;
            $product->commission = $request->get('commission');
            $product->inventory_category = $request->get('inventory_category');

            $product->save();

            foreach ($request->categories as $category)
            {
                $product->categories()->attach($category);
            }

            $product->batches()->attach($request->batch);

            for($i=0; $i<=$request->length; $i++)
            {
                $colour = $request['colour_' . $i];
                $size = $request['size_' . $i];
                $image = $request->file(['image_' . $i]);
                $image_length = sizeof($image);


                for($j=0; $j< $image_length; $j++)
                {
                    $check_image = $image[$j];
                    $image_name = time(). $check_image->getClientOriginalName();

                    ColourImageProductSize::create(['colour_id' => $colour[$i], 'product_id' => $product->id, 'size_id' => $size[$i], 'image' => $image_name]);

                    $check_image->storeAs('/images/productImages',$image_name);

                }

            }


            Session::flash('message','Product Added Successfully');
            Session::flash('alert-type','success');

            return redirect()->route('product.index');

        }

            session::flash('message','Product Already Exist');
            session::flash('alert-type','error');
            return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

        $ColoursImagesProductsSizes = ColourImageProductSize::where('product_id','=',$product->id)->get();
        $categoryProduct = CategoryProduct::with('product', 'category')->where('product_id','=',$product->id)->get();
        $batchProduct    = BatchProduct::where('product_id','=',$product->id)->get();
        $batch = Batch::all();
        $category = Category::with('cat')->get();
        $colour = Colour::all();
        $size = Size::all();
        return view('admin.products.edit',['batches'=>$batch,'categories'=>$category,'colours'=>$colour,'sizes'=>$size,'product'=>$product,'categoryProduct'=>$categoryProduct,'batchProduct'=>$batchProduct,'ColoursImagesProductsSizes'=>$ColoursImagesProductsSizes]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        for($i=1; $i<=$request->length; $i++) {

            $colour = $request['colour_'.$i];
            $size = $request['size_'.$i];
            $image = $request['image_'.$i];

            if ($colour == null){

                session::flash('message',"Color" . strval($i) . " filed is required");
                session::flash('alert-type','error');
                return back();
            }

            if ($size == null){

                session::flash('message',"Size" . strval($i) .  " filed is required");
                session::flash('alert-type','error');
                return back();
            }
            if ($image == null){

                session::flash('message',"Image" . strval($i) .  " filed is required");
                session::flash('alert-type','error');
                return back();
            }

        }

        $checkSkuCode = Product::where('sku_code',$request->sku_code)->get();

        if(sizeof($checkSkuCode) == 0 || $request->sku_code == $product->sku_code){

            $product->name = $request->name;
            $product->status = $request->status;
            $product->stock_availability = $request->stock_availability;
            $product->sku_code = $request->sku_code;
            $product->description = trim($request->description);
            $product->owner = $request->owner;
            $product->vendor = $request->vendor;
            $product->video_link = $request->video_link;
            $product->quantity = $request->quantity;
            $product->price = $request->price;
            $product->purchase_discount = $request->purchase_discount;
            $product->purchase_cost = $request->purchase_cost;
            $product->labour_cost = $request->labour_cost;
            $product->transportation_cost = $request->transportation_cost;
            $product->list_price_for_salesman = $request->list_price_for_salesman;
            $product->commission = $request->commission;
            $product->inventory_category = $request->inventory_category;

            $product->save();


            $product->categories()->detach();

            foreach ($request->categories as $category)
            {
                $product->categories()->attach($category);
            }

            $product->batches()->detach();

            $product->batches()->attach($request->batch);

            for($i=1; $i<=$request->length; $i++)
            {
                $colour = $request['colour_' . $i];
                $size = $request['size_' . $i];
                $image = $request->file(['image_' . $i]);
                $image_length = sizeof($image);


                for($j=0; $j< $image_length; $j++)
                {
                    $check_image = $image[$j];
                    $image_name = time(). $check_image->getClientOriginalName();

                    ColourImageProductSize::create(['colour_id' => $colour[$i], 'product_id' => $product->id, 'size_id' => $size[$i], 'image' => $image_name]);

                    $check_image->storeAs('/images/productImages',$image_name);

                }

            }


            Session::flash('message','Product Updated Successfully');
            Session::flash('alert-type','success');

            return redirect()->route('product.index');

        }

        session::flash('message','Product Failed to Update');
        session::flash('alert-type','error');
        return back();
    }

    public function status(Product $product){

            if($product->status == 0){

                $product->status = 1;

                $product->save();

                Session::flash('message','Product Activated Successfully');
                Session::flash('alert-type','success');
                return redirect()->route('product.index');

            }
            elseif($product->status == 1){

                $product->status = 0;

                $product->save();

                Session::flash('message','Product InActivated Successfully');
                Session::flash('alert-type','success');
                return redirect()->route('product.index');
            }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {

        $product->categories()->detach();
        $product->batches()->detach();
        $cips = ColourImageProductSize::where('product_id',$product->id)->get();

        $product->delete();

        Session::flash('message','Product Deleted Successfully');
        Session::flash('alert-type','success');
        return redirect()->route('product.index');
    }
}
