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
        class="d-flex justify-content-around align-items-center bg-light "
    >
        <h1 class="logo mr-auto">
            <a class="navbar-brand" href="{{route('welcome')}}">
                <img
                    src="{{asset('imagens/Logo.png')}}"
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
                <div id="mySidepanel" class="sidepanel">

                    <!-- Overlay content -->

                    <!-- Button to close the overlay navigation -->
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="text-center">
                        <a href="#">Shop</a>
                        <a href="#">FAQ`s</a>
                        <a href="#">Contact</a>
                        @if (Route::has('login'))
                            <div>
                                @auth
                                    <a href="{{ url('/admin') }}">Home</a>
                                @else
                                    <a href="{{ route('login') }}" >Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                    <div class="mt-5 text-center">
                        <i class="bi bi-instagram socialicon"></i>
                        <i class="bi bi-facebook socialicon"></i>
                        <i class="bi bi-pinterest socialicon"></i>
                        <i class="bi bi-youtube socialicon"></i>
                    </div>
                </div>
                <!-- Use any element to open/show the overlay navigation menu -->
                <button class="d-inline-block d-lg-none openbtn" onclick="openNav()"
                >&#9776</button>

                <div class="navbar-nav">
                    <a
                        class="nav-link active d-none d-lg-inline-block mx-2"
                        aria-current="page"
                        href="{{route('welcome')}}"
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
                            <li><a class="dropdown-item" href="{{route('faq')}}">FAQ's</a></li>
                            <li><a class="dropdown-item" href="{{route('about')}}">About us</a></li>
                        </ul>
                    </li>
                    <a class="nav-link d-none d-lg-inline-block mx-2" href="{{route('contact')}}"
                    >Contact us</a
                    >
                </div>
            </div>
        </nav>
        <div class="d-flex justify-content-center align-items-center">
            <!-----button for Search-->
            <div class="searchBox">
                <input type="search" class="no-outline" placeholder="Search" />
                <i
                    class="fa-solid fa-magnifying-glass navicon  m-2"
                ></i>
            </div>
            <!-----end button for Search-->
            <!-----button for Login-->
            <div  class="d-flex align-items-center">
                @if (Route::has('login'))
                    <div>
                        @auth
                            <a href="{{ url('/admin') }}"><i
                                    class="fa-regular fa-circle-user navicon d-none d-lg-inline-block m-2"
                                ></i></a>
                        @else
                            <a href="{{ route('login') }}" class="fw-semibold d-none d-lg-inline-block"><i class="navicon fa-solid fa-right-to-bracket m-2"></i></a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="d-none d-lg-inline-block"><i class="navicon fa-solid fa-user-pen"></i></a>
                            @endif
                        @endauth
                    </div>
                @endif

            </div>
            <!-----end button for Login-->
            <!-----button for Checklist-->
            <x-offcanvas title="Whishlist" display="d-none d-lg-inline-block" >nuno</x-offcanvas>
            <!-----End button for checklist-->
            <!-----button for basket-->
            <x-offcanvas title="Your Cart (2)" number="2" icon="fas fa-shopping-bag">
                <!-- Header-->
                <div class="offcanvas-header lh-fixed fs-lg">

                </div>

                <!-- List group -->
                <ul class="list-group list-group-lg list-group-flush">
                    <li class="list-group-item mb-2">
                        <div class="row align-items-center">
                            <div class="col-4">

                                <!-- Image -->
                                <a href="./product.html">
                                    <img class="img-fluid" src="{{asset('imagens/toa-heftiba.jpg')}}" alt="...">
                                </a>

                            </div>
                            <div class="col-8">

                                <!-- Title -->
                                <p class="fs-sm fw-bold mb-6">
                                    <a class="text-body" href="./product.html">Cotton floral print Dress</a> <br>
                                    <span class="text-muted">&euro;40.00</span>
                                </p>

                                <!--Footer -->
                                <div class="d-flex align-items-center">

                                    <!-- Select -->
                                    <select class="form-select form-select-xxs w-auto">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                    </select>

                                    <!-- Remove -->
                                    <a class="fs-xs text-gray-400 ms-auto" href="#!">
                                        <i class="fe fe-x"></i> Remove
                                    </a>

                                </div>

                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row align-items-center">
                            <div class="col-4">

                                <!-- Image -->
                                <a href="./product.html">
                                    <img class="img-fluid" src="{{asset('imagens/stone-lamp-black-450x450.jpg.webp')}}" alt="...">
                                </a>

                            </div>
                            <div class="col-8">

                                <!-- Title -->
                                <p class="fs-sm fw-bold mb-6">
                                    <a class="text-body" href="./product.html">Suede cross body Bag</a> <br>
                                    <span class="text-muted">$49.00</span>
                                </p>

                                <!--Footer -->
                                <div class="d-flex align-items-center">

                                    <!-- Select -->
                                    <select class="form-select form-select-xxs w-auto">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                    </select>

                                    <!-- Remove -->
                                    <a class="fs-xs text-gray-400 ms-auto" href="#!">
                                        <i class="fe fe-x"></i> Remove
                                    </a>

                                </div>

                            </div>
                        </div>
                    </li>
                </ul>

                <!-- Footer -->
                <div class="offcanvas-footer justify-between lh-fixed fs-sm bg-light mt-5 py-3">
                    <strong>Subtotal</strong> <strong class="ms-auto">$89.00</strong>
                </div>

                <!-- Buttons -->
                <div class="offcanvas-body">
                    <a class="btn w-100 btn-dark" href="{{route('checkout')}}">Continue to Checkout</a>
                    <a class="btn w-100 btn-outline-dark mt-2" href="{{route('cart')}}">View Cart</a>
                </div>

                <!-- Empty cart (remove `.d-none` to enable it) -->
                <div class="d-none">

                    <!-- Close -->
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="fe fe-x" aria-hidden="true"></i>
                    </button>

                    <!-- Header-->
                    <div class="offcanvas-header lh-fixed fs-lg">
                        <strong class="mx-auto">Your Cart (0)</strong>
                    </div>

                    <!-- Body -->
                    <div class="offcanvas-body flex-grow-0 my-auto">

                        <!-- Heading -->
                        <h6 class="mb-7 text-center">Your cart is empty 😞</h6>

                        <!-- Button -->
                        <a class="btn w-100 btn-outline-dark" href="#!">
                            Continue Shopping
                        </a>

                    </div>

                </div>
            </x-offcanvas>
            <!----- end button for basket-->
        </div>
    </div>
</header>
<!--END NAVBAR-->
