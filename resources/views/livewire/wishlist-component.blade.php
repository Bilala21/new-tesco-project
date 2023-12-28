<main class="main">
   
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">wishlist</a></li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="category-banners-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl" 
                    data-owl-options='{
                        "nav": false,
                        "responsive": {
                            "768": {
                                "nav": true
                            }
                        }
                    }'>
                    
                </div><!-- End .owl-carousel -->

                <div class="mb-3"></div><!-- End .mb-3 -->

                


                <div class="mb-4"></div><!-- End .mb-4 -->
                <h3 class="mb-4">All Wishlist Products</h3>

                <div class="products mb-3">
                    <div class="row">
                        @if(Cart::instance('wishlist')->content()->count() > 0)
                        @php
                            $witems = Cart::instance('wishlist')->content()->pluck('id');
                        @endphp
                        @foreach (Cart::instance('wishlist')->content() as $item)
                        <div class="col-6 col-md-4 col-xl-3">
                            <div class="product">
                                <figure class="product-media">
                                    <span class="product-label label-new">New</span>
                                    <a href="{{route('product.details',['slug' => $item->model->slug])}}">
                                        <img src="{{asset('frontend/assets/images/products')}}/{{$item->model->image}}" alt="{{$item->model->name}}" class="product-image">
                                    </a>

                                    <div class="product-action-vertical">
                                        
                                        <a href="#" class="btn-product-icon btn-wishlist wish-filled" wire:click.prevent = "removeFromWishlist({{$item->model->id}})" ></a>
                                        
                                        <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart" title="Add to cart" wire:click.prevent="moveProductFromWishlistToCart('{{$item->rowId}}')"><span>Move to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="{{route('product.details',['slug' => $item->model->slug])}}">Appliances</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="#">{{$item->model->name}}</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        ${{$item->model->regular_price}}
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
                        @else 
                        <h4>No Items in wishlist</h4>
                        @endif
                    </div><!-- End .row -->
                </div><!-- End .products -->

                {{-- <nav aria-label="Page navigation">
                   {{$products->links()}}
                </nav> --}}
            </div><!-- End .col-lg-9 -->

        </div><!-- End .row -->
    </div><!-- End .container -->
</main>