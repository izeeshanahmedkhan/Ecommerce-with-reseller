@extends('frontend.layout.master')

@section('content')

    <!-- MAIN -->
    <main class="site-main">

        <div class="columns container">
            <!-- Block  Breadcrumb-->

            <ol class="breadcrumb no-hide">
                <li><a href="#">Home </a></li>
                <li class="active"> Checkout</li>
            </ol><!-- Block  Breadcrumb-->

            <h2 class="page-heading">
                <span class="page-heading-title2"> Checkout</span>
            </h2>

            @php $user_id = auth()->user()->id @endphp

            @php $user = \App\Models\User::where('id',$user_id)->first() @endphp

            <div class="page-content checkout-page">
                <form method="post" action="{{ route('order') }}">
                    @csrf
                    <h3 class="checkout-sep">1. Billing Infomations</h3>
                    <div class="box-border">
                        <ul>
                            <li class="row">
                                <div class="col-sm-6">
                                    <label for="name" class="required">Name</label>
                                    <input class="input form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ $user->name }}"
                                           type="text">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="email_address" class="required">Email Address</label>
                                    <input class="input form-control" id="email_address" readonly
                                           value="{{ $user->email }}" type="text">
                                </div>
                            </li>
                            <li class="row">
                                <div class="col-xs-12">
                                    <label for="address" class="required">Address</label>
                                    <input class="input form-control @error('address') is-invalid @enderror" name="address" id="address" type="text">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </li>

                            @php $countries = \App\Models\Country::all() @endphp

                            <li class="row">
                                <div class="col-sm-4">
                                    <label class="required">Country</label>
                                    <select class="input form-control @error('country') is-invalid @enderror" name="country" id="country">
                                        <option value="">Select Country</option>
                                        @foreach ($countries as $country)
                                            <option value="{{$country->id}}">
                                                {{$country->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label class="required">Province</label>
                                    <select class="input form-control @error('state') is-invalid @enderror" name="state" id="state"></select>
                                    @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-sm-4">
                                    <label class="required">City</label>
                                    <select class="input form-control @error('city') is-invalid @enderror" name="city" id="city"></select>
                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </li>

                            <li class="row">
                                <div class="col-sm-6">
                                    <label for="postal_code" class="required">Postal Code</label>
                                    <input class="input form-control @error('postal_code') is-invalid @enderror" name="postal_code" id="postal_code" type="text">
                                    @error('postal_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-sm-6">
                                    <label for="phone" class="required">Contact</label>
                                    <input class="input form-control @error('contact') is-invalid @enderror" placeholder="+923331234123" name="contact" id="phone" type="text">
                                    @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </li>
                        </ul>
                    </div>
                    <h3 class="checkout-sep">2. Payment Information</h3>
                    <div class="box-border">
                        <ul>
                            <li>
                                <label for="radio_button_1"><input checked="" class="@error('cod') is-invalid @enderror" name="cod" value="cash on delivery" id="radio_button_1"
                                                                   type="radio"> Cash On Delivery </label>
                                @error('cod')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </li>

                            {{--                        <li>--}}

                            {{--                            <label for="radio_button_6"><input name="radio_4" id="radio_button_6" type="radio"> Credit card (saved)</label>--}}
                            {{--                        </li>--}}

                        </ul>
                    </div>


                    <h3 class="checkout-sep">3. Order Review</h3>
                    <div class="box-border">
                        <div class="table-responsive">
                            @if(Auth::check())

                                @php $user_id = Auth::user()->id @endphp

                                @php $cart = \App\Models\Cart::where('user_id',$user_id)->get() @endphp

                                <table class="table table-bordered  cart_summary">
                                    <thead>
                                    <tr>
                                        <th class="cart_product">Product</th>
                                        <th>Description</th>
                                        <th>Avail.</th>
                                        <th>Unit price</th>
                                        <th>Qty</th>
                                        <th>Total</th>
                                        <th class="action"><i class="fa fa-trash-o"></i></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $total_price = 0; @endphp
                                    @php $total_single_product = 0; @endphp
                                    @php $pack_of_two = 0; @endphp
                                    @php $pack_of_three = 0; @endphp
                                    @php $pack_of_two_discount = 0; @endphp
                                    @php $pack_of_three_discount = 0; @endphp
                                    @php $delivery_charges = 0; @endphp
                                    @php $discount = 0; @endphp
                                    @foreach($cart as $c)
                                        <tr>

                                            @php $product = \App\Models\Product::where('id',$c->product_id)->first() @endphp

                                            @php $product_img = \App\Models\ColourImageProductSize::where('product_id',$product->id)
                                                        ->where('colour_id',$c->colour_id)
                                                        ->where('size_id',$c->size_id)
                                                        ->first()
                                            @endphp


                                            <td class="cart_product">
                                                <a href="#"><img
                                                        src="{{ asset('storage/images/productImages/'.$product_img->image) }}"
                                                        alt="Product"></a>
                                            </td>
                                            <td class="cart_description">
                                                <p class="product-name"><a href="#">{{ $product->name }}</a></p>
                                                <small class="cart_ref">SKU : {{ $product->sku_code }}</small><br>
                                                @php $colour = \App\Models\Colour::where('id',$c->colour_id)->first() @endphp
                                                <small> Color : {{ $colour->colourCode }}</small><br>
                                                <div
                                                    style="background-color: {{ $colour->colourCode }}; width:25px; height: 25px; font-size: 0;"></div>
                                                @php $size = \App\Models\Size::where('id',$c->size_id)->first() @endphp
                                                <small><a href="#">Size : {{ $size->sizeName }}</a></small>
                                            </td>
                                            @if($product->stock_availability == 1)
                                                <td class="cart_avail"><span
                                                        class="label label-success">{{ 'In stock' }}</span></td>
                                            @endif
                                            <td class="price"><span>{{$product->price}} Rs/-</span></td>
                                            <td class="qty"> {{ $c->quantity }} </td>
                                            <td class="price">
                                            <span>

                                                @for($i=0;$i<$c->quantity;$i++)

                                                    @php $total_single_product = $total_single_product + $product->price @endphp

                                                @endfor

                                                {{ $total_single_product }} Rs/-

                                                @php $total_single_product = 0; @endphp


                                            </span>
                                            </td>
                                            <td class="action">
                                                <a href="{{route('cart.destroy',$c)}}">Delete item</a>
                                            </td>
                                        </tr>

                                        @for($i=0;$i<$c->quantity;$i++)

                                            @php $total_price = $total_price + $product->price @endphp

                                        @endfor

                                        @php

                                            $deal_product = \App\Models\Deal::where('product_id',$product->id)
                                            ->where('size_id',$size->id)
                                            ->where('status',1)
                                            ->first();

                                            if(!empty($deal_product) && $deal_product->deal == "pack_of_two"){

                                                for($i=0;$i<$c->quantity;$i++){

                                                    $pack_of_two++;

                                                    if($pack_of_two == 2){

                                                        $pack_of_two_discount = $pack_of_two_discount + ($product->price * ($deal_product->discount / 100));

                                                        $pack_of_two = 0;

                                                    }

                                                }
                                            }

                                            if(!empty($deal_product) && $deal_product->deal == "pack_of_three"){

                                                for($i=0;$i<$c->quantity;$i++){

                                                    $pack_of_three++;

                                                    if($pack_of_three == 3){

                                                        $pack_of_three_discount = $pack_of_three_discount + ($product->price * ($deal_product->discount / 100));

                                                        $pack_of_three = 0;
                                                    }
                                                }

                                            }

                                        @endphp

                                    @endforeach

                                    @php $discount = $pack_of_two_discount + $pack_of_three_discount; @endphp

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan="2" rowspan="4"></td>
                                        <td colspan="3">Total products (tax incl.)</td>
                                        <td colspan="2">{{ $total_price }} Rs/-</td>
                                    </tr>
                                    @php $total_price = $total_price - $discount; @endphp
                                    <tr>
                                        <td colspan="3"> Discount </td>
                                        <td colspan="2">{{ $discount }} Rs/-</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"> Delivery Charges </td>
                                        <td colspan="2">{{ $delivery_charges }} Rs/-</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><strong>Total</strong></td>
                                        <td colspan="2"><strong>{{ $total_price }} Rs/-</strong></td>
                                    </tr>
                                    </tfoot>
                                </table>
                            @endif
                            <input type="hidden" name="total_amount" value="{{  $total_price }}" />
                            <button class="button pull-right">Place Order</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>


    </main><!-- end MAIN -->

@endsection

@section('page_css')

    <link rel="stylesheet" href="{{asset('frontend/css/toastr.css')}}" />

@endsection

@section('page_script')
    <script>
        $(document).ready(function () {
            $('#country').on('change', function () {
                var country_id = this.value;
                $("#state").html('');
                $.ajax({
                    url: "{{url('states')}}",
                    type: "POST",
                    data: {
                        country_id: country_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#state').html('<option value="">Select State</option>');
                        $.each(result.states, function (key, value) {
                            $("#state").append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                        $('#city').html('<option value="">Select State First</option>');
                    }
                });
            });
            $('#state').on('change', function () {
                var state_id = this.value;
                $("#city").html('');
                $.ajax({
                    url: "{{url('cities')}}",
                    type: "POST",
                    data: {
                        state_id: state_id,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#city-dropdown').html('<option value="">Select City</option>');
                        $.each(result.cities, function (key, value) {
                            $("#city").append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>

    <script src="{{ asset('frontend/js/toastr.min.js') }}"></script>

@endsection
