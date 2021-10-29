<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Courier;
use App\Models\courierorder;
use App\Models\Offer;
use App\Models\SaleCenter;
use App\Models\SaleCenterOrder;
use App\Models\riderordercustomer;
use App\Models\Order;
use App\Models\Billing;
use App\Models\Product;
use App\Models\ResellerCart;
use App\Models\orderdetail;
use App\Models\productorderdetail;
use App\Models\riderproductorder;
use App\Models\advancepayment; 
use App\Models\ColourImageProductSize;
use App\Notifications\OrderProcessed;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Notification;
use App\Notifications\OffersNotification;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use PDF;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function courier_rider($id,$name,$name2)
{
 

     if(auth()->user()->hasPermissionTo('confirm pick') )
      {
        $productorderdetail = productorderdetail::where('id',$name2)->first();
        $product_detail = ColourImageProductSize::where('product_id',$productorderdetail->product_id)->where('colour_id',$productorderdetail->color)->where('size_id',$productorderdetail->size)->first();

        $totalquantity =  $product_detail->quantity;
        $product_detail->quantity = $totalquantity-$productorderdetail->product_quantity;
        $product_detail->save();

        // $productorderdetail = productorderdetail::where('id',$name2)->first();
        $productorderdetail->confirm_order = "1";
        $productorderdetail->save();

Session::flash('message', 'Order Confirm Successfully !');
Session::flash('alert-class', 'alert-success');
        return back();

        // return view('admin.orders.courier_rider', compact('id','name'));
      }
      else
      {
        return view('nopermission');
      }
    

}



    public function not_available($pro_id,$pro_order_id,$pro_weight,$pro_totalprice)
{
$order = orderdetail::where('id',$pro_order_id)->first();
$updateddeliverycharges = $order->deliverycharges-$pro_weight;
$order->deliverycharges = $updateddeliverycharges;


$updatedtotalamount = $order->totalamount-$pro_totalprice;
$order->totalamount = $updatedtotalamount;

$order->save();

$delete = productorderdetail::where('id',$pro_id)->first();
$delete->delete();

Session::flash('message', 'Product Remove Successfully !');
Session::flash('alert-class', 'alert-success');
 return back();



}
  public function not_recieved($riderorderrr)
  { 
    if( auth()->user()->hasPermissionTo('store'))
    {
        $update = riderproductorder::where('id',$riderorderrr)->first();
    $update->status = "1";
    $update->save();


Session::flash('message', 'Update Successfully !');
Session::flash('alert-class', 'alert-success');
 return back();
    }

    else 
    {
      return view ('nopermission');
    }
  

  }

    public function confirm_packing($id)
  {

 if( auth()->user()->hasPermissionTo('confirm packing'))
     {

    $update = productorderdetail::where('id',$id)->first();
    $update->packing_status = "1";
    $update->save();


Session::flash('message', 'Sorting & Packing Successfully Checked !');
Session::flash('alert-class', 'alert-success');
 return back();
     }
 else 
 {
  return view('nopermission');
 }


  }






    public function selectfield(request $req)
{
  
    echo $len = sizeof($req->cat);

  
      if ($len == 1)
{
   $products = orderdetail::all($req->cat[0]);
   // return view ('admin.products.newindex',['products'=>$products],['pro1'=>$req->cat[0]],['pro2'=>$req->cat[1]]);
   $len =1;
   $pro1=$req->cat[0];
  

   return view('admin.orders.newindex', compact('pro1','products','len'));
} 


elseif ($len == 2)
{
   $products = orderdetail::all($req->cat[0], $req->cat[1]);
   // return view ('admin.products.newindex',['products'=>$products],['pro1'=>$req->cat[0]],['pro2'=>$req->cat[1]]);
   $len =2;
   $pro1=$req->cat[0];
   $pro2=$req->cat[1];

   return view('admin.orders.newindex', compact('pro1','pro2','products','len'));
}

else if($len == 3 )
{

   $products = orderdetail::all($req->cat[0], $req->cat[1],$req->cat[2]);
   $len =3;
   $pro1=$req->cat[0];
   $pro2=$req->cat[1];
   $pro3=$req->cat[2];

   return view('admin.orders.newindex', compact('pro1','pro2','products','len','pro3'));

}

elseif($len == 4)
{
   $products = orderdetail::all($req->cat[0], $req->cat[1],$req->cat[2],$req->cat[3]);

   $len =4;
   $pro1=$req->cat[0];
   $pro2=$req->cat[1];
   $pro3=$req->cat[2];
   $pro4=$req->cat[3];

   return view('admin.orders.newindex', compact('pro1','pro2','products','len','pro3','pro4'));
}

elseif($len == 5)
{
   $products = orderdetail::all($req->cat[0], $req->cat[1],$req->cat[2],$req->cat[3],$req->cat[4]);

   $len =5;
   $pro1=$req->cat[0];
   $pro2=$req->cat[1];
   $pro3=$req->cat[2];
   $pro4=$req->cat[3];
   $pro5=$req->cat[4];

   return view('admin.orders.newindex', compact('pro1','pro2','products','len','pro3','pro4','pro5'));
}

elseif($len == 6)
{
   $products = orderdetail::all($req->cat[0], $req->cat[1],$req->cat[2],$req->cat[3],$req->cat[4],$req->cat[5]);
    $len =6;
   $pro1=$req->cat[0];
   $pro2=$req->cat[1];
   $pro3=$req->cat[2];
   $pro4=$req->cat[3];
   $pro5=$req->cat[4];
   $pro6=$req->cat[5];

   return view('admin.orders.newindex', compact('pro1','pro2','products','len','pro3','pro4','pro5','pro6'));
}


}


    public function index()
    {
        $orders  = Order::orderby('id','DESC')->get()->unique('order_number');

        return view('admin.orders.index',['orders'=>$orders]);

    }

    public function index2()
    {
        $orders  = orderdetail::all();

       return view('admin.orders.index2',['orders'=>$orders]);

    }

      public function index2_pdf()
    {
       $orders  = orderdetail::all();
          
    $pdf = PDF::loadView('admin.orders.index2_pdf',['orders'=>$orders])->setOptions(['defaultFont' => 'sans-serif'])->setPaper('A2', 'landscape');
    
        return $pdf->download('allorders.pdf');
    }
   

     public function index2_pdf1($pro1)
    {
       $products = orderdetail::all($pro1);
          
    $pdf = PDF::loadView('admin.orders.index2_pdf1',['products'=>$products,'pro1'=>$pro1])->setOptions(['defaultFont' => 'sans-serif'])->setPaper('A4', 'landscape');
    
        return $pdf->download('orderfields.pdf');
    }



      public function index2_pdf2($pro1,$pro2)
    {
       $products = orderdetail::all($pro1,$pro2);
          
    $pdf = PDF::loadView('admin.orders.index2_pdf2',['products'=>$products,'pro1'=>$pro1,'pro2'=>$pro2])->setOptions(['defaultFont' => 'sans-serif'])->setPaper('A4', 'landscape');
    
        return $pdf->download('orderfields.pdf');
    }
   
      public function index2_pdf3($pro1,$pro2,$pro3)
    {
       $products = orderdetail::all($pro1,$pro2,$pro3);
          
    $pdf = PDF::loadView('admin.orders.index2_pdf3',['products'=>$products,'pro1'=>$pro1,'pro2'=>$pro2,'pro3'=>$pro3])->setOptions(['defaultFont' => 'sans-serif'])->setPaper('A4', 'landscape');
    
        return $pdf->download('orderfields.pdf');
    }

        public function index2_pdf4($pro1,$pro2,$pro3,$pro4)
    {
       $products = orderdetail::all($pro1,$pro2,$pro3,$pro4);
          
    $pdf = PDF::loadView('admin.orders.index2_pdf4',['products'=>$products,'pro1'=>$pro1,'pro2'=>$pro2,'pro3'=>$pro3,'pro4'=>$pro4])->setOptions(['defaultFont' => 'sans-serif'])->setPaper('A4', 'landscape');
    
        return $pdf->download('orderfields.pdf');
    }


          public function index2_pdf5($pro1,$pro2,$pro3,$pro4,$pro5)
    {
       $products = orderdetail::all($pro1,$pro2,$pro3,$pro4,$pro5);
          
    $pdf = PDF::loadView('admin.orders.index2_pdf5',['products'=>$products,'pro1'=>$pro1,'pro2'=>$pro2,'pro3'=>$pro3,'pro4'=>$pro4,'pro5'=>$pro5])->setOptions(['defaultFont' => 'sans-serif'])->setPaper('A3', 'landscape');
    
        return $pdf->download('orderfields.pdf');
    }

            public function index2_pdf6($pro1,$pro2,$pro3,$pro4,$pro5,$pro6)
    {
       $products = orderdetail::all($pro1,$pro2,$pro3,$pro4,$pro5,$pro6);
          
    $pdf = PDF::loadView('admin.orders.index2_pdf6',['products'=>$products,'pro1'=>$pro1,'pro2'=>$pro2,'pro3'=>$pro3,'pro4'=>$pro4,'pro5'=>$pro5,'pro6'=>$pro6])->setOptions(['defaultFont' => 'sans-serif'])->setPaper('A2', 'landscape');
    
        return $pdf->download('orderfields.pdf');
    }
   
   
   

     public function orderproduct_details($id)
    {
        
        // $orders_products  = productorderdetail::where('id',$id)->get();
        // echo $orders_products;
         $orders_products = productorderdetail::where('order_id', $id)->get();
       
       return view('admin.orders.productdetails',['products'=>$orders_products]);

    }

  

   


    // ==============================ORDER PROCESSING=========================

    public function assign_product($id,$name)
    { 
        $order_products = productorderdetail::where('order_id', $name)->first();
        
         return view('admin.orders.assignsalecenter',['product_id'=>$id],['products'=>$order_products]);
    }

    public function salecenter_order(request $req)
    { 
        // echo $req->productidi;
        $user = User::all();
        $offerData = "You have New Order";
       $salecenterorder = new SaleCenterOrder;
       $salecenterorder->salecenter_id = $req->salecenterid;
       $salecenterorder->order_number = $req->orderid;
       $salecenterorder->product_id = $req->productidi;
       $salecenterorder->quantity = $req->productquantity;
       $salecenterorder->colour_id = "1";
       $salecenterorder->size_id = "1";
       $salecenterorder->status = "1";

       $salecenterorder->save();
        Notification::send($user, new OffersNotification($offerData));

       Session::flash('flash_message', 'Sale Center Assigned Successfully !');
    Session::flash('flash_type', 'alert-success');
       return redirect ('/orderdetails');

    }

       public function edit_assign_product(request $req)
    { 
        $editsalecenter = SaleCenterOrder::where('id', $req->salecenterorderid)->first();
        $editsalecenter->salecenter_id = $req->salecenterid;
        $editsalecenter->save();
        Session::flash('flash_message', 'Sale Center Reassigned Successfully !');
    Session::flash('flash_type', 'alert-success');
          return redirect ('/orderdetails');


        // $editsalecenter->

        
         // return view('admin.orders.assignsalecenter',['product_id'=>$id],['products'=>$order_products]);
    }

      public function edit_assign_product_view($id,$name,$name2)

    { 

        // echo $name2;
          $order_products = productorderdetail::where('order_id', $name)->first();
        
         // return view('admin.orders.editsalecenter',['salecenterorderid'=>$id],['products'=>$order_products]);

         return view('admin.orders.editsalecenter', compact(['id', 'order_products','name2']));


       // return view('admin.orders.editsalecenter',['salecenterid'=>$id]);

        
         // return view('admin.orders.assignsalecenter',['product_id'=>$id],['products'=>$order_products]);
    }

 public function assign_rider($id,$name,$name2)
    { 
        $salecenter = SaleCenter::where('id',$name2)->first();

        
          return view('admin.orders.assignrider', compact(['id', 'name','salecenter']));
    }


