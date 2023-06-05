@include('partials._header')
<!--PRODUCT -->
<!--Breadcrumb-->
<x-breadcrumb :items="[['name' => 'Home', 'route' => route('welcome')], ['name' => 'Products', 'route' => route('products')]]"></x-breadcrumb>
<div class="container-fluid">
    <div class="row d-flex">


        <div class="text-center">
            <h2 class="fw-normal my-4"><small>Designer's Portfolio</small></h2>
            <p class="pfont">The Cast Lighting Series aesthetic presence rivals its versatility.</p>
        </div>

        <!-- Filter modal Section -->

        <livewire:filter-shop />

        @include('partials.return-policy')
    </div>
</div>
@include('partials._footer')
