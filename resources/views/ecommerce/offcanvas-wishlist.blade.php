<!-- Header-->
<div class="offcanvas-header lh-fixed fs-lg">

</div>

<!-- List group -->
<ul class="list-group list-group-lg list-group-flush">
    @foreach ($wishlist->products as $wishlist)
        <li class="list-group-item mb-2">
            <div class="row align-items-center">

                <div class="col-4">
                    <!-- Image -->
                    <a href="{{ route('single.product', $wishlist['id']) }}">
                        <img class="img-fluid" src="{{ $wishlist['image'] ?? 'http://via.placeholder.com/62x62' }}"
                            alt="...">
                    </a>
                </div>
                <div class="col-8 d-flex flex-column ">
                    <div>
                        <!-- Title -->
                        <p class="fs-sm fw-bold mb-6">
                            <a class="text-body"
                                href="{{ route('single.product', $wishlist['id']) }}">{{ $wishlist['name'] }}</a>
                            <br>
                            <span class="text-muted">{{ app('price')->format($wishlist['price']) }}</span>
                        </p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('single.product', $wishlist['id']) }}" class="text-dark">View
                                    Product</a>
                            </div>
                        </div>
                        <div>
                            <!-- Remove -->
                            <form action="{{ route('wish.remove', ['productId' => $wishlist['id']]) }}" method="POST">
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


<!-- Buttons -->
<div class="offcanvas-body">
    <a class="btn w-100 btn-dark" href="{{ route('checkout') }}">Continue to Checkout</a>
</div>
