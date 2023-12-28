<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Tesco Seller | Dashboard</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('userAssets/assets/css/app.min.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('userAssets/assets/bundles/datatables/datatables.min.css')}}">
  <link rel="stylesheet" href="{{asset('userAssets/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('userAssets/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('userAssets/assets/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('userAssets/assets/css/custom.css')}}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('userAssets/assets/images/icons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="https://tescoglobalmall.com/uploads/all/ditgnb8U3QBFYwagb1KpcHSLyz064XzQr30IQqVI.png">
    <link rel="icon" href="https://tescoglobalmall.com/uploads/all/ditgnb8U3QBFYwagb1KpcHSLyz064XzQr30IQqVI.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <link rel='shortcut icon' type='image/x-icon' href='userAssets/assets/img/favicon.ico' /> -->
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
											text-white"> <img alt="image" src="{{asset('userAssets/assets/img/users/user-1.png')}}" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">John
                      Deo</span>
                    <span class="time messege-text">Please check your mail !!</span>
                    <span class="time">2 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="{{asset('userAssets/assets/img/users/user-2.png')}}" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Sarah
                      Smith</span> <span class="time messege-text">Request for leave
                      application</span>
                    <span class="time">5 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="{{asset('userAssets/assets/img/users/user-5.png')}}" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jacob
                      Ryan</span> <span class="time messege-text">Your payment invoice is
                      generated.</span> <span class="time">12 Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="{{asset('userAssets/assets/img/users/user-4.png')}}" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Lina
                      Smith</span> <span class="time messege-text">hii John, I have upload
                      doc
                      related to task.</span> <span class="time">30
                      Min Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="{{asset('userAssets/assets/img/users/user-3.png')}}" class="rounded-circle">
                  </span> <span class="dropdown-item-desc"> <span class="message-user">Jalpa
                      Joshi</span> <span class="time messege-text">Please do as specify.
                      Let me
                      know if you have any query.</span> <span class="time">1
                      Days Ago</span>
                  </span>
                </a> <a href="#" class="dropdown-item"> <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="{{asset('userAssets/assets/img/users/user-2.png')}}" class="rounded-circle">
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
                  </span> <span class="dropdown-item-desc"> Welcome to Otika
                    template! <span class="time">Yesterday</span>
                  </span>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="{{asset('userAssets/assets/img/user.png')}}"
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
            <a href="index.html"> <img alt="image" src="{{asset('userAssets/assets/img/tesco_logo.webp')}}" class="header-logo" />
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
              <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            <li class="dropdown">
              <a href="{{route('seller.purchaseHistory')}}" class="nav-link"><i data-feather="file-text"></i><span>Purchase History</span></a>
            </li>

            <li class="dropdown">
              <a href="{{route('seller.refundRequest')}}" class="nav-link"><i data-feather="arrow-left"></i><span>Send Refund Request</span></a>
            </li>

            <li class="dropdown">
              <a href="{{route('seller.wishlist')}}" class="nav-link"><i data-feather="heart"></i><span>Wishlist</span></a>
            </li>

            <li class="dropdown">
              <a href="{{route('seller.compare')}}" class="nav-link"><i data-feather="refresh-ccw"></i><span>Compare</span></a>
            </li>

            <li class="dropdown">
              <a href="{{route('seller.packages')}}" class="nav-link"><i data-feather="slack"></i><span>Premium Packages</span></a>
            </li>

            <li class="dropdown">
              <a href="products.html" class="nav-link"><i data-feather="shopping-cart"></i><span>Products</span></a>
            </li>

            <li class="dropdown">
              <a href="{{route('seller.uploadFiles')}}" class="nav-link"><i data-feather="file-plus"></i><span>Upload Files</span></a>
            </li>

            <li class="dropdown">
              <a href="index.html" class="nav-link"><i data-feather="volume-2"></i><span>Turntable</span></a>
            </li>

            <li class="dropdown">
              <a href="{{route('seller.orders')}}" class="nav-link"><i data-feather="dollar-sign"></i><span>Orders</span></a>
            </li>

            <li class="dropdown">
              <a href="{{route('seller.recieveRefundRequest')}}" class="nav-link"><i data-feather="arrow-left"></i><span>Recieved Refund Request</span></a>
            </li>

            <li class="dropdown">
              <a href="{{route('seller.shopSetting')}}" class="nav-link"><i data-feather="settings"></i><span>Shop Settings</span></a>
            </li>

            <li class="dropdown">
              <a href="{{route('seller.affiliate')}}" class="nav-link"><i data-feather="dollar-sign"></i><span>Affiliat</span></a>
            </li>

            <li class="dropdown">
              <a href="index.html" class="nav-link"><i data-feather="message-square"></i><span>Conversation</span></a>
            </li>

            <li class="dropdown">
              <a href="{{route('seller.myWallet')}}" class="nav-link"><i data-feather="dollar-sign"></i><span>My Wallet</span></a>
            </li>

            <li class="dropdown">
              <a href="{{route('seller.supportTicket')}}" class="nav-link"><i data-feather="aperture"></i><span>Support Ticket</span></a>
            </li>

            <li class="dropdown">
              <a href="{{route('seller.manageProfile')}}" class="nav-link"><i data-feather="user"></i><span>Manage Profile</span></a>
            </li>
          </ul>
          <hr>
          <div class="account text-center" style="display: block;">
            <h5>Sold Amount</h5>
            <p>Your sold amount (current month)</p>
            <div class="badge badge-primary">$0.00</div>
          </div>
          <div class="total p-3" style="display: flex; justify-content: space-between; align-items: center;">
            <span><b>Total Sold</b></span>
            <span>$12999.0</span>
          </div>

          <div class="total p-3" style="display: flex; justify-content: space-between; align-items: center;">
            <span><b>Last Month Sold</b></span>
            <span>$0.00</span>
          </div>
        </aside>
      </div>
      <!-- Main Content -->
      {{$slot}}
      <footer class="main-footer">
        <div class="footer-left">
          <a href="#">tescoglobalmall</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="{{asset('userAssets/assets/js/app.min.js')}}"></script>
  <!-- JS Libraies -->
  <script src="{{asset('userAssets/assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('userAssets/assets/js/page/index.js')}}"></script>
  <!-- Template JS File -->
  <script src="{{asset('userAssets/assets/js/scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{asset('userAssets/assets/js/custom.js')}}"></script>
  {{-- data tables --}}
  <script src="{{asset('adminAssets/assets/bundles/datatables/datatables.min.js')}}"></script>
  <script src="{{asset('adminAssets/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('adminAssets/assets/bundles/datatables/export-tables/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('adminAssets/assets/bundles/datatables/export-tables/buttons.flash.min.js')}}"></script>
  <script src="{{asset('adminAssets/assets/bundles/datatables/export-tables/jszip.min.js')}}"></script>
  <script src="{{asset('adminAssets/assets/bundles/datatables/export-tables/pdfmake.min.js')}}"></script>
  <script src="{{asset('adminAssets/assets/bundles/datatables/export-tables/vfs_fonts.js')}}"></script>
  <script src="{{asset('adminAssets/assets/bundles/datatables/export-tables/buttons.print.min.js')}}"></script>
  <script src="{{asset('adminAssets/assets/js/page/datatables.js')}}"></script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>