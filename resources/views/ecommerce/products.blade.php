@include('components._header')
<!--PRODUCT -->
<div class="container-fluid">
    <div class="row d-flex">


        <div class="text-center">
            <h2 class="fw-normal my-4"><small>Designer's Portfolio</small> </h2>
            <p class="pfont">The Cast Lighting Series aesthetic presence rivals its versatility.</p>
        </div>
        <!--Breadcrumb-->
        <div class="d-flex my-4">
            <div>
                <a href="{{route('welcome')}}" class="indexfooter p-1">Home</a>
            </div>
            <div class="mx-2">
                <span>/</span>
                <a href="{{route('products')}}" class="indexfooter p-1">Products</a>
            </div>
        </div>
        <!-- Filter modal Section -->
        <a class="btn btn-sm  d-lg-none mx-auto" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            Filter
        </a>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
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
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 px-2">
                                <div class="col">
                                    <a href="{{route('single.product')}}" class="text-decoration-none">
                                        <div class="boximg">
                                            <div class="flip-box">
                                                <div class="flip-box-inner">
                                                    <div class="flip-box-front">
                                                        <img
                                                            src="{{asset('imagens/Lighting/Stone-lamp/stone-lamp-white2-768x768.jpg.webp')}}"
                                                            alt="stone lamp"
                                                            style="width: 300px; height: 300px"
                                                        />
                                                    </div>
                                                    <div class="flip-box-back">
                                                        <img
                                                            src="{{asset('imagens/Lighting/Stone-lamp/stone-lamp-black-450x450.jpg.webp')}}"
                                                            alt="Paris"
                                                            style="width: 300px; height: 300px"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="pfont my-3 ">Produto.component</p>
                                            <p class="text-dark" >Produto.price</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="{{route('single.product')}}" class="text-decoration-none">
                                        <div class="boximg">
                                            <div class="flip-box">
                                                <div class="flip-box-inner">
                                                    <div class="flip-box-front">
                                                        <img
                                                            src="{{asset('imagens/Lighting/Stone-lamp/stone-lamp-white2-768x768.jpg.webp')}}"
                                                            alt="stone lamp"
                                                            style="width: 300px; height: 300px"
                                                        />
                                                    </div>
                                                    <div class="flip-box-back">
                                                        <img
                                                            src="{{asset('imagens/Lighting/Stone-lamp/stone-lamp-black-450x450.jpg.webp')}}"
                                                            alt="Paris"
                                                            style="width: 300px; height: 300px"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="pfont my-3 ">Produto.component</p>
                                            <p class="text-dark" >Produto.price</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="{{route('single.product')}}" class="text-decoration-none">
                                        <div class="boximg">
                                            <div class="flip-box">
                                                <div class="flip-box-inner">
                                                    <div class="flip-box-front">
                                                        <img
                                                            src="{{asset('imagens/Lighting/Stone-lamp/stone-lamp-white2-768x768.jpg.webp')}}"
                                                            alt="stone lamp"
                                                            style="width: 300px; height: 300px"
                                                        />
                                                    </div>
                                                    <div class="flip-box-back">
                                                        <img
                                                            src="{{asset('imagens/Lighting/Stone-lamp/stone-lamp-black-450x450.jpg.webp')}}"
                                                            alt="Paris"
                                                            style="width: 300px; height: 300px"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="pfont my-3 ">Produto.component</p>
                                            <p class="text-dark" >Produto.price</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="{{route('single.product')}}" class="text-decoration-none">
                                        <div class="boximg">
                                            <div class="flip-box">
                                                <div class="flip-box-inner">
                                                    <div class="flip-box-front">
                                                        <img
                                                            src="{{asset('imagens/Lighting/Stone-lamp/stone-lamp-white2-768x768.jpg.webp')}}"
                                                            alt="stone lamp"
                                                            style="width: 300px; height: 300px"
                                                        />
                                                    </div>
                                                    <div class="flip-box-back">
                                                        <img
                                                            src="{{asset('imagens/Lighting/Stone-lamp/stone-lamp-black-450x450.jpg.webp')}}"
                                                            alt="Paris"
                                                            style="width: 300px; height: 300px"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="pfont my-3 ">Produto.component</p>
                                            <p class="text-dark" >Produto.price</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="{{route('single.product')}}" class="text-decoration-none">
                                        <div class="boximg">
                                            <div class="flip-box">
                                                <div class="flip-box-inner">
                                                    <div class="flip-box-front">
                                                        <img
                                                            src="{{asset('imagens/Lighting/Stone-lamp/stone-lamp-white2-768x768.jpg.webp')}}"
                                                            alt="stone lamp"
                                                            style="width: 300px; height: 300px"
                                                        />
                                                    </div>
                                                    <div class="flip-box-back">
                                                        <img
                                                            src="{{asset('imagens/Lighting/Stone-lamp/stone-lamp-black-450x450.jpg.webp')}}"
                                                            alt="Paris"
                                                            style="width: 300px; height: 300px"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="pfont my-3 ">Produto.component</p>
                                            <p class="text-dark" >Produto.price</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="{{route('single.product')}}" class="text-decoration-none">
                                        <div class="boximg">
                                            <div class="flip-box">
                                                <div class="flip-box-inner">
                                                    <div class="flip-box-front">
                                                        <img
                                                            src="{{asset('imagens/Lighting/Stone-lamp/stone-lamp-white2-768x768.jpg.webp')}}"
                                                            alt="stone lamp"
                                                            style="width: 300px; height: 300px"
                                                        />
                                                    </div>
                                                    <div class="flip-box-back">
                                                        <img
                                                            src="{{asset('imagens/Lighting/Stone-lamp/stone-lamp-black-450x450.jpg.webp')}}"
                                                            alt="Paris"
                                                            style="width: 300px; height: 300px"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="pfont my-3 ">Produto.component</p>
                                            <p class="text-dark" >Produto.price</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="{{route('single.product')}}" class="text-decoration-none">
                                        <div class="boximg">
                                            <div class="flip-box">
                                                <div class="flip-box-inner">
                                                    <div class="flip-box-front">
                                                        <img
                                                            src="{{asset('imagens/Lighting/Stone-lamp/stone-lamp-white2-768x768.jpg.webp')}}"
                                                            alt="stone lamp"
                                                            style="width: 300px; height: 300px"
                                                        />
                                                    </div>
                                                    <div class="flip-box-back">
                                                        <img
                                                            src="{{asset('imagens/Lighting/Stone-lamp/stone-lamp-black-450x450.jpg.webp')}}"
                                                            alt="Paris"
                                                            style="width: 300px; height: 300px"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="pfont my-3 ">Produto.component</p>
                                            <p class="text-dark" >Produto.price</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="{{route('single.product')}}" class="text-decoration-none">
                                        <div class="boximg">
                                            <div class="flip-box">
                                                <div class="flip-box-inner">
                                                    <div class="flip-box-front">
                                                        <img
                                                            src="{{asset('imagens/Lighting/Stone-lamp/stone-lamp-white2-768x768.jpg.webp')}}"
                                                            alt="stone lamp"
                                                            style="width: 300px; height: 300px"
                                                        />
                                                    </div>
                                                    <div class="flip-box-back">
                                                        <img
                                                            src="{{asset('imagens/Lighting/Stone-lamp/stone-lamp-black-450x450.jpg.webp')}}"
                                                            alt="Paris"
                                                            style="width: 300px; height: 300px"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="pfont my-3 ">Produto.component</p>
                                            <p class="text-dark" >Produto.price</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="{{route('single.product')}}" class="text-decoration-none">
                                        <div class="boximg">
                                            <div class="flip-box">
                                                <div class="flip-box-inner">
                                                    <div class="flip-box-front">
                                                        <img
                                                            src="{{asset('imagens/Lighting/Stone-lamp/stone-lamp-white2-768x768.jpg.webp')}}"
                                                            alt="stone lamp"
                                                            style="width: 300px; height: 300px"
                                                        />
                                                    </div>
                                                    <div class="flip-box-back">
                                                        <img
                                                            src="{{asset('imagens/Lighting/Stone-lamp/stone-lamp-black-450x450.jpg.webp')}}"
                                                            alt="Paris"
                                                            style="width: 300px; height: 300px"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="pfont my-3 ">Produto.component</p>
                                            <p class="text-dark" >Produto.price</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <button class="btn">Paginacao</button>
                </section>
            </div>

        </section>
    </div>
</div>
@include('components._footer')
