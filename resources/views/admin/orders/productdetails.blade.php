@extends('admin.layouts.master')
@section('content')
    <input type="hidden" value="{{$activePage = 'orderIndex2', $title = 'Orders - Nafia Garments'}}">
    <div class="main-content">
        <div class="row mb-4">
            <div class="col-md-12">
                <h4>View All Orders</h4>
            </div>

            @if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
        </div>
        <!-- end of row-->
        <div class="row mb-4">
            <div class="col-md-12 mb-4">
                <div class="card text-left">
                    <div class="card-body">
                        <h4 class="card-title mb-3" style="display: inline;">Order Product Details</h4>
                       

                        <div class="table-responsive">
                            <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                                <thead>
                                <tr>
                                   <th>#</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total Amount</th>
                                     <th>Order_Id</th>
                                    <th>Sale Center</th>
                                     <th>Product Supplier</th>
                                   
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                               
                                 @foreach($products as $productorder)
                                    <tr>
                                        <td>{{$productorder->id}}</td>
                                        <td>{{$productorder->product_id}} </td>
                                        <td>{{$productorder->product_quantity}}</td>
                                        <td>{{$productorder->total_price}}</td>
                                        <td>{{$productorder->order_id}}</td>
                              @php
                         $salecenterorder = \App\Models\SaleCenterOrder::where('order_number',$productorder->order_id)->first();
                                        
                           @endphp

                                        @if($salecenterorder)
                                        <td>{{$salecenterorder->salecenter_id}}</td>
                                        @else
                                        <td>No Assign</td>
                                        @endif
                                        
                                         <td>{{$productorder->supplier}}</td>
                                    
                                        <td>{{$productorder->created_at->diffForHumans()}}</td>


                                        <td>
                                               
                                         @php $one = 0 ; @endphp
                                         
                                         @php $two = 0 @endphp

                                         @php
                                          $salecenter_yes = \App\Models\ProductForSaleCenter::where('product_id', $productorder->product_id)->first();
                                        
                                         @endphp     

                                        @if($salecenter_yes)  <!-- start -->

                                            @php $one = 0 ; @endphp
                                 @php $two = 0 @endphp
                                               @php

                                    

                                    $salecenterorder = \App\Models\SaleCenterOrder::where('order_number', $productorder->order_id)->where('product_id',  $productorder->product_id)->first();


                                     if ($salecenterorder)
                                     {

                                      $status = $salecenterorder->status;

                                     }
                                     else 
                                     {
                                        $status = 0;
                                     }
                                               
                                              
                                            
                                               @endphp 


                             @php

                        $productid = \App\Models\Product::where('id', $productorder->product_id)->first();
                        

                         $riderorder = \App\Models\riderordercustomer::where('order_id', $productorder->order_id)->where('product_name',  $productid->name)->first();
                                                       
                             @endphp     

                             @if($riderorder)  <!-- rider if -->
                             @php $one = 0 ; @endphp
                                 @php $two = 0 @endphp


                                 @php
  

                             $productid = \App\Models\Product::where('id', $productorder->product_id)->first();
                             
                                              


        $riderproductorder = \App\Models\riderordercustomer::where('order_id', $productorder->order_id)->where('product_name',  $productid->name)->first();


                                    if ($riderproductorder)
                                     {

                                      $statuss = $riderproductorder->status;

                                     }
                                     else 
                                     {
                                        $statuss = 0;
                                     }


                                     
                                               
                                              
                                            
                                 @endphp 

                              @if($statuss == 4)  <!-- when rider confirms -->
                              @php $one = 1; @endphp 
                              <h5><b> Recieved by customer </b></h5>

                            @elseif($statuss == 3)
                            <h5><b> Ready To Go </b></h5>

                                @else

                                 @php $one = 0 ; @endphp
                                 @php $two = 0 @endphp
                               <a href=" {{route('editassignrider',['id'=>$productorder->product_id,'name'=>$productorder->order_id,'name2'=>$salecenterorder->salecenter_id,'name3'=>$riderorder->id])}} " class="btn btn-raised btn-raised-success m-1" style="color: white">Reassign Rider </a> 
                               @endif <!--  when rider confirms end -->

                            @else   

                            @php $one = 0 ; @endphp
                            @php $two = 0 @endphp

                              

                            @if($status == 3) <!-- ye wala -->

                           

                            <a href=" {{route('assignrider',['id'=>$productorder->product_id,'name'=>$productorder->order_id,'name2'=>$salecenterorder->salecenter_id])}} " class="btn btn-raised btn-raised-primary m-1" style="color: white">Assign Rider</a>

                            <a href=" {{route('assignrider',['id'=>$productorder->product_id,'name'=>$productorder->order_id,'name2'=>$salecenterorder->salecenter_id])}} " class="btn btn-raised btn-raised-success m-1" style="color: white">Assign Courier</a>

                            @else
                            @php $one = 0 ; @endphp
                            @php $two = 0 @endphp



           @if($salecenterorder)  <!-- start2 -->
 <a href="{{route('editassignproduct',['id'=>$productorder->product_id,'name'=>$productorder->order_id,'name2'=>$salecenterorder->id])}}" class="btn btn-raised btn-raised-success m-1" style="color: white">Reassign Sale Center{{$productorder->product_id}}</a>


                                               @else

                                               @php $one = 0 ; @endphp
                                               @php $two = 0 @endphp

  <a href="  {{route('assignproduct',[$productorder['product_id'],$productorder['order_id']])}}" class="btn btn-raised btn-raised-primary m-1" style="color: white">Assign Sale Center{{$productorder->product_id}}</a>
                                               @endif  <!-- endstart2 -->

                                               @endif <!--  end ye wala -->

                                               

                                               @endif <!--  end rider if -->









                                               @else
                                               @php $one = 0 ; @endphp
                                               @php $two = 0 @endphp

                                             @php
                             $productid = \App\Models\Product::where('id', $productorder->product_id)->first();
                              $productid->name;

                        

                      $riderorderr = \App\Models\riderproductorder::where('order_id', $productorder->order_id)->where('product_name',  $productid->name)->first();



                     


                                                       
                             @endphp     

                             @if($riderorderr) <!-- module 2 rider -->

                             @php

   $riderorderrr = \App\Models\riderproductorder::where('order_id', $productorder->order_id)->where('product_name',  $productid->name)->first();


                       if ($riderorderrr)
                       {

                       $statusss = $riderorderrr->status;

                       }
                      else 
                       {
                       $statusss = 0;
                       }
                       @endphp 


                             @php

   $riderordercustomer = \App\Models\riderordercustomer::where('order_id', $productorder->order_id)->where('product_name',  $productid->name)->first();


                       if ($riderordercustomer)
                       {

                       $statussss = $riderordercustomer->status;

                       }
                      else 
                       {
                       $statussss = 0;
                       }
                       @endphp 

          @if($statussss == 4)
        <h5> <b>Recieved By Customer</b></h5>
         @elseif($statussss == 1)
        <h5> <b>Recieved By Admin</b></h5>
        <h5> <b>Admin Assigned Rider(pending)</b> </h5>

        @elseif($statussss == 2)
        <h5> <b>Recieved By Admin</b></h5>
        <h5> <b>Admin Assigned Rider(process)</b> </h5>

        @elseif($statussss == 3)
        <h5> <b>Recieved By Admin</b></h5>
        <h5> <b>Admin Assigned Rider(Ready To Dispatch)</b> </h5>
        @endif

                                   @if($statusss == 4)  <!-- when rider2 confirms -->
                                   @php $two = 2 @endphp
