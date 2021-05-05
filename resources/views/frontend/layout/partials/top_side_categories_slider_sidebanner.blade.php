<div class="block-section-top block-section-top1">
    <div class="container">
        <div class="box-section-top">

            <!-- categori -->
            <div class="block-nav-categori">

                <div class="block-title">
                    <span>Categories</span>
                </div>

                @php

                    $Parent_categories =  DB::table('categories')
                    ->where('parent_id',0)
                    ->get()

                @endphp

                <div class="block-content">
                    <ul class="ui-categori">
                        @foreach($Parent_categories as $parent_category)
                        <li class="parent">
                            <a href="#">
                                <span class="{{ $parent_category->icon }}"></span>
                                {{ $parent_category->title }}
                            </a>
                            @php
                                $first_child_categories =  DB::table('categories')
                                ->where('parent_id',$parent_category->id)
                                ->get()
                            @endphp

                            @if(count($first_child_categories) != false)
                                <span class="toggle-submenu"></span>
                                <div class="submenu" style="background-image: url({{asset('storage/images/categories/'.$parent_category->image)}});">
                                    <ul class="categori-list clearfix">
                                        @foreach($first_child_categories as $first_child_category)
                                            <li class="col-sm-3">
                                                <strong class="title"><a href="#">{{ $first_child_category->title }}</a></strong>
                                                <ul>
                                                    @php
                                                        $second_child_categories =  DB::table('categories')
                                                        ->where('parent_id',$first_child_category->id)
                                                        ->get()
                                                    @endphp

                                                    @foreach($second_child_categories as $second_child_category)

                                                        <li><a href="#"> {{ $second_child_category->title }} </a></li>

                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
    {{--                                    <li class="col-sm-3">--}}
    {{--                                        <strong class="title"><a href="#">TElevision</a></strong>--}}
    {{--                                        <ul>--}}
    {{--                                            <li><a href="#">Skirts    </a></li>--}}
    {{--                                            <li><a href="#">Jackets</a></li>--}}
    {{--                                            <li><a href="#">Jumpusuits</a></li>--}}
    {{--                                            <li><a href="#">Scarvest</a></li>--}}
    {{--                                            <li><a href="#">T-Shirts</a></li>--}}
    {{--                                        </ul>--}}
    {{--                                    </li>--}}
    {{--                                    <li class="col-sm-3">--}}
    {{--                                        <strong class="title"><a href="#">Camera</a></strong>--}}
    {{--                                        <ul>--}}
    {{--                                            <li><a href="#">Skirts    </a></li>--}}
    {{--                                            <li><a href="#">Jackets</a></li>--}}
    {{--                                            <li><a href="#">Jumpusuits</a></li>--}}
    {{--                                            <li><a href="#">Scarvest</a></li>--}}
    {{--                                            <li><a href="#">T-Shirts</a></li>--}}
    {{--                                        </ul>--}}
    {{--                                    </li>--}}
                                    </ul>
    {{--                                <ul class="categori-list clearfix">--}}
    {{--                                    <li class="col-sm-3">--}}
    {{--                                        <strong class="title"><a href="#">Smartphone</a></strong>--}}
    {{--                                        <ul>--}}
    {{--                                            <li><a href="#">Skirts    </a></li>--}}
    {{--                                            <li><a href="#">Jackets</a></li>--}}
    {{--                                            <li><a href="#">Jumpusuits</a></li>--}}
    {{--                                            <li><a href="#">Scarvest</a></li>--}}
    {{--                                            <li><a href="#">T-Shirts</a></li>--}}
    {{--                                        </ul>--}}
    {{--                                    </li>--}}
    {{--                                    <li class="col-sm-3">--}}
    {{--                                        <strong class="title"><a href="#">TElevision</a></strong>--}}
    {{--                                        <ul>--}}
    {{--                                            <li><a href="#">Skirts    </a></li>--}}
    {{--                                            <li><a href="#">Jackets</a></li>--}}
    {{--                                            <li><a href="#">Jumpusuits</a></li>--}}
    {{--                                            <li><a href="#">Scarvest</a></li>--}}
    {{--                                            <li><a href="#">T-Shirts</a></li>--}}
    {{--                                        </ul>--}}
    {{--                                    </li>--}}
    {{--                                    <li class="col-sm-3">--}}
    {{--                                        <strong class="title"><a href="#">Camera</a></strong>--}}
    {{--                                        <ul>--}}
    {{--                                            <li><a href="#">Skirts    </a></li>--}}
    {{--                                            <li><a href="#">Jackets</a></li>--}}
    {{--                                            <li><a href="#">Jumpusuits</a></li>--}}
    {{--                                            <li><a href="#">Scarvest</a></li>--}}
    {{--                                            <li><a href="#">T-Shirts</a></li>--}}
    {{--                                        </ul>--}}
    {{--                                    </li>--}}
    {{--                                </ul>--}}
                                </div>
                            @endif
                        </li>
                        @endforeach
{{--                        <li class="parent">--}}
{{--                            <a href="#">--}}
{{--                                <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat2.png')}}" alt="nav-cat"></span>--}}
{{--                                Smartphone & Table--}}
{{--                            </a>--}}
{{--                            <span class="toggle-submenu"></span>--}}
{{--                            <div class="submenu">--}}
{{--                                <div class="categori-img">--}}
{{--                                    <a href="#"><img src="{{asset('frontend/images/media/index1/categori-img1.jpg')}}" alt="categori-img"></a>--}}
{{--                                </div>--}}
{{--                                <ul class="categori-list">--}}
{{--                                    <li class="col-sm-3">--}}
{{--                                        <strong class="title"><a href="#">Smartphone</a></strong>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="#">Skirts    </a></li>--}}
{{--                                            <li><a href="#">Jackets</a></li>--}}
{{--                                            <li><a href="#">Jumpusuits</a></li>--}}
{{--                                            <li><a href="#">Scarvest</a></li>--}}
{{--                                            <li><a href="#">T-Shirts</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="col-sm-3">--}}
{{--                                        <strong class="title"><a href="#">TElevision</a></strong>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="#">Skirts    </a></li>--}}
{{--                                            <li><a href="#">Jackets</a></li>--}}
{{--                                            <li><a href="#">Jumpusuits</a></li>--}}
{{--                                            <li><a href="#">Scarvest</a></li>--}}
{{--                                            <li><a href="#">T-Shirts</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="col-sm-3">--}}
{{--                                        <strong class="title"><a href="#">Camera</a></strong>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="#">Skirts    </a></li>--}}
{{--                                            <li><a href="#">Jackets</a></li>--}}
{{--                                            <li><a href="#">Jumpusuits</a></li>--}}
{{--                                            <li><a href="#">Scarvest</a></li>--}}
{{--                                            <li><a href="#">T-Shirts</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                    <li class="col-sm-3">--}}
{{--                                        <strong class="title"><a href="#">washing machine</a></strong>--}}
{{--                                        <ul>--}}
{{--                                            <li><a href="#">Skirts    </a></li>--}}
{{--                                            <li><a href="#">Jackets</a></li>--}}
{{--                                            <li><a href="#">Jumpusuits</a></li>--}}
{{--                                            <li><a href="#">Scarvest</a></li>--}}
{{--                                            <li><a href="#">T-Shirts</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li class="parent">--}}
{{--                            <a href="#">--}}
{{--                                <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat3.png')}}" alt="nav-cat"></span>--}}
{{--                                Television--}}
{{--                            </a>--}}
{{--                            <span class="toggle-submenu"></span>--}}
{{--                            <div class="submenu">--}}
{{--                                <strong class="subtitle"><span>special products</span></strong>--}}
{{--                                <div class="owl-carousel"--}}
{{--                                     data-nav="true"--}}
{{--                                     data-dots="false"--}}
{{--                                     data-margin="30"--}}
{{--                                     data-autoplayTimeout="300"--}}
{{--                                     data-autoplay="true"--}}
{{--                                     data-loop="true"--}}
{{--                                     data-responsive='{--}}
{{--                                                "0":{"items":1},--}}
{{--                                                "380":{"items":1},--}}
{{--                                                "480":{"items":1},--}}
{{--                                                "600":{"items":1},--}}
{{--                                                "992":{"items":4}--}}
{{--                                                }'>--}}

{{--                                    <div class="product-item product-item-opt-1">--}}
{{--                                        <div class="product-item-info">--}}
{{--                                            <div class="product-item-photo">--}}
{{--                                                <a class="product-item-img" href="#"><img alt="product name" src="{{asset('frontend/images/media/index1/product-menu1.jpg')}}"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-item-detail">--}}
{{--                                                <strong class="product-item-name"><a href="#">Asus Ispiron 20</a></strong>--}}
{{--                                                <div class="product-item-price">--}}
{{--                                                    <span class="price">$45.00</span>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-item product-item-opt-1">--}}
{{--                                        <div class="product-item-info">--}}
{{--                                            <div class="product-item-photo">--}}
{{--                                                <a class="product-item-img" href="#"><img alt="product name" src="{{asset('frontend/images/media/index1/product-menu2.jpg')}}"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-item-detail">--}}
{{--                                                <strong class="product-item-name"><a href="#">Electronics Ispiron 20 </a></strong>--}}
{{--                                                <div class="product-item-price">--}}
{{--                                                    <span class="price">$45.00</span>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-item product-item-opt-1">--}}
{{--                                        <div class="product-item-info">--}}
{{--                                            <div class="product-item-photo">--}}
{{--                                                <a class="product-item-img" href="#"><img alt="product name" src="{{asset('frontend/images/media/index1/product-menu3.jpg')}}"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-item-detail">--}}
{{--                                                <strong class="product-item-name"><a href="#">Samsung Ispiron 20 </a></strong>--}}
{{--                                                <div class="product-item-price">--}}
{{--                                                    <span class="price">$45.00</span>--}}
{{--                                                </div>--}}

{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-item product-item-opt-1">--}}
{{--                                        <div class="product-item-info">--}}
{{--                                            <div class="product-item-photo">--}}
{{--                                                <a class="product-item-img" href="#"><img alt="product name" src="{{asset('frontend/images/media/index1/product-menu4.jpg')}}"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-item-detail">--}}
{{--                                                <strong class="product-item-name"><a href="#">Electronics Ispiron 20 </a></strong>--}}
{{--                                                <div class="product-item-price">--}}
{{--                                                    <span class="price">$45.00</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-item product-item-opt-1">--}}
{{--                                        <div class="product-item-info">--}}
{{--                                            <div class="product-item-photo">--}}
{{--                                                <a class="product-item-img" href="#"><img alt="product name" src="{{asset('frontend/images/media/index1/product-menu4.jpg')}}"></a>--}}
{{--                                            </div>--}}
{{--                                            <div class="product-item-detail">--}}
{{--                                                <strong class="product-item-name"><a href="#">Samsung Ispiron 20 </a></strong>--}}
{{--                                                <div class="product-item-price">--}}
{{--                                                    <span class="price">$45.00</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat4.png')}}" alt="nav-cat"></span>--}}
{{--                                Shoes & Accessories--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat5.png')}}" alt="nav-cat"></span>--}}
{{--                                Camera & Photo--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat6.png')}}" alt="nav-cat"></span>--}}
{{--                                Watch & Jewellry--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat7.png')}}" alt="nav-cat"></span>--}}
{{--                                Accessories--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat8.png')}}" alt="nav-cat"></span>--}}
{{--                                Sport & Outdoors--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat9.png')}}" alt="nav-cat"></span>--}}
{{--                                Computer & Networking--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat10.png')}}" alt="nav-cat"></span>--}}
{{--                                Flashlights & Lamps--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#">--}}
{{--                                <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat11.png')}}" alt="nav-cat"></span>--}}
{{--                                Cameras & Photo--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="cat-link-orther">--}}
{{--                            <a href="#">--}}
{{--                                <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat10.png')}}" alt="nav-cat"></span>--}}
{{--                                Sport & Outdoors--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="cat-link-orther">--}}
{{--                            <a href="#">--}}
{{--                                <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat9.png')}}" alt="nav-cat"></span>--}}
{{--                                Watch & Jewellry--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="cat-link-orther">--}}
{{--                            <a href="#">--}}
{{--                                <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat8.png')}}" alt="nav-cat"></span>--}}
{{--                                Flashlights & Lamps--}}
{{--                            </a>--}}
{{--                        </li>--}}

                    </ul>

{{--                    <div class="view-all-categori">--}}
{{--                        <a  class="open-cate btn-view-all">All Categories</a>--}}
{{--                    </div>--}}
                </div>

            </div><!-- categori -->

            <!-- block slide top -->
{{--            @include('frontend.layout.partials.slider')--}}

            <div class="block-slide-main slide-opt-1">

                <!-- slide -->
                <div class="owl-carousel dotsData"
                     data-nav="true"
                     data-dots="true"
                     data-margin="0"
                     data-items='1'
                     data-autoplayTimeout="700"
                     data-autoplay="true"
                     data-loop="true">

                    @php
                    $sliders = DB::table('home_settings')
                        ->where([
                            ['key', '=', 'slider'],
                            ['status', '=', 1],
                        ])->get();
                    @endphp

                    @php $num  = 1 @endphp

                    @foreach($sliders as $slider)

                        @php $v = explode("~",$slider->value) @endphp

                        <div class="item item1" style="background-image: url({{asset('storage/images/sliders/'.$v[0]) }});" data-dot={{ $num }}>

                            <div class="description">
                                <span class="title">{{ $v[1] }} </span>
                                <span class="subtitle">{{ $v[2] }}</span>
                            </div>

                        </div>

                        @php $num++ @endphp

                    @endforeach




                                    {{--                    <?php--}}
{{--                         $images = DB::table('home_settings')--}}
{{--                         ->where([--}}
{{--                             ['status', '=', 1],--}}
{{--                         ])--}}
{{--                         ->whereIn('key', ['image'])--}}
{{--                         ->get()--}}
{{--                     ?>--}}

{{--                    <?php--}}
{{--                        $titles = DB::table('home_settings')--}}
{{--                        ->where([--}}
{{--                            ['status', '=', 1],--}}
{{--                        ])--}}
{{--                        ->whereIn('key', ['title'])--}}
{{--                        ->get()--}}
{{--                    ?>--}}

{{--                    <?php--}}
{{--                        $sub_titles = DB::table('home_settings')--}}
{{--                        ->where([--}}
{{--                            ['status', '=', 1],--}}
{{--                        ])--}}
{{--                        ->whereIn('key', ['sub title'])--}}
{{--                        ->get()--}}
{{--                    ?>--}}



{{--                    <?php $num  = 1 ?>--}}

{{--                    @for($i = 0; $i<count($images);$i++)--}}



{{--                        @if($images[$i]->key == 'image')--}}
{{--                        <div class="item item1" style="background-image: url({{asset('storage/images/sliders/'.$images[$i]->value)}});" data-dot={{ $num }}>--}}

{{--                            <div class="description">--}}

{{--                            @if($titles[$i]->key == 'title')--}}
{{--                                <span class="title"> {{ $titles[$i]->value }} </span>--}}
{{--                            @endif--}}

{{--                            @if($sub_titles[$i]->key == 'sub title')--}}
{{--                                <span class="subtitle">{{ $sub_titles[$i]->value }}</span>--}}
{{--                            @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        @endif--}}

{{--                        <?php $num++ ?>--}}

{{--                    @endfor--}}





{{--                    @foreach($sliders as $slider)--}}

{{--                            <div class="item item1" style="background-image: url({{asset('storage/images/sliders/'.$slider->value)}});" data-dot="1"--}}

{{--                                <div class="description">--}}
{{--                                        <span class="title"> {{ $slider->value }} </span>--}}
{{--                                    <span class="subtitle">{{ $slider->value }}</span>--}}
{{--                                </div>--}}

{{--                            </div>--}}

{{--                    @endforeach--}}



{{--                    <div class="item item1" style="background-image: url({{asset('frontend/images/media/index1/slide1.jpg)')}});" data-dot="2">--}}

{{--                        <div class="description">--}}
{{--                            <span class="title">We’ve Take A Further </span>--}}
{{--                            <span class="subtitle">20% Off <br> Accessories</span>--}}
{{--                            <a href="#" class="btn">shop now</a>--}}
{{--                        </div>--}}

{{--                    </div>--}}

{{--                    <div class="item item3" style="background-image: url({{asset('frontend/images/media/index1/slide3.jpg')}});" data-dot="3">--}}

{{--                        <div class="description">--}}
{{--                            <span class="title">Spring Fashion  </span>--}}
{{--                            <span class="subtitle">Fashion Colection Style 2016 </span>--}}
{{--                            <a href="#" class="btn">Now In Stock</a>--}}
{{--                        </div>--}}

{{--                    </div>--}}
                </div> <!-- slide -->

            </div>


            <!-- block slide top -->

            <!-- banner -->
           {{-- @include('frontend.layout.partials.top_header_sidebanner')--}}

            @php
                $banner_1 = DB::table('home_settings')
               ->where([
                   ['key', '=', 'banner-1'],
                   ['status', '=', 1],
               ])->first();

                if(!empty($banner_1)){

                    $banner_1 = $banner_1->value;
                }
            @endphp

            @php
                $banner_2 = DB::table('home_settings')
                ->where([
                    ['key', '=', 'banner-2'],
                    ['status', '=', 1],
                ])->first();

                if(!empty($banner_2)){

                    $banner_2 = $banner_2->value;
                }
            @endphp


            <div class="banner-slide">
                <a href="#" class="box-img"><img src="{{asset('storage/images/banners/'.$banner_1)}}" alt="banner-slide"></a>
                <a href="#" class="box-img"><img src="{{asset('storage/images/banners/'.$banner_2)}}" alt="banner-slide"></a>
            </div>
            <!-- banner -->

        </div>
    </div>
</div>
