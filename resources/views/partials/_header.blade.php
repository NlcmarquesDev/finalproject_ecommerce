<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
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
        <div class="d-flex flex-column">
            <h1 class="logo mx-auto">
                <a class="navbar-brand" href="{{route('welcome')}}">
                    <img
                        src="{{asset('imagens/Logo.png')}}"
                        alt="Nuno Marques"
                        width="51"
                        height="50"
                    />
                </a>
            </h1>
            @if (Route::has('login'))
                @auth
                    <p>Welcome <span> {{ Auth::user()->name }}</span> </p>
                @endauth
                @endif
        </div>

        <!-- Collapse button -->
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <!-- The overlay -->
                <div id="mySidepanel" class="sidepanel">

                    <!-- Overlay content -->

                    <!-- Button to close the overlay navigation -->
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="text-center">


                                <a class="dropdown-item" href="{{route('checkout')}}">My Checkout</a>
                                <a class="dropdown-item" href="{{route('about')}}">Orders</a>
                                <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{__('Logout')}}</a>
                                            <form id="logout-form" action="{{route('logout')}}" method="POST">
                                                @csrf
                                            </form>


                        <a href="#">Shop</a>
                        <a href="#">FAQ`s</a>
                        <a href="#">Contact</a>

                            <div>
                                @auth
                                    @can('admin')
                                     <a href="{{ url('/admin') }}">Home</a>
                                    @endcan
                                @else
                                    <a href="{{ route('login') }}" >Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                            </div>

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

                    <a class="nav-link d-none d-lg-inline-block mx-2" href="{{route('contact')}}">Contact us</a>

                    @if (Route::has('login'))
                        @auth
                    <li class="nav-item dropdown mx-2">
                        <a
                            class="nav-link dropdown-toggle d-none d-lg-inline-block"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            My Account
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('faq')}}">Dashboard</a></li>
                            <li><a class="dropdown-item" href="#">My Whishlist</a></li>
                            <li><a class="dropdown-item" href="{{route('checkout')}}">My Checkout</a></li>
                            <li><a class="dropdown-item" href="{{route('about')}}">Orders</a></li>
                            <li><a class="dropdown-item" href="{{route('about')}}">My Settings</a></li>
                            <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{__('Logout')}}</a>
                                <form id="logout-form" action="{{route('logout')}}" method="POST">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                        @endauth
                    @endif
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
                    <div class="d-flex">
                        @auth
                            @if(Auth::user()->isAdmin() == '1')
                                <a href="{{ url('/admin') }}"><i
                                        class="fa-regular fa-circle-user navicon d-none d-lg-inline-block m-2"
                                    ></i></a>
                            @endif
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
            <x-offcanvas title="Whishlist" display="d-none d-lg-inline-block" >ola</x-offcanvas>
            <!-----End button for checklist-->
            <!-----button for basket-->

            @if ($showCart())
                <x-offcanvas title="Your Cart {{$numberOfProducts}}" number="2" icon="fas fa-shopping-bag" numbercart="{{$numberOfProducts}}">
                    @include('ecommerce.offcanvas-cart')
                </x-offcanvas>
            @endif
            <!----- end button for basket-->
        </div>
    </div>
</header>
<!--END NAVBAR-->