public function rider_order(request $req)
    {

       $riderproductorder = new riderordercustomer;
       $riderproductorder->rider_id = $req->riderid;
       $riderproductorder->product_name = $req->productname;
       $riderproductorder->description = $req->description;
       $riderproductorder->address = $req->address;
       $riderproductorder->date = $req->date;
       $riderproductorder->cash = $req->cash;
       $riderproductorder->order_id = $req->orderid;
       $riderproductorder->status = "1";

       $riderproductorder->save();

        Session::flash('flash_message', 'Rider Assigned Successfully !');
        Session::flash('flash_type', 'alert-success');
       return redirect ('/orderdetails');


        
    }




   public function edit_assign_rider_view($id,$name,$name2,$name3)
    {

    // $order_riders = riderproductorder::where('id', $name3)->first();
    // echo $order_riders;

         return view('admin.orders.editrider', compact(['id', 'name','name2','name3']));
    }

    public function edit_assign_rider(request $req)
    {
     
     $order_riders = riderordercustomer::where('id', $req->editriderid)->first();
     
        $order_riders->rider_id = $req->riderid;
        $order_riders->description = $req->description;
        $order_riders->date = $req->date;

        $order_riders->save();

Session::flash('flash_message', 'Rider Reassigned Successfully !');
Session::flash('flash_type', 'alert-success');

        return redirect ('/orderdetails');
    }

 // product details module #02


 public function assign_rider2($id,$name)
    { 
      if(auth()->user()->hasPermissionTo('confirm pick') && auth()->user()->hasPermissionTo('store'))
    {
      return view('admin.orders.assignrider2', compact(['id', 'name']));
    }
    else
    {

         return view('nopermission');

    }
        
    
    }


 public function assign_rider3($id,$name)
    { 
        
    if(auth()->user()->hasPermissionTo('labelling & dispatching'))
    {
        return view('admin.orders.assignrider3', compact(['id', 'name']));
    }
    else
    {
      return view('nopermission');
    }
  
    }





   
