<div>
    <div class="gallery-wrap mt-5">
        @foreach ($products as $key => $product)
            <a href="{{ route('single.product', $product->id) }}"
                class="item
                @if ($key == 0) col-12
                @elseif ($key <= 1) d-none d-sm-block col-sm-6 col-md-6
                @else col-lg-2 d-none d-lg-block @endif">
                @if ($product->photos->first())
                    <div style="background-image: url({{ asset($product->photos->first()->file) }});"></div>
                @endif
                <p class="item__product">{{ $product->name }}</p>
            </a>
        @endforeach
    </div>
</div>
