@extends('frontend.layout.master')

@section('content')

    <!-- MAIN -->
    <main class="site-main">

        <div class="columns container">
            <!-- Block  Breadcrumb-->

            <ol class="breadcrumb no-hide">
                <li><a href="#">Home    </a></li>
                <li><a href="#">Electronics    </a></li>
                <li class="active">Machine Pro</li>
            </ol><!-- Block  Breadcrumb-->

            <div class="row">

                <!-- Main Content -->
                <div class="col-md-9 col-md-push-3  col-main">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">

                            <div class="product-media media-horizontal">
                                <?php $c_code = null ?>
                                    <?php $colour_cips =  \App\Models\ColourImageProductSize::where('product_id',$product->id)->get() ?>
                                    @foreach($colour_cips as $c)
                                        <?php $colours = \App\Models\Colour::where('id',$c->colour_id)->get()?>
                                        @foreach($colours as $colour)
                                            @if($c_code !== $colour->colourCode)
                                                @if(!empty($single_colour))
                                                        <?php $image_cips_first =  \App\Models\ColourImageProductSize::where('product_id',$product->id)->where('colour_id',$single_colour->id)->first() ?>
                                                    @else
                                                        <?php $image_cips_first =  \App\Models\ColourImageProductSize::where('product_id',$product->id)->where('colour_id',$colour->id)->first() ?>
                                                @endif
                                                    <div class="image_preview_container images-large">

                                                        <img id="img_zoom" data-zoom-image="{{ asset('storage/images/productImages/'.$image_cips_first->image) }}" src="{{ asset('storage/images/productImages/'.$image_cips_first->image) }}" alt="">

                                                        <button class="btn-zoom open_qv"><span>zoom</span></button>

                                                    </div>
                                                @if(!empty($single_colour))
                                                        <?php $image_cips =  \App\Models\ColourImageProductSize::where('product_id',$product->id)->where('colour_id',$single_colour->id)->get() ?>
                                                    @else
                                                        <?php $image_cips =  \App\Models\ColourImageProductSize::where('product_id',$product->id)->where('colour_id',$colour->id)->get() ?>
                                                @endif
                                                    <div class="product_preview images-small">
                                                        <div class="owl-carousel thumbnails_carousel" id="thumbnails"  data-nav="true" data-dots="false" data-margin="10" data-responsive='{"0":{"items":3},"480":{"items":4},"600":{"items":5},"768":{"items":3}}'>
                                                            @foreach($image_cips as $image)
                                                                <a href="#" data-image="{{ asset('storage/images/productImages/'.$image->image) }}" data-zoom-image="{{ asset('storage/images/productImages/'.$image->image) }}">

                                                                    <img src="{{ asset('storage/images/productImages/'.$image->image) }}" data-large-image="{{ asset('storage/images/productImages/'.$image->image) }}" alt="">

                                                                </a>
                                                            @endforeach
                                                        </div><!--/ .owl-carousel-->
                                                    </div><!--/ .product_preview-->
                                                <?php $c_code = $colour->colourCode ?>
                                            @endif
                                            @break
                                        @endforeach
                                        @break
                                    @endforeach
                            </div><!-- image product -->
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-6">

                            <div class="product-info-main">

                                <h1 class="page-title">
                                    {{ $product->name }}
                                </h1>
                                <div class="product-reviews-summary">
                                    <div class="rating-summary">
                                        <div class="rating-result" title="70%">
                                                <span style="width:70%">
                                                    <span><span>70</span>% of <span>100</span></span>
                                                </span>
                                        </div>
                                    </div>
                                    <div class="reviews-actions">
                                        <a href="#" class="action view">Based  on 3 ratings</a>
                                        <a href="#" class="action add"><img alt="img" src="{{ asset('frontend/images/icon/write.png') }}">&#160;&#160;write a review</a>
                                    </div>
                                </div>

                                <div class="product-info-price">
                                    <div class="price-box">
                                        <span class="price">$38.95   </span>
                                        <span class="old-price">$52.00</span>
                                        <span class="label-sale">-30%</span>
                                    </div>
                                </div>
                                <div class="product-code">
                                    Item Code: {{ $product->sku_code }}
                                </div>
                                <div class="product-info-stock">
                                    <div class="stock available">
                                        <span class="label">Availability: </span> {{ $product->stock_availability == 1 ? 'In Stock':'Out Of Stock' }}
                                    </div>
                                </div>
                                <div class="product-condition">
                                    Condition: New
                                </div>
{{--                                <div class="product-overview">--}}
{{--                                    <div class="overview-content">--}}
{{--                                        {!! $product->description !!}--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <?php $colour_cips =  \App\Models\ColourImageProductSize::where('product_id',$product->id)->get() ?>

                                <div class="product-add-form">
                                    <p>Available Options:</p>
                                    <form action="{{ route('cart') }}" method="post">
                                        @csrf
                                        <div class="product-options-wrapper">
                                            <div class="swatch-opt">
                                                <div class="swatch-attribute color" >
                                                    <span class="swatch-attribute-label">Color:</span>
                                                    <div class="swatch-attribute-options clearfix">
                                                        <?php $c_code = null ?>
                                                        <?php $first_colour = 0 ?>
                                                        <?php $first_row = 0 ?>
                                                        @foreach($colour_cips as $c)
                                                            <?php $colours = \App\Models\Colour::where('id',$c->colour_id)->get()?>
                                                            @foreach($colours as $colour)
                                                                @if($c_code !== $colour->colourCode)
                                                                        @if(!empty($single_colour))
                                                                            <a href="{{route('single_colour',['colour' => $colour->id, 'product'=>$product->id])}}" class="swatch-option color {{ $single_colour->id ==  $colour->id ? 'selected':''}}" style="background-color: {{ $colour->colourCode }} ;"></a>
                                                                        @endif
                                                                        @if($first_row == 1 && empty($single_colour))
                                                                            <a href="{{route('single_colour',['colour' => $colour->id, 'product'=>$product->id])}}" class="swatch-option color" style="background-color: {{ $colour->colourCode }} ;"></a>
                                                                            <?php $first_row = 1 ?>
                                                                        @endif
                                                                        @if($first_row == 0 && empty($single_colour))
                                                                            <a href="{{route('single_colour',['colour' => $colour->id, 'product'=>$product->id])}}" class="swatch-option color selected" style="background-color: {{ $colour->colourCode }} ;"></a>
                                                                            <?php $first_row = 1 ?>
                                                                        @endif
                                                                        @if(!empty($single_colour))
                                                                            <input type="hidden" name="colour" value="{{ $single_colour->id }}">
                                                                        @else
                                                                            @if($first_colour == 0)
                                                                                <input type="hidden" name="colour" value="{{ $colour->id }}">
                                                                                <?php $first_colour = 1 ?>
                                                                            @endif
                                                                        @endif
                                                                        <?php $c_code = $colour->colourCode ?>
                                                                @endif
                                                            @endforeach
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-qty">
                                                <label class="label">Qty: </label>
                                                <div class="control">
                                                    <input type="text" class="form-control input-qty @error('quantity') is-invalid @enderror" value='1' id="quantity" name="quantity"  maxlength="12"  minlength="1">
                                                    <button class="btn-number  qtyminus" data-type="minus" data-field="quantity"><span>-</span></button>
                                                    <button class="btn-number  qtyplus" data-type="plus" data-field="quantity"><span>+</span></button>
                                                </div>
                                                @error('quantity')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <?php $colour_cips =  \App\Models\ColourImageProductSize::where('product_id',$product->id)->get() ?>

                                            <div class="form-configurable">
                                                <label for="forSize" class="label">Size: </label>
                                                <div class="control">
                                                    <select  id="forSize" class="form-control attribute-select" name="size">
                                                        <?php $s_id = null ?>
                                                        <?php $c_code = null ?>
                                                            @foreach($colour_cips as $c)
                                                                <?php $colours = \App\Models\Colour::where('id',$c->colour_id)->get()?>
                                                                @foreach($colours as $colour)
                                                                        @if($c_code !== $colour->colourCode)
                                                                            @if(!empty($single_colour))
                                                                                <?php $size_cips =  \App\Models\ColourImageProductSize::where('product_id',$product->id)->where('colour_id',$single_colour->id)->get() ?>
                                                                            @else
                                                                                <?php $size_cips =  \App\Models\ColourImageProductSize::where('product_id',$product->id)->where('colour_id',$colour->id)->get() ?>
                                                                            @endif
                                                                                @foreach($size_cips as $s)
                                                                                    <?php $sizes = \App\Models\Size::where('id',$s->size_id)->get()?>
                                                                                    @foreach($sizes as $size)
                                                                                        @if($s_id !== $size->sizeName)
                                                                                            <option value="{{ $size->id }}">{{ $size->sizeName }}</option>
                                                                                            <?php $s_id = $size->sizeName ?>
                                                                                        @endif
                                                                                    @endforeach
                                                                                @endforeach
                                                                            <?php $c_code = $colour->colourCode ?>
                                                                        @endif
                                                                    @break
                                                                @endforeach
                                                                @break
                                                            @endforeach
                                                    </select>
                                                </div>
                                                <a href="#" class="size-chart">Size chart</a>
                                            </div>
                                        </div>

                                        <input type="hidden" name="product" value="{{ $product->id }}">

                                        <div class="product-options-bottom clearfix">

                                            <div class="actions">
                                                <button type="submit" title="Add to Cart" class="action btn-cart">
                                                    <span>Add to Cart</span>
                                                </button>
                                            </div>

                                        </div>

                                    </form>
                                </div>
                                <div class="product-addto-links-second">
                                    <a href="#" class="action action-print">Print</a>
                                    <a href="#" class="action action-friend">Send to a friend</a>
                                </div>
                                <div class="share">
                                    <img src="{{ asset('frontend/images/media/index1/share.png') }}" alt="share">
                                </div>
                            </div><!-- detail- product -->

                        </div><!-- Main detail -->

                    </div>

                    <!-- product tab info -->

                    <div class="product-info-detailed ">

                        <!-- Nav tabs -->
                        <ul class="nav nav-pills" role="tablist">
                            <li role="presentation" class="active"><a href="#description"  role="tab" data-toggle="tab">Description</a></li>
                           <li role="presentation"><a href="#reviews"  role="tab" data-toggle="tab">reviews</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="description">
                                <div class="block-title">Description</div>
                                <div class="block-content">
                                    {!! $product->description !!}
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="reviews">
                                <div class="block-title">reviews</div>
                                <div class="block-content">
                                    @if(Auth::check())
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="well well-sm">

                                                    <div class="row" id="post-review-box">
                                                        <div class="col-md-12">
                                                            <form accept-charset="UTF-8" action="{{ route('rating') }}" method="post">
                                                                @csrf
                                                                <input id="ratings-hidden" name="rating" type="hidden">
                                                                <input type="hidden" name="product" value="{{$product->id}}">
                                                                <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="1"></textarea>

                                                                <div class="text-right">
                                                                    <div class="stars starrr" data-rating="0"></div>
                                                                        <input class="btn btn-danger" type="reset" value="Reset" />
                                                                    <button class="btn btn-success" type="submit">Save</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else
                                        <a class="btn btn-success" href="{{ route('login') }}">{{ __('Login Here') }}</a>
                                    @endif
                                        <br> <br>
                                        @php $reviews =  \App\Models\Review::where('product_id',$product->id)->get() @endphp
                                        @php $count = 0 @endphp
                                        <div class="card">
                                            <div class="card-body">
                                                @foreach($reviews as $review)
                                                    @php $user = \App\Models\User::where('id',$review->user_id)->first() @endphp

                                                @if(!empty($user))
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                                                        </div>
                                                        <div class="col-md-11">
                                                            <p style="float: left;">
                                                                <a class="float-left"><strong>{{ $user->name }}</strong></a>
                                                                @for($i=0;$i<$review->rating;$i++)
                                                                <span class="float-right"><i class="fa fa-star" style="color: #ff9900"></i></span>
                                                                @endfor
                                                            </p>
                                                            <p class="text-secondary" style="float: right;">{{ $review->created_at->diffForHumans() }}</p>

                                                            <div class="clearfix"></div>
                                                            <p> {{ $review->comment }} </p>
                                                            @if(Auth::check())
                                                                @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('review reply'))
                                                                <p>
                                                                    <a class="float-right btn btn-outline-primary ml-2" id="show_reply{{$count}}"> <i class="fa fa-reply"></i> Reply</a>
                                                                </p>
                                                                @endif
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endif
                                                    <div class="card card-inner" style="display: none" id="show{{$count}}">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-1"></div>
                                                                <div class="col-md-6">
                                                                    <form accept-charset="UTF-8" action="{{ route('reply') }}" method="post">
                                                                        @csrf
                                                                        <input type="hidden" name="review" value="{{$review->id}}">
                                                                        <textarea class="form-control animated" cols="50" name="reply" placeholder="Enter your reply here..." rows="1"></textarea>

                                                                        <div class="text-right" style="margin-top: 10px; margin-bottom: 10px">
                                                                            <input class="btn btn-danger btn-sm" type="reset" value="Reset" />
                                                                            <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @php $count++ @endphp
                                                @php $replies = \App\Models\ReviewReply::where('id',$review->id)->get() @endphp
                                                    @foreach($replies as $reply)
                                                        @php $user = \App\Models\User::where('id',$reply->user_id)->first() @endphp
                                                        @if(!empty($user))
                                                            <div class="card card-inner">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-1">
                                                                            <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                                                                        </div>
                                                                        <div class="col-md-11">
                                                                            <div style="overflow: hidden;">
                                                                                <p style="float: left;"><a href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong> {{ $user->name }}</strong></a></p>
                                                                                <p style="float: right;" class="text-secondary">{{ $reply->created_at->diffForHumans() }}</p>
                                                                            </div>
                                                                            <p>{{ $reply->reply }}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product tab info -->

                    <!-- block-related product -->
                    <div class="block-related ">
                        <div class="block-title">
                            <strong class="title">RELATED products</strong>
                        </div>
                        <div class="block-content ">
                            <ol class="product-items owl-carousel " data-nav="true" data-dots="false" data-margin="30" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"992":{"items":3}}'>


                                <li class="product-item product-item-opt-2">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a href="#" class="product-item-img"><img src="{{ asset('frontend/images/media/detail/related2-1.jpg') }}" alt="product name"></a>
                                            <div class="product-item-actions">
                                                <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                            </div>
                                            <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>

                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Brown Short 100% Cotton</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                    <span class="old-price">$52.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="product-item product-item-opt-2">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a href="#" class="product-item-img"><img src="{{ asset('frontend/images/media/detail/related2-2.jpg') }}" alt="product name"></a>
                                            <div class="product-item-actions">
                                                <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                            </div>
                                            <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>

                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Summer T-Shirt</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                    <span class="old-price">$52.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-item-opt-2">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a href="#" class="product-item-img"><img src="{{ asset('frontend/images/media/detail/related2-3.jpg') }}" alt="product name"></a>
                                            <div class="product-item-actions">
                                                <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                            </div>
                                            <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>

                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Blue Short 50% Cotton</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                    <span class="old-price">$52.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-item-opt-2">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a href="#" class="product-item-img"><img src="{{ asset('frotend/images/media/detail/related2-1.jpg') }}" alt="product name"></a>
                                            <div class="product-item-actions">
                                                <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                            </div>
                                            <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>

                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Brown Short 100% Cotton</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                    <span class="old-price">$52.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ol>
                        </div>
                    </div><!-- block-related product -->

                    <!-- block-Upsell Products -->
                    <div class="block-upsell ">
                        <div class="block-title">
                            <strong class="title">You might also like</strong>
                        </div>
                        <div class="block-content ">
                            <ol class="product-items owl-carousel " data-nav="true" data-dots="false" data-margin="30" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"992":{"items":3}}'>


                                <li class="product-item product-item-opt-2">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a href="#" class="product-item-img"><img src="{{ asset('frontend/images/media/detail/Upsell2-1.jpg') }}" alt="product name"></a>
                                            <div class="product-item-actions">
                                                <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                            </div>
                                            <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Leather Swiss Watch</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                    <span class="old-price">$52.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="product-item product-item-opt-2">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a href="#" class="product-item-img"><img src="{{ asset('frontend/images/media/detail/Upsell2-2.jpg') }}" alt="product name"></a>
                                            <div class="product-item-actions">
                                                <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                            </div>
                                            <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>

                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Sport T-Shirt For Men</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                    <span class="old-price">$52.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-item-opt-2">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a href="#" class="product-item-img"><img src="{{ asset('frontend/images/media/detail/Upsell2-3.jpg') }}" alt="product name"></a>
                                            <div class="product-item-actions">
                                                <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                            </div>
                                            <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>

                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Fashion Leather Handbag</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                    <span class="old-price">$52.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="product-item product-item-opt-2">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a href="#" class="product-item-img"><img src="{{ asset('frontend/images/media/detail/Upsell2-3.jpg') }}" alt="product name"></a>
                                            <div class="product-item-actions">
                                                <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                            </div>
                                            <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>

                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Fashion Leather Handbag</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                    <span class="old-price">$52.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ol>
                        </div>
                    </div><!-- block-Upsell Products -->

                </div><!-- Main Content -->

                <!-- Sidebar -->
                <div class=" col-md-3 col-md-pull-9   col-sidebar">

                    <!-- Block  bestseller products-->
                    <div class="block-sidebar block-sidebar-categorie">
                        <div class="block-title">
                            <strong>PRODUCT TYPES</strong>
                        </div>
                        <div class="block-content">
                            <ul class="items">
                                <li class="parent">
                                    <a href="#">Dress</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="subcategory">
                                        <li >
                                            <a href="#">subcategory 1</a>

                                        </li>
                                        <li><a href="#">subcategory 1</a></li>
                                        <li><a href="#">subcategory 1</a></li>
                                        <li><a href="#">subcategory 1</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Bags</a>
                                </li>
                                <li class="parent">
                                    <a href="#">Cost &amp; Jackets</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="subcategory">
                                        <li><a href="#">subcategory 1</a></li>
                                        <li><a href="#">subcategory 1</a></li>
                                        <li><a href="#">subcategory 1</a></li>
                                        <li><a href="#">subcategory 1</a></li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a href="#">Beauty</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="subcategory">
                                        <li><a href="#">subcategory 1</a></li>
                                        <li><a href="#">subcategory 1</a></li>
                                        <li><a href="#">subcategory 1</a></li>
                                        <li><a href="#">subcategory 1</a></li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a href="#">Jewellery</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="subcategory">
                                        <li><a href="#">subcategory 1</a></li>
                                        <li><a href="#">subcategory 1</a></li>
                                        <li><a href="#">subcategory 1</a></li>
                                        <li><a href="#">subcategory 1</a></li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a href="#">Nightwear</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="subcategory">
                                        <li><a href="#">subcategory 1</a></li>
                                        <li><a href="#">subcategory 1</a></li>
                                        <li><a href="#">subcategory 1</a></li>
                                        <li><a href="#">subcategory 1</a></li>
                                    </ul>
                                </li>
                                <li class="parent">
                                    <a href="#">Jumpers &amp; Cardigans</a>
                                    <span class="toggle-submenu"></span>
                                    <ul class="subcategory">
                                        <li><a href="#">subcategory 1</a></li>
                                        <li><a href="#">subcategory 1</a></li>
                                        <li><a href="#">subcategory 1</a></li>
                                        <li><a href="#">subcategory 1</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div><!-- Block  bestseller products-->

                    <!-- Block  bestseller products-->
                    <div class="block-sidebar block-sidebar-products">
                        <div class="block-title">
                            <strong>BEST SALES</strong>
                        </div>
                        <div class="block-content">
                            <div class="owl-carousel"
                                 data-nav="false"
                                 data-dots="true"
                                 data-margin="0"
                                 data-autoplayTimeout="700"
                                 data-autoplay="true"
                                 data-loop="true"
                                 data-responsive='{
                                "0":{"items":1},
                                "420":{"items":1},
                                "480":{"items":2},
                                "600":{"items":2},
                                "992":{"items":1}
                                }'>
                                <div class="item">
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="#"><img alt="product name" src="{{ asset('frontend/images/media/detail/best1.jpg') }}"></a>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Man’s Within Plus Size Flared</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div title="70%" class="rating-result">
                                                                    <span style="width:70%">
                                                                        <span><span>70</span>% of <span>100</span></span>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="#"><img alt="product name" src="{{ asset('frontend/images/media/detail/best2.jpg') }}"></a>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Woman Within Plus Size Flared</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div title="70%" class="rating-result">
                                                                    <span style="width:70%">
                                                                        <span><span>70</span>% of <span>100</span></span>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="#"><img alt="product name" src="{{ asset('frontend/images/media/detail/best3.jpg') }}"></a>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Plus Size Rock Star Skirt</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div title="70%" class="rating-result">
                                                                    <span style="width:70%">
                                                                        <span><span>70</span>% of <span>100</span></span>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="#"><img alt="product name" src="{{ asset('frontend/images/media/detail/best1.jpg') }}"></a>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Man’s Within Plus Size Flared</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div title="70%" class="rating-result">
                                                                    <span style="width:70%">
                                                                        <span><span>70</span>% of <span>100</span></span>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="#"><img alt="product name" src="{{ asset('frontend/images/media/detail/best2.jpg') }}"></a>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Woman Within Plus Size Flared</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div title="70%" class="rating-result">
                                                                    <span style="width:70%">
                                                                        <span><span>70</span>% of <span>100</span></span>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="#"><img alt="product name" src="{{ asset('frontend/images/media/detail/best3.jpg') }}"></a>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">Plus Size Rock Star Skirt</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        <span class="price">$45.00</span>
                                                    </div>
                                                    <div class="product-reviews-summary">
                                                        <div class="rating-summary">
                                                            <div title="70%" class="rating-result">
                                                                    <span style="width:70%">
                                                                        <span><span>70</span>% of <span>100</span></span>
                                                                    </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Block  bestseller products-->

                    <!-- block slide top -->
                    <div class="block-sidebar block-banner-sidebar">
                        <div class="owl-carousel"
                             data-nav="false"
                             data-dots="true"
                             data-margin="0"
                             data-items='1'
                             data-autoplayTimeout="700"
                             data-autoplay="true"
                             data-loop="true">
                            <div class="item item1" >
                                <img src="{{ asset('frontend/images/media/detail/banner-slide2.jpg') }}" alt="images">
                            </div>
                            <div class="item item2" >
                                <img src="{{ asset('frontend/images/media/detail/banner-slide2.jpg') }}" alt="images">
                            </div>
                            <div class="item item3" >
                                <img src="{{ asset('frontend/images/media/detail/banner-slide2.jpg') }}" alt="images">
                            </div>
                        </div>
                    </div><!-- block slide top -->

                    <!-- Block  SALE products-->
                    <div class="block-sidebar block-sidebar-products-opt2">
                        <div class="block-title">
                            <strong>SALE PRODUCTS</strong>
                        </div>
                        <div class="block-content">
                            <div class="owl-carousel"
                                 data-nav="false"
                                 data-dots="true"
                                 data-margin="0"
                                 data-autoplayTimeout="700"
                                 data-autoplay="true"
                                 data-loop="true"
                                 data-responsive='{
                                "0":{"items":1},
                                "420":{"items":2},
                                "480":{"items":2},
                                "600":{"items":2},
                                "992":{"items":1}
                                }'>
                                <div class="product-item product-item-opt-2">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a href="#" class="product-item-img"><img src="{{ asset('frontend/images/media/detail/sale1.jpg') }}" alt="product name"></a>
                                            <div class="product-item-actions">
                                                <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                            </div>
                                            <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                            <span class="product-item-label label-price">30% <span>off</span></span>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Luxury Dark Blue Coast</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                    <span class="old-price">$52.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item product-item-opt-2">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a href="#" class="product-item-img"><img src="{{ asset('frontend/images/media/product1.jpg') }}" alt="product name"></a>
                                            <div class="product-item-actions">
                                                <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                            </div>
                                            <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>

                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Asus Ispiron 20</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                    <span class="old-price">$52.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item product-item-opt-2">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a href="#" class="product-item-img"><img src="{{ asset('frontend/images/media/product1.jpg') }}" alt="product name"></a>
                                            <div class="product-item-actions">
                                                <a href="#" class="btn btn-wishlist"><span>wishlist</span></a>
                                                <a href="#" class="btn btn-compare"><span>compare</span></a>
                                                <a href="#" class="btn btn-quickview"><span>quickview</span></a>
                                            </div>
                                            <button class="btn btn-cart" type="button"><span>Add to Cart</span></button>
                                            <span class="product-item-label label-price">30% <span>off</span></span>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Asus Ispiron 20</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                    <span class="old-price">$52.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div class="rating-result" title="70%">
                                                                <span style="width:70%">
                                                                    <span><span>70</span>% of <span>100</span></span>
                                                                </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Block  SALE products-->

                    <!-- block slide top -->
                    <div class="block-sidebar block-sidebar-testimonials2">

                        <div class="block-content">
                            <div class="owl-carousel"
                                 data-nav="false"
                                 data-dots="true"
                                 data-margin="0"
                                 data-items='1'
                                 data-autoplayTimeout="700"
                                 data-autoplay="true"
                                 data-loop="true">
                                <div class="item " >
                                    <div class="img">
                                        <img src="{{ asset('frontend/images/icon/icon1.png') }}" alt="icon1">
                                    </div>
                                    <strong class="title">100% Money Back Guaranteed</strong>
                                    <div class="des">
                                        Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt .
                                    </div>
                                    <a href="#" class="btn">Read more <i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
                                </div>

                            </div>
                        </div>
                    </div><!-- block slide top -->


                </div><!-- Sidebar -->

            </div>
        </div>


    </main><!-- end MAIN -->

