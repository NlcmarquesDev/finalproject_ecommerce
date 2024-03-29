@include('partials._header')
<!--HERO -->
<div class="producDetail container-fluid bg-light">
    <div class="row">
        <!--Breadcrumb-->
        <x-breadcrumb :items="[
            ['name' => 'Home', 'route' => route('welcome')],
            ['name' => 'Products', 'route' => route('products')],
            ['name' => 'Products Details', 'route' => ''],
        ]"></x-breadcrumb>
        <div class="col-12 col-lg-10 offset-lg-1 my-4">
            <!---Product Image-->
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8 my-auto">
                        <div class="d-flex flex-column">
                            <div class="boximg mb-5">
                                <div class="flip-box mx-auto">
                                    <div class="flip-box-inner">
                                        <div class="flip-box-front">
                                            <img src="{{ $product->photos->first() ? asset($product->photos->first()->file) : 'http://via.placeholder.com/62x62' }}"
                                                alt="stone lamp" style="width: 300px; height: 300px" />
                                        </div>
                                        <div class="flip-box-back">
                                            <img src="{{ $product->photos->first() ? asset($product->photos->skip(1)->first()->file) : 'http://via.placeholder.com/62x62' }}"
                                                alt="stone lamp" style="width: 300px; height: 300px" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center gap-3">
                                <img src="{{ $product->photos->first() ? asset($product->photos->skip(1)->first()->file) : 'http://via.placeholder.com/62x62' }}"
                                    alt="stone lamp" style="width: 200px; height: 200px" /> <img
                                    src="{{ $product->photos->first() ? asset($product->photos->first()->file) : 'http://via.placeholder.com/62x62' }}"
                                    alt="stone lamp" style="width: 200px; height: 200px" />
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-lg-4">
                        <header>
                            <h2>{{ $product->name }}</h2>
                        </header>
                        <!---price and whishlist-->
                        <div class="d-flex justify-content-between align-items-center my-3">
                            <p class="fs-5 my-auto">{{ app('price')->format($product->price) }}</p>
                            @if (Auth::user())
                                <form action="{{ route('add.wishlist') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method ('POST')
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="hidden" name="name" value="{{ $product->name }}">
                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                    <input type="hidden" name="image"
                                        value="{{ $product->photos->first() ? asset($product->photos->skip(1)->first()->file) : 'http://via.placeholder.com/62x62' }}">
                                    @if (in_array($product->id, $wishlistProductIds))
                                        <i class="bi bi-heart-fill fs-4 text-danger"></i>
                                        <!-- Ícone de estrela preenchida -->
                                    @else
                                        <button class="bg-transparent border-0"><i
                                                class="bi bi-heart fs-4"></i></button>
                                    @endif
                                </form>
                            @endif
                        </div>
                        <hr />
                        <!---detail product-->
                        <p class="my-3 fs-5">{{ $product->description }}</p>
                        <hr />
                        <!---reviews star-->
                        <div class="d-flex align-items-center">
                            <div class="pe-2">
                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $product->rating)
                                        <i class="fa-solid fa-star"></i>
                                    @else
                                        <i class="fa-regular fa-star"></i>
                                    @endif
                                @endfor
                            </div>
                            <p class="fs-5 ps-2 my-auto">Reviews</p>
                        </div>
                        @if (Auth::user())
                            <form action="{{ route('addproduct') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!---Color-->
                                @if ($product->colors)
                                    <div class="d-flex justify-content-between my-3">
                                        <p class="fs-5 my-auto">Color</p>
                                        <select class="rounded border" name="color">
                                            @foreach ($product->colors as $color)
                                                <option value="{{ $color->name }}">{{ $color->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                @endif

                                <!---Quantity-->
                                <div class="d-flex justify-content-between my-3">
                                    <p class="fs-5 my-auto">Quantity</p>
                                    <input class="rounded px-2 border" name="quantity" type="number" value="1"
                                        min="1" placeholder="1"
                                        oninput="this.value =
                                        !!this.value && Math.abs(this.value) >= 0 ? Math.abs(this.value) : null" />
                                </div>


                                <input type="hidden" name="id" value="{{ $product->id }}">
                                {{-- <input type="hidden" name="name" value="{{ $product->name }}">
                                <input type="hidden" name="image"
                                    value="{{ $product->photos->first()->file ?? 'http://via.placeholder.com/62x62' }}"> --}}
                                <input type="hidden" name="price" value="{{ $product->price }}">
                                <button type="submit" class="btn w-100"> Add to Cart</button>
                            @else
                                <a href="{{ route('register') }}" class="btn w-100 ">Register</a>
                        @endif
                        </form>

                        <!---categorie product-->
                        <div class="my-3">
                            <p><b>Categories:</b>
                                @foreach ($product->categories as $category)
                                    {{ $category->name }},
                                @endforeach
                            </p>
                        </div>
                        <!---hastags product-->
                        <div class="my-3">
                            <p><b>Hastags:</b>
                                @foreach ($product->hastags as $hastag)
                                    {{ Str::ucfirst($hastag->name) }},
                                @endforeach
                            </p>
                        </div>
                        <!---Social media icon-->
                        <div class="iconfooter">
                            @foreach ($socials as $social)
                                <a href="{{ Str::lower($social->url) }}"><i
                                        class="bi bi-{{ $social->name }} navicon m-2"></i></a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--END HERO-->
@include('components.productsfooter')
@include('partials.newsletter')
@include('partials._footer')
