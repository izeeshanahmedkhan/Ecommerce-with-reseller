@extends('reseller.layouts.master')
@section('content')
    <input type="hidden" value="{{$activePage = 'cartIndex', $title = 'Reseller Cart - Nafia Garments'}}">
    <div class="main-content">
        <div class="row mb-4">
            <div class="col-md-12">
                <h4>View Cart</h4>
            </div>
        </div>
        <!-- end of row-->
        <div class="row mb-4">
            <div class="col-md-12 mb-4">
                <div class="card text-left">
                    <div class="card-body">
                        <h4 class="card-title mb-3" style="display: inline;">Cart</h4>

                        <div class="table-responsive">
                            <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Colour</th>
                                    <th>Size</th>
                                    <th>Quantity</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $carousel_boolen = true @endphp
                                @php $carousel_count_boolen = true @endphp
                                @php $carousel_count_for_controls = 1 @endphp
                                @foreach($carts as $cart)
                                    <tr>
                                        <td>{{ $cart->id }}

                                        @php $product = \App\Models\Product::where('id',$cart->product_id)->first() @endphp

                                        <td> {{ $product->name }} </td>

                                        @php $product_cips = \App\Models\ColourImageProductSize::where('product_id',$product->id)
                                                    ->where('colour_id',$cart->colour_id)
                                                    ->where('size_id',$cart->size_id)
                                                    ->first()
                                        @endphp

                                        <td>
                                            @php $colour =  \App\Models\Colour::where('id',$product_cips->colour_id)->first() @endphp

                                            <div style="background-color: {{ $colour->colourCode }}; width:50px; height: 50px; font-size: 0;"></div>
                                        </td>

                                        <td>
                                            @php $size =  \App\Models\Size::where('id',$product_cips->size_id)->first() @endphp

                                            {{ $size->sizeName }}
                                        </td>

                                        <td> {{ $cart->quantity }} </td>

                                        <td>
                                            @php $product_colour_rows = \App\Models\ColourImageProductSize::where('colour_id',$colour->id)->get() @endphp

                                            @php $total_colour_rows = count($product_colour_rows); @endphp

                                            <div class="col-md-6 mb-4">
                                                <div class="card text-left">
                                                    <div class="card-body">
                                                        <div class="carousel_wrap">
                                                            <div class="carousel slide" id="carouselExamplePause{{ $carousel_count_for_controls }}" data-ride="carousel">
                                                                <ol class="carousel-indicators">
                                                                    @php $carousel_count_boolen = true @endphp
                                                                    @for($i=0;$i<$total_colour_rows;$i++)
                                                                        @if($carousel_count_boolen)
                                                                            <li class="active" data-target="#carouselExamplePause{{ $carousel_count_for_controls }}" data-slide-to="{{ $i }}"></li>
                                                                            @php $carousel_count_boolen = false @endphp
                                                                        @else
                                                                            <li data-target="#carouselExamplePause{{ $carousel_count_for_controls }}" data-slide-to="{{ $i }}"></li>
                                                                        @endif
                                                                    @endfor
                                                                </ol>
                                                                <div class="carousel-inner">

                                                                    @php $carousel_boolen = true @endphp

                                                                    @foreach($product_colour_rows as $product_colour_row)

                                                                        @if($carousel_boolen)
                                                                            <div class="carousel-item active" style="height:100px;margin-bottom:50px;"><img class="d-block w-auto" src="{{ asset('storage/images/productImages/'.$product_colour_row->image) }}" alt="Image Not Found" /></div>
                                                                            @php $carousel_boolen = false @endphp
                                                                        @else
                                                                            <div class="carousel-item" style="height:100px;margin-bottom:50px;"><img class="d-block w-auto" src="{{ asset('storage/images/productImages/'.$product_colour_row->image) }}" alt="Image Not Found" /></div>
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                                <a class="carousel-control-prev" href="#carouselExamplePause{{ $carousel_count_for_controls }}" role="button" data-slide="prev">
                                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                    <span class="sr-only">Previous</span>
                                                                </a>
                                                                <a class="carousel-control-next" href="#carouselExamplePause{{ $carousel_count_for_controls }}" role="button" data-slide="next">
                                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                    <span class="sr-only">Next</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="{{route('reseller_cart.destroy',$cart)}}" class="btn btn-raised btn-raised-danger m-1" style="color: white"><i
                                                    class="nav-icon i-Close-Window font-weight-bold"></i></a>
                                        </td>
                                    </tr>
                                    @php $carousel_count_for_controls++; @endphp
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Colour</th>
                                    <th>Size</th>
                                    <th>Quantity</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                            <div class="text-center">
                                <a href="{{route('reseller.checkout')}}" onmouseover="this.style.backgroundColor='red'" onmouseout="this.style.backgroundColor='#ff3366'" class="btn btn-raised m-1" style="color: white;background-color: #FF3366;"><i
                                        class="nav-icon font-weight-bold"></i>CHECKOUT</a>
                                <br> <br>
                            </div>
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
    <script src="{{asset('admin-assets/js/plugins/datatables.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/scripts/datatables.script.min.js')}}"></script>

    <script>
        $(function(){$('.carousel').carousel();});
    </script>
@endsection
