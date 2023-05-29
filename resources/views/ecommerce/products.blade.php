@include('partials._header')
<!--PRODUCT -->
<!--Breadcrumb-->
<x-breadcrumb :items="[ ['name' => 'Home', 'route' => route('welcome')], ['name' => 'Products', 'route' => route('products')],]"></x-breadcrumb>
<div class="container-fluid">
    <div class="row d-flex">


        <div class="text-center">
            <h2 class="fw-normal my-4"><small>Designer's Portfolio</small></h2>
            <p class="pfont">The Cast Lighting Series aesthetic presence rivals its versatility.</p>
        </div>

        <!-- Filter modal Section -->
        <a class="btn btn-sm  d-lg-none mx-auto" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
           aria-controls="offcanvasExample">
            Filter
        </a>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
             aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Filter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="d-flex flex-column">
                    <h5 class="fw-lighter">Categories</h5>
                    <a class="pfont my-2" href="#">All</a>
                    <a class="pfont my-2" href="#">Acessories</a>
                    <a class="pfont my-2" href="#">Dining</a>
                    <a class="pfont my-2" href="#">Furniture</a>
                    <a class="pfont my-2" href="#">Lighting</a>
                    <a class="pfont my-2" href="#">Living</a>
                </div>
                <hr>
                <div>
                    <h5 class="fw-lighter">Price</h5>
                    <div class="slider">
                        <input type="range" min="0" max="10000" name="" id="">
                    </div>
                </div>
                <hr>
                <div class="d-flex flex-column">
                    <h5 class="fw-lighter">Sort by</h5>
                    <a class="pfont my-2" href="#">Default</a>
                    <a class="pfont my-2" href="#">Popularity</a>
                    <a class="pfont my-2" href="#">Average rating</a>
                    <a class="pfont my-2" href="#">Newness</a>
                    <a class="pfont my-2" href="#">Price: low to High</a>
                    <a class="pfont my-2" href="#">Price: high to low</a>
                </div>
                <hr>
                <div class="d-flex flex-column">
                    <h5 class="fw-lighter">Color</h5>
                    <div class="d-flex align-items-center">
                        <span class="dot bg-dark me-2"></span>
                        <a class="pfont my-auto" href="#">Black</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="dot brown me-2"></span>
                        <a class="pfont my-auto" href="#">Brown</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="dot bg-secondary me-2"></span>
                        <a class="pfont my-auto" href="#">Gray</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="dot bg-success me-2"></span>
                        <a class="pfont my-auto" href="#">Green</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="dot bg-danger me-2"></span>
                        <a class="pfont my-auto" href="#">red</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="dot bg-white border me-2"></span>
                        <a class="pfont my-auto" href="#">White</a>
                    </div>
                </div>
                <hr>
                <div>
                    <h5 class="fw-lighter">Tag</h5>
                    <button class="rounded-pill tagbtn my-1">Bathroom</button>
                    <button class="rounded-pill tagbtn my-1">Classic</button>
                    <button class="rounded-pill tagbtn my-1">Comtemporary</button>
                    <button class="rounded-pill tagbtn my-1">Decor</button>
                    <button class="rounded-pill tagbtn my-1">Essentials</button>
                    <button class="rounded-pill tagbtn my-1">Interior</button>
                    <button class="rounded-pill tagbtn my-1">Kitchen</button>
                    <button class="rounded-pill tagbtn my-1">Leather</button>
                    <button class="rounded-pill tagbtn my-1">Lighting</button>
                    <button class="rounded-pill tagbtn my-1">Minimal</button>
                    <button class="rounded-pill tagbtn my-1">Pratical</button>
                    <button class="rounded-pill tagbtn my-1">Travel</button>
                    <button class="rounded-pill tagbtn my-1">Dining</button>
                    <button class="rounded-pill tagbtn my-1">Table</button>
                </div>
            </div>
        </div>
        <!-- Filter Section -->
        <aside class="col-lg-2 col-md-4 filter my-auto d-none d-lg-inline-block ps-4 ">
            <div class="d-flex flex-column">
                <h5 class="fw-lighter">Categories</h5>
                <a class="pfont my-2" href="{{route('products')}}">All</a>
                <a class="pfont my-2" href="#">Acessories</a>
                <a class="pfont my-2" href="#">Dining</a>
                <a class="pfont my-2" href="#">Furniture</a>
                <a class="pfont my-2" href="#">Lighting</a>
                <a class="pfont my-2" href="#">Living</a>
            </div>
            <hr>
            <div>
                <h5 class="fw-lighter">Price</h5>
                <div class="slider">
                    <input type="range" min="0" max="10000" name="" id="">
                </div>
            </div>
            <hr>
            <div class="d-flex flex-column">
                <h5 class="fw-lighter">Sort by</h5>
                <a class="pfont my-2" href="#">Default</a>
                <a class="pfont my-2" href="#">Popularity</a>
                <a class="pfont my-2" href="#">Average rating</a>
                <a class="pfont my-2" href="#">Newness</a>
                <a class="pfont my-2" href="#">Price: low to High</a>
                <a class="pfont my-2" href="#">Price: high to low</a>
            </div>
            <hr>
            <div class="d-flex flex-column">
                <h5 class="fw-lighter">Color</h5>
                <div class="d-flex align-items-center">
                    <span class="dot bg-dark me-2"></span>
                    <a class="pfont my-auto" href="#">Black</a>
                </div>
                <div class="d-flex align-items-center">
                    <span class="dot brown me-2"></span>
                    <a class="pfont my-auto" href="#">Brown</a>
                </div>
                <div class="d-flex align-items-center">
                    <span class="dot bg-secondary me-2"></span>
                    <a class="pfont my-auto" href="#">Gray</a>
                </div>
                <div class="d-flex align-items-center">
                    <span class="dot bg-success me-2"></span>
                    <a class="pfont my-auto" href="#">Green</a>
                </div>
                <div class="d-flex align-items-center">
                    <span class="dot bg-danger me-2"></span>
                    <a class="pfont my-auto" href="#">red</a>
                </div>
                <div class="d-flex align-items-center">
                    <span class="dot bg-white border me-2"></span>
                    <a class="pfont my-auto" href="#">White</a>
                </div>
            </div>
            <hr>
            <div>
                <h5 class="fw-lighter">Tag</h5>
                <button class="rounded-pill tagbtn my-1">Bathroom</button>
                <button class="rounded-pill tagbtn my-1">Classic</button>
                <button class="rounded-pill tagbtn my-1">Comtemporary</button>
                <button class="rounded-pill tagbtn my-1">Decor</button>
                <button class="rounded-pill tagbtn my-1">Essentials</button>
                <button class="rounded-pill tagbtn my-1">Interior</button>
                <button class="rounded-pill tagbtn my-1">Kitchen</button>
                <button class="rounded-pill tagbtn my-1">Leather</button>
                <button class="rounded-pill tagbtn my-1">Lighting</button>
                <button class="rounded-pill tagbtn my-1">Minimal</button>
                <button class="rounded-pill tagbtn my-1">Pratical</button>
                <button class="rounded-pill tagbtn my-1">Travel</button>
                <button class="rounded-pill tagbtn my-1">Dining</button>
                <button class="rounded-pill tagbtn my-1">Table</button>
            </div>
        </aside>
        <!-- Products Section -->
        <section class="col-lg-10 col-md-12">
            <div class="row">

                <section id="sampleProduct" class="container my-5">
                    <div class="row d-flex justify-content-center">
                        <div class="container">
                            <div class="row">
                                @foreach($products as $product)
                                <div class="col-md-6 col-lg-4">
                                    <a href="{{ route('single.product', $product->id) }}" class="text-decoration-none">
                                        <div class="boximg">
                                            <div class="flip-box">
                                                <div class="flip-box-inner">
                                                    <div class="flip-box-front">

                                                        <img
                                                            src="{{$product->photos->first() ? asset($product->photos->first()->file) : 'http://via.placeholder.com/62x62'}}"
                                                            alt="stone lamp"
                                                            style="width: 300px; height: 300px"
                                                        />
                                                    </div>
                                                    <div class="flip-box-back">
                                                        <img
                                                            src="{{$product->photos->first() ? asset( $product->photos->skip(1)->first()->file) : 'http://via.placeholder.com/62x62'}}"
                                                            alt="stone lamp"
                                                            style="width: 300px; height: 300px"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="frontpage-product d-flex justify-content-between algin-items-center">
                                            <div>
                                                <p class="pfont my-3 ">{{$product->name}}</p>
                                                <p class="text-dark">{{ app('price')->format($product->price) }}</p>
                                            </div>
                                            <div class="mt-2">
                                                @if(Auth::user())
                                                <form action="{{ route('add.wishlist') }}" method="POST">
                                                    @csrf
                                                    @method ('POST')
                                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                                    <input type="hidden" name="name" value="{{$product->name}}">
                                                    <input type="hidden" name="price" value="{{$product->price}}">
                                                    <input type="hidden" name="image" value="{{$product->photos->first() ? asset( $product->photos->skip(1)->first()->file) : 'http://via.placeholder.com/62x62'}}">
                                                    @if(in_array($product->id, $wishlistProductIds))
                                                    <i class="bi bi-heart-fill fs-4 text-danger"></i><!-- Ícone de estrela preenchida -->
                                                    @else
                                                    <button class="bg-transparent border-0"><i class="bi bi-heart fs-4"></i></button>
                                                    @endif
                                                </form>
                                                <form action="{{ route('addproduct') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                                    <input type="hidden" name="name" value="{{ $product->name }}">
                                                    <input type="hidden" name="image" value="{{ $product->photos->first()->file ?? 'http://via.placeholder.com/62x62' }}">
                                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                                    <input type="hidden" name="quantity" value="1" min="1">
                                                    
                                                    <button type="submit" class="bg-transparent border-0 fs-4"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bag-plus" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z"/>
                                                            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                                                        </svg></button>
                                                    @else
                                                        <a href="{{ route('register') }}">Register</a>
                                                    @endif
                                                </form>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="mt-5">
                            {{$products->links()}}
                        </div>
                </section>
            </div>

        </section>
        @include('partials.return-policy')
    </div>
</div>
@include('partials._footer')
