<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SaleCenter;
use App\Models\SaleCenterOrder;
use App\Models\purchasereturn;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class purchasereturnController extends Controller
{




	    public function index()
    {
        $purchasereturns = purchasereturn::all();

        return view('admin.purchasereturn.index',['purchasereturn'=>$purchasereturns]);
    }




    public function select()
    {
    	
    	$SaleCenters =  SaleCenter::all();

       return view('admin.purchasereturn.select',['salecenters'=>$SaleCenters]);
    }


     public function create($id)
    {

    	
    	$orders = SaleCenterOrder::where('salecenter_id',$id)->get();
    	 return view('admin.purchasereturn.order',['order'=>$orders ]);
    }


     public function storage(Request $req)
    {

         
         $purchasereturn = new purchasereturn();
         $purchasereturn->salecenter_id = $req->salecen_id;
         $purchasereturn->product = $req->pro_id;
         $purchasereturn->product_quantity = $req->productquantity;
         $purchasereturn->amount = $req->amount;
         
         $purchasereturn->save();

         $data = SaleCenterOrder::where('product_id',$req->pro_id)->first();
         $total_quantity = $data->quantity;

         DB::table('sale_center_orders')
        ->where('product_id',$req->pro_id)
        ->update(['quantity' => $total_quantity-$req->productquantity]);


        Session::flash('message','Purchase Return Added Succesfully');
        Session::flash('alert-type','success');
        return redirect('/purchasereturn');
    
    
    }



  public function edit(purchasereturn $purchasereturn)
    {

        return view('admin.purchasereturn.edit',['purchasereturn'=>$purchasereturn]);
    }







 public function update(Request $req, purchasereturn $purchasereturn)
    {
        
       $remainingquantity = $purchasereturn->product_quantity - $req->productquantity;


       $data = SaleCenterOrder::where('product_id',$req->p_id)->first();
       $total_quantity = $data->quantity;


         DB::table('sale_center_orders')
        ->where('product_id',$req->p_id)
        ->update(['quantity' => $total_quantity+$remainingquantity]);


        $purchasereturn = purchasereturn::where('id',$purchasereturn->id)->first();
        $purchasereturn->product_quantity = $req->productquantity;
        $purchasereturn->amount = $req->amountt;
        $purchasereturn->save();
     
       

        Session::flash('message','Purchase Return Updated Successfully');
        Session::flash('alert-type','success');
        return redirect('/purchasereturn');

       
      
    }







public function destroy(purchasereturn $purchasereturn)
    {

     

        $purchase = purchasereturn::where('id',$purchasereturn->id)->first();
        $purchase_product_id = $purchase->product;
        $purchase_quantity = $purchase->product_quantity;
     

  
         $data = SaleCenterOrder::where('product_id', $purchase_product_id)->first();
         $total_quantity = $data->quantity; 


         DB::table('sale_center_orders')
           ->where('product_id', $purchase_product_id)
           ->update(['quantity' => $total_quantity+$purchase_quantity]);
     
        $purchasereturndelete = purchasereturn::where('id',$purchasereturn->id)->delete();

    //     // $user->delete();
    //     // $salecenter->delete();

        Session::flash('message','Purchase Return Deleted Successfully');
        Session::flash('alert-type','success');
        return redirect('/purchasereturn');
    //
   }






}