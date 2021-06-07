@extends('frontend.layout.master')

@section('content')

    <!-- MAIN -->
    <main class="site-main">
        <div class="columns container">
            <!-- Block  Breadcrumb-->

            <ol class="breadcrumb no-hide">
                <li><a href="#">Home </a></li>
                <li class="active">About Us</li>
            </ol><!-- Block  Breadcrumb-->

            <div class="row">

                <!-- Main Content -->
                <div class="col-md-9 col-md-push-3 col-main">
                    @if($about->status == 1)
                    @csrf
                    @method('PUT')
                    <h2 class="page-heading">
                        <span class="page-heading-title2">{{$about->title}}</span>
                    </h2>

                    <div class="content-text clearfix">

                        <img width="310" alt="" class="alignleft" src="{{ asset('storage/images/about/'.$about->image) }}">

                        <p>{{$about->description}}</p>

                    </div>
                    @endif
                </div><!-- Main Content -->

                <!-- Sidebar -->
                <div class="col-md-3 col-md-pull-9 col-sidebar">

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
                                        <li>
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
                            <div class="item item1">
                                <img src="{{ asset('frontend/images/media/banner-sidebar1.jpg') }}" alt="images">
                            </div>
                            <div class="item item2">
                                <img src="{{ asset('frontend/images/media/banner-sidebar1.jpg') }}" alt="images">
                            </div>
                            <div class="item item3">
                                <img src="{{ asset('frontend/images/media/banner-sidebar1.jpg') }}" alt="images">
                            </div>
                        </div>
                    </div><!-- block slide top -->


                </div><!-- Sidebar -->


            </div>
        </div>
    </main><!-- end MAIN -->

@endsection
