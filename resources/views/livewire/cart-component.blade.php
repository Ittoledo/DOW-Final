<div>
    <a href="{{ route('cart') }}" class="nav-link">
        Carrito ({{\Cart::session(auth()->id())->getTotalQuantity()}})
    </a>
</div>
