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
        <div class="d-flex flex-wrap justify-content-around align-items-center my-4">
            @foreach ($products as $product)
                <livewire:show-products :product="$product" wire:key="'product'.{{ $product->id }}">
                </livewire:show-products>
            @endforeach
        </div>
        <a href="{{ route('products') }}" class="btn">View All</a>
    </div>
</section>
<!--END PRODUCT SAMPLE -->
