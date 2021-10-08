@extends('admin.layouts.master')
@section('content')



 <input type="hidden" value="{{$activePage = 'purchasereturnIndex', $title = 'purchase return - Nafia Garments'}}">




<div class="main-content">
        <div class="breadcrumb">
            <h1>Purchase return</h1>
        </div>
     
                     
                                    <!-- <label for="exampleFormControlSelect1">Select Blood Group</label> -->
                                   
 <div class="form-group">
                                    <!-- <label for="exampleFormControlSelect1">Select Blood Group</label> -->
                                   
                                   <div class="row">
                                      
                                      @foreach($order as $or)
                                   	<div class="col-3">
                                   		
                                   	  <form class="forms-sample" method="POST" action="{{ url('/pur') }}" enctype="multipart/form-data">
                                   		 	@csrf()



                                          <label>Product</label>
                                         @php $products = \App\Models\Product::where('id',$or->product_id)->first(); @endphp
                                                  <h4>{{$products->name}} </h4></br>

                                                  <div class="form-group">
                                                      <label>Product Quantity </label>
                                                    <input type="number" name="productquantity" value ="{{$or->quantity}}" min="0" max="{{$or->quantity}}">

                                                    <input type="hidden" name="salecen_id" value ="{{$or->salecenter_id}}" min="0" max="">

<input type="hidden" name="pro_id" value ="{{$products->id}}" min="0" max="">
</br>
<label>Amount Return </label>
                                                     <input type="number" name="amount" value ="" min="0" max="" placeholder="Enter Return Amount">

                                                 
                                                 </div>

                                       <button class="btn btn-primary">

                                                  Purchase Return
                                                  </button>

                                                </form>

                                   	</div>
                                   	@endforeach
                                   </div>
                                  
                                  </div>

                                   

                                   
                           
    </div>














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
