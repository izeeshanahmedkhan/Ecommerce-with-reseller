@extends('admin.layouts.master')
@section('content')
    <input type="hidden" value="{{$activePage = 'userCreate', $title = 'Create User - Nafia Garments'}}">
    <div class="main-content">
        <div class="breadcrumb">
            <h1>Add Manual Order</h1>
          
          
               
        </div>
        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title mb-3">Add Product </div>


                         @if (Session::get('flash_message') )

  <div class="alert {{ Session::get('flash_type') }}">
      <h5>{{ Session::get('flash_message') }}</h5>
      <a href="{{route('admincart',$user)}}" class="btn btn-raised btn-raised-success m-1" style="color: white">View Cart</a>
           
  </div>
  

                        <form method="POST" action="{{route('addcartadmin')}}" enctype="multipart/form-data">
                            @csrf()
                            <div class="row">

                     @php

                    $products = App\Models\Product::all();
                  
                    @endphp  

                    
                         @php

                    $users = App\Models\User::all();


                  
                    @endphp  

<div class="col-md-6 form-group mb-3">
                                    <label for="role">User</label>
                                    <select class="form-control form-control-rounded @error('user') is-invalid @enderror" id="user" name="userid">
                                      @php

                                       $users = App\Models\User::where('id',$user)->first();
                                       $users->name;

                                      @endphp
                                        <option value="{{$user}}" fixed>{{$users->name}}</option>



                                        
                                        
                                       
                                    </select>
                                    @error('user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                  


                                <div class="col-md-6 form-group mb-3">
                                    <label for="role">Product</label>
                                    <select class="form-control form-control-rounded @error('product') is-invalid @enderror" id="product" name="productid">
                                        @foreach($products as $product)
<option value="{{$product->id}}">
{{$product->name}} / Price:{{$product->price}}
</option>
                                        @endforeach
                                       
                                    </select>
                                    @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                

                                <div class="col-md-6 form-group mb-3">
                                    <label for="exampleInputEmail2">Quantity</label>
                                    <input type="number"  name="quantity" class="form-control form-control-rounded @error('quantity') is-invalid @enderror" id="exampleInputEmail2" type="quantity" placeholder="Enter quantity" value="" autocomplete="quantity" autofocus/>
                                    @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                
@php 
$colors = App\Models\Colour::all();
@endphp
 <div class="col-md-6 form-group mb-3">
                                    <label for="color">Colors</label>
                                    <select class="form-control form-control-rounded @error('color') is-invalid @enderror" id="color" name="color">
                                        @foreach($colors as $color)
                                        <option value="{{$color->id}}">{{$color->colourCode}}</option>
                                        @endforeach
                                       
                                    </select>
                                    @error('color')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                                    @php 
$sizes = App\Models\size::all();
@endphp
 <div class="col-md-6 form-group mb-3">
                                    <label for="size">Sizes</label>
                                    <select class="form-control form-control-rounded @error('size') is-invalid @enderror" id="size" name="size">
                                        @foreach($sizes as $size)
                                        <option value="{{$size->id}}">{{$size->sizeName}}</option>
                                        @endforeach
                                       
                                    </select>
                                    @error('size')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="col-md-6 form-group mb-3">
                                    <label for="firstName2">Price</label>
                                    <input type="text"  name="price" class="form-control form-control-rounded @error('price') is-invalid @enderror" id="price" type="text" placeholder="Enter your price" value="" autocomplete="price" autofocus />
                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>



                                    
                                   
                                
                               
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Add To Cart</button>
                                </div>

                            </div>
                        </form>

                        @else 
                         <form method="POST" action="{{route('addcartadmin')}}" enctype="multipart/form-data">
                            @csrf()
                            <div class="row">

                     @php

                    $products = App\Models\Product::all();
                  
                    @endphp  

                    
                         @php

                    $users = App\Models\User::all();


                  
                    @endphp  

<div class="col-md-6 form-group mb-3">
                                    <label for="role">User</label>
                                    <select class="form-control form-control-rounded @error('user') is-invalid @enderror" id="user" name="userid">
                                        @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>



                                        
                                        @endforeach
                                       
                                    </select>
                                    @error('user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                  


                                <div class="col-md-6 form-group mb-3">
                                    <label for="role">Product</label>
                                    <select class="form-control form-control-rounded @error('product') is-invalid @enderror" id="product" name="productid">
                                        @foreach($products as $product)
                                        <option value="{{$product->id}}">{{$product->name}} / Price:{{$product->price}}</option>
                                        @endforeach
                                       
                                    </select>
                                    @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                

                                <div class="col-md-6 form-group mb-3">
                                    <label for="exampleInputEmail2">Quantity</label>
                                    <input type="number"  name="quantity" class="form-control form-control-rounded @error('quantity') is-invalid @enderror" id="exampleInputEmail2" type="quantity" placeholder="Enter quantity" value="" autocomplete="quantity" autofocus/>
                                    @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                               
@php 
$colors = App\Models\Colour::all();
@endphp
 <div class="col-md-6 form-group mb-3">
                                    <label for="color">Colors</label>
                                    <select class="form-control form-control-rounded @error('color') is-invalid @enderror" id="color" name="color">
                                        @foreach($colors as $color)
                                        <option value="{{$color->id}}">{{$color->colourCode}}</option>
                                        @endforeach
                                       
                                    </select>
                                    @error('color')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            @php 
$sizes = App\Models\size::all();
@endphp
 <div class="col-md-6 form-group mb-3">
                                    <label for="size">Sizes</label>
                                    <select class="form-control form-control-rounded @error('size') is-invalid @enderror" id="size" name="size">
                                        @foreach($sizes as $size)
                                        <option value="{{$size->id}}">{{$size->sizeName}}</option>
                                        @endforeach
                                       
                                    </select>
                                    @error('size')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label for="firstName2">Price</label>
                                    <input type="text"  name="price" class="form-control form-control-rounded @error('price') is-invalid @enderror" id="price" type="text" placeholder="Enter your price" value="" autocomplete="price" autofocus />
                                    @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>



                                    
                                   
                                
                               
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Add To Cart</button>
                                </div>

                            </div>
                        </form>
                        @endif
                      <!--   <div class="col-md-12"style="text-align: right;">
                                    <button type="submit" class="btn btn-primary">CHECKOUT</button>
                                </div> -->
                    </div>
                </div>
            </div>
        </div><!-- end of main-content -->
    </div>
@endsection

@section('page_css')
    <link rel="stylesheet" href="{{asset('admin/css/plugins/toastr.css')}}" />
@endsection
@section('page_script')
    <script src="{{ asset('admin/js/plugins/toastr.min.js') }}"></script>
{{--    <script src="{{asset('admin/js/scripts/toastr.script.min.js')}}"></script>--}}
@endsection