<div class="row">
  



                     @if(!$statussss) 

                  
   @if($productorder->packing_status == 1) <!-- //yewala -->

  <div class="col-6">

   <p> <b>Recieved By Admin</b><p>
         <a href="{{route('assignrider3',['id'=>$productorder->product_id,'name'=>$productorder->order_id])}}" class="btn btn-raised btn-raised-primary m-1" style="color: white">Deliver By Rider</a>

                               <a href="{{route('courier_rider',['id'=>$productorder->product_id,'name'=>$productorder->order_id])}}" class="btn btn-raised btn-raised-success m-1" style="color: white">Deliver By Courier</a>
                             </div>

    @else

<div class="col-6">
  <p> <b>Recieved By Admin</b><p>
                      <a href="{{route('notrecieve', $riderorderrr)}}" class="btn btn-raised btn-raised-primary m-1" style="color: white">Not Recieved</a>
</div>
     <div class="col-6">

    <a href="{{route('confirmpacking', $productorder->id)}}" class="btn btn-raised btn-raised-success m-1" style="color: white">Confirm Packing</a>

  </div>

    @endif  <!-- yewala end -->

                               @endif
  </div>
  

</div>
  
                         



       
                         @else
                          

                              @php $one = 0 ; @endphp

                                              <a href="{{route('editassignrider2',['id'=>$productorder->product_id,'name'=>$productorder->order_id,'name2'=>$riderorderr->id])}} " class="btn btn-raised btn-raised-success m-1" style="color: white">Reassign Rider 2{{$productorder->product_id}}</a>

                                              @endif <!-- when rider2 confirms end -->

                                              @else


                                               @php $one = 0 ; @endphp
                                               


        <a href="{{route('courier_rider',['id'=>$productorder->product_id,'name'=>$productorder->order_id])}}" class="btn btn-raised btn-raised-success m-1" style="color: white">Confirm Process</a>


<a href="{{route('notavailable',['pro_id'=>$productorder->id,'pro_order_id'=>$productorder->order_id,'pro_weight'=> $productorder->product_weight,'pro_totalprice'=>$productorder->total_price])}}" class="btn btn-raised btn-raised-primary m-1" style="color: white">Not Available</a>

                                              @endif<!--  module 2 rider end -->

                                               @endif   <!-- endstart -->
                                            

 
                                        </td>
                                    </tr>
                                @endforeach
                                 



                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <center>
<h4> <b> Status </b> </h4>
@if($one == 1 && $two ==2)
<h5> All Products are dispatched</h5>
@else 

<h5> Pending</h5>
@endif
</center>



@endsection
@section('page_css')
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>--}}
    <link rel="stylesheet" href="{{asset('admin-assets/css/plugins/toastr.css')}}" />
    <link rel="stylesheet" href="{{asset('admin-assets/css/plugins/datatables.min.css')}}" />
@endsection
@section('page_script')
    <script src="{{ asset('admin-assets/js/plugins/toastr.min.js') }}"></script>
{{--    <script src="{{asset('admin/js/scripts/toastr.script.min.js')}}"></script>--}}
   {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">--}}
    {{--    <script src="{{asset('admin/js/plugins/toastr.min.js')}}"></script>--}}
    {{--    <script src="{{asset('admin/js/scripts/toastr.script.min.js')}}"></script>--}}
    <script src="{{asset('admin-assets/js/plugins/datatables.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/scripts/datatables.script.min.js')}}"></script>
@endsection
