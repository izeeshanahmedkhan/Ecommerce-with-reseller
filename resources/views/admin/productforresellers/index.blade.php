@extends('admin.layouts.master')
@section('content')
    <input type="hidden" value="{{$activePage = 'productIndex', $title = 'Products For Salecenter - Nafia Garments'}}">
    <div class="main-content">
        <div class="row mb-4">
            <div class="col-md-12">
                <h4>View All Products</h4>
            </div>
        </div>
        <!-- end of row-->
        <div class="row mb-4">
            <div class="col-md-12 mb-4">
                <div class="card text-left">
                    <div class="card-body">
                        <h4 class="card-title mb-3" style="display: inline;">Product</h4>

                        <div class="table-responsive">
                            <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                                <thead>
                                <tr>
                                    <th> Product Name </th>
                                    <th> Colour</th>
                                    <th> Size</th>
                                    <th> Image</th>
                                    <th> Quantity </th>
                                    <th> Sale Center </th>
                                    <th> Action</th>
                                </tr>
                                </thead>
                                @foreach($products as $product)
                                    @php $product_csis = \App\Models\ColourImageProductSize::where('product_id',$product->id)->get() @endphp
                                    @php $count = null; @endphp
                                    @php $total_rows = count($product_csis); @endphp
                                    @php $carousel_boolen = true @endphp
                                    @php $carousel_count_boolen = true @endphp
                                    @php $carousel_count_for_controls = 1 @endphp
                                    @php $catalogue_for_controls = 1 @endphp
                                    @php $sale_cetner_count = 1 @endphp
                                    @foreach($product_csis as $product_csi)
                                        @if($product_csi->colour_id !== $count)
                                            <form method="POST" action="{{ route('reseller_cart.store') }}">
                                                @csrf
                                                <tr>
                                                    <td> {{ $product->name }} </td>
                                                    <td>
                                                        @php $colour =  \App\Models\Colour::where('id',$product_csi->colour_id)->first() @endphp

                                                        <div style="background-color: {{ $colour->colourCode }}; width:50px; height: 50px; font-size: 0;"></div>

                                                        <input type="hidden" name="colour" value="{{ $colour->id }}">
                                                    </td>
                                                    <td>

                                                        @php $size =  \App\Models\Size::where('id',$product_csi->size_id)->first() @endphp

                                                        {{ $size->sizeName }}

                                                        <input type="hidden" name="size" value="{{ $size->id }}">

                                                    </td>
                                                    <td>

                                                        <input type="hidden" name="product" value="{{ $product->id }}">

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
                                                                                        <div class="carousel-item active" style="height:200px;margin-bottom:50px;"><img class="d-block w-auto" src="{{ asset('storage/images/productImages/'.$product_colour_row->image) }}" alt="Image Not Found" /></div>
                                                                                        @php $carousel_boolen = false @endphp
                                                                                    @else
                                                                                        <div class="carousel-item" style="height:200px;margin-bottom:50px;"><img class="d-block w-auto" src="{{ asset('storage/images/productImages/'.$product_colour_row->image) }}" alt="Image Not Found" /></div>
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
                                                        <div class="form-group">
                                                            <input type="text" name="quantity" class="form-control @error('quantity') is-invalid @enderror" placeholder="Enter Quantity Here" value="{{ old('quantity') }}" aria-label="quantity">
                                                            @error('quantity')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </div>
                                                    </td>
                                                    <td>
                                                        @php $salecenters = \App\Models\SaleCenter::all(); @endphp

                                                        <select class="form-control js-example-basic-single{{ $sale_cetner_count }}  @error('salecenter_id') is-invalid @enderror" name="salecenter_id">
                                                            <option selected disabled> Select SaleCenter </option>
                                                            @foreach($salecenters as $salecenter)

                                                                <option value="{{ $salecenter->id }}">{{ $salecenter->name  }}</option>

                                                            @endforeach
                                                        </select>
                                                        @error('salecenter_id')
                                                        <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                        @enderror

                                                    </td>
                                                    </td>
                                                <td>
                                                    Action
                                                </td>
                                                </tr>
                                            </form>

                                            @php
                                                $count = $colour->id;
                                                $carousel_count_for_controls++;
                                                $catalogue_for_controls++;
                                            @endphp
                                            @endif
                                            @php $sale_cetner_count++; @endphp
                                            @endforeach
                                    @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th> Product Name </th>
                                            <th> Colour</th>
                                            <th> Size</th>
                                            <th> Image</th>
                                            <th> Quantity </th>
                                            <th> Sale Center </th>
                                            <th> Action</th>
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
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('page_script')
    <script src="{{ asset('admin-assets/js/plugins/toastr.min.js') }}"></script>
    <script src="{{asset('admin-assets/js/plugins/datatables.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/scripts/datatables.script.min.js')}}"></script>
    <script>
        $(function(){$('.carousel').carousel();});
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>

        var i;

        $(document).ready(function() {

            for(var i=1;i<{{ $sale_cetner_count }};i++){

                $('.js-example-basic-single'+i).select2({
                    dropdownAutoWidth : true,
                    width: 'auto'
                });

            }

        });

    </script>
@endsection
