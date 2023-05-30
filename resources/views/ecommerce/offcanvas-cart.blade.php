<!-- Header-->
<div class="offcanvas-header lh-fixed fs-lg">

</div>

<!-- List group -->
<ul class="list-group list-group-lg list-group-flush">
    @foreach ($cart->products as $cartItem)
        {{-- @dd($cartItem); --}}
        <li class="list-group-item mb-2">
            <div class="row align-items-center">

                <div class="col-4">
                    <!-- Image -->
                    <a href="{{ route('products.show', $cartItem['id']) }}">
                        <img class="img-fluid" src="{{ $cartItem['image'] ?? 'http://via.placeholder.com/62x62' }}"
                            alt="...">
                    </a>
                </div>
                <div class="col-8 d-flex flex-column ">
                    <div>
                        <!-- Title -->
                        <p class="fs-sm fw-bold mb-6">
                            <a class="text-body"
                                href="{{ route('products.show', $cartItem['id']) }}">{{ $cartItem['name'] }}</a>
                            <br>
                            <span class="text-muted">{{ app('price')->format($cartItem['price']) }}</span>
                        </p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <form action="{{ route('cart.update') }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="d-flex flex-column justify-content-between align-items-center">
                                <input type="number" class="form-control" name="quantity_{{ $cartItem['id'] }}"
                                    id="{{ $cartItem['quantity'] }}" value="{{ $cartItem['quantity'] }}" min="1"
                                    oninput="this.value = 
                                !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null">
                            </div>
                            <div class="d-flex justify-content-between mt-3 ">
                                <!-- update -->
                                <button class="bg-transparent border-0 text-decoration-underline" type="submit">
                                    Update
                                </button>
                        </form>
                        <!-- Remove -->
                        <form action="{{ route('cart.remove', ['productId' => $cartItem['id']]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-transparent border-0 text-decoration-underline">
                                Remove
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </li>
    @endforeach
</ul>
{{-- @dd($cart) --}}

<!-- Footer -->
<div class="offcanvas-footer justify-between lh-fixed fs-sm bg-light mt-5 py-3">
    <strong>Subtotal</strong> <strong class="ms-auto">{{ app('price')->format($cart->subtotal()) }}</strong><br />
    <strong>Tax</strong> <strong class="ms-auto">{{ app('price')->format($cart->taxes()) }}</strong><br />
    <strong>Total</strong> <strong class="ms-auto">{{ app('price')->format($cart->total()) }}</strong>
</div>

<!-- Buttons -->
<div class="offcanvas-body">
    <a class="btn w-100 btn-dark" href="{{ route('checkout') }}">Continue to Checkout</a>
</div>
