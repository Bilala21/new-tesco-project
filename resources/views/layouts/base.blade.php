<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tesco Global mall</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="TescoGlobalMall">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('frontend/assets/images/icons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="https://tescoglobalmall.com/uploads/all/ditgnb8U3QBFYwagb1KpcHSLyz064XzQr30IQqVI.png">
    <link rel="icon" href="https://tescoglobalmall.com/uploads/all/ditgnb8U3QBFYwagb1KpcHSLyz064XzQr30IQqVI.png">
    <link rel="manifest" href="{{asset('frontend/assets/images/icons/site.html')}}">
    <link rel="mask-icon" href="{{asset('frontend/assets/images/icons/safari-pinned-tab.svg')}}" color="#666666">
    <link rel="shortcut icon" href="https://tescoglobalmall.com/uploads/all/ditgnb8U3QBFYwagb1KpcHSLyz064XzQr30IQqVI.png">
    <meta name="apple-mobile-web-app-title" content="">
    <meta name="application-name" content="">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="{{asset('frontend/assets/images/icons/browserconfig.xml')}}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css')}}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/jquery.countdown.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/nouislider/nouislider.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/skins/skin-demo-13.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/demos/demo-13.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.1/nouislider.min.js" integrity="sha512-UOJe4paV6hYWBnS0c9GnIRH8PLm2nFK22uhfAvsTIqd3uwnWsVri1OPn5fJYdLtGY3wB11LGHJ4yPU1WFJeBYQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.1/nouislider.min.css" integrity="sha512-qveKnGrvOChbSzAdtSs8p69eoLegyh+1hwOMbmpCViIwj7rn4oJjdmMvWOuyQlTOZgTlZA0N2PXA7iA8/2TUYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .wish-filled {
            background-color: #39f;
            color: #fff;
        }
    </style>
    @livewireStyles

</head>

