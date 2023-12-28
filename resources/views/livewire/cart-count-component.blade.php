<a href="{{route("product.cart")}}" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false" data-display="static">
    <i class="icon-shopping-cart"></i>
    @if(Cart::instance('cart')->count() > 0)
    <span class="cart-count">{{Cart::instance('cart')->count()}}</span>
    @endif
    <span class="cart-txt">Cart</span>
</a>