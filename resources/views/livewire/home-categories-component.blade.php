    <div class="header-left">
        <div class="dropdown category-dropdown">
            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
                Browse Categories
            </a>

            <div class="dropdown-menu">
                <nav class="side-nav">
                    <ul class="menu-vertical sf-arrows">
                        {{-- <li class="megamenu-container">
                            <a class="sf-with-ul" href="#">Electronics</a>

                            <div class="megamenu">
                                <div class="row no-gutters">
                                    <div class="col-md-8">
                                        <div class="menu-col">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="menu-title">Laptops & Computers</div><!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="#">Desktop Computers</a></li>
                                                        <li><a href="#">Monitors</a></li>
                                                        <li><a href="#">Laptops</a></li>
                                                        <li><a href="#">iPad & Tablets</a></li>
                                                        <li><a href="#">Hard Drives & Storage</a></li>
                                                        <li><a href="#">Printers & Supplies</a></li>
                                                        <li><a href="#">Computer Accessories</a></li>
                                                    </ul>

                                                    <div class="menu-title">TV & Video</div><!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="#">TVs</a></li>
                                                        <li><a href="#">Home Audio Speakers</a></li>
                                                        <li><a href="#">Projectors</a></li>
                                                        <li><a href="#">Media Streaming Devices</a></li>
                                                    </ul>
                                                </div><!-- End .col-md-6 -->

                                                <div class="col-md-6">
                                                    <div class="menu-title">Cell Phones</div><!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="#">Carrier Phones</a></li>
                                                        <li><a href="#">Unlocked Phones</a></li>
                                                        <li><a href="#">Phone & Cellphone Cases</a></li>
                                                        <li><a href="#">Cellphone Chargers </a></li>
                                                    </ul>

                                                    <div class="menu-title">Digital Cameras</div><!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="#">Digital SLR Cameras</a></li>
                                                        <li><a href="#">Sports & Action Cameras</a></li>
                                                        <li><a href="#">Camcorders</a></li>
                                                        <li><a href="#">Camera Lenses</a></li>
                                                        <li><a href="#">Photo Printer</a></li>
                                                        <li><a href="#">Digital Memory Cards</a></li>
                                                        <li><a href="#">Camera Bags, Backpacks & Cases</a></li>
                                                    </ul>
                                                </div><!-- End .col-md-6 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .menu-col -->
                                    </div><!-- End .col-md-8 -->

                                    <div class="col-md-4">
                                        <div class="banner banner-overlay">
                                            <a href="category.html" class="banner banner-menu">
                                                <img src="assets/images/demos/demo-13/menu/banner-1.jpg" alt="Banner">
                                            </a>
                                        </div><!-- End .banner banner-overlay -->
                                    </div><!-- End .col-md-4 -->
                                </div><!-- End .row -->
                            </div><!-- End .megamenu -->
                        </li> --}}
                        @foreach ($categories as $category)
                        <li><a href="#">{{$category->name}}</a></li>
                        @endforeach
                       
                    </ul><!-- End .menu-vertical -->
                </nav><!-- End .side-nav -->
            </div><!-- End .dropdown-menu -->
        </div><!-- End .category-dropdown -->
    </div>