<body>
    <div class="page-wrapper">
        <header class="header header-10 header-intro-clearance">
            <div class="header-top" style="border-bottom: 1px solid rgb(222, 222, 222);">
                <div class="container">
                    <div class="header-left">
                        
                            <div class="header-dropdown">
                                <a href="#">
                                 <img src="{{asset('./frontend/assets/images/lang/en.webp')}}" class="mr-3" alt="">   Engligh</a>
                                <div class="header-menu">
                                    <ul>
                                        <li><a href="#">
                                            <img src="{{asset('./frontend/assets/images/lang/en.webp')}}" class="mr-3" alt="">  English</a></li>
                                        <li><a href="#">
                                            <img src="{{asset('./frontend/assets/images/lang/bd.webp')}}" class="mr-3" alt="">  Bangla</a></li>
                                        <li><a href="#">
                                            <img src="{{asset('./frontend/assets/images/lang/sa.webp')}}" class="mr-3" alt="">   Arabic</a></li>
                                        <li><a href="#">
                                            <img src="{{asset('./frontend/assets/images/lang/id.webp')}}" class="mr-3" alt="">   India</a></li>

                                    </ul>
                                </div><!-- End .header-menu -->
                            </div><!-- End .header-dropdown -->

                            <div class="header-dropdown">
                                <a href="#">U.S dollar $</a>
                                <div class="header-menu">
                                    <ul>
                                        <li><a href="#">Eur</a></li>
                                        <li><a href="#">Usd</a></li>
                                    </ul>
                                </div><!-- End .header-menu -->
                            </div><!-- End .header-dropdown -->
                        
                    </div><!-- End .header-left -->

                    <div class="header-right">

                        <ul class="top-menu d-flex">
                            {{-- {{auth()->user()}} --}}
                            <li>
                            @if (!auth()->user() == "")
                                @auth
                                    @if (Auth::user()->utype === 'ADM')
                                    <div class="header-dropdown">
                                        <a href="#">My Account ({{Auth::user()->name}})</a>
                                        <div class="header-menu">
                                            <ul>
                                                <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>

                                                <li><a href="{{route('logout')}}" class="d-block" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                                <form id="logout-form" method="POST" action="{{route('logout')}}">
                                                    @csrf
                                                </form>
                                            </ul>
                                        </div><!-- End .header-menu -->
                                    </div><!-- End .header-dropdown -->
                                    @else
                                    <div class="header-dropdown">
                                        <a href="#">My Account ({{Auth::user()->name}})</a>
                                        <div class="header-menu">
                                            <ul>
                                                <li><a href="{{route('seller.dashboard')}}">Dashboard</a></li>
                                                <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                                <form id="logout-form" method="POST" action="{{route('logout')}}">
                                                    @csrf
                                                </form>
                                            </ul>
                                        </div><!-- End .header-menu -->
                                    </div><!-- End .header-dropdown -->
                                    @endif
                                @endauth
                            @else
                            <li class="login">
                                <a href="{{route('login')}}" class="d-block">Login</a>
                            </li>
                            <li class="login" style="border-left: 1px solid rgb(71, 71, 71)">
                                <a href="{{route('register')}}" class="d-block">Registration</a>
                            </li>
                            @endif

                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle" style="background-color: #FAFAFA;">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>
                        
                        <a href="index.html" class="logo">
                            <img src="{{asset('frontend/assets/images/tesco_logo.webp')}}" alt="tesco Logo" width="220" height="25">
                        </a>
                    </div><!-- End .header-left -->

                    {{-- searchbox --}}
                    @livewire('header-search-component')

                    <div class="header-right">
                        <div class="header-dropdown-link">
                          

                            <a href="compare.html" class="wishlist-link">
                                <i class="icon-random"></i>
                                <span class="wishlist-count">0</span>
                                <span class="wishlist-txt">Compare</span>
                            </a>

                            {{-- wishlist --}}
                            @livewire('wishlist-count-component')

                            <div class="cart-dropdown">
                                {{-- count cart --}}
                            @livewire('cart-count-component')
                            </div><!-- End .cart-dropdown -->
                        </div>
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    @livewire('home-categories-component')
                    <div class="col-lg-9">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="/" class="sf-with-ul fs-14" style="font-size: 14px;">Home</a>  
                                </li>

                                <li class="megamenu-container" style="width: 230px;">
                                    <a href="/shop" class="sf-with-ul">Computer & Accessories</a>  
                                </li>

                                <li class="megamenu-container" style="width: 230px;">
                                    <a href="/shop" class="sf-with-ul">Women Clothing & Fashion</a>  
                                </li>

                                <li class="megamenu-container" style="width: 140px;">
                                    <a href="/brands" class="sf-with-ul">All Brands</a>  
                                </li>
  
                                <li class="megamenu-container" style="width: 140px;">
                                    <a href="/categories" class="sf-with-ul">All Categories</a>  
                                </li>
                                
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                        </div><!-- End .col-lg-9 -->
                    
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->

        {{$slot}}

        <footer class="footer footer-2">
            <div class="icon-boxes-container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon">
                                    <i class="icon-rocket"></i>
                                </span>

                                <div class="icon-box-content">
                                    <a href="{{route('terms')}}">
                                        <h3 class="icon-box-title">Term & Condition</h3>
                                    </a>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                        
                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon">
                                    <i class="icon-rotate-left"></i>
                                </span>

                                <div class="icon-box-content">
                                    <a href="{{route('return-policy')}}">
                                    <h3 class="icon-box-title">Return Policy</h3>
                                    </a>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon">
                                    <i class="icon-info-circle"></i>
                                </span>

                                <div class="icon-box-content">
                                    <a href="{{route('privacy-policy')}}">
                                    <h3 class="icon-box-title">Privacy Policy</h3>
                                    </a>
                                    
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon">
                                    <i class="icon-life-ring"></i>
                                </span>

                                <div class="icon-box-content">
                                    <a href="{{route('support-policy')}}">
                                    <h3 class="icon-box-title">Support Policy</h3>
                                    </a>
                                    
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .icon-boxes-container -->

            <div class="footer-middle border-0">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="widget widget-about">
                                <img src="{{asset('frontend/assets/images/tesco_logo.webp')}}" class="footer-logo" alt="Footer Logo" width="200" height="">
                                <p>Our goal is to provide customers with affordable commodity every day to help them enjoy a better quality of life and a more relaxed lifestyle.</p>
                                
                                <div class="widget-about-info">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <span class="widget-about-title">Got Question? Call us 24/7</span>
                                            <a href="tel:123456789">+00000000000</a>
                                        </div><!-- End .col-sm-6 -->
                                        <div class="col-sm-6 col-md-8">
                                            <span class="widget-about-title">Payment Method</span>
                                            <figure class="footer-payments">
                                                <img src="{{asset('frontend/assets/images/payments.png')}}" alt="Payment methods" width="272" height="20">
                                            </figure><!-- End .footer-payments -->
                                        </div><!-- End .col-sm-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .widget-about-info -->
                            </div><!-- End .widget about-widget -->
                        </div><!-- End .col-sm-12 col-lg-3 -->

                        <div class="col-sm-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">Information</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="#">
                                        <b>Address:</b> 