public function rider_order2(request $req)
    {

    if(auth()->user()->hasPermissionTo('confirm pick') && auth()->user()->hasPermissionTo('store'))

    {
         $riderproductorder = new riderproductorder;
       $riderproductorder->rider_id = $req->riderid;
       $riderproductorder->product_name = $req->productname;
       $riderproductorder->description = $req->description;
       $riderproductorder->address = $req->address;
       $riderproductorder->date = $req->date;
       $riderproductorder->cash = $req->productprice;
       $riderproductorder->order_id = $req->orderid;
       $riderproductorder->status = "1";

       $riderproductorder->save();

        Session::flash('flash_message', 'Rider Assigned Successfully !');
        Session::flash('flash_type', 'alert-success');
       return redirect ('/orderdetails');
    }
    
    else 
    {
      return view('nopermission');
    }


        
    }

    public function rider_order3(request $req)
    {
if(auth()->user()->hasPermissionTo('labelling & dispatching') ) 
{
   $riderproductorder = new riderordercustomer;
       $riderproductorder->rider_id = $req->riderid;
       $riderproductorder->product_name = $req->productname;
       $riderproductorder->description = $req->description;
       $riderproductorder->address = $req->address;
       $riderproductorder->date = $req->date;
       $riderproductorder->cash = $req->productprice;
       $riderproductorder->order_id = $req->orderid;
       $riderproductorder->status = "1";

       $riderproductorder->save();

        Session::flash('flash_message', 'Rider Assigned Successfully !');
        Session::flash('flash_type', 'alert-success');
       return redirect ('/orderdetails');

}

else
{
  return view('nopermission');
}
      

        
    }

