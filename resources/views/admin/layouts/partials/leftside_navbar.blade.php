<div class="side-content-wrap">
    <div class="sidebar-left open rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <ul class="navigation-left">
            <li class="nav-item {{ $activePage == 'adminIndex' ? 'active':'' }}"><a class="nav-item-hold" href="{{ route('admin.dashboard') }}"><i class="nav-icon i-Bar-Chart"></i><span class="nav-text">Dashboard</span></a>
                <div class="triangle"></div>
            </li>

            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show users') || auth()->user()->hasPermissionTo('create users') || auth()->user()->hasPermissionTo('show roles'))
            <li class="nav-item {{$activePage == 'userIndex' ? 'active' : ''}} {{$activePage == 'userCreate' ? 'active' : ''}} {{$activePage == 'roleIndex' ? 'active' : ''}}" data-item="users">
                <a class="nav-item-hold" href="">
                    <i class="nav-icon i-Administrator"></i>
                    <span class="nav-text">Users @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show roles'))  And Roles  @endif</span>
                </a>
                <div class="triangle"></div>
            </li>
            @endif

            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show categories') || auth()->user()->hasPermissionTo('create categories'))
            <li class="nav-item {{$activePage == 'categoryIndex' ? 'active' : ''}} {{$activePage == 'categoryCreate' ? 'active' : ''}}" data-item="categories"><a class="nav-item-hold" href="#"><i class="nav-icon fa fa-bars"></i><span class="nav-text">Categories</span></a>
                <div class="triangle"></div>
            </li>
            @endif

            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show products') || auth()->user()->hasPermissionTo('show colours') || auth()->user()->hasPermissionTo('show sizes') || auth()->user()->hasPermissionTo('show batches'))
            <li class="nav-item {{$activePage == 'productIndex' ? 'active' : ''}} {{$activePage == 'colourIndex' ? 'active' : ''}} {{$activePage == 'sizeIndex' ? 'active' : ''}} {{$activePage == 'batchIndex' ? 'active' : ''}}" data-item="products"><a class="nav-item-hold" href="#"><i class="nav-icon far fa-box"></i><span class="nav-text">Products</span></a>
                <div class="triangle"></div>
            </li>
            @endif

            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show sale centers'))
            <li class="nav-item {{$activePage == 'saleCenterIndex' ? 'active' : ''}} {{$activePage == 'saleCenterCreate' ? 'active' : ''}}"><a class="nav-item-hold" href="{{route('saleCenter.index')}}"><i class="nav-icon fas fa-store"></i><span class="nav-text">Sale Centers</span></a>
                <div class="triangle"></div>
            </li>
            @endif

            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show riders'))
            <li class="nav-item {{$activePage == 'riderIndex' ? 'active' : ''}} {{$activePage == 'riderCreate' ? 'active' : ''}}" ><a class="nav-item-hold" href="{{route('rider.index')}}"><i class="nav-icon fas fa-biking"></i><span class="nav-text">Riders</span></a>
                <div class="triangle"></div>
            </li>
            @endif

            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show suppliers'))
            <li class="nav-item {{$activePage == 'supplierIndex' ? 'active' : ''}} {{$activePage == 'supplierCreate' ? 'active' : ''}}"><a class="nav-item-hold" href="{{route('supplier.index')}}"><i class="nav-icon fas fa-user-friends"></i><span class="nav-text">Suppliers</span></a>
                <div class="triangle"></div>
            </li>
            @endif

            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show logos') || auth()->user()->hasPermissionTo('show ape') || auth()->user()->hasPermissionTo('show sliders') || auth()->user()->hasPermissionTo('show banners') || auth()->user()->hasPermissionTo('show services') || auth()->user()->hasPermissionTo('show floors'))
            <li class="nav-item {{$activePage == 'logoIndex' ? 'active' : ''}} {{$activePage == 'apeIndex' ? 'active' : ''}} {{$activePage == 'sliderIndex' ? 'active' : ''}} {{$activePage == 'bannerIndex' ? 'active' : ''}} {{$activePage == 'serviceIndex' ? 'active' : ''}} {{$activePage == 'floorIndex' ? 'active' : ''}}" data-item="homesettings"><a class="nav-item-hold" href="#"><i class="nav-icon fas fa-cogs"></i><span class="nav-text">Home Page Settings</span></a>
                <div class="triangle"></div>
            </li>
            @endif

            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show couriers'))
            <li class="nav-item {{$activePage == 'courierIndex' ? 'active' : ''}} {{$activePage == 'courierCreate' ? 'active' : ''}}"><a class="nav-item-hold" href="{{route('courier.index')}}"><i class="nav-icon fas fa-shipping-fast"></i><span class="nav-text">Couriers</span></a>
                <div class="triangle"></div>
            </li>
            @endif

            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show delivery charges'))
                <li class="nav-item {{$activePage == 'deliverychargesIndex' ? 'active' : ''}} "><a class="nav-item-hold" href="{{route('delivery_charges.index')}}"><i class="nav-icon fas fa-dollar-sign"></i><span class="nav-text">Delivery Charges</span></a>
                    <div class="triangle"></div>
                </li>
            @endif

            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show orders'))
                <li class="nav-item {{$activePage == 'orderIndex' ? 'active' : ''}} "><a class="nav-item-hold" href="{{route('order.index')}}"><i class="nav-icon fab fa-first-order"></i><span class="nav-text">Orders</span></a>
                    <div class="triangle"></div>
                </li>
            @endif

            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show deals') || auth()->user()->hasPermissionTo('show offers'))
                <li class="nav-item {{$activePage == 'dealIndex' ? 'active' : ''}} {{$activePage == 'offerIndex' ? 'active' : ''}} {{$activePage == 'generaldiscountIndex' ? 'active' : ''}}" data-item="discounts"><a class="nav-item-hold" href="#"><i class="nav-icon fas fa-tags"></i><span class="nav-text">Discounts</span></a>
                    <div class="triangle"></div>
                </li>
            @endif

            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show resellers'))
                <li class="nav-item {{$activePage == 'resellerIndex' ? 'active' : ''}}"><a class="nav-item-hold" href="{{route('reseller.index')}}"><i class="nav-icon fas fa-users"></i><span class="nav-text">Resellers</span></a>
                    <div class="triangle"></div>
                </li>
            @endif

            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show customers'))
                <li class="nav-item {{$activePage == 'customerIndex' ? 'active' : ''}}"><a class="nav-item-hold" href="{{route('customer.index')}}"><i class="nav-icon fas fa-users"></i><span class="nav-text">customers</span></a>
                    <div class="triangle"></div>
                </li>
            @endif

        </ul>
    </div>
    <div class="sidebar-left-secondary rtl-ps-none" data-perfect-scrollbar="" data-suppress-scroll-x="true">
        <!-- Submenu Dashboards-->
{{--        <ul class="childNav" data-parent="dashboard">--}}
{{--            <li class="nav-item"><a href="dashboard1.html"><i class="nav-icon i-Clock-3"></i><span class="item-name">Version 1</span></a></li>--}}
{{--        </ul>--}}


        <ul class="childNav" data-parent="users">
            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show users'))
                <li class="nav-item {{$activePage == 'userIndex' ? 'active' : ''}}"><a href="{{route('user.index')}}"><i class="nav-icon i-Administrator"></i><span class="item-name">View All Users</span></a></li>
            @endif
            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('create users'))
                <li class="nav-item {{$activePage == 'userCreate' ? 'active' : ''}}"><a href="{{route('user.create')}}"><i class="nav-icon i-Add-User"></i><span class="item-name">Create User</span></a></li>
            @endif
            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show roles'))
                <li class="nav-item {{$activePage == 'roleIndex' ? 'active' : ''}}"><a href="{{route('role.index')}}"><i class="nav-icon i-Add-User"></i><span class="item-name">View All Roles</span></a></li>
            @endif
        </ul>

        <ul class="childNav" data-parent="categories">
            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show categories'))
            <li class="nav-item {{$activePage == 'categoryIndex' ? 'active' : ''}}"><a href="{{route('category.index')}}"><i class="nav-icon fa fa-bars"></i><span class="item-name">View All Category</span></a></li>
            @endif
                @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('create categories'))
                <li class="nav-item {{$activePage == 'categoryCreate' ? 'active' : ''}}"><a href="{{route('category.create')}}"><i class="nav-icon fa fa-bars"></i><span class="item-name">Create Category</span></a></li>
            @endif
        </ul>

        <ul class="childNav" data-parent="products">
            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show products'))
                <li class="nav-item {{$activePage == 'productIndex' ? 'active' : ''}}"><a href="{{route('product.index')}}"><i class="nav-icon fal fa-box-full"></i><span class="item-name">View All Products</span></a></li>
            @endif
        </ul>

        <ul class="childNav" data-parent="products">
            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show colours'))
                <li class="nav-item {{$activePage == 'colourIndex' ? 'active' : ''}}"><a href="{{route('colour.index')}}"><i class="nav-icon fal fa-palette"></i><span class="item-name">View All Colours</span></a></li>
            @endif
        </ul>

        <ul class="childNav" data-parent="products">
            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show sizes'))
            <li class="nav-item {{$activePage == 'sizeIndex' ? 'active' : ''}}"><a href="{{route('size.index')}}"><i class="nav-icon fad fa-expand-arrows"></i><span class="item-name">View All Sizes</span></a></li>
            @endif
        </ul>

        <ul class="childNav" data-parent="products">
            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show batches'))
            <li class="nav-item {{$activePage == 'batchIndex' ? 'active' : ''}}"><a href="{{route('batch.index')}}"><i class="nav-icon fal fa-layer-group"></i><span class="item-name">View All Batches</span></a></li>
            @endif
        </ul>


        <ul class="childNav" data-parent="homesettings">
            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show logos'))
            <li class="nav-item {{$activePage == 'logoIndex' ? 'active' : ''}}"><a href="{{route('logo.index')}}"><i class="nav-icon fal fa-layer-group"></i><span class="item-name">View Logos</span></a></li>
            @endif
        </ul>

        <ul class="childNav" data-parent="homesettings">
            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show ape'))
            <li class="nav-item {{$activePage == 'apeIndex' ? 'active' : ''}}"><a href="{{route('ape.index')}}"><i class="nav-icon fal fa-layer-group"></i><span class="item-name">View Address - Phone - Email</span></a></li>
            @endif
        </ul>

        <ul class="childNav" data-parent="homesettings">
            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show sliders'))
            <li class="nav-item {{$activePage == 'sliderIndex' ? 'active' : ''}}"><a href="{{route('slider.index')}}"><i class="nav-icon fas fa-sliders-h"></i><span class="item-name">View Sliders</span></a></li>
            @endif
        </ul>

        <ul class="childNav" data-parent="homesettings">
            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show banners'))
            <li class="nav-item {{$activePage == 'bannerIndex' ? 'active' : ''}}"><a href="{{route('banner.index')}}"><i class="nav-icon fal fa-layer-group"></i><span class="item-name">View Banners</span></a></li>
            @endif
        </ul>

        <ul class="childNav" data-parent="homesettings">
            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show services'))
            <li class="nav-item {{$activePage == 'serviceIndex' ? 'active' : ''}}"><a href="{{route('service.index')}}"><i class="nav-icon fal fa-layer-group"></i><span class="item-name">View Services</span></a></li>
            @endif
        </ul>

        <ul class="childNav" data-parent="homesettings">
            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show floors'))
            <li class="nav-item {{$activePage == 'floorIndex' ? 'active' : ''}}"><a href="{{route('floor.index')}}"><i class="nav-icon fal fa-layer-group"></i><span class="item-name">View Floors</span></a></li>
            @endif
        </ul>

        <ul class="childNav" data-parent="discounts">
            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show deals'))
                <li class="nav-item {{$activePage == 'dealIndex' ? 'active' : ''}}"><a href="{{route('deal.index')}}"><i class="nav-icon fas fa-badge-percent"></i><span class="item-name">View Deals</span></a></li>
            @endif
        </ul>

        <ul class="childNav" data-parent="discounts">
            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show offers'))
                <li class="nav-item {{$activePage == 'offerIndex' ? 'active' : ''}}"><a href="{{route('offer.index')}}"><i class="nav-icon fas fa-badge-percent"></i><span class="item-name">View Offers</span></a></li>
            @endif
        </ul>

        <ul class="childNav" data-parent="discounts">
            @if(auth()->user()->hasRole('super-admin') || auth()->user()->hasPermissionTo('show general discounts'))
                <li class="nav-item {{$activePage == 'generaldiscountIndex' ? 'active' : ''}}"><a href="{{route('general_discount.index')}}"><i class="nav-icon fas fa-badge-percent"></i><span class="item-name">View General Discounts</span></a></li>
            @endif
        </ul>

    </div>
    <div class="sidebar-overlay"></div>
</div>
