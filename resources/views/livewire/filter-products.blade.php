<div>
    <div class="d-flex flex-column">
        <h5 class="fw-lighter">Categories</h5>
        <a class="pfont my-2" href="{{ route('products') }}">All</a>
        @foreach ($categories as $category)
            <div class="form-check">
                <input wire:click="sortBy('{{ $category->name }}')  value="{{ $category->name }}" type="checkbox"
                    id="{{ $category->name }}" name="{{ $category->name }}" class="form-check-input pfont">
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
</div>