public function edit_assign_rider2_view($id,$name,$name2)
    {

    // $order_riders = riderproductorder::where('id', $name3)->first();
    // echo $order_riders;
      if( auth()->user()->hasPermissionTo('store'))
      {
         return view('admin.orders.editrider2', compact(['id', 'name','name2']));
      }

      else 
      {
        return view('nopermission');
      }


    }


    public function edit_assign_rider2(request $req)
    {

          if( auth()->user()->hasPermissionTo('store') )
      {
          $order_riders = riderproductorder::where('id', $req->editriderid)->first();
     
        $order_riders->rider_id = $req->riderid;
        $order_riders->description = $req->description;
        $order_riders->date = $req->date;

        $order_riders->save();

        Session::flash('flash_message', 'Rider Reassigned Successfully !');
        Session::flash('flash_type', 'alert-success');

        return redirect ('/orderdetails');
      }
     else 
     {
      return view('nopermission');
     }
   
    }



     public function manualorder()
    {
        // $orders  = Order::orderby('id','DESC')->get()->unique('order_number');

        return view('admin.manualorder.productorder');

    }


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

                $order = Order::create(['delivery_charges'=>$request->get('delivery_charges'),'discount'=> $request->get('discount'),'sub_total_amount'=> $request->get('sub_total_amount'),'order_number' => $order_num, 'quantity' => $c->quantity, 'size_id' => $c->size_id, 'colour_id' => $c->colour_id, 'product_id' => $c->product_id, 'user_id' => $user->id, 'payment_type' => $request->get('cod'), 'total_amount' => $request->get('total_amount')]);

                if($request->get('reseller_cart') != null){

                    Order::where('id',$order->id)->update(['order_type'=>"Reseller"]);

                }
                else{

                    Order::where('id',$order->id)->update(['order_type'=>"Customer"]);

                }

                $product = Product::where('id',$c->product_id)->first();

                $new_quantity = $product->quantity - $c->quantity;

                Product::where('id',$c->product_id)->update(['quantity'=>$new_quantity]);

                if($request->get('reseller_cart') != null){

                    ResellerCart::destroy($c->id);

                }
                else{

                    Cart::destroy($c->id);

                }

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
        $checkcourier = Courier::all();
        $orders = Order::where('order_number',$order->order_number)->get();

        return view('admin.orders.show',['orders'=>$orders,'checkcourier'=>$checkcourier]);
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

    public function order_history(Order $order){

        $orderhistory=Order::where('user_id',Auth::User()->id)->get();
        return view('customer.order.index',['orders'=>$orderhistory]);

    }

    public function couriercompanyorder(request $req)
    {

        if($req->reassign_courier !== null){

            courierorder::where('id',$req->get('reassign_courier'))
                ->update(['courier_company'=>$req->courier,'courier_track_code'=>$req->trackordernumber]);

            return back();
        }

        $courier = new courierorder;

        $courier->user_id = $req->customerid;
        $courier->courier_company = $req->courier;
        $courier->order_number = $req->trackcode;
        $courier->courier_track_code = $req->trackordernumber;

        $courier->save();

        return back();

    }



    public function advancepayment_confirmation()
    {

      return view('admin.orders.advance_payment');
    }


