<?php

namespace App\Http\Controllers;
use App\Models\salereturn;
use App\Models\purchasereturn;
use App\Models\productorderdetail;
use App\Models\Product;
use App\Models\riderproductorder;
use App\Models\ColourImageProductSize;
use App\Models\ProductForSaleCenter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ReportController extends Controller
{
    public function salereturn_Report()
    {

       $salereturns = salereturn::all();

        return view('admin.salereturn.index_report',['salereturn'=>$salereturns]);

    }






    public function salereturn_Report_lastmoth()
    {
         $salereturns = salereturn::whereMonth('created_at', date('m'))->get();

          return view('admin.salereturn.index_report',['salereturn'=>$salereturns]);
    }


      public function salereturn_Report_lastyear()
    {
         $salereturns = salereturn::whereYear('created_at', date('m'))->get();

          return view('admin.salereturn.index_report',['salereturn'=>$salereturns]);
    }




    public function salereturn_Report_twodates(Request $req)
    {
    	$from = $req->from;
        $to = $req->to;

        $salereturns = salereturn::whereBetween('created_at', [$from." 00:00:00", $to." 23:59:59"])->get();

          return view('admin.salereturn.index_report',['salereturn'=>$salereturns]);

    }







  public function purchasereturn_Report()
    {

  $purchasereturns = purchasereturn::all();

     return view('admin.purchasereturn.index_report',['purchasereturn'=>$purchasereturns]);

    }


      public function purchasereturn_Report_lastmoth()
    {
         $purchasereturns = purchasereturn::whereMonth('created_at', date('m'))->get();

              return view('admin.purchasereturn.index_report',['purchasereturn'=>$purchasereturns]);
    }

    public function purchasereturn_Report_lastyear()
    {
       $purchasereturns = purchasereturn::whereYear('created_at', date('m'))->get();

      return view('admin.purchasereturn.index_report',['purchasereturn'=>$purchasereturns]);
    }

 public function purchasereturn_Report_twodates(Request $req)
 {
    $from = $req->from;
        $to = $req->to;

      $purchasereturns = purchasereturn::whereBetween('created_at', [$from." 00:00:00", $to." 23:59:59"])->get();

          return view('admin.purchasereturn.index_report',['purchasereturn'=>$purchasereturns]);

 }


public function upload_report()
 {
    $product = ColourImageProductSize::all();

        return view('admin.products.index_report',['products'=>$product]);
 }


   public function upload_Report_lastmoth()
    {
         $product = ColourImageProductSize::whereMonth('created_at', date('m'))->get();

              return view('admin.products.index_report',['products'=>$product]);
    }

  public function upload_Report_lastyear()
    {
      $product  = ColourImageProductSize::whereYear('created_at', date('m'))->get();
 return view('admin.products.index_report',['products'=>$product])->render();
    }



 public function upload_Report_twodates(Request $req)
 {
    $from = $req->from;
        $to = $req->to;

    $product = ColourImageProductSize::whereBetween('created_at', [$from." 00:00:00", $to." 23:59:59"])->get();

          return view('admin.products.index_report',['products'=>$product])->render();

 }




 public function order_report()
 {
    $order_product_table = productorderdetail::all();
   return view('admin.orders.product_order_report',['products'=> $order_product_table])->render();
 }


     public function order_Report_lastmoth()
    {
         $order_product_table = productorderdetail::whereMonth('created_at', date('m'))->get();

              return view('admin.orders.product_order_report',['products'=> $order_product_table])->render();
    }

    public function order_Report_lastyear()
    {
      $order_product_table = productorderdetail::whereYear('created_at', date('m'))->get();

     return view('admin.orders.product_order_report',['products'=> $order_product_table])->render();
    }

 public function order_Report_twodates(Request $req)
 {
    $from = $req->from;
        $to = $req->to;

    $order_product_table = productorderdetail::whereBetween('created_at', [$from." 00:00:00", $to." 23:59:59"])->get();

          return view('admin.orders.product_order_report',['products'=> $order_product_table])->render();

 }













 public function  purchaseorder_report()
 {

  $orders = riderproductorder::all();
   //  $order_product_table = productorderdetail::all();
   return view('admin.orders.purchaseorder_report',['products'=> $orders])->render();
 }

  public function inventory_report()
 {

  $orders = ProductForSaleCenter::all();
   //  $order_product_table = productorderdetail::all();
   return view('admin.orders.inventory_report',['products'=> $orders]);
 }


 public function inventory_Report_twodates(Request $req)
 {
    $from = $req->from;
        $to = $req->to;

    $orders = ProductForSaleCenter::whereBetween('created_at', [$from." 00:00:00", $to." 23:59:59"])->get();

          return view('admin.orders.inventory_report',['products'=> $orders])->render();

 }

}
