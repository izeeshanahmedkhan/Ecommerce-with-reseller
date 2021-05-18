@extends('reseller.layouts.master')

@section('content')
    <input type="hidden" value="{{$activePage = 'batchIndex', $title = 'Show Full Product - Nafia Garments'}}">

        <h4>Full Information</h4>
        <br />

        <div class="row">
            <div class="col-md-4 col-6">
                <div class="mb-4">
                    <p class="text-primary mb-1"><i class="fas fa-signature text-16 mr-1"></i> Product Name </p><span> {{ $product->name }} </span>
                </div>
            </div>

            <div class="col-md-4 col-6">
                <div class="mb-4">
                    <p class="text-primary mb-1"><i class="far fa-usd-circle text-16 mr-1"></i> Price </p><span> {{ $product->list_price_for_salesman }} </span>
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
                                                        @if($product_csi->colour_id !== $count)

                                                            @for($i=0; $i<1; $i++)

                                                                <img src="{{ asset('storage/images/productImages/'.$product_csis[$i]->image) }}" height="70px" width="70px">

                                                                @php
                                                                    $count = $colour->id;
                                                                @endphp

                                                            @endfor
                                                        @endif
                                                    </td>
                                                </tr>
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
                <a href="{{route('batch.index')}}" class="btn btn-raised btn-raised-primary m-1" style="color: white;"><i
                class="nav-icon font-weight-bold"></i>Go Back</a>
            </div>
            <div class="col-sm-5"> </div>
        </div>
@endsection
