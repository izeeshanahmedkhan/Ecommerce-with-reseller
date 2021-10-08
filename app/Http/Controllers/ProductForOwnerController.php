<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use App\Models\Product;
use App\Models\ProductForOwner;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


use Spatie\Permission\Models\Permission;

class ProductForOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        $owners = Owner::all();
         $product_owner = ProductForOwner::all();

        return view('admin.productforowners.index',['owners'=>$owners],['products'=>$product],['owners'=>$owners]);
    }

     public function productowneredit_view($id)
    {
        

   return view('admin.productforowners.edit',['id'=>$id]);
    }

     public function productowneredit_post(request $req)
    {
        $pro_owner = ProductForOwner::where('id',$req->productownerid)->first();

    

    $pro_owner->product_id = $req->products;
    $pro_owner->productQuantity = $req->productquantity;
    $pro_owner->cost = $req->cost;
    $pro_owner->profit = $req->profit;
    $pro_owner->PricePerPiece = $req->cost+$req->profit;
    $pro_owner->TotalPrice =$pro_owner->PricePerPiece*$req->productquantity;
    $pro_owner->save(); 
    Session::flash('message', 'Updated Successfully'); 
Session::flash('alert-class', 'alert-success'); 
      return redirect('admin/owner/product');



   
    }

public function productowner_delete($id)
    {
         $pro_owner = ProductForOwner::find($id);
         $pro_owner->delete();
         Session::flash('message', 'Deleted Successfully'); 
Session::flash('alert-class', 'alert-success'); 
      return redirect('admin/owner/product');
    }

  public function index1()
    {
          $u = Auth::user();
       DB::table('deals')->where('end_date','<',now())->update(['status' => 0]);
        DB::table('offers')->where('end_date','<',now())->update(['status' => 0]);
        DB::table('general_discounts')->where('end_date','<',now())->update(['status' => 0]);


        return view('owner.index',['user' => $u]);
        return view('owner.layouts.partials.leftside_navbar',['user' => $u]);
    }




    public function assign()

    {
         $products = Product::all();
         $owner = Owner::all();
        
         return view('admin.owners.assign',['owners'=>$owner,'products'=>$products]);

      


    }


      public function assign_products(request $req)

    {

        $pro = Product::where('name',$req->products)->first();
        $PricePerPiece = $req->cost+$req->profit;
             // echo $pro->id;
        $pro_owner = new ProductForOwner;
         

        $ownerid = User::where('name',$req->owners)->first();

        $pro_owner->owner_name = $ownerid->id;
        $pro_owner->product_id = $pro->id;
        $pro_owner->productQuantity = $req->productquantity;
        $pro_owner->cost = $req->cost;
        $pro_owner->profit = $req->profit;
        $pro_owner->PricePerPiece =$PricePerPiece; 
        $pro_owner->TotalPrice = ($PricePerPiece)*($req->productquantity);
        $pro_owner->save();

         session::flash('message',"Product Assign To Owner Successfully");
         session::flash('alert-type','success');
      return back();



     

      


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



    public function productdetails($id)
    {       
       $u = Auth::user();
       $user = ProductForOwner::where('owner_name',$id)->get();

        return view('owner.productdetails',['userr' =>  $user],['user' =>  $u]);
    }
}
