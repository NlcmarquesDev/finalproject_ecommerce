<div class="col-12 col-md-6 col-xl-4">
    <a href="{{ route('single.product', $product->id) }}" class="text-decoration-none">
        <div class="boximg">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <img src="{{ $product->photos->first() ? asset($product->photos->first()->file) : 'http://via.placeholder.com/62x62' }}"
                            alt="{{ $product->name }}" style="width: 300px; height: 300px" />

                    </div>
                    <div class="flip-box-back">
                        <img src="{{ $product->photos->first() ? asset($product->photos->skip(1)->first()->file) : 'http://via.placeholder.com/62x62' }}"
                            alt="{{ $product->name }}" style="width: 300px; height: 300px" />
                    </div>
                </div>
            </div>
        </div>
        <div class="frontpage-product">
            {{-- @if ($selectCategory) --}}
            @foreach ($product->categories as $category)
                <p class="badge text-bg-secondary" wire:key="productcategory{{ $category }}">
                    {{ $category->name }}
                </p>
            @endforeach
            {{-- @endif --}}
        </div>
        <div class="frontpage-product d-flex justify-content-between algin-items-center">

            <div>

                <p class="pfont my-3 ">{{ $product->name }}</p>
                <p class="text-dark">
                    {{ app('price')->format($product->price) }}
                </p>
            </div>
            <div class="mt-2">
                @if (Auth::user())
                    <form action="{{ route('add.wishlist') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method ('POST')
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                        <input type="hidden" name="image"
                            value="{{ $product->photos->first() ? asset($product->photos->first()->file) : 'http://via.placeholder.com/62x62' }}">
                        @if (in_array($product->id, $wishlistProductIds))
                            <i class="bi bi-heart-fill fs-4  navicontext-warning-emphasis"></i>
                            <!-- Ícone de estrela preenchida -->
                        @else
                            <button class="bg-transparent border-0"><i class="bi bi-heart fs-4"></i></button>
                        @endif
                    </form>


                    <a href="{{ route('single.product', $product->id) }}" class="text-decoration-none"><i
                            class="bi bi-plus-lg fs-4 navicon"></i></a>
                @else
                    <a href="{{ route('register') }}">Register</a>
                @endif
                </form>
            </div>
        </div>
    </a>
</div>
