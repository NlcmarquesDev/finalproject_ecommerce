<div class="d-lg-flex">
    <div class="d-flex justify-content-center">
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
                <aside class="col-lg-2 col-md-4 filter mt-5 ps-4 ">
                    <div class="d-flex flex-column">
                        <h5 class="fw-lighter">Categories</h5>
                        <input wire:model.debounce.500ms="search" name="search" type="search"
                            placeholder="Product name" class="pfont rounded-pill border border-3 p-2">
                        <a class="pfont my-2" href="{{ route('products') }}">All</a>
                        @foreach ($categories as $category)
                            <div class="form-check">
                                <input wire:click.prevent="sortBy('{{ $category->name }}')"
                                    value="{{ $category->name }}" type="checkbox" class="form-check-input pfont">
                                <label for="{{ $category->name }}"
                                    class="form-check-label pfont">{{ $category->name }}</label>
                            </div>
                        @endforeach
                    </div>
                    <hr>

                    <div class="d-flex flex-column">
                        <h5 class="fw-lighter">Sort by</h5>
                        <div class="form-check">
                            <input wire:model="high" type="checkbox" class="form-check-input pfont">
                            <label class="form-check-label pfont">Price: high to low</label>
                        </div>
                        <div class="form-check">
                            <input wire:model="low" type="checkbox" class="form-check-input pfont">
                            <label class="form-check-label pfont">Price: low to high</label>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex flex-column">
                        <h5 class="fw-lighter">Color</h5>
                        @foreach ($colors as $color)
                            <div class="d-flex align-items-center">
                                <span class="dot me-2" style="background-color: {{ $color->code }};"></span>
                                <a wire:click="colorBy('{{ $color->name }}')" class="pfont my-auto"
                                    href="#">{{ $color->name }}</a>
                            </div>
                        @endforeach
                    </div>
                    <hr>
                    <div>
                        <h5 class="fw-lighter">Tag</h5>
                        @foreach ($hastags as $hastag)
                            <button wire:click="toggleHastag('{{ $hastag->name }}')"
                                class="rounded-pill tagbtn my-1">{{ $hastag->name }}</button>
                        @endforeach
                    </div>
                    <div class="mt-4">
                        <a class="btn btn-dark w-100 my-2" href="{{ route('products') }}">Clear Filter</a>
                    </div>
            </div>
        </div>
    </div>

    <!-- Filter Section -->
    <aside class="d-none  d-lg-block col-lg-2 col-md-4 filter mt-5  ps-4 ">
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

        <div class="d-flex flex-column">
            <h5 class="fw-lighter">Sort by</h5>
            <div class="form-check">
                <label class="form-check-label pfont">
                    <input wire:model="high" type="checkbox" class="form-check-input pfont">
                    Price: high to low
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label pfont">
                    <input wire:model="low" type="checkbox" class="form-check-input pfont">
                    Price: low to high
                </label>
            </div>
        </div>
        <hr>
        <div class="d-flex flex-column">
            <h5 class="fw-lighter">Color</h5>
            @foreach ($colors as $color)
                <div class="d-flex align-items-center">
                    <span class="dot me-2" style="background-color: {{ $color->code }};"></span>
                    <a wire:click="colorBy('{{ $color->name }}')" class="pfont my-auto"
                        href="#">{{ $color->name }}</a>
                </div>
            @endforeach
        </div>
        <hr>
        <div>
            <h5 class="fw-lighter">Tag</h5>
            @foreach ($hastags as $hastag)
                <button wire:click="toggleHastag('{{ $hastag->name }}')"
                    class="rounded-pill tagbtn my-1">{{ $hastag->name }}</button>
            @endforeach
        </div>
        <div class="mt-4">
            <a class="btn btn-dark w-100 my-2" href="{{ route('products') }}">Clear Filter</a>
        </div>
    </aside>
    <!-- Products Section -->
    <section class="col-lg-10 col-md-12">
        <div class="row">
            <section id="sampleProduct" class="container my-5">
                <div class="row d-flex justify-content-center">
                    <div class="container">
                        <div class="ms-5 mb-2">
                            @foreach ($selectedHastags as $hastag)
                                <span class="badge bg-dark">{{ $hastag }}</span>
                            @endforeach
                        </div>
                        <div class="row">
                            {{-- @dd($products) --}}
                            @foreach ($products as $product)
                                <livewire:show-products :product="$product" wire:key="'product'.{{ $product->id }}">
                                </livewire:show-products>
                            @endforeach
                        </div>
                        <div class="mt-5 d-flex justify-content-center">
                            {{ $products->links() }}
                        </div>
                    </div>
            </section>
        </div>

    </section>

</div>
