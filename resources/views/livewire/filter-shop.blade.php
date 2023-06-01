<aside class="col-lg-2 col-md-4 filter mt-5 d-none d-lg-inline-block ps-4 ">
    <div class="d-flex flex-column">
        <h5 class="fw-lighter">Categories</h5>
        <input wire:model.debounce.500ms="search" name="search" type="search" placeholder="Product name"
            class="pfont rounded-pill border border-3 p-2">
        <a class="pfont my-2" href="{{ route('products') }}">All</a>
        @foreach ($categories as $category)
            <div class="form-check">
                <input wire:click="sortBy('{{ $category->name }}')" value="{{ $category->name }}" type="checkbox"
                    class="form-check-input pfont">
                <label for="{{ $category->name }}" class="form-check-label pfont">{{ $category->name }}</label>
            </div>
        @endforeach
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
        @foreach ($colors as $color)
            <div class="d-flex align-items-center">
                <span class="dot bg-{{ $color->name }} me-2"></span>
                <a wire:click="sortBy('{{ $color->name }}')" class="pfont my-auto"
                    href="#">{{ $color->name }}</a>
            </div>
        @endforeach
    </div>
    <hr>
    <div>
        <h5 class="fw-lighter">Tag</h5>
        @foreach ($hastags as $hastag)
            <button wire:click="sortBy('{{ $hastag->name }}')"
                class="rounded-pill tagbtn my-1">{{ $hastag->name }}</button>
        @endforeach
    </div>
</aside>
<!-- Products Section -->
<section class="col-lg-10 col-md-12">
    <div class="row">
        <section id="sampleProduct" class="container my-5">
            <div class="row d-flex justify-content-center">
                <div class="container">
                    <div class="row">

                        @foreach ($products as $product)
                            <livewire:show-products :product="$product" wire:key="'product'.{{ $product->id }}">
                            </livewire:show-products>
                            {{-- {{ $product->name }} --}}
                        @endforeach
                    </div>
                    <div class="mt-5">
                        {{-- {{ $products->links() }} --}}
                    </div>
                </div>
        </section>
    </div>

</section>
