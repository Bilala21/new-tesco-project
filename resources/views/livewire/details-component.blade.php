<main class="main">
            

    <div class="page-content mt-4">
        <div class="container">
            <div class="product-details-top">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-gallery product-gallery-vertical">
                            <div class="row">
                                <figure class="product-main-image">
                                    <img id="product-zoom" src="{{asset('frontend/assets/images/products')}}/{{$product->image}}" data-zoom-image="{{asset('frontend/assets/images/products')}}/{{$product->image}}" alt="product image">

                                    <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                        <i class="icon-arrows"></i>
                                    </a>
                                </figure><!-- End .product-main-image -->

                                <div id="product-zoom-gallery" class="product-image-gallery">
                                    <a class="product-gallery-item active" href="#" data-image="{{asset('frontend/assets/images/products')}}/{{$product->image}}" data-zoom-image="frontend/assets/ima">
                                        <img src="{{asset('frontend/assets/images/products')}}/{{$product->image}}" alt="product side">
                                    </a>

                                    

                                    

                                   
                                </div><!-- End .product-image-gallery -->
                            </div><!-- End .row -->
                        </div><!-- End .product-gallery -->
                    </div><!-- End .col-md-6 -->

                    <div class="col-md-6">
                        <div class="product-details">
                            <h1 class="product-title">{{$product->name}}</h1><!-- End .product-title -->

                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <a class="ratings-text" href="#product-review-link" id="review-link">( 2 Reviews )</a>
                            </div><!-- End .rating-container -->

                            <div class="product-price">
                                ${{$product->regular_price}}
                            </div><!-- End .product-price -->

                            <div class="product-content">
                                <p>{{$product->description}}</p>
                            </div><!-- End .product-content -->

                            <div class="details-filter-row details-row-size">
                                <label>Sold by:</label>
                                <p>Rainbow Island</p>

                                <div class="product-nav product-nav-thumbs">
                                        <div class="badge badge-info ml-5">Message Seller</div>
                                    <a href="#">
                                        <img src="{{asset('frontend/assets/images/brands/apple.webp')}}" alt="product desc" class="ml-5">
                                    </a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .details-filter-row -->
                            <div class="details-filter-row details-row-size">
                                <label for="qty">Quantity:</label>
                                <div class="cart-product-quantity d-flex justify-content">
                                    <div class="input-group-prepend"><button style="min-width: 26px" class="btn btn-decrement btn-spinner" type="button" wire:click.prevent="decreaseQuantity"><i class="fa fa-minus"></i></button></div>
                                    <input type="text" class="" value="1" min="1" data-max="120" pattern="[0-9]*" wire:model="qty" style="min-width: 50px; text-align:center;"><div class="input-group  input-spinner" style="margin-left: 2rem">
                                    <div class="input-group-append"><button style="min-width: 5px;" class="btn btn-increment btn-spinner" type="button" wire:click.prevent="increaseQuantity"><i class="fa fa-plus"></i></button></div></div>
                                    
                                </div>
                                <span style="margin-left: 9rem">({{$product->stock_status}})</span>
                            </div><!-- End .details-filter-row -->

                            <div class="details-filter-row details-row-size" style="align-items: center;">
                                <label for="size" style="width: 100px;">Total Price :</label>
                                <div class="product-price">
                                    ${{$product->regular_price}}
                                </div>
                            </div><!-- End .details-filter-row -->


                            <div class="product-details-action">
                                <a href="#" class="btn-product btn-cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"><span>add to cart</span></a>

                                <a href="buy_now.html" class="btn btn-primary ml-3">Buy Now</a>

                                <div class="details-action-wrapper mt-3 ml-0">
                                    <a href="#" class="btn-product btn-wishlist p-2 border-0" title="Wishlist"><span>Add to Wishlist</span></a>
                                    <a href="#" class="btn-product btn-compare p-2 border-0" title="Compare"><span>Add to Compare</span></a>
                                </div><!-- End .details-action-wrapper -->
                            </div><!-- End .product-details-action -->

                            <div class="details-filter-row details-row-size">
                                <label>Refund:</label>

                                <div class="product-nav product-nav-thumbs">
                                        
                                        <img src="{{asset('frontend/assets/images/refund-sticker.webp')}}" alt="product desc" class="ml-1" style="width: 200px !important;">
                                </div><!-- End .product-nav -->

                                <a href="return_policy.html" class="ml-3" style="font-weight: 600;">View Policy</a>
                            </div><!-- End .details-filter-row -->

                            <div class="product-details-footer">
                                

                                <div class="social-icons social-icons-sm ml-0">
                                    <span class="social-label">Share:</span>
                                    <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                    <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                </div>
                            </div><!-- End .product-details-footer -->
                        </div><!-- End .product-details -->
                    </div><!-- End .col-md-6 -->
                </div><!-- End .row -->
            </div><!-- End .product-details-top -->

            <div class="product-details-tab">
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                    </li>
                  
                    <li class="nav-item">
                        <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews (2)</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                        <div class="product-desc-content">
                            <h3>Product Information</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>
                            <ul>
                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>
                                <li>Vivamus finibus vel mauris ut vehicula.</li>
                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>
                            </ul>

                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>
                        </div><!-- End .product-desc-content -->
                    </div><!-- .End .tab-pane -->
                
                    <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
                        <div class="reviews">
                            <h3>Reviews (2)</h3>
                            <div class="review">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <h4><a href="#">Samanta J.</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                        </div><!-- End .rating-container -->
                                        <span class="review-date">6 days ago</span>
                                    </div><!-- End .col -->
                                    <div class="col">
                                        <h4>Good, perfect size</h4>

                                        <div class="review-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cum dolores assumenda asperiores facilis porro reprehenderit animi culpa atque blanditiis commodi perspiciatis doloremque, possimus, explicabo, autem fugit beatae quae voluptas!</p>
                                        </div><!-- End .review-content -->

                                        <div class="review-action">
                                            <a href="#"><i class="icon-thumbs-up"></i>Helpful (2)</a>
                                            <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                        </div><!-- End .review-action -->
                                    </div><!-- End .col-auto -->
                                </div><!-- End .row -->
                            </div><!-- End .review -->

                            <div class="review">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <h4><a href="#">John Doe</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                        </div><!-- End .rating-container -->
                                        <span class="review-date">5 days ago</span>
                                    </div><!-- End .col -->
                                    <div class="col">
                                        <h4>Very good</h4>

                                        <div class="review-content">
                                            <p>Sed, molestias, tempore? Ex dolor esse iure hic veniam laborum blanditiis laudantium iste amet. Cum non voluptate eos enim, ab cumque nam, modi, quas iure illum repellendus, blanditiis perspiciatis beatae!</p>
                                        </div><!-- End .review-content -->

                                        <div class="review-action">
                                            <a href="#"><i class="icon-thumbs-up"></i>Helpful (0)</a>
                                            <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                        </div><!-- End .review-action -->
                                    </div><!-- End .col-auto -->
                                </div><!-- End .row -->
                            </div><!-- End .review -->
                        </div><!-- End .reviews -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .product-details-tab -->

            <h2 class="title text-center mb-4">Related Products</h2><!-- End .title text-center -->

            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                data-owl-options='{
                    "nav": false, 
                    "dots": true,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":1
                        },
                        "480": {
                            "items":2
                        },
                        "768": {
                            "items":3
                        },
                        "992": {
                            "items":4
                        },
                        "1200": {
                            "items":4,
                            "nav": true,
                            "dots": false
                        }
                    }
                }'>
                @foreach ($related_products as $r_product)  
                <div class="product product-7">
                    <figure class="product-media">
                        <span class="product-label label-new">New</span>
                        <a href="{{route('product.details',['slug' => $r_product->slug])}}">
                            <img src="{{asset('frontend/assets/images/products')}}/{{$r_product->image}}" alt="{{$r_product->name}}" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-price">
                            ${{$r_product->regular_price}}
                        </div><!-- End .product-price -->
                        
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 2 Reviews )</span>
                        </div><!-- End .rating-container -->
                        <h3 class="product-title"><a href="{{route('product.details',['slug' => $r_product->slug])}}">{{$r_product->name}}</a></h3><!-- End .product-title -->

                        
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
                @endforeach

            </div><!-- End .owl-carousel -->
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->