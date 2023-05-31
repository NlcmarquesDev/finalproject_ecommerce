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
                <livewire:filter-products />
            </div>
        </div>
        <!-- Filter Section -->
        <aside class="col-lg-2 col-md-4 filter my-auto d-none d-lg-inline-block ps-4 ">
            <livewire:filter-products />
        </aside>
        <!-- Products Section -->
        <section class="col-lg-10 col-md-12">
            <div class="row">

                <section id="sampleProduct" class="container my-5">
                    <div class="row d-flex justify-content-center">
                        <div class="container">
                            <div class="row">
                                @foreach ($products as $product)
                                    @livewire('show-product', ['product' => $product])
                                @endforeach
                            </div>
                            <div class="mt-5">
                                {{ $products->links() }}
                            </div>
                        </div>
                </section>
            </div>

        </section>
        @include('partials.return-policy')
    </div>
</div>
@include('partials._footer')
