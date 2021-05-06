@extends('admin.layouts.master')
@section('content')
    <input type="hidden" value="{{$activePage = 'orderIndex', $title = 'Order - Nafia Garments'}}">
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
                                    <th>Order Num</th>
                                    <th>Customer</th>
                                    <th>Payment Type</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>{{$order->order_number}}</td>
                                        <td>
                                            @php

                                                $user = \App\Models\User::where('id',$order->user_id)->first();

                                                if(!empty($user)){

                                                    $user_name = $user->name;

                                                    echo $user_name;

                                                }

                                            @endphp

                                        </td>
                                        <td>{{ $order->payment_type }}</td>
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
                                            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('view orders'))
                                                <a href="{{route('order.show',$order)}}" class="btn btn-raised btn-raised-success m-1" style="color: white"><i
                                                        class="far fa-eye font-weight-bold"></i></a>
                                            @endif
                                            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('edit orders') AND $order->status !== 5)
                                            <a href="{{route('order.edit',$order)}}" class="btn btn-raised btn-raised-primary m-1" style="color: white"><i
                                                    class="nav-icon i-Pen-2 font-weight-bold"></i></a>
                                            @endif
                                            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('delete orders'))
                                            <form method="POST" action="{{route('order.destroy',$order)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"  class="btn btn-raised btn-raised-danger m-1" style="color: white"><i
                                                        class="nav-icon i-Close-Window font-weight-bold"></i></button>
                                            </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Order Num</th>
                                    <th>Customer</th>
                                    <th>Payment Type</th>
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