Tesco House Ground Floor, Smile Shire Park, Kestrel Way Welwyn Garden City, AL7 1GA
                                    </a></li>
                                    <li><a href="#">
                                        <b>Phone:</b>
                                        Telegram: @tescoglobalmall
                                    </a></li>
                                    <li><a href="#">
                                        <b>Email:</b>
                                        tescoglobalmallvip@gmail.com
                                    </a></li>
                                    
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-4 col-lg-3 -->

                        <div class="col-sm-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">About Us</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="#">Cookies</a></li>
                                    <li><a href="#"> Culture</a></li>
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Contact us</a></li>
                                    
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-4 col-lg-3 -->

                        <div class="col-sm-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="#">Login</a></li>
                                    <li><a href="cart_list.html">Order History</a></li>
                                        <li><a href="#">My Wishlist</a></li>
                                    <li><a href="#">Track Order</a></li>
                                    <li><a href="seller_login.html">
                                        <b>Be A Seller</b>
                                    </a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-64 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-middle -->

            <div class="footer-bottom">
                <div class="container">
                    <p class="footer-copyright">© 2023 TescoGlobalMall. All Rights Reserved.</p><!-- End .footer-copyright -->
                    <ul class="footer-menu">
                        <li><a href="#">Terms Of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul><!-- End .footer-menu -->

                    <div class="social-icons social-icons-color">
                        <img src="{{asset('./frontend/assets/images/tesco_logo.webp')}}" alt="" width="150">
                    </div><!-- End .soial-icons -->
                </div><!-- End .container -->
            </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->

        <!-- chat box starts -->
        <div class="chat_btn p-0" style="position: fixed; z-index: 999; right: -50px; margin-top: 55rem; top: 0; border-radius: 6px;">
            <button class="btn open-button" onclick="openForm()"><i class="icon-envelope" style="background-color: #02549F; padding: 2px 10px; color: #fff; font-size: 23px; border-radius: 6px;"></i>
            </button>
            <div class="chat-popup p-0" id="myForm">
                <form action="#" class="form-container p-0" style="min-width: 340px; z-index: 999;">
                    <div class="card border-0 shadow">
                        <div class="card-header p-3">
                            <div class="profile d-flex align-items-center">
                                <img src="{{asset('./frontend/assets/images/tesco_chat.png')}}" alt="">
                                <span>Customer Service</span>
                            </div>
                            <div class="close">
                                <a href="#"><i class="fa-solid fa-volume-high"></i></a>
                                <a href="#"><i class="fa-solid fa-minus"></i></a>
                                <a class="cancel" onclick="closeForm()" style="background-color: transparent;"><i class="fa-solid fa-xmark"></i></a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <a href="#"><small>Load More Previuse Messages</small></a>
                            </div>
                            <div class="left mt-3" style="width: 250px;">
                                <span class="time">Customer Services 16:20</span>
                                <div class="border p-3" style="background-color: #fff; border-radius: 6px;">
                                    <span style="color: #003ba5; font-size: 16px;font-weight: 500;">Hi there~If you need any assistance, I'm always here.</span>
                                </div>
                            </div>

                            
                            <div class="right mt-2" style="text-align: end;">
                                <p class="time mb-1" style="text-align: end; ">16:40</p>
                                <span class="p-3" style="background-color: #003ba5; color: #fff; width: fit-content; height: fit-content;">I need Your Help</span>
                            </div>

                            <div class="left mt-3" style="width: 250px;">
                                <span class="time">Customer Services 17:20</span>
                                <div class="border p-3" style="background-color: #fff; border-radius: 6px;">
                                    <span style="color: rgb(123, 123, 123); width: fit-content; height: fit-content;">What can I help you.</span>
                                </div>
                            </div>

                            
                        </div>
                        <div class="card-footer p-0">
                            <input type="text" class="form-control" placeholder="Please enter">
                            <div class="bottom-footer p-2" style="display: flex; justify-content: space-between; align-items: center;">
                                <div class="ml-2">
                                    <i class="fa-regular fa-face-smile"></i>
                                    <i class="fa-regular fa-image ml-2"></i>
                                    <i class="fa-solid fa-thumbs-up ml-2"></i>
                                </div>
                                <button class="border-0 text-white" style="padding: 5px 8px; border-radius: 6px; background-color: #003ba5; font-size: 13px;">Send</button>
                            </div>
                        </div>
                    </div>
                  <!-- <h1>Chat</h1>
              
                  <label for="msg"><b>Message</b></label>
                  <textarea placeholder="Type message.." name="msg" required></textarea>
              
                  <button type="submit" class="btn">Send</button>
                  <button type="button" class="btn cancel" onclick="closeForm()">Close</button> -->
                </form>
              </div>
            <!-- <h5 style="writing-mode: vertical-rl;
            text-orientation: mixed; margin-left: 74px; background-color: #02549F;padding: 10px; color: #fff; font-size: 14px;">Chat With Us</h5> -->
        </div>
        <!-- chat box ends -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container mobile-menu-light">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>
            
            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <li class="megamenu-container active">
                                <a href="/" class="sf-with-ul fs-14" style="font-size: 14px;">Home</a>  
                            </li>

                            <li class="megamenu-container" style="width: 230px;">
                                <a href="/shop" class="sf-with-ul">Computer & Accessories</a>  
                            </li>

                            <li class="megamenu-container" style="width: 230px;">
                                <a href="category.html" class="sf-with-ul">Women Clothing & Fashion</a>  
                            </li>

                            <li class="megamenu-container" style="width: 140px;">
                                <a href="brands.html" class="sf-with-ul">All Brands</a>  
                            </li>

                            <li class="megamenu-container" style="width: 140px;">
                                <a href="categories.html" class="sf-with-ul">All Categories</a>  
                            </li>
                            
                        </ul>
                    </nav><!-- End .mobile-nav -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                    <nav class="mobile-cats-nav">
                        <ul class="mobile-cats-menu">
                            <li><a class="mobile-cats-lead" href="#">Daily offers</a></li>
                            <li><a class="mobile-cats-lead" href="#">Gift Ideas</a></li>
                            <li><a href="#">Beds</a></li>
                            <li><a href="#">Lighting</a></li>
                            <li><a href="#">Sofas & Sleeper sofas</a></li>
                            <li><a href="#">Storage</a></li>
                            <li><a href="#">Armchairs & Chaises</a></li>
                            <li><a href="#">Decoration </a></li>
                            <li><a href="#">Kitchen Cabinets</a></li>
                            <li><a href="#">Coffee & Tables</a></li>
                            <li><a href="#">Outdoor Furniture </a></li>
                        </ul><!-- End .mobile-cats-menu -->
                    </nav><!-- End .mobile-cats-nav -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="singin-email">Email Address *</label>
                                            <input type="text" class="form-control" id="singin-email" name="singin-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" class="form-control" id="singin-password" name="singin-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="register-email">Full Name</label>
                                            <input type="email" class="form-control" id="register-email" name="register-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-email">Email Address</label>
                                            <input type="email" class="form-control" id="register-email" name="register-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Password *</label>
                                            <input type="password" class="form-control" id="register-password" name="register-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                    
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

    <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row no-gutters bg-white newsletter-popup-content">
                    <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                        <div class="banner-content text-center">
                            <img src="{{asset('frontend/assets/images/tesco_logo.webp')}}" class="logo" alt="logo" width="120" height="15">
                            <h2 class="banner-title">get <span>25<light>%</light></span> off</h2>
                            <p>Subscribe to the tescoglobalmall eCommerce newsletter to receive timely updates from your favorite products.</p>
                            <form action="#">
                                <div class="input-group input-group-round">
                                    <input type="email" class="form-control form-control-white" placeholder="Your Email Address" aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn" type="submit"><span>go</span></button>
                                    </div><!-- .End .input-group-append -->
                                </div><!-- .End .input-group -->
                            </form>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                <label class="custom-control-label" for="register-policy-2">Do not show this popup again</label>
                            </div><!-- End .custom-checkbox -->
                        </div>
                    </div>
                    <div class="col-xl-2-5col col-lg-5 ">
                        <img src="{{asset('frontend/assets/images/popup/newsletter/img-1.jpg')}}" class="newsletter-img" alt="newsletter">
                    </div>
                </div>
            </div>
        </div>
    </div>

            

    <!-- Plugins JS File -->
    <script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.hoverIntent.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/superfish.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap-input-spinner.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.elevateZoom.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.plugin.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.countdown.min.js')}}"></script>
    
    <!-- Main JS File -->
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
    <script src="{{asset('frontend/assets/js/demos/demo-13.js')}}"></script>
    <script>
        function openForm() {
          document.getElementById("myForm").style.display = "block";
        }
        
        function closeForm() {
          document.getElementById("myForm").style.display = "none";
        }
        </script>
         <script>
            setTimeout(function() {
                $('.alert').fadeOut('slow', function() {
                    $(this).remove();
                });
            }, 5000);
          </script>
          
        @livewireScripts
</body>
</html>