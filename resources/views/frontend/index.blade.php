@extends('frontend.layout.master')
@section('content')


    @include('frontend.layout.partials.top_side_categories_slider_sidebanner')

    <!-- block  service-->
    <div class="container ">
        <div class="block-service-opt1">
            <div class="clearfix">
                @foreach($services as $service)
                    <?php $s = explode("~",$service->value) ?>
                <div class="col-md-3 col-sm-6">
                    <div class="item">
                                <span class="icon {{ $s[2] }}" style="font-size: 3em;"></span>
                        <strong class="title"> {{ $s[0] }} </strong>
                        <span>{{ $s[1] }}</span>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <!-- block  service-->


    <div class="container">
        <div class="row">

            <div class="col-md-9">

                <!-- block tab products -->
                <div class="block-tab-products-opt1">

                    <div class="block-title">
                        <ul class="nav" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#tabproduct1"  role="tab" data-toggle="tab">best SELLERS </a>
                            </li>
                            <li role="presentation">
                                <a href="#tabproduct2" role="tab" data-toggle="tab">ON SALE</a>
                            </li>
                            <li role="presentation">
                                <a href="#tabproduct3"  role="tab" data-toggle="tab">NEW PRODUCTS</a>
                            </li>
                        </ul>
                    </div>

                    <div class="block-content tab-content">

                        <!-- tab 1 -->
                        <div role="tabpanel" class="tab-pane active fade in " id="tabproduct1">
                            <div class="owl-carousel"
                                 data-nav="true"
                                 data-dots="false"
                                 data-margin="30"
                                 data-responsive='{
                                        "0":{"items":1},
                                        "480":{"items":2},
                                        "480":{"items":2},
                                        "768":{"items":3},
                                        "992":{"items":3}
                                    }'>

                                <div class="product-item  product-item-opt-1 ">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/sellers1.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                            <span class="product-item-label label-price">30% <span>off</span></span>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                    <span class="old-price">$52.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item  product-item-opt-1 ">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/sellers2.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                            <span class="product-item-label label-new">New</span>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item  product-item-opt-1 ">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/sellers3.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="product-item  product-item-opt-1 ">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/sellers2.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item  product-item-opt-1 ">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/sellers3.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- tab 1 -->

                        <!-- tab 2 -->
                        <div role="tabpanel" class="tab-pane fade" id="tabproduct2">
                            <div class="owl-carousel"
                                 data-nav="true"
                                 data-dots="false"
                                 data-margin="30"
                                 data-responsive='{
                                        "0":{"items":1},
                                        "480":{"items":2},
                                        "480":{"items":2},
                                        "768":{"items":3},
                                        "992":{"items":3}
                                    }'>

                                <div class="product-item  product-item-opt-1 ">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/sellers1.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                    <span class="old-price">$52.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item  product-item-opt-1 ">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/sellers2.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item  product-item-opt-1 ">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/sellers3.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="product-item  product-item-opt-1 ">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/sellers2.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item  product-item-opt-1 ">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/sellers3.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- tab 2 -->

                        <!-- tab 3-->
                        <div role="tabpanel" class="tab-pane fade" id="tabproduct3">
                            <div class="owl-carousel"
                                 data-nav="true"
                                 data-dots="false"
                                 data-margin="30"
                                 data-responsive='{
                                        "0":{"items":1},
                                        "480":{"items":2},
                                        "480":{"items":2},
                                        "768":{"items":3},
                                        "992":{"items":3}
                                    }'>

                                <div class="product-item  product-item-opt-1 ">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/sellers1.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                    <span class="old-price">$52.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item  product-item-opt-1 ">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/sellers2.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item  product-item-opt-1 ">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/sellers3.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="product-item  product-item-opt-1 ">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/sellers2.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-item  product-item-opt-1 ">
                                    <div class="product-item-info">
                                        <div class="product-item-photo">
                                            <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/sellers3.jpg"></a>
                                            <div class="product-item-actions">
                                                <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                                <a class="btn btn-compare" href="#"><span>compare</span></a>
                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                            </div>
                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                        </div>
                                        <div class="product-item-detail">
                                            <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                            <div class="clearfix">
                                                <div class="product-item-price">
                                                    <span class="price">$45.00</span>
                                                </div>
                                                <div class="product-reviews-summary">
                                                    <div class="rating-summary">
                                                        <div title="80%" class="rating-result">
                                                                    <span style="width:80%">
                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div><!-- tab 3-->

                    </div>

                </div><!-- block tab products -->

            </div>

            <div class="col-md-3">

                <!-- block deals  of -->
                <div class="block-deals-of block-deals-of-opt1">
                    <div class="block-title ">
                        <span class="icon"></span>
                        <div class="heading-title">latest deals</div>
                    </div>
                    <div class="block-content">

                        <div class="owl-carousel"
                             data-nav="true"
                             data-dots="false"
                             data-margin="30"
                             data-responsive='{
                                    "0":{"items":1},
                                    "480":{"items":2},
                                    "768":{"items":3},
                                    "992":{"items":1},
                                    "1200":{"items":1}
                                    }'>

                            <div class="product-item  product-item-opt-1 ">
                                <div class="deals-of-countdown">

                                    <div class="count-down-time" data-countdown="2016/12/25"></div>
                                </div>
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/deals-of1.jpg" ></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price">$108.00</span>
                                                <span class="old-price">(-20%)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item  product-item-opt-1 ">
                                <div class="deals-of-countdown">

                                    <div class="count-down-time" data-countdown="2016/11/25"></div>
                                </div>
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/deals-of2.jpg" ></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="#">Sale Couple of Smartphones</a></strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price">$45.00</span>
                                                <span class="old-price">(-20%)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item  product-item-opt-1 ">
                                <div class="deals-of-countdown">

                                    <div class="count-down-time" data-countdown="2016/12/30"></div>
                                </div>
                                <div class="product-item-info">
                                    <div class="product-item-photo">
                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/deals-of3.jpg" ></a>
                                        <div class="product-item-actions">
                                            <a class="btn btn-wishlist" href="#"><span>wishlist</span></a>
                                            <a class="btn btn-compare" href="#"><span>compare</span></a>
                                            <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                        </div>
                                        <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                    </div>
                                    <div class="product-item-detail">
                                        <strong class="product-item-name"><a href="#">Sale Couple of Smartphones</a></strong>
                                        <div class="clearfix">
                                            <div class="product-item-price">
                                                <span class="price">$45.00</span>
                                                <span class="old-price">(-20%)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- block deals  of -->

            </div>

        </div>
    </div>

    <div class="clearfix" style="background-color: #eeeeee;margin-bottom: 40px; padding-top:30px;">

        <!-- block -floor -products / floor 1 :Fashion-->

    @foreach($blockfloors as $blockfloor)

        <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-1">
            <div class="container">
                <div class="block-title">
                    <span class="title"> <div class="{{ $blockfloor->icon }}"></div> Fashion</span>
                    <div class="links dropdown">
                        <button class="dropdown-toggle"  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu" >
                            <ul>
                                @foreach($categories as $category)

                                    @if($blockfloor->category_one == $category->id )

                                        <?php $i = 1  ?>

                                    @else
                                        <?php $i = 0  ?>
                                    @endif
                                    @if($i == 1)

                                        <li role="presentation" class="active"><a href="#floor1-1"  role="tab" data-toggle="tab"> {{ $blockfloor->category_one == $category->id ? $category->title:''}} </a></li>

                                            @break

                                    @endif
                                @endforeach
                                @foreach($categories as $category)

                                    @if($blockfloor->category_two == $category->id )

                                        <?php $i = 1  ?>

                                    @else
                                        <?php $i = 0  ?>
                                    @endif
                                    @if($i == 1)

                                        <li role="presentation"><a href="#floor1-2"  role="tab" data-toggle="tab"> {{ $blockfloor->category_two == $category->id ? $category->title:''}} </a></li>

                                        @break

                                    @endif
                                @endforeach
                                @foreach($categories as $category)

                                    @if($blockfloor->category_three == $category->id )

                                        <?php $i = 1  ?>

                                    @else
                                        <?php $i = 0  ?>
                                    @endif
                                    @if($i == 1)

                                        <li role="presentation"><a href="#floor1-3"  role="tab" data-toggle="tab"> {{ $blockfloor->category_three == $category->id ? $category->title:''}} </a></li>

                                        @break

                                    @endif
                                @endforeach
                                @foreach($categories as $category)

                                    @if($blockfloor->category_four == $category->id )

                                        <?php $i = 1  ?>

                                    @else
                                        <?php $i = 0  ?>
                                    @endif
                                    @if($i == 1)

                                        <li role="presentation"><a href="#floor1-4"  role="tab" data-toggle="tab"> {{ $blockfloor->category_four == $category->id ? $category->title:''}} </a></li>

                                        @break

                                    @endif
                                @endforeach
                                @foreach($categories as $category)

                                    @if($blockfloor->category_five == $category->id )

                                        <?php $i = 1  ?>

                                    @else
                                        <?php $i = 0  ?>
                                    @endif
                                    @if($i == 1)

                                        <li role="presentation"><a href="#floor1-5"  role="tab" data-toggle="tab"> {{ $blockfloor->category_five == $category->id ? $category->title:''}} </a></li>

                                        @break

                                    @endif
                                @endforeach
                                @foreach($categories as $category)

                                    @if($blockfloor->category_six == $category->id )

                                        <?php $i = 1  ?>

                                    @else
                                        <?php $i = 0  ?>
                                    @endif
                                    @if($i == 1)

                                        <li role="presentation"><a href="#floor1-6"  role="tab" data-toggle="tab"> {{ $blockfloor->category_six == $category->id ? $category->title:''}} </a></li>

                                        @break

                                    @endif
                                @endforeach
                                @foreach($categories as $category)

                                    @if($blockfloor->category_seven == $category->id )

                                        <?php $i = 1  ?>

                                    @else
                                        <?php $i = 0  ?>
                                    @endif
                                    @if($i == 1)

                                        <li role="presentation"><a href="#floor1-3"  role="tab" data-toggle="tab"> {{ $blockfloor->category_seven == $category->id ? $category->title:''}} </a></li>

                                        @break

                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="actions">
                        <a href="#" class="action action-up"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                        <a href="#floor0-2" class="action action-down"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    </div>
                </div>

                <!-- Banner -->
                <div class="block-banner-floor">

                    <div class="col-sm-6">
                        <a href="#" class="box-img"><img src="{{ asset('storage/images/block_floor_products/'.$blockfloor->banner_1) }}" alt="banner"></a>
                    </div>
                    <div class="col-sm-6">
                        <a href="#" class="box-img"><img src="{{ asset('storage/images/block_floor_products/'.$blockfloor->banner_2) }}" alt="banner"></a>
                    </div>

                </div><!-- Banner -->

                <div class="block-content">

                    <div class="col-banner">
                        <span class="label-featured"><img src="{{ asset('frontend/images/icon/index1/label-featured.png') }}" alt="label-featured"></span>
                        <a href="#" class="box-img"><img src="{{ asset('storage/images/block_floor_products/'.$blockfloor->featured_banner) }}" alt="baner-floor"></a>
                    </div>

                    <div class="col-products tab-content">

                        <!-- tab 1 -->



                        <div class="tab-pane active in  fade " id="floor1-1" role="tabpanel">
                            <div class="owl-carousel"
                                 data-nav="true"
                                 data-dots="false"
                                 data-margin="0"
                                 data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>


                                @foreach($categoryProducts as $categoryProduct)

                                    @if($categoryProduct->category->id == $blockfloor->category_one)

                                        @foreach($products as $product)
                                            @if($categoryProduct->product->id == $product->id)
                                                <?php $product_image = \App\Models\ColourImageProductSize::where('product_id',$product->id)->first(); ?>
                                                <div class=" product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">

                                                                    <a class="product-item-img" href="{{route('single_product',$product)}}"><img alt="product name" src="{{ asset('storage/images/productImages/'.$product_image->image) }}"></a>

                                                            <div class="product-item-actions">
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                            @php

                                                                $product_deal = \App\Models\Deal::where('product_id',$product->id)
                                                                ->where('status',1)
                                                                ->first();


                                                            @endphp

                                                            @if(!empty($product_deal))

                                                                @php $prod_deal = str_replace('_',' ',$product_deal->deal) @endphp
                                                                <span class="product-item-label"> {{ ucwords($prod_deal) }}</span>

                                                            @endif

                                                            @php $product_offer = \App\Models\Offer::where('product_id',$product->id)->where('status',1)->first();@endphp

                                                            @if(!empty($product_offer))

                                                                <span class="product-item-label"> {{ $product_offer->offer }}</span>

                                                            @endif

                                                            @php $product_general_discount = \App\Models\GeneralDiscount::where('product_id',$product->id)->where('status',1)->first();@endphp

                                                            @if(!empty($product_general_discount))

                                                                <span class="product-item-label label-price"> {{ $product_general_discount->discount }}%<span>off</span></span>

                                                            @endif

                                                            @php $category_general_discount = \App\Models\GeneralDiscount::where('category_id',$categoryProduct->category->id)->where('status',1)->first();@endphp

                                                            @if(!empty($category_general_discount))

                                                                @if(empty($product_deal) && empty($product_offer) && empty($product_general_discount))

                                                                    <span class="product-item-label"> {{ $category_general_discount->general_discount }} Discount</span>

                                                                @endif

                                                            @endif

                                                        </div>

                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#"> {{ $product->name }} </a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">{{ $product->price }}.00</span>
{{--                                                                    <span class="old-price">$52.00</span>--}}
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                                    <span style="width:80%">
                                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                                    </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            </div>
                        </div>


                        <!-- tab 2-->
                        <div class="tab-pane  fade" id="floor1-2" role="tabpanel">
                            <div class="owl-carousel"
                                 data-nav="true"
                                 data-dots="false"
                                 data-margin="0"
                                 data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                @foreach($categoryProducts as $categoryProduct)

                                    @if($categoryProduct->category->id == $blockfloor->category_two)

                                        @foreach($products as $product)
                                            @if($categoryProduct->product->id == $product->id)
                                                <?php $product_image = \App\Models\ColourImageProductSize::where('product_id',$product->id)->first(); ?>
                                                <div class=" product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">
                                                            <a class="product-item-img" href="{{route('single_product',$product)}}"><img alt="product name" src="{{ asset('storage/images/productImages/'.$product_image->image) }}"></a>

                                                            <div class="product-item-actions">
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                            @php

                                                                $product_deal = \App\Models\Deal::where('product_id',$product->id)
                                                                ->where('status',1)
                                                                ->first();


                                                            @endphp

                                                            @if(!empty($product_deal))

                                                                @php $prod_deal = str_replace('_',' ',$product_deal->deal) @endphp
                                                                <span class="product-item-label"> {{ ucwords($prod_deal) }}</span>

                                                            @endif

                                                            @php $product_offer = \App\Models\Offer::where('product_id',$product->id)->where('status',1)->first();@endphp

                                                            @if(!empty($product_offer))

                                                                <span class="product-item-label"> {{ $product_offer->offer }}</span>

                                                            @endif

                                                            @php $product_general_discount = \App\Models\GeneralDiscount::where('product_id',$product->id)->where('status',1)->first();@endphp

                                                            @if(!empty($product_general_discount))

                                                                <span class="product-item-label label-price"> {{ $product_general_discount->discount }}%<span>off</span></span>

                                                            @endif

                                                            @php $category_general_discount = \App\Models\GeneralDiscount::where('category_id',$categoryProduct->category->id)->where('status',1)->first();@endphp

                                                            @if(!empty($category_general_discount))

                                                                @if(empty($product_deal) && empty($product_offer) && empty($product_general_discount))

                                                                    <span class="product-item-label"> {{ $category_general_discount->general_discount }} Discount</span>

                                                                @endif

                                                            @endif
                                                        </div>

                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#"> {{ $product->name }} </a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">{{ $product->price }}.00</span>
{{--                                                                    <span class="old-price">$52.00</span>--}}
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                                    <span style="width:80%">
                                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                                    </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        <!-- tab 3 -->
                        <div class="tab-pane  fade" id="floor1-3" role="tabpanel">
                            <div class="owl-carousel"
                                 data-nav="true"
                                 data-dots="false"
                                 data-margin="0"
                                 data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                @foreach($categoryProducts as $categoryProduct)

                                    @if($categoryProduct->category->id == $blockfloor->category_three)

                                        @foreach($products as $product)
                                            @if($categoryProduct->product->id == $product->id)
                                                <?php $product_image = \App\Models\ColourImageProductSize::where('product_id',$product->id)->first(); ?>
                                                <div class=" product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">

                                                            <a class="product-item-img" href="{{route('single_product',$product)}}"><img alt="product name" src="{{ asset('storage/images/productImages/'.$product_image->image) }}"></a>

                                                            <div class="product-item-actions">
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                            @php

                                                                $product_deal = \App\Models\Deal::where('product_id',$product->id)
                                                                ->where('status',1)
                                                                ->first();


                                                            @endphp

                                                            @if(!empty($product_deal))

                                                                @php $prod_deal = str_replace('_',' ',$product_deal->deal) @endphp
                                                                <span class="product-item-label"> {{ ucwords($prod_deal) }}</span>

                                                            @endif

                                                            @php $product_offer = \App\Models\Offer::where('product_id',$product->id)->where('status',1)->first();@endphp

                                                            @if(!empty($product_offer))

                                                                <span class="product-item-label"> {{ $product_offer->offer }}</span>

                                                            @endif

                                                            @php $product_general_discount = \App\Models\GeneralDiscount::where('product_id',$product->id)->where('status',1)->first();@endphp

                                                            @if(!empty($product_general_discount))

                                                                <span class="product-item-label label-price"> {{ $product_general_discount->discount }}%<span>off</span></span>

                                                            @endif

                                                            @php $category_general_discount = \App\Models\GeneralDiscount::where('category_id',$categoryProduct->category->id)->where('status',1)->first();@endphp

                                                            @if(!empty($category_general_discount))

                                                                @if(empty($product_deal) && empty($product_offer) && empty($product_general_discount))

                                                                    <span class="product-item-label"> {{ $category_general_discount->general_discount }} Discount</span>

                                                                @endif

                                                            @endif
                                                        </div>

                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#"> {{ $product->name }} </a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">{{ $product->price }}.00</span>
{{--                                                                    <span class="old-price">$52.00</span>--}}
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                                    <span style="width:80%">
                                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                                    </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        <!-- tab 4 -->
                        <div class="tab-pane  fade" id="floor1-4" role="tabpanel">
                            <div class="owl-carousel"
                                 data-nav="true"
                                 data-dots="false"
                                 data-margin="0"
                                 data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                @foreach($categoryProducts as $categoryProduct)

                                    @if($categoryProduct->category->id == $blockfloor->category_four)

                                        @foreach($products as $product)
                                            @if($categoryProduct->product->id == $product->id)
                                                <?php $product_image = \App\Models\ColourImageProductSize::where('product_id',$product->id)->first(); ?>
                                                <div class=" product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">

                                                            <a class="product-item-img" href="{{route('single_product',$product)}}"><img alt="product name" src="{{ asset('storage/images/productImages/'.$product_image->image) }}"></a>

                                                            <div class="product-item-actions">
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                            @php

                                                                $product_deal = \App\Models\Deal::where('product_id',$product->id)
                                                                ->where('status',1)
                                                                ->first();


                                                            @endphp

                                                            @if(!empty($product_deal))

                                                                @php $prod_deal = str_replace('_',' ',$product_deal->deal) @endphp
                                                                <span class="product-item-label"> {{ ucwords($prod_deal) }}</span>

                                                            @endif

                                                            @php $product_offer = \App\Models\Offer::where('product_id',$product->id)->where('status',1)->first();@endphp

                                                            @if(!empty($product_offer))

                                                                <span class="product-item-label"> {{ $product_offer->offer }}</span>

                                                            @endif

                                                            @php $product_general_discount = \App\Models\GeneralDiscount::where('product_id',$product->id)->where('status',1)->first();@endphp

                                                            @if(!empty($product_general_discount))

                                                                <span class="product-item-label label-price"> {{ $product_general_discount->discount }}%<span>off</span></span>

                                                            @endif

                                                            @php $category_general_discount = \App\Models\GeneralDiscount::where('category_id',$categoryProduct->category->id)->where('status',1)->first();@endphp

                                                            @if(!empty($category_general_discount))

                                                                @if(empty($product_deal) && empty($product_offer) && empty($product_general_discount))

                                                                    <span class="product-item-label"> {{ $category_general_discount->general_discount }} Discount</span>

                                                                @endif

                                                            @endif
                                                        </div>

                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#"> {{ $product->name }} </a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">{{ $product->price }}.00</span>
{{--                                                                    <span class="old-price">$52.00</span>--}}
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                                    <span style="width:80%">
                                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                                    </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        <!-- tab 5 -->
                        <div class="tab-pane fade " id="floor1-5" role="tabpanel">
                            <div class="owl-carousel"
                                 data-nav="true"
                                 data-dots="false"
                                 data-margin="0"
                                 data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                @foreach($categoryProducts as $categoryProduct)

                                    @if($categoryProduct->category->id == $blockfloor->category_five)

                                        @foreach($products as $product)
                                            @if($categoryProduct->product->id == $product->id)
                                                <?php $product_image = \App\Models\ColourImageProductSize::where('product_id',$product->id)->first(); ?>
                                                <div class=" product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">

                                                            <a class="product-item-img" href="{{route('single_product',$product)}}"><img alt="product name" src="{{ asset('storage/images/productImages/'.$product_image->image) }}"></a>

                                                            <div class="product-item-actions">
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                            @php

                                                                $product_deal = \App\Models\Deal::where('product_id',$product->id)
                                                                ->where('status',1)
                                                                ->first();


                                                            @endphp

                                                            @if(!empty($product_deal))

                                                                @php $prod_deal = str_replace('_',' ',$product_deal->deal) @endphp
                                                                <span class="product-item-label"> {{ ucwords($prod_deal) }}</span>

                                                            @endif

                                                            @php $product_offer = \App\Models\Offer::where('product_id',$product->id)->where('status',1)->first();@endphp

                                                            @if(!empty($product_offer))

                                                                <span class="product-item-label"> {{ $product_offer->offer }}</span>

                                                            @endif

                                                            @php $product_general_discount = \App\Models\GeneralDiscount::where('product_id',$product->id)->where('status',1)->first();@endphp

                                                            @if(!empty($product_general_discount))

                                                                <span class="product-item-label label-price"> {{ $product_general_discount->discount }}%<span>off</span></span>

                                                            @endif

                                                            @php $category_general_discount = \App\Models\GeneralDiscount::where('category_id',$categoryProduct->category->id)->where('status',1)->first();@endphp

                                                            @if(!empty($category_general_discount))

                                                                @if(empty($product_deal) && empty($product_offer) && empty($product_general_discount))

                                                                    <span class="product-item-label"> {{ $category_general_discount->general_discount }} Discount</span>

                                                                @endif

                                                            @endif
                                                        </div>

                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#"> {{ $product->name }} </a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">{{ $product->price }}.00</span>
{{--                                                                    <span class="old-price">$52.00</span>--}}
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                                    <span style="width:80%">
                                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                                    </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        <!-- tab 6 -->
                        <div class="tab-pane  fade" id="floor1-6" role="tabpanel">
                            <div class="owl-carousel"
                                 data-nav="true"
                                 data-dots="false"
                                 data-margin="0"
                                 data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                @foreach($categoryProducts as $categoryProduct)

                                    @if($categoryProduct->category->id == $blockfloor->category_six)

                                        @foreach($products as $product)
                                            @if($categoryProduct->product->id == $product->id)
                                                <?php $product_image = \App\Models\ColourImageProductSize::where('product_id',$product->id)->first(); ?>
                                                <div class=" product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">

                                                            <a class="product-item-img" href="{{route('single_product',$product)}}"><img alt="product name" src="{{ asset('storage/images/productImages/'.$product_image->image) }}"></a>

                                                            <div class="product-item-actions">
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                            @php

                                                                $product_deal = \App\Models\Deal::where('product_id',$product->id)
                                                                ->where('status',1)
                                                                ->first();


                                                            @endphp

                                                            @if(!empty($product_deal))

                                                                @php $prod_deal = str_replace('_',' ',$product_deal->deal) @endphp
                                                                <span class="product-item-label"> {{ ucwords($prod_deal) }}</span>

                                                            @endif

                                                            @php $product_offer = \App\Models\Offer::where('product_id',$product->id)->where('status',1)->first();@endphp

                                                            @if(!empty($product_offer))

                                                                <span class="product-item-label"> {{ $product_offer->offer }}</span>

                                                            @endif

                                                            @php $product_general_discount = \App\Models\GeneralDiscount::where('product_id',$product->id)->where('status',1)->first();@endphp

                                                            @if(!empty($product_general_discount))

                                                                <span class="product-item-label label-price"> {{ $product_general_discount->discount }}%<span>off</span></span>

                                                            @endif

                                                            @php $category_general_discount = \App\Models\GeneralDiscount::where('category_id',$categoryProduct->category->id)->where('status',1)->first();@endphp

                                                            @if(!empty($category_general_discount))

                                                                @if(empty($product_deal) && empty($product_offer) && empty($product_general_discount))

                                                                    <span class="product-item-label"> {{ $category_general_discount->general_discount }} Discount</span>

                                                                @endif

                                                            @endif
                                                        </div>

                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#"> {{ $product->name }} </a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">{{ $product->price }}.00</span>
{{--                                                                    <span class="old-price">$52.00</span>--}}
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                                    <span style="width:80%">
                                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                                    </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            </div>
                        </div>

                        <!-- tab 7 -->
                        <div class="tab-pane  fade" id="floor1-7" role="tabpanel">
                            <div class="owl-carousel"
                                 data-nav="true"
                                 data-dots="false"
                                 data-margin="0"
                                 data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                                @foreach($categoryProducts as $categoryProduct)

                                    @if($categoryProduct->category->id == $blockfloor->category_seven)

                                        @foreach($products as $product)
                                            @if($categoryProduct->product->id == $product->id)
                                                <?php $product_image = \App\Models\ColourImageProductSize::where('product_id',$product->id)->first(); ?>
                                                <div class=" product-item  product-item-opt-1 ">
                                                    <div class="product-item-info">
                                                        <div class="product-item-photo">

                                                            <a class="product-item-img" href="{{route('single_product',$product)}}"><img alt="product name" src="{{ asset('storage/images/productImages/'.$product_image->image) }}"></a>

                                                            <div class="product-item-actions">
                                                                <a class="btn btn-quickview" href="#"><span>quickview</span></a>
                                                            </div>
                                                            <button type="button" class="btn btn-cart"><span>Add to Cart</span></button>
                                                            @php

                                                                $product_deal = \App\Models\Deal::where('product_id',$product->id)
                                                                ->where('status',1)
                                                                ->first();


                                                            @endphp

                                                            @if(!empty($product_deal))

                                                                @php $prod_deal = str_replace('_',' ',$product_deal->deal) @endphp
                                                                <span class="product-item-label"> {{ ucwords($prod_deal) }}</span>

                                                            @endif

                                                            @php $product_offer = \App\Models\Offer::where('product_id',$product->id)->where('status',1)->first();@endphp

                                                            @if(!empty($product_offer))

                                                                <span class="product-item-label"> {{ $product_offer->offer }}</span>

                                                            @endif

                                                            @php $product_general_discount = \App\Models\GeneralDiscount::where('product_id',$product->id)->where('status',1)->first();@endphp

                                                            @if(!empty($product_general_discount))

                                                                <span class="product-item-label label-price"> {{ $product_general_discount->discount }}%<span>off</span></span>

                                                            @endif

                                                            @php $category_general_discount = \App\Models\GeneralDiscount::where('category_id',$categoryProduct->category->id)->where('status',1)->first();@endphp

                                                            @if(!empty($category_general_discount))

                                                                @if(empty($product_deal) && empty($product_offer) && empty($product_general_discount))

                                                                    <span class="product-item-label"> {{ $category_general_discount->general_discount }} Discount</span>

                                                                @endif

                                                            @endif
                                                        </div>

                                                        <div class="product-item-detail">
                                                            <strong class="product-item-name"><a href="#"> {{ $product->name }} </a></strong>
                                                            <div class="clearfix">
                                                                <div class="product-item-price">
                                                                    <span class="price">{{ $product->price }}.00</span>
{{--                                                                    <span class="old-price">$52.00</span>--}}
                                                                </div>
                                                                <div class="product-reviews-summary">
                                                                    <div class="rating-summary">
                                                                        <div title="80%" class="rating-result">
                                                                                    <span style="width:80%">
                                                                                        <span><span>80</span>% of <span>100</span></span>
                                                                                    </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div><!-- block -floor -products / floor :Fashion-->

        @section('page_css')

            <style>
                .floor-products1.block-floor-products-opt1 .block-title .links li.active > a {
                    background-color: {{ $blockfloor->colourCode }}
                }
            </style>
        @endsection

    @endforeach

        <!-- Banner -->
        <div class="block-banner-opt1 effect-banner3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <a href="#" class="box-img"><img src="images/media/index1/banner7-1.jpg" alt="banner"></a>
                    </div>
                    <div class="col-sm-6">
                        <a href="#" class="box-img"><img src="images/media/index1/banner7-2.jpg" alt="banner"></a>
                    </div>
                </div>
            </div>
        </div><!-- Banner -->

    </div>

    <!-- block  showcase-->
    <div class="block-showcase block-showcase-opt1 block-brand-tabs">
        <div class="container">

            <div class="block-title">
                <span class="title">brand showcase</span>
            </div>

            <div class="block-content" >

                <ul class="nav-brand owl-carousel"
                    data-nav="true"
                    data-loop="true"
                    data-dots="false"
                    data-margin="1"
                    data-responsive='{
                            "0":{"items":3},
                            "380":{"items":4},
                            "480":{"items":5},
                            "640":{"items":7},
                            "992":{"items":8}
                        }'>
                    <li  class="active" data-tab="brand1-1">
                        <img src="images/media/index1/brand-nav1.png" alt="img">
                    </li>
                    <li   data-tab="brand1-2">
                        <img src="images/media/index1/brand-nav2.png" alt="img">
                    </li>
                    <li   data-tab="brand1-3">
                        <img src="images/media/index1/brand-nav3.png" alt="img">
                    </li>
                    <li   data-tab="brand1-4">
                        <img src="images/media/index1/brand-nav4.png" alt="img">
                    </li>
                    <li  data-tab="brand1-5">
                        <img src="images/media/index1/brand-nav5.png" alt="img">
                    </li>
                    <li   data-tab="brand1-6">
                        <img src="images/media/index1/brand-nav6.png" alt="img">
                    </li>
                    <li   data-tab="brand1-7">
                        <img src="images/media/index1/brand-nav7.png" alt="img">
                    </li>
                    <li   data-tab="brand1-8">
                        <img src="images/media/index1/brand-nav8.png" alt="img">
                    </li>
                    <li data-tab="brand1-9">
                        <img src="images/media/index1/brand-nav1.png" alt="img">
                    </li>
                </ul>
                <div class="tab-content">

                    <div class="tab-pane active  " role="tabpanel" id="brand1-1">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="col-title">
                                    <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                    <div class="des">
                                        Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                    </div>
                                    <div class="actions">
                                        <a href="#" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-8">

                                <div class="col-product">
                                    <div class="owl-carousel"
                                         data-nav="true"
                                         data-dots="false"
                                         data-margin="0"
                                         data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase1.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase2.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
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
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase3.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase4.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
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
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase3.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase4.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
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

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane " role="tabpanel" id="brand1-2">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="col-title">
                                    <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                    <div class="des">
                                        Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                    </div>
                                    <div class="actions">
                                        <a href="#" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-8">

                                <div class="col-product">
                                    <div class="owl-carousel"
                                         data-nav="true"
                                         data-dots="false"
                                         data-margin="0"
                                         data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase1.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase2.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
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
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase3.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase4.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
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

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane  " role="tabpanel" id="brand1-3">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="col-title">
                                    <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                    <div class="des">
                                        Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                    </div>
                                    <div class="actions">
                                        <a href="#" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-8">

                                <div class="col-product">
                                    <div class="owl-carousel"
                                         data-nav="true"
                                         data-dots="false"
                                         data-margin="0"
                                         data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase1.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase2.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
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
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase3.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase4.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
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

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane  " role="tabpanel" id="brand1-4">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="col-title">
                                    <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                    <div class="des">
                                        Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                    </div>
                                    <div class="actions">
                                        <a href="#" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-8">

                                <div class="col-product">
                                    <div class="owl-carousel"
                                         data-nav="true"
                                         data-dots="false"
                                         data-margin="0"
                                         data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase1.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase2.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
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
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase3.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase4.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
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

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane  " role="tabpanel" id="brand1-5">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="col-title">
                                    <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                    <div class="des">
                                        Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                    </div>
                                    <div class="actions">
                                        <a href="#" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-8">

                                <div class="col-product">
                                    <div class="owl-carousel"
                                         data-nav="true"
                                         data-dots="false"
                                         data-margin="0"
                                         data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase1.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase2.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
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
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase3.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase4.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
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

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane  " role="tabpanel" id="brand1-6">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="col-title">
                                    <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                    <div class="des">
                                        Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                    </div>
                                    <div class="actions">
                                        <a href="#" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-8">

                                <div class="col-product">
                                    <div class="owl-carousel"
                                         data-nav="true"
                                         data-dots="false"
                                         data-margin="0"
                                         data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase1.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase2.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
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
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase3.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase4.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
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

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane  " role="tabpanel" id="brand1-7">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="col-title">
                                    <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                    <div class="des">
                                        Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                    </div>
                                    <div class="actions">
                                        <a href="#" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-8">

                                <div class="col-product">
                                    <div class="owl-carousel"
                                         data-nav="true"
                                         data-dots="false"
                                         data-margin="0"
                                         data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase1.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase2.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
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
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase3.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase4.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
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

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane  " role="tabpanel" id="brand1-8">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="col-title">
                                    <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                    <div class="des">
                                        Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                    </div>
                                    <div class="actions">
                                        <a href="#" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-8">

                                <div class="col-product">
                                    <div class="owl-carousel"
                                         data-nav="true"
                                         data-dots="false"
                                         data-margin="0"
                                         data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase1.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase2.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
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
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase3.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase4.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
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

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane  " role="tabpanel" id="brand1-9">
                        <div class="row">
                            <div class="col-md-4">

                                <div class="col-title">
                                    <img src="images/media/index1/logo-showcase.jpg" alt="logo" class="logo-showcase">
                                    <div class="des">
                                        Whatever the occasion, complete your outfit with one of Hermes Fashion's stylish women's bags. Discover our spring collection.
                                    </div>
                                    <div class="actions">
                                        <a href="#" class="btn btn-default">shop this brand <i aria-hidden="true" class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-8">

                                <div class="col-product">
                                    <div class="owl-carousel"
                                         data-nav="true"
                                         data-dots="false"
                                         data-margin="0"
                                         data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "640":{"items":2},
                                                "992":{"items":2}
                                            }'>
                                        <div class="item">
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase1.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase2.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
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
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase3.jpg" ></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                                <span class="old-price">$52.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
                                                                                </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item  product-item-opt-1 ">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="images/media/index1/showcase4.jpg"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Maecenas consequat mauris</a></strong>
                                                        <div class="clearfix">
                                                            <div class="product-item-price">
                                                                <span class="price">$45.00</span>
                                                            </div>
                                                            <div class="product-reviews-summary">
                                                                <div class="rating-summary">
                                                                    <div title="80%" class="rating-result">
                                                                                <span style="width:80%">
                                                                                    <span><span>80</span>% of <span>100</span></span>
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

                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div><!-- block  showcase-->

    <!-- block  hot categories-->
    <div class="block-hot-categories-opt1">
        <div class="container">

            <div class="block-title ">
                <span class="title">Hot categories</span>
            </div>

            <div class="block-content">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="item">

                            <div class="description" style="background-image: url(images/media/index1/hot-categories1.png)">
                                <div class="title"><span>Electronics</span></div>
                                <a href="#" class="btn">shop now</a>
                            </div>
                            <ul>
                                <li><a href="#">Batteries & Chargers</a></li>
                                <li><a href="#">Headphone, Headset</a></li>
                                <li><a href="#">Home Audio</a></li>
                                <li><a href="#">Mp3 Player Accessories</a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <div class="description" style="background-image: url(images/media/index1/hot-categories2.png)">
                                <div class="title"><span>Jewelry &  <br>Watches</span></div>
                                <a href="#" class="btn">shop now</a>
                            </div>
                            <ul>
                                <li><a href="#">Men Watches</a></li>
                                <li><a href="#">Wedding Rings</a></li>
                                <li><a href="#">Earring</a></li>
                                <li><a href="#">Necklaces</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="description" style="background-image: url(images/media/index1/hot-categories3.png)">
                                <div class="title"><span>Sport &  <br>Outdoors</span></div>
                                <a href="#" class="btn">shop now</a>
                            </div>
                            <ul>
                                <li><a href="#">Golf Supplies</a></li>
                                <li><a href="#">Outdoor & Traveling Supplies</a></li>
                                <li><a href="#">Camping & Hiking</a></li>
                                <li><a href="#">Fishing</a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <div class="description" style="background-image: url(images/media/index1/hot-categories4.png)">
                                <div class="title"><span>Digital</span></div>
                                <a href="#" class="btn">shop now</a>
                            </div>
                            <ul>
                                <li><a href="#">Accessories for iPhone</a></li>
                                <li><a href="#">Accessories for iPad</a></li>
                                <li><a href="#">Accessories for Tablet PC</a></li>
                                <li><a href="#">Tablet PC</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="description" style="background-image: url(images/media/index1/hot-categories5.png)">
                                <div class="title"><span>Fashion</span></div>
                                <a href="#" class="btn">shop now</a>
                            </div>
                            <ul>
                                <li><a href="#">Batteries & Chargers</a></li>
                                <li><a href="#">Headphone, Headset</a></li>
                                <li><a href="#">Home Audio</a></li>
                                <li><a href="#">Mp3 Player Accessories</a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <div class="description" style="background-image: url(images/media/index1/hot-categories6.png)">
                                <div class="title"><span>Furniture</span></div>
                                <a href="#" class="btn">shop now</a>
                            </div>
                            <ul>
                                <li><a href="#">Batteries & Chargers </a></li>
                                <li><a href="#">Headphone, Headset</a></li>
                                <li><a href="#">Home Audio</a></li>
                                <li><a href="#">Mp3 Player Accessories</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="item">
                            <div class="description" style="background-image: url(images/media/index1/hot-categories7.png)">
                                <div class="title"><span>Health & <br>Beauty</span></div>
                                <a href="#" class="btn">shop now</a>
                            </div>
                            <ul>
                                <li><a href="#">Bath & Body</a></li>
                                <li><a href="#">Shaving & Hair Removal</a></li>
                                <li><a href="#">Fragrances</a></li>
                                <li><a href="#">Salon & Spa Equipment</a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <div class="description" style="background-image: url(images/media/index1/hot-categories8.png)">
                                <div class="title"><span>Toys &   <br>Hobbies</span></div>
                                <a href="#" class="btn">shop now</a>
                            </div>
                            <ul>
                                <li><a href="#">Walkera</a></li>
                                <li><a href="#">Fpv System & Parts</a></li>
                                <li><a href="#">RC Cars & Parts</a></li>
                                <li><a href="#">Helicopters & Part</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div><!--block  hot categories-->
@endsection

@section('page_css')

    <link rel="stylesheet" href="{{asset('frontend/css/toastr.css')}}" />

@endsection

@section('page_script')

    <script src="{{ asset('frontend/js/toastr.min.js') }}"></script>

@endsection



