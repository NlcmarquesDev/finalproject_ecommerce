<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NM Luxury is Simple</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <!--    <link-->
    <!--      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"-->
    <!--      rel="stylesheet"-->
    <!--      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"-->
    <!--      crossorigin="anonymous"-->
    <!--    />-->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
</head>
<body>
<!--NAVBAR-->
<header id="header">
    <div
        id="nav"
        class="d-flex justify-content-around align-items-center bg-light"
    >
        <h1 class="logo mr-auto">
            <a class="navbar-brand" href="#">
                <img
                    src="../images/Logo.png"
                    alt="Nuno Marques"
                    width="51"
                    height="50"
                />
            </a>
        </h1>
        <!-- Collapse button -->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <!-- The overlay -->
                <div id="myNav" class="overlay">
                    <!-- Button to close the overlay navigation -->

                    <!-- Overlay content -->
                    <div class="overlay-content">
                        <div>
                            <a href="#">Shop</a>
                            <a href="#">FAQ`s</a>
                            <a href="#">Contact</a>
                            <a href="#">Login</a>

                            <div class="mt-5">
                                <i class="bi bi-instagram socialicon"></i>
                                <i class="bi bi-facebook socialicon"></i>
                                <i class="bi bi-pinterest socialicon"></i>
                                <i class="bi bi-youtube socialicon"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Use any element to open/show the overlay navigation menu -->
                    <a
                        class="d-inline-block d-lg-none navicon"
                        href="javascript:void(0)"
                        onclick="openNav()"
                    ><i class="bi bi-list"></i
                        ></a>

                    <div class="navbar-nav">
                        <a
                            class="nav-link active d-none d-lg-inline-block mx-2"
                            aria-current="page"
                            href="#"
                        >Home</a
                        >
                        <li class="nav-item dropdown mx-2">
                            <a
                                class="nav-link dropdown-toggle d-none d-lg-inline-block"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Products
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Accessories</a></li>
                                <li><a class="dropdown-item" href="#">Dining</a></li>
                                <li><a class="dropdown-item" href="#">Furniture</a></li>
                                <li><a class="dropdown-item" href="#">Lighting</a></li>
                                <li><a class="dropdown-item" href="#">Living</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown mx-2">
                            <a
                                class="nav-link dropdown-toggle d-none d-lg-inline-block"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Elements
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">FAQ's</a></li>
                                <li><a class="dropdown-item" href="#">About us</a></li>
                            </ul>
                        </li>
                        <a class="nav-link d-none d-lg-inline-block mx-2" href="#"
                        >Contact us</a
                        >
                    </div>
                </div>
        </nav>
        <div class="d-flex">
            <!-----button for Searche-->
            <div class="searchBox">
                <input type="search" class="no-outline" placeholder="Search" />
                <i
                    class="fa-solid fa-magnifying-glass navicon d-none d-lg-inline-block m-2"
                ></i>
            </div>
            <!-----button for Login-->
            <div>
                <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                    @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                            @auth
                                <a href="{{ url('/admin') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><i
                                        class="fa-regular fa-circle-user navicon d-none d-lg-inline-block m-2"
                                    ></i></a>
                            @else
                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>

            </div>

            <!-----button for Checklist-->
            <div>
                <button
                    type="button"
                    data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight"
                    data-bs-toggle="offcanvas"
                    class="bg-transparent border-0"
                >
                    <div class="boxbol d-none d-lg-inline-block">
                        <i
                            class="fa-regular fa-heart navicon d-none d-lg-inline-block m-2"
                        ></i>
                        <span class="numberbol">9</span>
                    </div>
                </button>

                <div
                    class="offcanvas offcanvas-end"
                    tabindex="-1"
                    id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel"
                >
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasRightLabel">
                            Whislst Items
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="offcanvas"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="offcanvas-body">
                        <div>Nuno</div>
                    </div>
                </div>
            </div>

            <!-----End button for checklist-->
            <!-----button for basket-->
            <div>
                <button
                    type="button"
                    data-bs-target="#offcanvasRightcard"
                    aria-controls="offcanvasRightcard"
                    data-bs-toggle="offcanvas"
                    class="bg-transparent border-0"
                >
                    <div class="boxbol">
                        <i class="fas fa-shopping-bag navicon m-2"></i>
                        <span class="numberbol">9</span>
                    </div>
                </button>

                <div
                    class="offcanvas offcanvas-end"
                    tabindex="-1"
                    id="offcanvasRightcard"
                    aria-labelledby="offcanvasRightLabelcard"
                >
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasRightLabelcard">
                            Card Items
                        </h5>
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="offcanvas"
                            aria-label="Close"
                        ></button>
                    </div>
                    <div class="offcanvas-body">marques</div>
                </div>
            </div>

            <!----- end button for basket-->
        </div>
    </div>
</header>
<!--END NAVBAR-->

<!--HERO -->
<div class="cont s--inactive">
    <!-- cont inner start -->
    <div class="cont__inner">
        <!-- el start -->
        <div class="el">
            <div class="el__overflow">
                <div class="el__inner">
                    <div class="el__bg"></div>
                    <div class="el__preview-cont">
                        <h2 class="el__heading">Accessories</h2>
                    </div>
                    <div class="el__content">
                        <div class="el__text">
                            <a href="#" class="text-decoration-none text-white"
                            >Marbel Wall Clock</a
                            >
                        </div>

                        <div class="el__close-btn"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- el end -->
        <!-- el start -->
        <div class="el">
            <div class="el__overflow">
                <div class="el__inner">
                    <div class="el__bg"></div>
                    <div class="el__preview-cont">
                        <h2 class="el__heading">Living</h2>
                    </div>
                    <div class="el__content">
                        <div class="el__text">
                            <a href="#" class="text-decoration-none text-white"
                            >Kredenets Sneackers</a
                            >
                        </div>
                        <div class="el__close-btn"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- el end -->
        <!-- el start -->
        <div class="el">
            <div class="el__overflow">
                <div class="el__inner">
                    <div class="el__bg"></div>
                    <div class="el__preview-cont">
                        <h2 class="el__heading">Furniture</h2>
                    </div>
                    <div class="el__content">
                        <div class="el__text">
                            <a href="#" class="text-decoration-none text-white"
                            >Andrea light
                            </a>
                        </div>
                        <div class="el__close-btn"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- el end -->
        <!-- el start -->
        <div class="el">
            <div class="el__overflow">
                <div class="el__inner">
                    <div class="el__bg"></div>
                    <div class="el__preview-cont">
                        <h2 class="el__heading">Lighting</h2>
                    </div>
                    <div class="el__content">
                        <div class="el__text">
                            <a href="#" class="text-decoration-none text-white"
                            >Andreea light
                            </a>
                        </div>
                        <div class="el__close-btn"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- el end -->
        <!-- el start -->
        <div class="el">
            <div class="el__overflow">
                <div class="el__inner">
                    <div class="el__bg"></div>
                    <div class="el__preview-cont">
                        <h2 id="diningColor" class="el__heading">Dining</h2>
                    </div>
                    <div class="el__content">
                        <div class="el__text">
                            <a href="#" class="text-decoration-none text-white"
                            >Thin Haus Tabel
                            </a>
                        </div>
                        <div class="el__close-btn"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- el end -->
    </div>
    <!-- cont inner end -->
</div>
<!--END HERO-->

<!--CONTENT -->
<section
    id="products"
    class="container d-flex justify-content-center align-items-center"
>
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <img
                id="imgLamp"
                src="../Imagens/Lighting/Cast_Sconce_Wall_Lamp_left.png"
                alt="cast lamp"
            />
        </div>
        <div
            id="articleslamp"
            class="col-12 col-lg-4 d-flex flex-column justify-content-center"
        >
            <div class="d-flex align-items-center">
                <div class="bolicon"><i class="bi bi-lightbulb icon"></i></div>
                <div>
                    <h4>Industrial Design</h4>
                    <p class="pfont">
                        Geometric forms rendered in <br />
                        industrial, cast aluminum.
                    </p>
                </div>
            </div>
            <div class="d-flex align-items-center my-5">
                <div class="bolicon">
                    <i class="bi bi-box-arrow-in-up icon"></i>
                </div>
                <div class="mt-3">
                    <h4>Sophisticated Built</h4>
                    <p class="pfont">
                        Pleasant, glare-free illumination <br />
                        delivered via sculptural fixtures.
                    </p>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div class="bolicon"><i class="bi bi-eyedropper icon"></i></div>
                <div>
                    <h4>Superb Finish</h4>
                    <p class="pfont">
                        Cast aluminum with a smooth, warm <br />
                        and tactile finish.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END CONTENT -->

<!--CONTENT PUBLICITY -->
<section id="pubCont" class="d-flex flex-column justify-content-center">
    <div class="row">
        <div class="text-center">
            <h4 class="gold">CONNECTED SPACES</h4>
            <h2 class="my-5">Redefine how we use space</h2>
            <p class="fw-lighter">
                Top designers and craftspeople around the world to create
                contemporary furniture, lighting and <br />
                accessories that are clean, clever and natural.
            </p>
        </div>
    </div>
</section>
<!--END CONTENT VIDEO -->

<!--PRODUCT SAMPLE -->
<section id="sampleProduct" class="container my-5">
    <div class="row d-flex justify-content-center">
        <div class="text-center">
            <p class="gold">O U T S T A N D I N G</p>
            <h2 class="fw-normal my-4"><small>Designer's Portfolio</small></h2>
            <p class="pfont">
                The Cast Lighting Series aesthetic presence rivals its versatility.
            </p>
        </div>
        <div
            class="d-flex flex-wrap justify-content-around align-items-center my-4"
        >
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="boximg">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img
                                    src="../Imagens/Lighting/Stone-lamp/stone-lamp-white2-768x768.jpg.webp"
                                    alt="stone lamp"
                                    style="width: 300px; height: 300px"
                                />
                            </div>
                            <div class="flip-box-back">
                                <img
                                    src="../Imagens/Lighting/Stone-lamp/stone-lamp-black-450x450.jpg.webp"
                                    alt="Paris"
                                    style="width: 300px; height: 300px"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="pfont my-3">Produto.component</p>
                    <p>Produto.price</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="boximg">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img
                                    src="../Imagens/Lighting/Stone-lamp/stone-lamp-white2-768x768.jpg.webp"
                                    alt="stone lamp"
                                    style="width: 300px; height: 300px"
                                />
                            </div>
                            <div class="flip-box-back">
                                <img
                                    src="../Imagens/Lighting/Stone-lamp/stone-lamp-black-450x450.jpg.webp"
                                    alt="Paris"
                                    style="width: 300px; height: 300px"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="pfont my-3">Produto.component</p>
                    <p>Produto.price</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="boximg">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img
                                    src="../Imagens/Lighting/Stone-lamp/stone-lamp-white2-768x768.jpg.webp"
                                    alt="stone lamp"
                                    style="width: 300px; height: 300px"
                                />
                            </div>
                            <div class="flip-box-back">
                                <img
                                    src="../Imagens/Lighting/Stone-lamp/stone-lamp-black-450x450.jpg.webp"
                                    alt="Paris"
                                    style="width: 300px; height: 300px"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="pfont my-3">Produto.component</p>
                    <p>Produto.price</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
                <div class="boximg">
                    <div class="flip-box">
                        <div class="flip-box-inner">
                            <div class="flip-box-front">
                                <img
                                    src="../Imagens/Lighting/Stone-lamp/stone-lamp-white2-768x768.jpg.webp"
                                    alt="stone lamp"
                                    style="width: 300px; height: 300px"
                                />
                            </div>
                            <div class="flip-box-back">
                                <img
                                    src="../Imagens/Lighting/Stone-lamp/stone-lamp-black-450x450.jpg.webp"
                                    alt="Paris"
                                    style="width: 300px; height: 300px"
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <p class="pfont my-3">Produto.component</p>
                    <p>Produto.price</p>
                </div>
            </div>
        </div>
        <button class="btn">View All</button>
    </div>
</section>
<!--END PRODUCT SAMPLE -->

<!--RETURN POLICY-->
<section
    id="returnPolicy"
    class="d-flex flex-column justify-content-center"
>
    <div class="row">
        <div class="text-center">
            <h4 class="gold">CONNECTED SPACES</h4>
            <h2 class="my-4">Redefine how we use space</h2>
            <p class="fw-lighter">
                Top designers and craftspeople around the world to create
                contemporary furniture, lighting and <br />
                accessories that are clean, clever and natural.
            </p>
            <i class="bi bi-arrow-counterclockwise fs-1"></i>
            <p>30 Days return</p>
            <p class="fw-lighter">Check for more information in faq's</p>
        </div>
    </div>
</section>
<!--END RETURN POLICY -->

<!--NEWSLETTER AND DISCOUNT-->
<section id="newsletter">
    <div
        id="discount"
        class="d-lg-flex justify-content-center align-items-center text-center pt-5 pt-lg-0"
    >
        <header class="me-4">
            <h2><i>Get Discount 25% off</i></h2>
        </header>
        <form id="formemail" action="" class="pt-5 pt-lg-0 text-center">
            <input
                type="email"
                name="email"
                id="email"
                class="no-outline"
                placeholder="Enter your email ..."
            />
            <button class="border-0" type="submit">
                <i id="envelope" class="bi bi-envelope bg-transparent"></i>
            </button>
        </form>
    </div>
    <hr />
    <div
        id="contentfooter"
        class="d-md-flex justify-content-around align-items-center"
    >
        <div class="text-center">
            <span class="creator">&copy; 2023 NMarques</span>
        </div>
        <div class="text-center m-2 m">
            <a href="#products" class="indexfooter p-1">Products</a>
            <a href="#about" class="indexfooter p-1">About us</a>
            <a href="#faq" class="indexfooter p-1">FAQ's</a>
            <a href="#contact" class="indexfooter p-1">Contact us</a>
        </div>
        <div class="iconfooter text-center">
            <a href="#"><i class="bi bi-instagram navicon m-2"></i></a>
            <a href="#"><i class="bi bi-facebook navicon m-2"></i></a>
            <a href="#"><i class="bi bi-pinterest navicon m-2"></i></a>
            <a href="#"><i class="bi bi-youtube navicon m-2"></i></a>
        </div>
    </div>
</section>
<!--END NEWSLETTER AND DISCOUNT-->

<script
    src="https://kit.fontawesome.com/e644b18eb6.js"
    crossorigin="anonymous"
></script>
{{--<script--}}
{{--    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"--}}
{{--    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"--}}
{{--    crossorigin="anonymous"--}}
{{--></script>--}}
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
