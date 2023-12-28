<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Tesco | Dashboard</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('adminAssets/assets/css/app.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminAssets/assets/bundles/bootstrap-social/bootstrap-social.css')}}">
  <link rel="stylesheet" href="{{asset('adminAssets/assets/bundles/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminAssets/assets/bundles/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('adminAssets/assets/bundles/datatables/datatables.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminAssets/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminAssets/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('adminAssets/assets/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('adminAssets/assets/css/custom.css')}}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('adminAssets/assets/images/icons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="https://tescoglobalmall.com/uploads/all/ditgnb8U3QBFYwagb1KpcHSLyz064XzQr30IQqVI.png">
    <link rel="icon" href="https://tescoglobalmall.com/uploads/all/ditgnb8U3QBFYwagb1KpcHSLyz064XzQr30IQqVI.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <link rel='shortcut icon' type='image/x-icon' href='adminAssets/assets/img/favicon.ico' /> -->
  @livewireStyles

</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
            class="nav-link nav-link-lg message-toggle">
            <img src="{{asset('./adminAssets/assets/img/lang/en.webp')}}" alt="" width="20">
            </a>
          <div class="dropdown-menu dropdown-list dropdown-menu-center pullDown" style="width: 60px;">
            
            <div class="align-items-center">
              <a href="#" class="dropdown-item align-items-center"> <span class="text-white">
                  <img alt="image" src="{{asset('./adminAssets/assets/img/lang/en.webp')}}" class="mb-1" width="20">
                  <span class="text-dark ml-2" style="font-weight: 600;">United State</span>
                </span> 
              </a>

              <a href="#" class="dropdown-item align-items-center"> <span class="text-white">
                <img alt="image" src="{{asset('./adminAssets/assets/img/lang/cn.webp')}}" class="mb-1" width="20">
                <span class="text-dark ml-2" style="font-weight: 600;">United Kingdam</span>
              </span> 
            </a>

            <a href="#" class="dropdown-item align-items-center"> <span class="text-white">
              <img alt="image" src="{{asset('./adminAssets/assets/img/lang/id.webp')}}" class="mb-1" width="20">
              <span class="text-dark ml-2" style="font-weight: 600;">Nepal</span>
            </span> 
          </a>

          <a href="#" class="dropdown-item align-items-center"> <span class="text-white">
            <img alt="image" src="{{asset('./adminAssets/assets/img/lang/jp.webp')}}" class="mb-1" width="20">
            <span class="text-dark ml-2" style="font-weight: 600;">United State</span>
          </span> 
        </a>

        <a href="#" class="dropdown-item align-items-center"> <span class="text-white">
          <img alt="image" src="{{asset('./adminAssets/assets/img/lang/sa.webp')}}" class="mb-1" width="20">
          <span class="text-dark ml-2" style="font-weight: 600;">Germany</span>
        </span> 
      </a>

      <a href="#" class="dropdown-item align-items-center"> <span class="text-white">
        <img alt="image" src="{{asset('./adminAssets/assets/img/lang/th.webp')}}" class="mb-1" width="20">
        <span class="text-dark ml-2" style="font-weight: 600;">Pakistan</span>
      </span> 
    </a>

    <a href="#" class="dropdown-item align-items-center"> <span class="text-white">
      <img alt="image" src="{{asset('./adminAssets/assets/img/lang/tr.webp')}}" class="mb-1" width="20">
      <span class="text-dark ml-2" style="font-weight: 600;">Brazil</span>
    </span> 
  </a>

  <a href="#" class="dropdown-item align-items-center"> <span class="text-white">
    <img alt="image" src="{{asset('./adminAssets/assets/img/lang/tw.webp')}}" class="mb-1" width="20">
    <span class="text-dark ml-2" style="font-weight: 600;">United State</span>
  </span> 
