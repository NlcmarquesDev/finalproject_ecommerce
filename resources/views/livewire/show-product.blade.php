<div class="col-md-6 col-lg-4">
    <a href="{{ route('single.product', $product->id) }}" class="text-decoration-none">
        <div class="boximg">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="{{ $product->photos->first() ? asset($product->photos->first()->file) : 'http://via.placeholder.com/62x62' }}"
                            alt="stone lamp" style="width: 300px; height: 300px" />
                    </div>
                    <div class="flip-box-back">
                        @if ($product->photos->skip(1)->first() != null)
                            <img src="{{ $product->photos->first() ? asset($product->photos->skip(1)->first()->file) : 'http://via.placeholder.com/62x62' }}"
                                alt="stone lamp" style="width: 300px; height: 300px" />
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="frontpage-product d-flex justify-content-between algin-items-center">
            <div>
                <p class="pfont my-3 ">{{ $product->name }}</p>
                <p class="text-dark">{{ app('price')->format($product->price) }}
                </p>
            </div>
            <div class="mt-2">
                @if (Auth::user())
                    <form action="{{ route('add.wishlist') }}" method="POST">
                        @csrf
                        @method ('POST')
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                        <input type="hidden" name="image"
                            value="{{ $product->photos->first() ? asset($product->photos->first()->file) : 'http://via.placeholder.com/62x62' }}">
                        @if (in_array($product->id, $wishlistProductIds))
                            <i class="bi bi-heart-fill fs-4 text-danger"></i>
                            <!-- Ícone de estrela preenchida -->
                        @else
                            <button class="bg-transparent border-0"><i class="bi bi-heart fs-4"></i></button>
                        @endif
                    </form>
                    <form action="{{ route('addproduct') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="image"
                            value="{{ $product->photos->first()->file ?? 'http://via.placeholder.com/62x62' }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                        <input type="hidden" name="quantity" value="1" min="1">

                        <button type="submit" class="bg-transparent border-0 fs-4"><svg
                                xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-bag-plus" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                                <path
                                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                            </svg></button>
                    @else
                        <a href="{{ route('register') }}">Register</a>
                @endif
                </form>
            </div>
        </div>
    </a>
</div>
