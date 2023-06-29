<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Universitas Paramadina">
    <meta name="keywords" content="Universitas Paramadina">
    <meta name="author" content="Universitas Paramadina">
    <title>Ecommerce</title>
    <link rel="apple-touch-icon" href="{{asset('coba/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('coba/app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('coba/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('coba/app-assets/vendors/css/ui/prism.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('coba/app-assets/vendors/css/extensions/sweetalert2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('coba/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('coba/app-assets/vendors/css/forms/select/select2.min.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('coba/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('coba/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('coba/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('coba/app-assets/css/components.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('coba/app-assets/css/themes/dark-layout.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('coba/app-assets/css/themes/semi-dark-layout.css')}}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('coba/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('coba/assets/css/style.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->


<body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                        </ul>
                        {{-- <ul class="nav navbar-nav bookmark-icons">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="sk-layout-2-columns.html" data-toggle="tooltip" data-placement="top" title="2-Columns"><i class="ficon feather icon-sidebar"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon feather icon-star warning"></i></a>
                                <div class="bookmark-input search-input">
                                    <div class="bookmark-input-icon"><i class="feather icon-search primary"></i></div>
                                    <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="0" data-search="starter-list">
                                    <ul class="search-list search-list-bookmark"></ul>
                                </div>
                            </li>
                        </ul> --}}
                    </div>
                    <ul class="nav navbar-nav float-right">
                        
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon feather icon-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                                <input class="input" type="text" placeholder="Explore Vuexy..." tabindex="-1" data-search="starter-list">
                                <div class="search-input-close"><i class="feather icon-x"></i></div>
                                <ul class="search-list search-list-main"></ul>
                            </div>
                        </li>
                        {{-- <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-shopping-cart"></i><span class="badge badge-pill badge-primary badge-up cart-item-count">6</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-cart dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white"><span class="cart-item-count">6</span><span class="ml-50">Items</span></h3><span class="notification-title">In Your Cart</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list"><a class="cart-item" href="app-ecommerce-details.html">
                                        <div class="media">
                                            <div class="media-left d-flex justify-content-center align-items-center"><img src="../../../app-assets/images/pages/eCommerce/4.png" width="75" alt="Cart Item"></div>
                                            <div class="media-body"><span class="item-title text-truncate text-bold-500 d-block mb-50">Apple - Apple Watch Series 1 42mm Space Gray Aluminum Case Black Sport Band - Space Gray Aluminum</span><span class="item-desc font-small-2 text-truncate d-block"> Durable, lightweight aluminum cases in silver, space gray,gold, and rose gold. Sport Band in a variety of colors. All the features of the original Apple Watch, plus a new dual-core processor for faster performance. All models run watchOS 3. Requires an iPhone 5 or later to run this device.</span>
                                                <div class="d-flex justify-content-between align-items-center mt-1"><span class="align-middle d-block">1 x $299</span><i class="remove-cart-item feather icon-x danger font-medium-1"></i></div>
                                            </div>
                                        </div>
                                    </a><a class="cart-item" href="app-ecommerce-details.html">
                                        <div class="media">
                                            <div class="media-left d-flex justify-content-center align-items-center"><img class="mt-1 pl-50" src="../../../app-assets/images/pages/eCommerce/dell-inspirion.jpg" width="100" alt="Cart Item"></div>
                                            <div class="media-body"><span class="item-title text-truncate text-bold-500 d-block mb-50">Apple - Macbook® (Latest Model) - 12" Display - Intel Core M5 - 8GB Memory - 512GB Flash Storage - Space Gray</span><span class="item-desc font-small-2 text-truncate d-block"> MacBook delivers a full-size experience in the lightest and most compact Mac notebook ever. With a full-size keyboard, force-sensing trackpad, 12-inch Retina display,1 sixth-generation Intel Core M processor, multifunctional USB-C port, and now up to 10 hours of battery life,2 MacBook features big thinking in an impossibly compact form.</span>
                                                <div class="d-flex justify-content-between align-items-center mt-1"><span class="align-middle d-block">1 x $1599.99</span><i class="remove-cart-item feather icon-x danger font-medium-1"></i></div>
                                            </div>
                                        </div>
                                    </a><a class="cart-item" href="app-ecommerce-details.html">
                                        <div class="media">
                                            <div class="media-left d-flex justify-content-center align-items-center"><img src="../../../app-assets/images/pages/eCommerce/7.png" width="88" alt="Cart Item"></div>
                                            <div class="media-body"><span class="item-title text-truncate text-bold-500 d-block mb-50">Sony - PlayStation 4 Pro Console</span><span class="item-desc font-small-2 text-truncate d-block"> PS4 Pro Dynamic 4K Gaming & 4K Entertainment* PS4 Pro gets you closer to your game. Heighten your experiences. Enrich your adventures. Let the super-charged PS4 Pro lead the way.** GREATNESS AWAITS</span>
                                                <div class="d-flex justify-content-between align-items-center mt-1"><span class="align-middle d-block">1 x $399.99</span><i class="remove-cart-item feather icon-x danger font-medium-1"></i></div>
                                            </div>
                                        </div>
                                    </a><a class="cart-item" href="app-ecommerce-details.html">
                                        <div class="media">
                                            <div class="media-left d-flex justify-content-center align-items-center"><img src="../../../app-assets/images/pages/eCommerce/10.png" width="75" alt="Cart Item"></div>
                                            <div class="media-body"><span class="item-title text-truncate text-bold-500 d-block mb-50">Beats by Dr. Dre - Geek Squad Certified Refurbished Beats Studio Wireless On-Ear Headphones - Red</span><span class="item-desc font-small-2 text-truncate d-block"> Rock out to your favorite songs with these Beats by Dr. Dre Beats Studio Wireless GS-MH8K2AM/A headphones that feature a Beats Acoustic Engine and DSP software for enhanced clarity. ANC (Adaptive Noise Cancellation) allows you to focus on your tunes.</span>
                                                <div class="d-flex justify-content-between align-items-center mt-1"><span class="align-middle d-block">1 x $379.99</span><i class="remove-cart-item feather icon-x danger font-medium-1"></i></div>
                                            </div>
                                        </div>
                                    </a><a class="cart-item" href="app-ecommerce-details.html">
                                        <div class="media">
                                            <div class="media-left d-flex justify-content-center align-items-center"><img class="mt-1 pl-50" src="../../../app-assets/images/pages/eCommerce/sony-75class-tv.jpg" width="100" alt="Cart Item"></div>
                                            <div class="media-body"><span class="item-title text-truncate text-bold-500 d-block mb-50">Sony - 75" Class (74.5" diag) - LED - 2160p - Smart - 3D - 4K Ultra HD TV with High Dynamic Range - Black</span><span class="item-desc font-small-2 text-truncate d-block"> This Sony 4K HDR TV boasts 4K technology for vibrant hues. Its X940D series features a bold 75-inch screen and slim design. Wires remain hidden, and the unit is easily wall mounted. This television has a 4K Processor X1 and 4K X-Reality PRO for crisp video. This Sony 4K HDR TV is easy to control via voice commands.</span>
                                                <div class="d-flex justify-content-between align-items-center mt-1"><span class="align-middle d-block">1 x $4499.99</span><i class="remove-cart-item feather icon-x danger font-medium-1"></i></div>
                                            </div>
                                        </div>
                                    </a><a class="cart-item" href="app-ecommerce-details.html">
                                        <div class="media">
                                            <div class="media-left d-flex justify-content-center align-items-center"><img class="mt-1 pl-50" src="../../../app-assets/images/pages/eCommerce/canon-camera.jpg" width="70" alt="Cart Item"></div>
                                            <div class="media-body"><span class="item-title text-truncate text-bold-500 d-block mb-50">Nikon - D810 DSLR Camera with AF-S NIKKOR 24-120mm f/4G ED VR Zoom Lens - Black</span><span class="item-desc font-small-2 text-truncate d-block"> Shoot arresting photos and 1080p high-definition videos with this Nikon D810 DSLR camera, which features a 36.3-megapixel CMOS sensor and a powerful EXPEED 4 processor for clear, detailed images. The AF-S NIKKOR 24-120mm lens offers shooting versatility. Memory card sold separately.</span>
                                                <div class="d-flex justify-content-between align-items-center mt-1"><span class="align-middle d-block">1 x $4099.99</span><i class="remove-cart-item feather icon-x danger font-medium-1"></i></div>
                                            </div>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center text-primary" href="app-ecommerce-checkout.html"><i class="feather icon-shopping-cart align-middle"></i><span class="align-middle text-bold-600">Checkout</span></a></li>
                                <li class="empty-cart d-none p-2">Your Cart Is Empty.</li>
                            </ul>
                        </li> --}}
                        {{-- <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span class="badge badge-pill badge-primary badge-up">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white">5 New</h3><span class="grey darken-2">App Notifications</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list">
                                    <!-- a(href='javascript:void(0)').d-flex.justify-content-between-->
                                    <!--   .d-flex.align-items-start-->
                                    <!--       i.feather.icon-plus-square-->
                                    <!--       .mx-1-->
                                    <!--         .font-medium.block.notification-title New Message-->
                                    <!--         small Are your going to meet me tonight?-->
                                    <!--   small 62 Days ago--><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                                            <div class="media-body">
                                                <h6 class="primary media-heading">You have new order!</h6><small class="notification-text"> Are your going to meet me tonight?</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours ago</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-download-cloud font-medium-5 success"></i></div>
                                            <div class="media-body">
                                                <h6 class="success media-heading red darken-1">99% Server load</h6><small class="notification-text">You got new order of goods.</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour ago</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                            <div class="media-body">
                                                <h6 class="danger media-heading yellow darken-3">Warning notifixation</h6><small class="notification-text">Server have 99% CPU usage.</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-check-circle font-medium-5 info"></i></div>
                                            <div class="media-body">
                                                <h6 class="info media-heading">Complete the task</h6><small class="notification-text">Cake sesame snaps cupcake</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-file font-medium-5 warning"></i></div>
                                            <div class="media-body">
                                                <h6 class="warning media-heading">Generate monthly report</h6><small class="notification-text">Chocolate cake oat cake tiramisu marzipan</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li> --}}
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">{{ Auth::user()->name }}</span><span class="user-status">Aktif</span></div><span><img class="round" src="{{asset ('coba/app-assets/images/portrait/small/avatar-s-11.jpg') }}" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="feather icon-user"></i>  Profile</a>
                                <div class="dropdown-divider"></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item" href="route('logout')"
                                    onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                    <i class="feather icon-power"></i> Logout</a>

                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ asset('coba/html/ltr/vertical-menu-template/index.html') }}">
                        <div class="logo"><img src="{{ asset('coba/app-assets/images/logo/logo.png') }}" width="30"alt="logo"></div>
                        <h2 class="brand-text mb-0">Ecommerce</h2>
                    </a></li>
                {{-- <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block primary" data-ticon="icon-disc"></i></a></li> --}}
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a href=""><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-zap"></i><span class="menu-title" data-i18n="Starter kit">Categories</span></a>
                    <ul class="menu-content">
                        <li><a href="{{ route('addcategory') }}"><i></i><span class="menu-item" data-i18n="2 columns">AddCategory</span></a>
                        </li>
                        <li><a href="{{ route('allcategory') }}"><i></i><span class="menu-item" data-i18n="2 columns">AllCategory</span></a>
                        </li>
                        <li ><a href="{{ route('addsubcategory') }}"><i></i><span class="menu-item" data-i18n="Fixed layout">Sub Category</span></a>
                        </li>
                        <li ><a href="{{ route('allsubcategory') }}"><i></i><span class="menu-item" data-i18n="Fixed layout">All Sub Category</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-zap"></i><span class="menu-title" data-i18n="Starter kit">Product</span></a>
                    <ul class="menu-content">
                        <li><a href="{{ route('addproduct') }}"><i></i><span class="menu-item" data-i18n="2 columns"> Add Product</span></a>
                        </li>
                        <li><a href="{{ route('allproducts') }}"><i></i><span class="menu-item" data-i18n="2 columns">All Product</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-zap"></i><span class="menu-title" data-i18n="Starter kit">Orders</span></a>
                    <ul class="menu-content">
                        <li><a href="{{ route('pendingorder') }}"><i></i><span class="menu-item" data-i18n="2 columns">Pending Orders</span></a>
                        </li>
                    </ul>
                </li>
               
                {{-- <li class=" nav-item"><a href="https://pixinvent.ticksy.com/"><i class="feather icon-life-buoy"></i><span class="menu-title" data-i18n="Raise Support">Raise Support</span></a>
                </li> --}}
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Dashboard</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="sk-layout-2-columns.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">action</a>
                                    </li>
                                    <li class="breadcrumb-item active">@yield('title-das')</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
               @yield('content')
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2023<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Universitas Paramadina</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Direktorat Teknologi Sistem Informasi</span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('coba/app-assets/vendors/js/vendors.min.js')}}"></script>
    <script src="{{asset('coba/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{asset('coba/app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('coba/app-assets/vendors/js/ui/prism.min.js')}}"></script>

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('coba/app-assets/vendors/js/ui/jquery.sticky.js')}}"></script>
    <script src="{{asset('coba/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{asset('coba/app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
    <script src="{{asset('coba/app-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
    <script src="{{asset('coba/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{asset('coba/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{asset('coba/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
    <script src="{{asset('coba/app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
    <script src="{{asset('coba/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('coba/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('coba/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('coba/app-assets/js/core/app.js')}}"></script>
    <script src="{{asset('coba/app-assets/js/scripts/components.js')}}"></script>
    <script src="{{asset('coba/app-assets/js/scripts/datatables/datatable.js')}}"></script>
    <script src="{{asset('coba/app-assets/js/scripts/extensions/sweet-alerts.js')}}"></script>
    <script src="{{asset('coba/app-assets/js/scripts/forms/select/form-select2.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('success'))
    <script>
        Swal.fire('Sukses', '{{ session('success') }}', 'success');
    </script>
    @endif


    @if(session('error'))
    <script>
        Swal.fire('Error', '{{ session('error') }}', 'error');
    </script>
    @endif
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->
    @yield('script')
</body>
<!-- END: Body-->

</html>