</a>
            </div>
            
          </div>
        </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link nav-link-lg message-toggle"><i data-feather="mail"></i>
              <span class="badge headerBadge1">
                6 </span> </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Messages
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar
											text-white"> <img alt="image" src="{{asset('adminAssets/assets/img/users/user-1.png')}}" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">John
                      Deo</span>
                    <span class="time messege-text">Please check your mail !!</span>
                    <span class="time">2 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="{{asset('adminAssets/assets/img/users/user-2.png')}}" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                      Smith</span> <span class="time messege-text">Request for leave
                      application</span>
                    <span class="time">5 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="{{asset('adminAssets/assets/img/users/user-5.png')}}" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jacob
                      Ryan</span> <span class="time messege-text">Your payment invoice is
                      generated.</span> <span class="time">12 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="{{asset('adminAssets/assets/img/users/user-4.png')}}" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Lina
                      Smith</span> <span class="time messege-text">hii John, I have upload
                      doc
                      related to task.</span> <span class="time">30
                      Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="{{asset('adminAssets/assets/img/users/user-3.png')}}" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jalpa
                      Joshi</span> <span class="time messege-text">Please do as specify.
                      Let me
                      know if you have any query.</span> <span class="time">1
                      Days Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="{{asset('adminAssets/assets/img/users/user-2.png')}}" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                      Smith</span> <span class="time messege-text">Client Requirements</span>
                    <span class="time">2 Days Ago</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
              class="nav-link notification-toggle nav-link-lg"><i data-feather="bell" class="bell"></i>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown">
              <div class="dropdown-header">
                Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread"> <span
                    class="dropdown-item-icon bg-primary text-white"> <i class="fas
												fa-code"></i>
                  </span> <span class="dropdown-item-desc"> Template update is
                    available now! <span class="time">2 Min
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="far
												fa-user"></i>
                  </span> <span class="dropdown-item-desc"> <b>You</b> and <b>Dedik
                      Sugiharto</b> are now friends <span class="time">10 Hours
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-success text-white"> <i
                      class="fas
												fa-check"></i>
                  </span> <span class="dropdown-item-desc"> <b>Kusnaedi</b> has
                    moved task <b>Fix bug header</b> to <b>Done</b> <span class="time">12
                      Hours
                      Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-danger text-white"> <i
                      class="fas fa-exclamation-triangle"></i>
                  </span> <span class="dropdown-item-desc"> Low disk space. Let's
                    clean it! <span class="time">17 Hours Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-icon bg-info text-white"> <i class="fas
												fa-bell"></i>
                  </span> <span class="dropdown-item-desc"><span class="time">Yesterday</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{asset('adminAssets/assets/img/user.png')}}"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello Sarah Smith</div>
              <a href="profile.html" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                Activities
              </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="{{route('logout')}}" class="dropdown-item has-icon text-danger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
              <form id="logout-form" method="POST" action="{{route('logout')}}">
                @csrf
            </form>
             
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="{{asset('adminAssets/assets/img/tesco_logo.webp')}}" class="header-logo" />
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="archive"></i><span>Admins</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="admins.html">All Admins</a></li>
                <li><a class="nav-link" href="add_admin.html">Add Admin</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="users"></i><span>Customers</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="customers.html">All Customers</a></li>
                <li><a class="nav-link" href="add_customer.html">Add Customer</a></li>
                
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user"></i><span>Seller</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="sellers.html">All Sellers</a></li>
                <li><a class="nav-link" href="add_seller.html">Add Seller</a></li>
                
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="archive"></i><span>Pos System</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="widget-chart.html">Pos Manager</a></li>
                <li><a class="nav-link" href="widget-data.html">Pos Configuration</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="{{route('admin.categories')}}" class="nav-link"><i data-feather="codesandbox"></i><span>Categories</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="sun"></i><span>Brands</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('admin.brands')}}">All Brands</a></li>
                <li><a class="nav-link" href="{{route('admin.addbrand')}}">Add Brand</a></li>
                
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="sliders"></i><span>Sliders</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('admin.homeslider')}}">All Sliders</a></li>
                <li><a class="nav-link" href="{{route('admin.addhomeslider')}}">Add Slider</a></li>
                
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="airplay"></i><span>Blogs</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('admin.blogs')}}">All Blogs</a></li>
                <li><a class="nav-link" href="{{route('admin.addBlog')}}">Add Blog</a></li>
              </ul>
            </li>
            {{-- <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="codesandbox"></i><span>Categories</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="p_cat.html">Parent Category</a></li>
                <li><a class="nav-link" href="c_cat.html">Child Category</a></li>
              </ul>
            </li> --}}
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="shopping-cart"></i><span>Products</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('admin.products')}}">All Products</a></li>
                <li><a class="nav-link" href="{{route('admin.addproduct')}}">Add Product</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="chat_box.html" class="nav-link"><i data-feather="mail"></i><span>Conversation</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="shopping-bag"></i><span>Product Storehouse</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="email-inbox.html">Inbox</a></li>
                <li><a class="nav-link" href="email-compose.html">Compose</a></li>
                <li><a class="nav-link" href="email-read.html">read</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="dollar-sign"></i><span>Sales</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="alert.html">Alert</a></li>
                <li><a class="nav-link" href="badge.html">Badge</a></li>
                <li><a class="nav-link" href="breadcrumb.html">Breadcrumb</a></li>
               
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="user-check"></i><span>Salesmans</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="basic-table.html">Basic Tables</a></li>
                <li><a class="nav-link" href="advance-table.html">Advanced Table</a></li>
                <li><a class="nav-link" href="datatables.html">Datatable</a></li>
                <li><a class="nav-link" href="export-table.html">Export Table</a></li>
                <li><a class="nav-link" href="editable-table.html">Editable Table</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="user"></i><span>Sellers Functions</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="chart-amchart.html">amChart</a></li>
                <li><a class="nav-link" href="chart-apexchart.html">apexchart</a></li>
                <li><a class="nav-link" href="chart-echart.html">eChart</a></li>
                <li><a class="nav-link" href="chart-chartjs.html">Chartjs</a></li>
                <li><a class="nav-link" href="chart-sparkline.html">Sparkline</a></li>
                <li><a class="nav-link" href="chart-morris.html">Morris</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="dollar-sign"></i><span>Offline Payment System</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="icon-font-awesome.html">Font Awesome</a></li>
                <li><a class="nav-link" href="icon-material.html">Material Design</a></li>
                <li><a class="nav-link" href="icon-ionicons.html">Ion Icons</a></li>
                <li><a class="nav-link" href="icon-feather.html">Feather Icons</a></li>
                <li><a class="nav-link" href="icon-weather-icon.html">Weather Icon</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="link"></i><span>Affiliate System</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="light-gallery.html">Light Gallery</a></li>
                <!-- <li><a href="gallery1.html">Gallery 2</a></li> -->
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="arrow-left"></i><span>Refunds</span></a>
              <ul class="dropdown-menu">
                <li><a href="carousel.html">Bootstrap Carousel.html</a></li>
                <li><a class="nav-link" href="owl-carousel.html">Owl Carousel</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="file-text"></i><span>Reports</span></a>
              <ul class="dropdown-menu">
                <li><a href="carousel.html">Bootstrap Carousel.html</a></li>
                <li><a class="nav-link" href="owl-carousel.html">Owl Carousel</a></li>
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="map"></i><span>Marketing</span></a>
              <ul class="dropdown-menu">
                <li><a href="gmaps-advanced-route.html">Advanced Route</a></li>
                <li><a href="gmaps-draggable-marker.html">Draggable Marker</a></li>
                <li><a href="gmaps-geocoding.html">Geocoding</a></li>
                <li><a href="gmaps-geolocation.html">Geolocation</a></li>
                <li><a href="gmaps-marker.html">Marker</a></li>
                <li><a href="gmaps-multiple-marker.html">Multiple Marker</a></li>
                <li><a href="gmaps-route.html">Route</a></li>
                <li><a href="gmaps-simple.html">Simple</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="phone"></i><span>OTP System</span></a>
              <ul class="dropdown-menu">
                <li><a href="gmaps-advanced-route.html">Advanced Route</a></li>
                <li><a href="gmaps-draggable-marker.html">Draggable Marker</a></li>
                <li><a href="gmaps-geocoding.html">Geocoding</a></li>
                <li><a href="gmaps-geolocation.html">Geolocation</a></li>
                <li><a href="gmaps-marker.html">Marker</a></li>
                <li><a href="gmaps-multiple-marker.html">Multiple Marker</a></li>
                <li><a href="gmaps-route.html">Route</a></li>
                <li><a href="gmaps-simple.html">Simple</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="monitor"></i><span>Website Setup</span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Header</a></li>
                <li><a href="#">Footer</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="#">General Setting</a></li>
              </ul>
            </li>
           
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  data-feather="settings"></i><span>Setup & Configuration</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="errors-503.html">503</a></li>
                <li><a class="nav-link" href="errors-403.html">403</a></li>
                <li><a class="nav-link" href="errors-404.html">404</a></li>
                <li><a class="nav-link" href="errors-500.html">500</a></li>
              </ul>
            </li>

            
            
            
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      {{$slot}}
    
      <!--<footer class="main-footer">
        <div class="footer-left">
          <a href="#">Tescoglobalmall</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer> -->
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{asset('adminAssets/assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{asset('adminAssets/assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('adminAssets/assets/bundles/chartjs/chart.min.js')}}"></script>
  <script src="{{asset('adminAssets/assets/bundles/owlcarousel2/dist/owl.carousel.min.js')}}"></script>
  <script src="{{asset('adminAssets/assets/bundles/summernote/summernote-bs4.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('adminAssets/assets/js/page/widget-data.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('adminAssets/assets/js/page/index.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{asset('adminAssets/assets/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{asset('adminAssets/assets/js/custom.js')}}"></script>

  <script src="{{asset('adminAssets/assets/bundles/datatables/datatables.min.js')}}"></script>
  <script src="{{asset('adminAssets/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('adminAssets/assets/bundles/datatables/export-tables/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('adminAssets/assets/bundles/datatables/export-tables/buttons.flash.min.js')}}"></script>
  <script src="{{asset('adminAssets/assets/bundles/datatables/export-tables/jszip.min.js')}}"></script>
  <script src="{{asset('adminAssets/assets/bundles/datatables/export-tables/pdfmake.min.js')}}"></script>
  <script src="{{asset('adminAssets/assets/bundles/datatables/export-tables/vfs_fonts.js')}}"></script>
  <script src="{{asset('adminAssets/assets/bundles/datatables/export-tables/buttons.print.min.js')}}"></script>
  <script src="{{asset('adminAssets/assets/js/page/datatables.js')}}"></script>

  {{-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> --}}

  <script>
    setTimeout(function() {
        $('.alert').fadeOut('slow', function() {
            $(this).remove();
        });
    }, 5000);
  </script>

  @livewireScripts

</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>