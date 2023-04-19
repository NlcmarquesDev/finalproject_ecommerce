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
                                    <a href="{{ url('/admin') }}" ">Home</a>
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
