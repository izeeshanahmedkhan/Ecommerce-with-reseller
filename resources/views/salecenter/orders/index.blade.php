@extends('salecenter.layouts.master')
@section('content')
    <input type="hidden" value="{{$activePage = 'salecenterorderIndex', $title = 'Order - Nafia Garments'}}">
    <div class="main-content">
        <div class="row mb-4">
            <div class="col-md-12">
                <h4>View All Orders</h4>
            </div>
        </div>
        <!-- end of row-->
        <div class="row mb-4">
            <div class="col-md-12 mb-4">
                <div class="card text-left">
                    <div class="card-body">
                        <h4 class="card-title mb-3" style="display: inline;">Order</h4>

                        <div class="table-responsive">
                            <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Order Number</th>
                                    <th>Item Name</th>
                                    <th>Quantity</th>
                                    <th>Colour</th>
                                    <th>Size</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>

                                            {{$order->order_number}}

                                            <input type="hidden" name="order_number" value="{{ $order->order_number }}">
                                        </td>
                                        <td>
                                            @php $product = \App\Models\Product::where('id',$order->product_id)->first() @endphp

                                            <input type="hidden" name="product_id" value="{{ $product->id }}">

                                            {{ $product->name }}
                                        </td>
                                        <td>

                                            {{ $order->quantity }}

                                            <input type="hidden" name="quantity" value="{{ $order->quantity }}">

                                        </td>
                                        <td>
                                            @php $colour = \App\Models\Colour::where('id',$order->colour_id)->first() @endphp

                                            <div style="background-color: {{ $colour->colourCode }}; width:25px; height: 25px; font-size: 0;">

                                            </div>

                                            <input type="hidden" name="colour_id" value="{{ $colour->id }}">

                                        </td>
                                        <td>
                                            @php $size = \App\Models\Size::where('id',$order->size_id)->first() @endphp

                                            {{ $size->sizeName }}

                                            <input type="hidden" name="size_id" value="{{ $size->id }}">
                                        </td>

                                        <td>
                                            @if($order->status == 1)

                                                <span class="badge badge-primary" style="font-size:15px;">{{ 'Pending' }}</span>

                                            @elseif($order->status == 2)

                                                <span class="badge badge-secondary" style="font-size:15px;">{{ 'Process' }}</span>

                                            @elseif($order->status == 3)

                                                <span class="badge badge-warning" style="font-size:15px;">{{ 'Shipment' }}</span>

                                            @elseif($order->status == 4)

                                                <span class="badge badge-success" style="font-size:15px;">{{ 'delivered' }}</span>

                                            @elseif($order->status == 5)

                                                <span class="badge badge-danger" style="font-size:15px;">{{ 'canceled' }}</span>

                                            @endif

                                        </td>
                                        <td>{{$order->created_at->diffForHumans()}}</td>
                                        <td>
                                            <a href="{{route('sale_center_order.edit',$order)}}" class="btn btn-raised btn-raised-primary m-1" style="color: white"><i
                                                    class="nav-icon i-Pen-2 font-weight-bold"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Order Number</th>
                                    <th>Item Name</th>
                                    <th>Quantity</th>
                                    <th>Colour</th>
                                    <th>Size</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
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