public function advancepayment_post(request $req)
    {

 $advance = new advancepayment;

 $advance->order_id = $req->orderid;
 $advance->payment_recieved = $req->paymentrecieved;
 $advance->transaction_id = $req->transaction;
 $advance->bank_details = $req->bankdetails;
 $advance->amount = $req->amount;
 $advance->transaction_date = $req->date;

 $advance->save();

    Session::flash('message','Advance Payment Inserted Successfully ');
    Session::flash('alert-type','success');
    return redirect('admin/order/advance-payment/index');
    
    
    }


public function advancepayment_index(request $req)
    {

$advance = advancepayment::all();

return view('admin.orders.index_advance_payment',['advance'=>$advance]);
    
    
    }

    public function advancepayment_delete($id)
    {

$advance = advancepayment::where('id',$id)->first()->delete();

 Session::flash('message','Advance Payment Deleted Successfully ');
    Session::flash('alert-type','success');
    return redirect('admin/order/advance-payment/index');
    
    
    
    }

public function advancepayment_edit($id)
    {

$advance = advancepayment::where('id',$id)->first();

return view('admin.orders.edit_advance_payment',['advance'=>$advance]);
    
    
    }



public function advancepayment_update(request $req,$id)
    {

  $advance = advancepayment::where('id',$id)->first();

 $advance->order_id = $req->orderid;
 $advance->payment_recieved = $req->paymentrecieved;
 $advance->transaction_id = $req->transaction;
 $advance->bank_details = $req->bankdetails;
 $advance->amount = $req->amount;
 $advance->transaction_date = $req->date;
 $advance->status = $req->status;

 $advance->save();

    Session::flash('message','Advance Payment updated Successfully ');
    Session::flash('alert-type','success');
    return redirect('admin/order/advance-payment/index');
    
    
    }

public function permission()
    {

      $permission = Permission::create(['name' => 'labelling & dispatching']);
      echo"success";
    }


}
