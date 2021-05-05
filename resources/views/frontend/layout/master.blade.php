<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kute-themes.com/html/kuteshop/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jan 2020 16:14:34 GMT -->
<head>
    <title>KuteShop - Multi-Purpose Ecommerce HTML Template</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Style CSS -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.css')}}">
    @yield('page_css')

</head>
<body class="cms-index-index index-opt-1 catalog-category-view catalog-product-view catalog-view_op1 page-order page-contact">

<div class="wrapper">

    <!-- HEADER -->
    <header class="site-header header-opt-1 cate-show">

        <!-- header-top -->
        @include('frontend.layout.partials.top_header')
        <!-- header-top -->

        <!-- header-content -->
        @include('frontend.layout.partials.header_content')
        <!-- header-content -->

        <!-- header-nav -->
        <div class="header-nav mid-header">
            <div class="container">

                <div class="box-header-nav">

                    <!-- btn categori mobile -->
                    <span data-action="toggle-nav-cat" class="nav-toggle-menu nav-toggle-cat"><span>Categories</span></span>

                    <!-- btn menu mobile -->
                    <span data-action="toggle-nav" class="nav-toggle-menu"><span>Menu</span></span>

                    <!--categori  -->
                    <div class="block-nav-categori">

                        <div class="block-title">
                            <span>Categories</span>
                        </div>

                        <div class="block-content">
                            <div class="clearfix"><span data-action="close-cat" class="close-cate"><span>Categories</span></span></div>
                            <ul class="ui-categori">
                                <li class="parent">
                                    <a href="#">
                                        <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat1.png')}}" alt="nav-cat"></span>
                                        Electronics
                                    </a>
                                    <span class="toggle-submenu"></span>
                                    <div class="submenu" style="background-image: url({{asset('frontend/images/media/index1/bgmenu.jpg')}});">
                                        <ul class="categori-list clearfix">
                                            <li class="col-sm-3">
                                                <strong class="title"><a href="#">Smartphone</a></strong>
                                                <ul>
                                                    <li><a href="#">Skirts    </a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Jumpusuits</a></li>
                                                    <li><a href="#">Scarvest</a></li>
                                                    <li><a href="#">T-Shirts</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-sm-3">
                                                <strong class="title"><a href="#">TElevision</a></strong>
                                                <ul>
                                                    <li><a href="#">Skirts    </a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Jumpusuits</a></li>
                                                    <li><a href="#">Scarvest</a></li>
                                                    <li><a href="#">T-Shirts</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-sm-3">
                                                <strong class="title"><a href="#">Camera</a></strong>
                                                <ul>
                                                    <li><a href="#">Skirts    </a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Jumpusuits</a></li>
                                                    <li><a href="#">Scarvest</a></li>
                                                    <li><a href="#">T-Shirts</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="categori-list clearfix">
                                            <li class="col-sm-3">
                                                <strong class="title"><a href="#">Smartphone</a></strong>
                                                <ul>
                                                    <li><a href="#">Skirts    </a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Jumpusuits</a></li>
                                                    <li><a href="#">Scarvest</a></li>
                                                    <li><a href="#">T-Shirts</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-sm-3">
                                                <strong class="title"><a href="#">TElevision</a></strong>
                                                <ul>
                                                    <li><a href="#">Skirts    </a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Jumpusuits</a></li>
                                                    <li><a href="#">Scarvest</a></li>
                                                    <li><a href="#">T-Shirts</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-sm-3">
                                                <strong class="title"><a href="#">Camera</a></strong>
                                                <ul>
                                                    <li><a href="#">Skirts    </a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Jumpusuits</a></li>
                                                    <li><a href="#">Scarvest</a></li>
                                                    <li><a href="#">T-Shirts</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="parent">
                                    <a href="#">
                                        <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat2.png')}}" alt="nav-cat"></span>
                                        Sports & Outdoors
                                    </a>
                                    <span class="toggle-submenu"></span>
                                    <div class="submenu">
                                        <div class="categori-img">
                                            <a href="#"><img src=" {{asset('frontend/images/media/index1/categori-img1.jpg')}}" alt="categori-img"></a>
                                        </div>
                                        <ul class="categori-list">
                                            <li class="col-sm-3">
                                                <strong class="title"><a href="#">Smartphone</a></strong>
                                                <ul>
                                                    <li><a href="#">Skirts    </a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Jumpusuits</a></li>
                                                    <li><a href="#">Scarvest</a></li>
                                                    <li><a href="#">T-Shirts</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-sm-3">
                                                <strong class="title"><a href="#">TElevision</a></strong>
                                                <ul>
                                                    <li><a href="#">Skirts    </a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Jumpusuits</a></li>
                                                    <li><a href="#">Scarvest</a></li>
                                                    <li><a href="#">T-Shirts</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-sm-3">
                                                <strong class="title"><a href="#">Camera</a></strong>
                                                <ul>
                                                    <li><a href="#">Skirts    </a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Jumpusuits</a></li>
                                                    <li><a href="#">Scarvest</a></li>
                                                    <li><a href="#">T-Shirts</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-sm-3">
                                                <strong class="title"><a href="#">washing machine</a></strong>
                                                <ul>
                                                    <li><a href="#">Skirts    </a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">Jumpusuits</a></li>
                                                    <li><a href="#">Scarvest</a></li>
                                                    <li><a href="#">T-Shirts</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="parent">
                                    <a href="#">
                                        <span class="icon"><img src=" {{asset('frontend/images/icon/index1/nav-cat3.png')}}" alt="nav-cat"></span>
                                        Smartphone & Tablets
                                    </a>
                                    <span class="toggle-submenu"></span>
                                    <div class="submenu">
                                        <strong class="subtitle"><span>special products</span></strong>
                                        <div class="owl-carousel"
                                             data-nav="true"
                                             data-dots="false"
                                             data-margin="30"
                                             data-autoplayTimeout="300"
                                             data-autoplay="true"
                                             data-loop="true"
                                             data-responsive='{
                                                "0":{"items":1},
                                                "380":{"items":1},
                                                "480":{"items":1},
                                                "600":{"items":1},
                                                "992":{"items":4}
                                                }'>

                                            <div class="product-item product-item-opt-1">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src="{{asset('frontend/images/media/index1/product-menu1.jpg ')}}"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Asus Ispiron 20</a></strong>
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-1">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src=" {{asset('frontend/images/media/index1/product-menu2.jpg')}}"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Electronics Ispiron 20 </a></strong>
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-1">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src=" {{asset('frontend/images/media/index1/product-menu3.jpg')}}"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Samsung Ispiron 20 </a></strong>
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-1">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src=" {{asset('frontend/images/media/index1/product-menu4.jpg')}}"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Electronics Ispiron 20 </a></strong>
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item product-item-opt-1">
                                                <div class="product-item-info">
                                                    <div class="product-item-photo">
                                                        <a class="product-item-img" href="#"><img alt="product name" src=" {{asset('frontend/images/media/index1/product-menu4.jpg')}}"></a>
                                                    </div>
                                                    <div class="product-item-detail">
                                                        <strong class="product-item-name"><a href="#">Samsung Ispiron 20 </a></strong>
                                                        <div class="product-item-price">
                                                            <span class="price">$45.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat4.png ')}}" alt="nav-cat"></span>
                                        Health & Beauty
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat5.png ')}}" alt="nav-cat"></span>
                                        Bags, Shoes & Accessories
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon"><img src=" {{asset('frontend/images/icon/index1/nav-cat6.png')}}" alt="nav-cat"></span>
                                        Toys & Hobbies
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat7.png ')}}" alt="nav-cat"></span>
                                        Computers & Networking
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat8.png ')}}" alt="nav-cat"></span>
                                        Laptops & Accessories
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon"><img src=" {{asset('frontend/images/icon/index1/nav-cat9.png')}}" alt="nav-cat"></span>
                                        Jewelry & Watches
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat10.png ')}}" alt="nav-cat"></span>
                                        Flashlights & Lamps
                                    </a>
                                </li>
                                <li class="cat-link-orther">
                                    <a href="#">
                                        <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat10.png ')}}" alt="nav-cat"></span>
                                        Flashlights & Lamps
                                    </a>
                                </li>
                                <li class="cat-link-orther">
                                    <a href="#">
                                        <span class="icon"><img src=" {{asset('frontend/images/icon/index1/nav-cat9.png')}}" alt="nav-cat"></span>
                                        Cameras & Photo
                                    </a>
                                </li>
                                <li class="cat-link-orther">
                                    <a href="#">
                                        <span class="icon"><img src="{{asset('frontend/images/icon/index1/nav-cat10.png ')}}" alt="nav-cat"></span>
                                        Flashlights & Lamps
                                    </a>
                                </li>
                                <li class="cat-link-orther">
                                    <a href="#">
                                        <span class="icon"><img src=" {{asset('frontend/images/icon/index1/nav-cat9.png')}}" alt="nav-cat"></span>
                                        Cameras & Photo
                                    </a>
                                </li>

                            </ul>

                            <div class="view-all-categori">
                                <a  class="open-cate btn-view-all">All Categories</a>
                            </div>

                        </div>

                    </div><!--categori  -->

                    <!-- menu -->
                    <div class="block-nav-menu">
                        <div class="clearfix"><span data-action="close-nav" class="close-nav"><span>close</span></span></div>

                        <ul class="ui-menu">
                            <li class="parent parent-megamenu active">
                                <a >Home</a>
                                <span class="toggle-submenu"></span>
                                <div class="megamenu drop-menu">
                                    <ul>
                                        <li class="col-md-3">
                                            <strong class="title"><a ><span>Home </span></a></strong>
                                            <ul class="list-submenu">
                                                <li><a href="home1.html">Home page 1</a></li>
                                                <li><a href="home2.html">Home page 2</a></li>
                                                <li><a href="home3.html">Home page 3</a></li>
                                                <li><a href="home4.html">Home page 4</a></li>
                                                <li><a href="home5.html">Home page 5</a></li>
                                                <li><a href="home6.html">Home page 6</a></li>
                                                <li><a href="home7.html">Home page 7</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-md-3">
                                            <strong class="title"><a ><span>Home </span></a></strong>
                                            <ul class="list-submenu">
                                                <li><a href="home8.html">Home page 8</a></li>
                                                <li><a href="home9.html">Home page 9</a></li>
                                                <li><a href="home10.html">Home page 10</a></li>
                                                <li><a href="home11.html">Home page 11</a></li>
                                                <li><a href="home12.html">Home page 12</a></li>
                                                <li><a href="home13.html">Home page 13</a></li>
                                                <li><a href="home14.html">Home page 14</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-md-3">
                                            <strong class="title"><a ><span>Page </span></a></strong>
                                            <ul class="list-submenu">
                                                <li><a href="Login.html">Login</a></li>
                                                <li><a href="{{ route('about') }}">About</a></li>
                                                <li><a href="{{ route('contact') }}">Contact</a></li>
                                                <li><a href="Blog.html">Blog</a></li>
                                                <li><a href="Blog_Post.html">Blog Post</a></li>
                                                <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                                <li><a href="{{ route('order') }}">Order</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-md-3">
                                            <strong class="title"><a ><span>Page </span></a></strong>
                                            <ul class="list-submenu">
                                                <li><a href="{{ route('category') }}">Category 1</a></li>
                                                <li><a href="Category2.html">Category 2</a></li>
                                                <li><a href="#">Product 1</a></li>
                                                <li><a href="Product2.html">Product 2</a></li>
                                                <li><a href="Product3.html">Product 3</a></li>
                                                <li><a href="WishList.html">WishList </a></li>
                                                <li><a href="Compare.html">Compare</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Sports</a></li>
                            <li class="parent parent-submenu">
                                <a > Fashion  </a>
                                <span class="toggle-submenu"></span>
                                <div class="submenu drop-menu">
                                    <ul >
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Sunglasses</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li class="parent parent-megamenu">
                                <a >Electronics  <span class="label-menu">New</span></a>
                                <span class="toggle-submenu"></span>
                                <div class="megamenu drop-menu">
                                    <ul>
                                        <li class="col-md-3">
                                            <div class="img-categori">
                                                <a href="#"><img alt="img" src="images/media/index1/img-categori1.jpg"></a>
                                            </div>
                                            <strong class="title"><a href="#"><span>Women's </span></a></strong>
                                            <ul class="list-submenu">
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Sunglasses</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-md-3">

                                            <div class="img-categori">
                                                <a href="#"><img  alt="img"  src="images/media/index1/img-categori2.jpg"></a>
                                            </div>
                                            <strong class="title"><a href="#"><span>Women's </span></a></strong>
                                            <ul class="list-submenu">
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Sunglasses</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-md-3">

                                            <div class="img-categori">
                                                <a href="#"><img alt="img"  src="images/media/index1/img-categori3.jpg"></a>
                                            </div>
                                            <strong class="title"><a href="#"> <span>Kid's</span></a></strong>
                                            <ul class="list-submenu">
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Sunglasses</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-md-3">

                                            <div class="img-categori">
                                                <a href="#"><img alt="img"  src="images/media/index1/img-categori4.jpg"></a>
                                            </div>
                                            <strong class="title"><a href="#"><span>Trending</span> </a></strong>
                                            <ul class="list-submenu">
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Sunglasses</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="parent parent-megamenu">
                                <a >Digital </a>
                                <span class="toggle-submenu"></span>
                                <div class="megamenu drop-menu">
                                    <ul>
                                        <li class="col-md-3">

                                            <strong class="title"><a href="#"><span>Women's </span></a></strong>
                                            <ul class="list-submenu">
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Sunglasses</a></li>
                                            </ul>

                                            <strong class="title"><a href="#"><span>Women's </span></a></strong>
                                            <ul class="list-submenu">
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Sunglasses</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-md-3">
                                            <strong class="title"><a href="#"><span>Women's </span></a></strong>
                                            <ul class="list-submenu">
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Sunglasses</a></li>
                                            </ul>

                                            <strong class="title"><a href="#"><span>Women's </span></a></strong>
                                            <ul class="list-submenu">
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Sunglasses</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-md-3">

                                            <strong class="title"><a href="#"> <span>Kid's</span></a></strong>
                                            <ul class="list-submenu">
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Sunglasses</a></li>
                                            </ul>

                                            <strong class="title"><a href="#"><span>Women's </span></a></strong>
                                            <ul class="list-submenu">
                                                <li><a href="#">Shoes</a></li>
                                                <li><a href="#">Clothing</a></li>
                                                <li><a href="#">Accessories</a></li>
                                                <li><a href="#">Sunglasses</a></li>
                                            </ul>
                                        </li>
                                        <li class="col-md-3">
                                            <div class="img-categori">
                                                <a href="#"><img alt="img" src="images/media/index1/img-categori5.jpg"></a>
                                            </div>

                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#"> Furniture </a></li>
                            <li><a href="#"> Jewelry  </a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>

                    </div><!-- menu -->

                    <!-- mini cart -->
                    <div class="block-minicart dropdown ">

                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <span class="cart-icon"></span>
                        </a>

                        <div class="dropdown-menu">
                            <form>
                                <div  class="minicart-content-wrapper" >
                                    <div class="subtitle">
                                        You have 6 item(s) in your cart
                                    </div>
                                    <div class="minicart-items-wrapper">
                                        <ol class="minicart-items">
                                            <li class="product-item">
                                                <a class="product-item-photo" href="#" title="The Name Product">
                                                    <img class="product-image-photo" src="images/media/index1/minicart.jpg" alt="The Name Product">
                                                </a>
                                                <div class="product-item-details">
                                                    <strong class="product-item-name">
                                                        <a href="#">Donec Ac Tempus</a>
                                                    </strong>
                                                    <div class="product-item-price">
                                                        <span class="price">61,19 €</span>
                                                    </div>
                                                    <div class="product-item-qty">
                                                        <span class="label">Qty: </span ><span class="number">1</span>
                                                    </div>
                                                    <div class="product-item-actions">
                                                        <a class="action delete" href="#" title="Remove item">
                                                            <span>Remove</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item">
                                                <a class="product-item-photo" href="#" title="The Name Product">
                                                    <img class="product-image-photo" src="images/media/index1/minicart2.jpg" alt="The Name Product">
                                                </a>
                                                <div class="product-item-details">
                                                    <strong class="product-item-name">
                                                        <a href="#">Donec Ac Tempus</a>
                                                    </strong>
                                                    <div class="product-item-price">
                                                        <span class="price">61,19 €</span>
                                                    </div>
                                                    <div class="product-item-qty">
                                                        <span class="label">Qty: </span ><span class="number">1</span>
                                                    </div>
                                                    <div class="product-item-actions">
                                                        <a class="action delete" href="#" title="Remove item">
                                                            <span>Remove</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="subtotal">
                                        <span class="label">Total</span>
                                        <span class="price">$630</span>
                                    </div>
                                    <div class="actions">
                                        <!-- <a class="btn btn-viewcart" href="">
                                                <span>Shopping bag</span>
                                            </a> -->
                                        <button class="btn btn-checkout" type="button" title="Check Out">
                                            <span>Checkout</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                    <!-- search -->
                    <div class="block-search">
                        <div class="block-title">
                            <span>Search</span>
                        </div>
                        <div class="block-content">
                            <div class="form-search">
                                <form>
                                    <div class="box-group">
                                        <input type="text" class="form-control" placeholder="i'm Searching for...">
                                        <button class="btn btn-search" type="button"><span>search</span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- search -->

                    <!--setting  -->
                    <div class="dropdown setting">
                        <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle "><span>Settings</span> <i aria-hidden="true" class="fa fa-user"></i></a>
                        <div class="dropdown-menu  ">
                            <div class="switcher  switcher-language">
                                <strong class="title">Select language</strong>
                                <ul class="switcher-options ">
                                    <li class="switcher-option">
                                        <a href="#">
                                            <img class="switcher-flag" alt="flag" src="images/flags/flag_french.png">
                                        </a>
                                    </li>
                                    <li class="switcher-option">
                                        <a href="#">
                                            <img class="switcher-flag" alt="flag" src="images/flags/flag_germany.png">
                                        </a>
                                    </li>
                                    <li class="switcher-option">
                                        <a href="#">
                                            <img class="switcher-flag" alt="flag" src="images/flags/flag_english.png">
                                        </a>
                                    </li>
                                    <li class="switcher-option switcher-active">
                                        <a href="#">
                                            <img class="switcher-flag" alt="flag" src="images/flags/flag_spain.png">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="switcher  switcher-currency">
                                <strong class="title">SELECT CURRENCIES</strong>
                                <ul class="switcher-options ">
                                    <li class="switcher-option">
                                        <a href="#">
                                            <i class="fa fa-usd" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="switcher-option switcher-active">
                                        <a href="#">
                                            <i class="fa fa-eur" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li class="switcher-option">
                                        <a href="#">
                                            <i class="fa fa-gbp" aria-hidden="true"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <ul class="account">
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">Checkout</a></li>
                                <li><a href="#">Compare</a></li>
                                <li><a href="#">Login/Register</a></li>
                            </ul>
                        </div>
                    </div><!--setting  -->

                </div>
            </div>
        </div><!-- header-nav -->



    </header><!-- end HEADER -->

    <!-- MAIN -->
    <main class="site-main">

        <!--  Popup Newsletter-->
{{--        <div class="modal fade popup-newsletter" id="popup-newsletter" tabindex="-1" role="dialog" >--}}
{{--            <div class="modal-dialog" role="document">--}}
{{--                <div class="modal-content" style="background-image: url(images/media/index1/Popup.jpg);">--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
{{--                    <div class="block-newletter">--}}
{{--                        <div class="block-title">signup for our newsletter & promotions</div>--}}
{{--                        <div class="block-content">--}}
{{--                            <p class="text-title">GET <span>50% <span>off</span></span></p>--}}
{{--                            <form>--}}
{{--                                <label>on your next purchase</label>--}}
{{--                                <div class="input-group">--}}
{{--                                    <input type="text" placeholder="Enter your email..." class="form-control">--}}
{{--                                    <span class="input-group-btn">--}}
{{--                                            <button type="button" class="btn btn-subcribe"><span>Subscribe</span></button>--}}
{{--                                        </span>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                        <div class="checkbox btn-checkbox">--}}
{{--                            <label>--}}
{{--                                <input type="checkbox"><span>Dont’s show this popup again!</span>--}}
{{--                            </label>--}}
{{--                        </div>--}}
{{--                    </div>--}}



{{--                </div>--}}
{{--            </div>--}}
{{--        </div><!--  Popup Newsletter-->--}}



        @yield('content')

    </main><!-- end MAIN -->

    <!-- FOOTER -->
    <footer class="site-footer footer-opt-1">

        <div class="container">
            <div class="footer-column">

                <div class="row">
                    <div class="col-md-3 col-lg-3 col-xs-6 col">
                        <?php $logo = DB::table('home_settings')
                            ->where([
                                ['key', '=', 'logo'],
                                ['status', '=', 1],
                            ])->first();

                        if(!empty($logo)){

                            $logo = $logo->value;
                        }
                        ?>
                        <strong class="logo-footer">
                            <a href="#"><img src="{{asset('storage/images/logos/'.$logo)}}" alt="logo"></a>
{{--                            <a href="#"><img src="images/media/index1/logo-footer.png" alt="logo"></a>--}}
                        </strong>

                        <table class="address">
                            <tr>
                                <td><b>Address:  </b></td>
                                <td>
                                    <?php
                                        $address = DB::table('home_settings')
                                            ->where([
                                                ['key', '=', 'address'],
                                                ['status', '=', 1],
                                            ])->first();

                                        if(!empty($address)){

                                            echo $address->value;
                                        }
                                    ?>
{{--                                    {{ DB::table('home_settings')--}}
{{--                                        ->where([--}}
{{--                                            ['key', '=', 'address'],--}}
{{--                                            ['status', '=', 1],--}}
{{--                                        ])->first()->value }}--}}
                                </td>
                            </tr>
                            <tr>
                                <td><b>Phone: </b></td>
                                <td>
                                    <?php
                                        $phone = DB::table('home_settings')
                                            ->where([
                                                ['key', '=', 'phone'],
                                                ['status', '=', 1],
                                            ])->first();

                                        if(!empty($phone)){

                                            echo $phone->value;
                                        }
                                    ?>
{{--                                    {{ DB::table('home_settings')--}}
{{--                                        ->where([--}}
{{--                                            ['key', '=', 'phone'],--}}
{{--                                            ['status', '=', 1],--}}
{{--                                        ])->first()->value }}--}}
                                </td>
                            </tr>
                            <tr>
                                <td><b>Email:</b></td>
                                <td>
                                    <?php
                                        $email = DB::table('home_settings')
                                            ->where([
                                                ['key', '=', 'email'],
                                                ['status', '=', 1],
                                            ])->first();

                                        if(!empty($email)){

                                            echo $email->value;
                                        }
                                    ?>
{{--                                    {{ DB::table('home_settings')--}}
{{--                                        ->where([--}}
{{--                                            ['key', '=', 'email'],--}}
{{--                                            ['status', '=', 1],--}}
{{--                                        ])->first()->value }}--}}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xs-6 col">
                        <div class="links">
                            <h3 class="title">Company</h3>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xs-6 col">
                        <div class="links">
                            <h3 class="title">My Account</h3>
                            <ul>
                                <li><a href="#">My Order</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">My Credit Slip</a></li>
                                <li><a href="#">My Addresses</a></li>
                                <li><a href="#">My Account</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xs-6 col">
                        <div class="links">
                            <h3 class="title">Support</h3>
                            <ul>
                                <li><a href="#">New User Guide</a></li>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">Report Spam</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xs-6 col">
                        <div class="block-newletter">
                            <div class="block-title">NEWSLETTER</div>
                            <div class="block-content">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Your Email Address">
                                        <span class="input-group-btn">
                                            <button class="btn btn-subcribe" type="button"><span>ok</span></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="block-social">
                            <div class="block-title">Let’s Socialize </div>
                            <div class="block-content">
                                <a href="#" class="sh-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" class="sh-pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                                <a href="#" class="sh-vk"><i class="fa fa-vk" aria-hidden="true"></i></a>
                                <a href="#" class="sh-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" class="sh-google"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="payment-methods">
                <div class="block-title">
                    Accepted Payment Methods
                </div>
                <div class="block-content">
                    <img alt="payment" src="images/media/index1/payment1.png">
                    <img alt="payment" src="images/media/index1/payment2.png">
                    <img alt="payment" src="images/media/index1/payment3.png">
                    <img alt="payment" src="images/media/index1/payment4.png">
                    <img alt="payment" src="images/media/index1/payment5.png">
                    <img alt="payment" src="images/media/index1/payment6.png">
                    <img alt="payment" src="images/media/index1/payment7.png">
                    <img alt="payment" src="images/media/index1/payment8.png">
                    <img alt="payment" src="images/media/index1/payment9.png">
                    <img alt="payment" src="images/media/index1/payment10.png">
                </div>
            </div>

            <div class="footer-links">


                <ul class="links">
                    <li><strong class="title">HOT SEARCHED KEYWORDS:</strong></li>
                    <li><a href="#">Xiaomi Mi3 </a></li>
                    <li><a href="#">Digiflip Pro XT 712 Tablet</a></li>
                    <li><a href="#">Mi 3 Phones  </a></li>
                    <li><a href="#">Iphone 6 Plus  </a></li>
                    <li><a href="#">Women's Messenger Bags</a></li>
                    <li><a href="#">Wallets   </a></li>
                    <li><a href="#">Women's Clutches   </a></li>
                    <li><a href="#">Backpacks Totes</a></li>
                </ul>



                <ul class="links">
                    <li><strong class="title">tvs: </strong></li>
                    <li><a href="#">Sony TV  </a></li>
                    <li><a href="#"> Samsung TV  </a></li>
                    <li><a href="#">LG TV  </a></li>
                    <li><a href="#">Panasonic TV  </a></li>
                    <li><a href="#"> Onida TV  </a></li>
                    <li><a href="#"> Toshiba TV  </a></li>
                    <li><a href="#"> Philips TV</a></li>
                    <li><a href="#">Micromax TV</a></li>
                    <li><a href="#">LED TV </a></li>
                    <li><a href="#">  LCD TV  </a></li>
                    <li><a href="#">Plasma TV </a></li>
                    <li><a href="#">3D TV    </a></li>
                    <li><a href="#">Smart TV </a></li>
                </ul>



                <ul  class="links">
                    <li><strong class="title">MOBILES: </strong></li>
                    <li><a href="#">Moto E </a></li>
                    <li><a href="#"> Samsung Mobile </a></li>
                    <li><a href="#">Micromax Mobile</a></li>
                    <li><a href="#">Nokia Mobile </a></li>
                    <li><a href="#"> HTC Mobile </a></li>
                    <li><a href="#">Sony Mobile  </a></li>
                    <li><a href="#"> Apple Mobile  </a></li>
                    <li><a href="#"> LG Mobile  </a></li>
                    <li><a href="#">Karbonn Mobile</a></li>
                </ul>


                <ul class="links">
                    <li><strong class="title">LAPTOPS:</strong></li>
                    <li><a href="#">Apple Laptop  </a></li>
                    <li><a href="#">Acer Laptop </a></li>
                    <li><a href="#">Samsung Laptop</a></li>
                    <li><a href="#">Lenovo Laptop </a></li>
                    <li><a href="#">Sony Laptop</a></li>
                    <li><a href="#">Dell Laptop</a></li>
                    <li><a href="#">Asus Laptop </a></li>
                    <li><a href="#">  Toshiba Laptop</a></li>
                    <li><a href="#">LG Laptop </a></li>
                    <li><a href="#">HP Laptop</a></li>
                    <li><a href="#">Notebook</a></li>
                </ul>



                <ul class="links">
                    <li><strong class="title">WATCHES:</strong></li>
                    <li><a href="#">FCUK Watches</a></li>
                    <li><a href="#">Titan Watches  </a></li>
                    <li><a href="#">  Casio Watches </a></li>
                    <li><a href="#">  Fastrack Watches </a></li>
                    <li><a href="#">Timex Watches </a></li>
                    <li><a href="#">Fossil Watches</a></li>
                    <li><a href="#">Diesel Watches  </a></li>
                    <li><a href="#"> Luxury Watches</a></li>
                </ul>


                <ul class="links">
                    <li><strong class="title">FOOTWEAR: </strong></li>
                    <li><a href="#">Shoes  </a></li>
                    <li><a href="#">Casual Shoes </a></li>
                    <li><a href="#"> Sports Shoes </a></li>
                    <li><a href="#">Formal Shoes </a></li>
                    <li><a href="#"> Adidas Shoes  </a></li>
                    <li><a href="#">Gas Shoes</a></li>
                    <li><a href="#"> Puma Shoes</a></li>
                    <li><a href="#">Reebok Shoes </a></li>
                    <li><a href="#">Woodland Shoes  </a></li>
                    <li><a href="#">Red tape Shoes</a></li>
                    <li><a href="#">Nike Shoes</a></li>
                </ul>

            </div>

            <div class="footer-bottom">
                <div class="links">
                    <ul>
                        <li><a href="#">    Company Info – Partnerships    </a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Online Shopping </a></li>
                        <li><a href="#">Promotions </a></li>
                        <li><a href="#">My Orders  </a></li>
                        <li><a href="#">Help  </a></li>
                        <li><a href="#">Site Map </a></li>
                        <li><a href="#">Customer Service </a></li>
                        <li><a href="#">Support  </a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Most Populars </a></li>
                        <li><a href="#">Best Sellers  </a></li>
                        <li><a href="#">New Arrivals  </a></li>
                        <li><a href="#">Special Products  </a></li>
                        <li><a href="#"> Manufacturers     </a></li>
                        <li><a href="#">Our Stores   </a></li>
                        <li><a href="#">Shipping      </a></li>
                        <li><a href="#">Payments      </a></li>
                        <li><a href="#">Payments      </a></li>
                        <li><a href="#">Refunds  </a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Terms & Conditions  </a></li>
                        <li><a href="#">Policy      </a></li>
                        <li><a href="#">Policy      </a></li>
                        <li><a href="#"> Shipping     </a></li>
                        <li><a href="#">Payments      </a></li>
                        <li><a href="#">Returns      </a></li>
                        <li><a href="#">Refunds      </a></li>
                        <li><a href="#">Warrantee      </a></li>
                        <li><a href="#">FAQ      </a></li>
                        <li><a href="#">Contact  </a></li>
                    </ul>
                </div>
            </div>

            <div class="copyright">
                Copyright © Kutethemes. All Rights Reserved. Designed by <a href="http://kutethemes.com/" target="_blank">Kutethemes.com</a>
            </div>

        </div>

    </footer><!-- end FOOTER -->

    <!--back-to-top  -->
    <a href="#" class="back-to-top">
        <i aria-hidden="true" class="fa fa-angle-up"></i>
    </a>

</div>

<!-- jQuery -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>

<!-- sticky -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.sticky.js')}}"></script>

<!-- OWL CAROUSEL Slider -->
<script type="text/javascript" src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>

<!-- Boostrap -->
<script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>

<!-- Countdown -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.countdown.min.js')}}"></script>

<!--jquery Bxslider  -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.bxslider.min.js')}}"></script>

<!-- actual -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.actual.min.js')}}"></script>

<!-- Chosen jquery-->
<script type="text/javascript" src="{{asset('frontend/js/chosen.jquery.min.js')}}"></script>

<!-- parallax jquery-->
<script type="text/javascript" src="{{asset('frontend/js/jquery.parallax-1.1.3.js')}}"></script>

<!-- elevatezoom -->
<script type="text/javascript" src="{{asset('frontend/js/jquery.elevateZoom.min.js')}}"></script>

<!-- fancybox -->
<script src="{{asset('frontend/js/fancybox/source/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('frontend/js/fancybox/source/helpers/jquery.fancybox-media.js')}}"></script>
<script src="{{asset('frontend/js/fancybox/source/helpers/jquery.fancybox-thumbs.js')}}"></script>

<!-- arcticmodal -->
<script src="{{asset('frontend/js/arcticmodal/jquery.arcticmodal.js')}}"></script>

<!-- Main -->
<script type="text/javascript" src="{{asset('frontend/js/main.js')}}"></script>

@yield('page_script')
<script>
        @if(Session::has('message'))
    var type = "{{ Session::get('alert-type') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}",{
                showMethod: "slideDown",
                hideMethod: "slideUp",
                timeOut: 80000
            });
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}",{
                showMethod: "fadeIn",
                hideMethod: "fadeOut",
                timeOut: 8000
            });
            break;
    }
    @endif
</script>


</body>

<!-- Mirrored from kute-themes.com/html/kuteshop/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jan 2020 16:17:31 GMT -->
</html>
