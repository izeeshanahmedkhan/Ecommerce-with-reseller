@extends('admin.layouts.master')

@section('content')
    <input type="hidden" value="{{$activePage = 'orderIndex', $title = 'Order Show - Nafia Garments'}}">

        <h4>Order Information</h4>
        <br />

        @php $user = \App\Models\User::where('id',$orders[0]->user_id)->first() @endphp

        <div class="row">
            <div class="col-md-2 col-6">
                <div class="mb-4">
                    <p class="text-primary mb-1"><i class="i-MaleFemale text-16 mr-1"></i> Customer Name </p><span>{{ $user->name }}</span>
                </div>
            </div>

            <div class="col-md-2 col-6">
                <div class="mb-4">
                    <p class="text-primary mb-1"><i class="fas fa-at"></i> Email </p><span>{{ $user->email }}</span>
                </div>
            </div>

            <div class="col-md-2 col-6">
                <div class="mb-4">
                    <p class="text-primary mb-1"><i class="fab fa-first-order"></i> Order Number </p><span> #{{ $orders[0]->order_number }}</span>
                </div>
            </div>


            <div class="col-md-2 col-6">
                <div class="mb-4">
                    <p class="text-primary mb-1"><i class="far fa-clock"></i> Order Created At</p><span>{{ $orders[0]->created_at->diffForHumans() }}</span>
                </div>
            </div>

            <div class="col-md-2 col-6">
                <div class="mb-4">
                    <p class="text-primary mb-1"><i class="fas fa-usd-circle"></i> Total Amount</p><span>{{ $orders[0]->total_amount }}</span>
                </div>
            </div>

            <div class="col-md-2 col-6">
                <div class="mb-4">
                    <p class="text-primary mb-1"><i class="fas fa-money-check-alt"></i> Payment Method</p><span>{{ $orders[0]->payment_type }}</span>
                </div>
            </div>

        </div>

        <h4>Billing Information</h4>
        <br />

        @php $user_billing = \App\Models\Billing::where('user_id',$orders[0]->user_id)->where('order_number',$orders[0]->order_number)->first() @endphp

        <div class="row">
            <div class="col-md-2 col-6">
                <div class="mb-4">
                    <p class="text-primary mb-1"><i class="fas fa-flag-alt"></i> Country </p>
                    <span>
                        @php $country = \App\Models\Country::where('id',$user_billing->country)->first() @endphp
                        {{ $country->name }}
                    </span>
                </div>
            </div>


            <div class="col-md-2 col-6">
                <div class="mb-4">
                    <p class="text-primary mb-1"><i class="fas fa-flag-alt"></i> Province </p>
                    <span>
                        @php $province = \App\Models\State::where('id',$user_billing->province)->first() @endphp
                        {{ $province->name }}
                    </span>
                </div>
            </div>


            <div class="col-md-2 col-6">
                <div class="mb-4">
                    <p class="text-primary mb-1"><i class="fas fa-city"></i> City </p>
                    <span>
                        @php $city = \App\Models\City::where('id',$user_billing->city)->first() @endphp
                        {{ $city->name }}
                    </span>
                </div>
            </div>

            <div class="col-md-2 col-6">
                <div class="mb-4">
                    <p class="text-primary mb-1"><i class="fas fa-address-card"></i> Full Address </p><span>{{ $user_billing->address }}</span>
                </div>
            </div>

            <div class="col-md-2 col-6">
                <div class="mb-4">
                    <p class="text-primary mb-1"><i class="fas fa-mobile-alt"></i> Contact </p><span>{{ $user_billing->contact }}</span>
                </div>
            </div>

            <div class="col-md-2 col-6">
                <div class="mb-4">
                    <p class="text-primary mb-1"><i class="fad fa-mailbox"></i> Postal Code </p><span>{{ $user_billing->postal_code }}</span>
                </div>
            </div>

        </div>

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
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Colour</th>
                                    <th>Size</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        <td>

                                            @php $product = \App\Models\Product::where('id',$order->product_id)->first() @endphp

                                            {{ $product->name }}

                                        </td>
                                        <td>
                                            {{ $order->quantity }}
                                        </td>
                                        <td>
                                            @php $colour = \App\Models\Colour::where('id',$order->colour_id)->first() @endphp

                                            <div style="background-color: {{ $colour->colourCode }}; width:25px; height: 25px; font-size: 0;">

                                            </div>
                                        </td>
                                        <td>

                                            @php $size = \App\Models\Size::where('id',$order->size_id)->first() @endphp

                                            {{ $size->sizeName }}

                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Colour</th>
                                    <th>Size</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-5"> </div>
            <div class="col-sm-2">
                <a href="{{route('order.index')}}" class="btn btn-raised btn-raised-primary m-1" style="color: white;"><i
                class="nav-icon font-weight-bold"></i>Go Back</a>
            </div>
            <div class="col-sm-5"> </div>
        </div>
@endsection
