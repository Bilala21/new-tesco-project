<main class="main">

   
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Electronics</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-xl-4-5col">
                    <div class="category-banners-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl" 
                        data-owl-options='{
                            "nav": false,
                            "responsive": {
                                "768": {
                                    "nav": true
                                }
                            }
                        }'>
                        <div class="banner banner-poster">
                            
                            <a href="#">
                                <img src="frontend/assets/images/demos/demo-13/banners/banner-7.jpg" alt="Banner">
                            </a>

                            <div class="banner-content banner-content-right">
                                <h3 class="banner-subtitle"><a href="#">Amazing Value</a></h3><!-- End .banner-subtitle -->
                                <h2 class="banner-title"><a href="#">High Performance 4K TVs</a></h2><!-- End .banner-title -->
                                <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->

                        <div class="banner banner-poster">
                            <a href="#">
                                <img src="frontend/assets/images/demos/demo-13/banners/banner-8.jpg" alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h3 class="banner-subtitle"><a href="#">Weekend Deal</a></h3><!-- End .banner-subtitle -->
                                <h2 class="banner-title"><a href="#">Apple & Accessories</a></h2><!-- End .banner-title -->
                                <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .banner-content -->
                        </div><!-- End .banner -->
                    </div><!-- End .owl-carousel -->

                    <div class="mb-3"></div><!-- End .mb-3 -->

                    


                    <div class="mb-4"></div><!-- End .mb-4 -->

                    <div class="toolbox">
                        <div class="toolbox-left">
                            <div class="toolbox-info">
                                Computer & Accessoreis
                            </div><!-- End .toolbox-info -->
                        </div><!-- End .toolbox-left -->
                        <div class="toolbox-right" style="margin-right: -120px;">
                            <div class="toolbox-sort">
                                <label for="sortby">Sort by:</label>
                                <div class="select-custom">
                                    <select name="orderby" id="" class="form-control" wire:model="sorting">
                                        <option value="default" selected="selected">Default sorting</option>
                                        
                                        <option value="date">Sort by newness</option>
                                        <option value="price">Sort by price:low to high</option>
                                        <option value="price-desc">Sort by price:high to low</option>

                                    </select>
                                </div>
                            </div><!-- End .toolbox-sort -->
                        </div><!-- End .toolbox-right -->
                        

                        <div class="toolbox-right">
                            <div class="toolbox-sort">
                                <label for="sortby">Sort by:</label>
                                <div class="select-custom">
                                    <select name="post-per-page" id="" class="form-control" wire:model="pagesize">
                                        <option value="12" selected="selected">12 per page</option>
                                        <option value="16">16 per page</option>
                                        <option value="18">18 per page</option>
                                        <option value="21">21 per page</option>
                                        <option value="24">24 per page</option>
                                        <option value="30">30 per page</option>
                                        <option value="32">32 per page</option>
                                        
                                    </select>
                                </div>
                            </div><!-- End .toolbox-sort -->
                        </div><!-- End .toolbox-right -->
                    </div><!-- End .toolbox -->

                    <div class="products mb-3">
                        <div class="row">
                            @php
                                $witems = Cart::instance('wishlist')->content()->pluck('id');
                            @endphp
                            @foreach ($products as $product)
                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-media">
                                        <span class="product-label label-new">New</span>
                                        <a href="{{route('product.details',['slug' => $product->slug])}}">
                                            <img src="{{asset('frontend/assets/images/products')}}/{{$product->image}}" alt="{{$product->name}}" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            @if ($witems->contains($product->id))
                                            <a href="#" class="btn-product-icon btn-wishlist wish-filled" wire:click.prevent = "removeFromWishlist({{$product->id}})"></a>
                                            @else 
                                            <a href="#" class="btn-product-icon btn-wishlist" wire:click.prevent="addToWishlist({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"></a>
                                            @endif
                                            
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="{{route('product.details',['slug' => $product->slug])}}">Appliances</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="#">{{$product->name}}</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            ${{$product->regular_price}}
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 12 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 col-md-4 col-xl-3 -->
                            @endforeach
                        </div><!-- End .row -->
                    </div><!-- End .products -->

                    <nav aria-label="Page navigation">
                       {{$products->links()}}
                    </nav>
                </div><!-- End .col-lg-9 -->

                <aside class="col-lg-3 col-xl-5col order-lg-first">
                    <div class="sidebar sidebar-shop">
                        <div class="widget widget-categories">
                            <h3 class="widget-title">Categories</h3><!-- End .widget-title -->

                            <div class="widget-body">
                                <div class="accordion" id="widget-cat-acc">
                                    <div class="acc-item">
                                        
                                        <div id="collapse-1" class="collapse show" data-parent="#widget-cat-acc">
                                            <div class="collapse-wrap">
                                                <ul>
                                                    @foreach ($categories as $category)
                                                        
                                                    <li><a href="{{route('product.category',['category_slug' => $category->slug])}}">{{$category->name}}</a></li>
                                                    @endforeach
                                                   
                                                </ul>
                                            </div><!-- End .collapse-wrap -->
                                        </div><!-- End .collapse -->
                                    </div><!-- End .acc-item -->

                                </div><!-- End .accordion -->
                            </div><!-- End .widget-body -->
                        </div><!-- End .widget -->

                        {{-- price filter --}}
                        <h4 class="mb-2">Price</h4>
                        <span class="text-info">${{$min_price}} - ${{$max_price}}</span>
                        <div id="slider" class="mt-2" wire:ignore style="margin-bottom: 10rem;"></div>
                        {{-- <div class="slider_wrapper">
                            <div class="price-input">
                                <div class="field">
                                  <input type="number" class="input-min" value="2500">
                                </div>
                                <div class="separator">-</div>
                                <div class="field">
                                  <input type="number" class="input-max" value="7500">
                                </div>
                              </div>
                              <div class="slider">
                                <div class="progress"></div>
                              </div>
                              <div class="range-input">
                                <input type="range" class="range-min" min="0" max="10000" value="2500" step="100">
                                <input type="range" class="range-max" min="0" max="10000" value="7500" step="100">
                              </div>
                        </div> --}}
                        

                        

                        <div class="widget widget-banner-sidebar">
                           
                            
                            <div class="banner-sidebar banner-overlay">
                                <a href="#">
                                    <img src="frontend/assets/images/demos/demo-13/banners/banner-6.jpg" alt="banner">
                                </a>
                            </div><!-- End .banner-ad -->
                        </div><!-- End .widget -->
                    </div><!-- End .sidebar sidebar-shop -->
                </aside><!-- End .col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->

    <div class="cta cta-horizontal cta-horizontal-box bg-primary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <h3 class="cta-title text-white">Join Our Newsletter</h3><!-- End .cta-title -->
                    <p class="cta-desc text-white">Subcribe to get information about products and coupons</p><!-- End .cta-desc -->
                </div><!-- End .col-lg-5 -->
                
                <div class="col-lg-7">
                    <form action="#">
                        <div class="input-group">
                            <input type="email" class="form-control form-control-white" placeholder="Enter your Email Address" aria-label="Email Adress" required>
                            <div class="input-group-append">
                                <button class="btn btn-outline-white-2" type="submit"><span>Subscribe</span><i class="icon-long-arrow-right"></i></button>
                            </div><!-- .End .input-group-append -->
                        </div><!-- .End .input-group -->
                    </form>
                </div><!-- End .col-lg-7 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .cta -->
</main><!-- End .main -->

{{-- @push('scripts') --}}
<script>
           

    var slider = document.getElementById('slider');
            noUiSlider.create(slider,{
                start : [1,1000],
                connect:true,
                range: {
                    'min' : 1,
                    'max' : 1000
                },
                pips: {
                    mode: 'steps',
                    stepped:true,
                    density:4
                }
            });
    
            slider.noUiSlider.on('update', function(value) {
                @this.set('min_price',value[0]);
                @this.set('max_price',value[1]);
            })


            function addToWishlist() {
            location.reload();
            }
            
              </script>
{{-- @endpush --}}