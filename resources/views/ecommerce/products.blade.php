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
                <livewire:filter-shop />
            </div>
        </div>
        <!-- Filter Section -->

        <livewire:filter-shop />

        @include('partials.return-policy')
    </div>
</div>
@include('partials._footer')
