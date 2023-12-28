<a href="{{route('product.wishlist')}}" class="wishlist-link">
    <i class="icon-heart-o"></i>
    @if (Cart::instance('wishlist')->count() > 0)
    <span class="wishlist-count">{{Cart::instance('wishlist')->count()}}</span>
    @endif
    <span class="wishlist-txt">Wishlist</span>
</a>