@endsection


@section('page_css')

    <style>
        .animated {
            -webkit-transition: height 0.2s;
            -moz-transition: height 0.2s;
            transition: height 0.2s;
        }

        .stars
        {
            margin: 10px 0;
            font-size: 24px;
            color: #ff9900;
        }

        .card-inner{
            margin-left: 4rem;
        }
    </style>

    <link rel="stylesheet" href="{{asset('frontend/css/toastr.css')}}" />

@endsection


@section('page_script')

    <script>

        (function(e){var t,o={className:"autosizejs",append:"",callback:!1,resizeDelay:10},i='<textarea tabindex="-1" style="position:absolute; top:-999px; left:0; right:auto; bottom:auto; border:0; padding: 0; -moz-box-sizing:content-box; -webkit-box-sizing:content-box; box-sizing:content-box; word-wrap:break-word; height:0 !important; min-height:0 !important; overflow:hidden; transition:none; -webkit-transition:none; -moz-transition:none;"/>',n=["fontFamily","fontSize","fontWeight","fontStyle","letterSpacing","textTransform","wordSpacing","textIndent"],s=e(i).data("autosize",!0)[0];s.style.lineHeight="99px","99px"===e(s).css("lineHeight")&&n.push("lineHeight"),s.style.lineHeight="",e.fn.autosize=function(i){return this.length?(i=e.extend({},o,i||{}),s.parentNode!==document.body&&e(document.body).append(s),this.each(function(){function o(){var t,o;"getComputedStyle"in window?(t=window.getComputedStyle(u,null),o=u.getBoundingClientRect().width,e.each(["paddingLeft","paddingRight","borderLeftWidth","borderRightWidth"],function(e,i){o-=parseInt(t[i],10)}),s.style.width=o+"px"):s.style.width=Math.max(p.width(),0)+"px"}function a(){var a={};if(t=u,s.className=i.className,d=parseInt(p.css("maxHeight"),10),e.each(n,function(e,t){a[t]=p.css(t)}),e(s).css(a),o(),window.chrome){var r=u.style.width;u.style.width="0px",u.offsetWidth,u.style.width=r}}function r(){var e,n;t!==u?a():o(),s.value=u.value+i.append,s.style.overflowY=u.style.overflowY,n=parseInt(u.style.height,10),s.scrollTop=0,s.scrollTop=9e4,e=s.scrollTop,d&&e>d?(u.style.overflowY="scroll",e=d):(u.style.overflowY="hidden",c>e&&(e=c)),e+=w,n!==e&&(u.style.height=e+"px",f&&i.callback.call(u,u))}function l(){clearTimeout(h),h=setTimeout(function(){var e=p.width();e!==g&&(g=e,r())},parseInt(i.resizeDelay,10))}var d,c,h,u=this,p=e(u),w=0,f=e.isFunction(i.callback),z={height:u.style.height,overflow:u.style.overflow,overflowY:u.style.overflowY,wordWrap:u.style.wordWrap,resize:u.style.resize},g=p.width();p.data("autosize")||(p.data("autosize",!0),("border-box"===p.css("box-sizing")||"border-box"===p.css("-moz-box-sizing")||"border-box"===p.css("-webkit-box-sizing"))&&(w=p.outerHeight()-p.height()),c=Math.max(parseInt(p.css("minHeight"),10)-w||0,p.height()),p.css({overflow:"hidden",overflowY:"hidden",wordWrap:"break-word",resize:"none"===p.css("resize")||"vertical"===p.css("resize")?"none":"horizontal"}),"onpropertychange"in u?"oninput"in u?p.on("input.autosize keyup.autosize",r):p.on("propertychange.autosize",function(){"value"===event.propertyName&&r()}):p.on("input.autosize",r),i.resizeDelay!==!1&&e(window).on("resize.autosize",l),p.on("autosize.resize",r),p.on("autosize.resizeIncludeStyle",function(){t=null,r()}),p.on("autosize.destroy",function(){t=null,clearTimeout(h),e(window).off("resize",l),p.off("autosize").off(".autosize").css(z).removeData("autosize")}),r())})):this}})(window.jQuery||window.$);

        var __slice=[].slice;(function(e,t){var n;n=function(){function t(t,n){var r,i,s,o=this;this.options=e.extend({},this.defaults,n);this.$el=t;s=this.defaults;for(r in s){i=s[r];if(this.$el.data(r)!=null){this.options[r]=this.$el.data(r)}}this.createStars();this.syncRating();this.$el.on("mouseover.starrr","span",function(e){return o.syncRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("mouseout.starrr",function(){return o.syncRating()});this.$el.on("click.starrr","span",function(e){return o.setRating(o.$el.find("span").index(e.currentTarget)+1)});this.$el.on("starrr:change",this.options.change)}t.prototype.defaults={rating:void 0,numStars:5,change:function(e,t){}};t.prototype.createStars=function(){var e,t,n;n=[];for(e=1,t=this.options.numStars;1<=t?e<=t:e>=t;1<=t?e++:e--){n.push(this.$el.append("<span class='glyphicon .glyphicon-star-empty'></span>"))}return n};t.prototype.setRating=function(e){if(this.options.rating===e){e=void 0}this.options.rating=e;this.syncRating();return this.$el.trigger("starrr:change",e)};t.prototype.syncRating=function(e){var t,n,r,i;e||(e=this.options.rating);if(e){for(t=n=0,i=e-1;0<=i?n<=i:n>=i;t=0<=i?++n:--n){this.$el.find("span").eq(t).removeClass("glyphicon-star-empty").addClass("glyphicon-star")}}if(e&&e<5){for(t=r=e;e<=4?r<=4:r>=4;t=e<=4?++r:--r){this.$el.find("span").eq(t).removeClass("glyphicon-star").addClass("glyphicon-star-empty")}}if(!e){return this.$el.find("span").removeClass("glyphicon-star").addClass("glyphicon-star-empty")}};return t}();return e.fn.extend({starrr:function(){var t,r;r=arguments[0],t=2<=arguments.length?__slice.call(arguments,1):[];return this.each(function(){var i;i=e(this).data("star-rating");if(!i){e(this).data("star-rating",i=new n(e(this),r))}if(typeof r==="string"){return i[r].apply(i,t)}})}})})(window.jQuery,window);$(function(){return $(".starrr").starrr()})

        $(function(){

            $('#new-review').autosize({append: "\n"});

            var reviewBox = $('#post-review-box');
            var newReview = $('#new-review');
            var openReviewBtn = $('#open-review-box');
            var closeReviewBtn = $('#close-review-box');
            var ratingsField = $('#ratings-hidden');

            openReviewBtn.click(function(e)
            {
                reviewBox.slideDown(400, function()
                {
                    $('#new-review').trigger('autosize.resize');
                    newReview.focus();
                });
                openReviewBtn.fadeOut(100);
                closeReviewBtn.show();
            });

            closeReviewBtn.click(function(e)
            {
                e.preventDefault();
                reviewBox.slideUp(300, function()
                {
                    newReview.focus();
                    openReviewBtn.fadeIn(200);
                });
                closeReviewBtn.hide();

            });

            $('.starrr').on('starrr:change', function(e, value){
               ratingsField.val(value);
            });
        });

    </script>

    <script src="{{ asset('frontend/js/toastr.min.js') }}"></script>

    <script>

        $(document).ready(function(){
            for (let i=0; i < {{$count}}; i++) {
                $("#show_reply"+i).on('click', function () {
                    $("#show"+i).toggle();
                });
            }


        });

    </script>

@endsection
