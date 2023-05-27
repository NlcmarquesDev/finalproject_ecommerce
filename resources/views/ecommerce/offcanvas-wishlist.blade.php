
    <!-- Header-->
    <div class="offcanvas-header lh-fixed fs-lg">

    </div>

    <!-- List group -->
    <ul class="list-group list-group-lg list-group-flush">
        @foreach ($wish->content() as $wishlist)
        <li class="list-group-item mb-2">
            <div class="row align-items-center">

                <div class="col-4">
                    <!-- Image -->
                    <a href="{{ route('products.show', $wishlist->product()->id) }}">
                        <img class="img-fluid" src="{{ $wishlist->product()->photos->first()->file ?? 'http://via.placeholder.com/62x62' }}" alt="...">
                    </a>
                </div>
                <div class="col-8 d-flex flex-column ">
                    <div>
                                <!-- Title -->
                        <p class="fs-sm fw-bold mb-6">
                            <a class="text-body" href="{{ route('products.show', $wishlist->product()->id) }}">{{ $wishlist->product()->name }}</a> <br>
                            <span class="text-muted">{{ app('price')->format($wishlist->product()->price) }}</span>
                        </p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <form action="{{ route('addproduct') }}" method="POST">
                             @csrf
                            <input type="hidden" name="id" value="{{ $wishlist->product()->id }}">
                            <input type="hidden" name="name" value="{{ $wishlist->product()->name }}">
                            <input type="hidden" name="image" value="{{ $wishlist->product()->photos->first()->file ?? 'http://via.placeholder.com/62x62' }}">
                            <input type="hidden" name="price" value="{{ $wishlist->product()->price }}">
                        <div>
                             <!-- update -->
                            <button class="bg-transparent border-0 text-decoration-underline" type="submit">Add to Cart</button>
                        </form>
                        </div>
                        <div>
                            <!-- Remove -->
                            <form action="{{ route('wish.remove', ['productId' => $wishlist->product()->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-transparent border-0 text-decoration-underline">
                                    Remove
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </li>
        @endforeach
    </ul>


    <!-- Footer -->
    <div class="offcanvas-footer justify-between lh-fixed fs-sm bg-light mt-5 py-3">
        <strong>Subtotal</strong> <strong class="ms-auto">{{ app('price')->format($cart->subtotal()) }}</strong><br/>
        <strong>Tax</strong> <strong class="ms-auto">{{ app('price')->format($cart->taxes()) }}</strong><br/>
        <strong>Total</strong> <strong class="ms-auto">{{ app('price')->format($cart->total()) }}</strong>
    </div>

    <!-- Buttons -->
    <div class="offcanvas-body">
        <a class="btn w-100 btn-dark" href="{{route('checkout')}}">Continue to Checkout</a>
{{--        <a class="btn w-100 btn-outline-dark mt-2" href="#">View Cart</a>--}}
    </div>
