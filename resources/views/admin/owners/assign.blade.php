@extends('admin.layouts.master')
@section('content')
    <input type="hidden" value="{{$activePage = 'ownerIndex', $title = 'Create Owner - Nafia Garments'}}">
    <div class="main-content">
        <div class="breadcrumb">
            <h1>Owners</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title mb-3">Assign Product To Owners</div>
                        <form class="forms-sample" method="POST" action="{{url('productassign') }}">
                            @csrf()




                            <div class="row">







                                  <div class="col-md-6 form-group mb-3">
                                    <label for="owners">Owners</label>
                                    <select class="form-control @error('owners') is-invalid @enderror" id="owners" name="owners">
                                        <option selected disabled> Select Owner </option>
                                      @foreach($owners as $owner)
                                        <option> {{$owner->name}} </option>
                                        @endforeach
                                       
                                    </select>
                                    @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

  <div class="col-md-6 form-group mb-3">
                                    <label for="products">Products</label>
                                    <select class="form-control @error('products') is-invalid @enderror" id="products" name="products">
                                        <option selected disabled> Select Product </option>
                                      @foreach($products as $product)
                                        <option> {{$product->name}} </option>
                                        @endforeach
                                       
                                    </select>
                                    @error('products')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>



                                <div class="col-md-6 form-group mb-3">
                                    <label for="productquantity">Product Quantity</label>
                                    <input type="number"  name="productquantity" class="form-control form-control @error('productquantity') is-invalid @enderror" id="productquantity " type="number" placeholder="Enter Product Quantity" value="" autocomplete="productquantity" min="0" autofocus />
                                    @error('productquantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                       <div class="col-md-6 form-group mb-3">
                                    <label for="cost">Cost</label>
                                    <input type="number"  name="cost" class="form-control form-control @error('cost') is-invalid @enderror" id="customerName  " type="number" placeholder="Enter Cost" value="" autocomplete="cost" min="0" autofocus />
                                    @error('cost')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

       <div class="col-md-6 form-group mb-3">
                                    <label for="profit">Profit</label>
                                    <input type="number"  name="profit" class="form-control form-control @error('profit') is-invalid @enderror" id="profit  " type="number" placeholder="Enter Profit" value="" autocomplete="profit" min="0" autofocus />
                                    @error('profit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                               

                             
                              
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- end of main-content -->
    </div>
@endsection


@section('page_css')
    <link rel="stylesheet" href="{{asset('admin-assets/css/plugins/toastr.css')}}" />
@endsection
@section('page_script')
    <script src="{{ asset('admin-assets/js/plugins/toastr.min.js') }}"></script>
{{--    <script src="{{asset('admin/js/scripts/toastr.script.min.js')}}"></script>--}}
@endsection
