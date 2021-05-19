@extends('reseller.layouts.master')

@section('content')
    <input type="hidden" value="{{$activePage = 'batchIndex', $title = 'Show Full Product - Nafia Garments'}}">

        <h4>Full Information</h4>
        <br />

        <div class="row">
            <div class="col-md-2 col-6">
                <div class="mb-4">
                    <p class="text-primary mb-1"><i class="fas fa-signature text-16 mr-1"></i> Product Name </p><span> {{ $product->name }} </span>
                </div>
            </div>

            <div class="col-md-2 col-6">
                <div class="mb-4">
                    <p class="text-primary mb-1"><i class="far fa-usd-circle text-16 mr-1"></i> Price </p><span> {{ $product->list_price_for_salesman }} </span>
                </div>
            </div>

            <div class="col-md-8 col-6">
                <div class="mb-4">
                    <p class="text-primary mb-1"><i class="fas fa-info text-16 mr-1"></i> Description </p><span> {!! $product->description !!} </span>
                </div>
            </div>

        </div>

        @php $product_csis = \App\Models\ColourImageProductSize::where('product_id',$product->id)->get() @endphp

        <div class="row mb-4">
            <div class="col-md-12 mb-4">
                <div class="card text-left">
                    <div class="card-body">
                        <h4 class="card-title mb-3" style="display: inline;">Product</h4>

                        <div class="table-responsive">
                            <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%">
                                <thead>
                                <tr>
                                    <th> Colour</th>
                                    <th> Size</th>
                                    <th> Image</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @php $count = null; @endphp
                                    @php $total_rows = count($product_csis); @endphp
                                    @php $carousel_boolen = true @endphp
                                    @php $carousel_count_boolen = true @endphp
                                    @php $carousel_count_for_controls = 1 @endphp
                                    @foreach($product_csis as $product_csi)
                                        @if($product_csi->colour_id !== $count)
                                                <tr>
                                                    <td>
                                                        @php $colour =  \App\Models\Colour::where('id',$product_csi->colour_id)->first() @endphp

                                                        <div style="background-color: {{ $colour->colourCode }}; width:50px; height: 50px; font-size: 0;"></div>
                                                    </td>
                                                    <td>

                                                        @php $size =  \App\Models\Size::where('id',$product_csi->size_id)->first() @endphp

                                                        {{ $size->sizeName }}

                                                    </td>
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
                                                                                        <li data-target="#carouselExamplePause" data-slide-to="{{ $i }}"></li>
                                                                                    @endif
                                                                                @endfor
                                                                            </ol>
                                                                            <div class="carousel-inner">

                                                                            @php $carousel_boolen = true @endphp

                                                                            @foreach($product_colour_rows as $product_colour_row)

                                                                            @if($carousel_boolen)
                                                                                <div class="carousel-item active" style="height:250px;"><img class="d-block w-auto" src="{{ asset('storage/images/productImages/'.$product_colour_row->image) }}" alt="Image Not Found" /></div>
                                                                                @php $carousel_boolen = false @endphp
                                                                            @else
                                                                                <div class="carousel-item" style="height: 250px;"><img class="d-block w-auto" src="{{ asset('storage/images/productImages/'.$product_colour_row->image) }}" alt="Image Not Found" /></div>
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
                                                </tr>
                                            @php
                                                $count = $colour->id;
                                                $carousel_count_for_controls++;
                                            @endphp
                                        @endif
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th> Colour</th>
                                    <th> Size</th>
                                    <th> Image</th>
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
                <a href="{{route('product_reseller.index')}}" class="btn btn-raised btn-raised-primary m-1" style="color: white;"><i
                class="nav-icon font-weight-bold"></i>Go Back</a>
            </div>
            <div class="col-sm-5"> </div>
        </div>
@endsection

@section('page_css')


@endsection

@section('page_script')

    <script src="{{asset('admin-assets/js/scripts/sidebar.large.script.min.js')}}"></script>

@endsection
