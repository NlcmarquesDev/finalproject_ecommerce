<div>
    <div class="gallery-wrap mt-5">
        @foreach ($products as $key => $product)
            <a href="{{ route('single.product', $product->id) }}"
                @if ($product->photos->first()) style="background-image: url({{ asset($product->photos->first()->file) }});" @endif
                class="item
                @if ($key == 0) col-12
                @elseif ($key <= 1) d-none d-sm-block col-sm-6 col-md-6
                @else col-lg-2 d-none d-lg-block @endif">
                <p class="item__product">{{ $product->name }}</p>
            </a>
        @endforeach
    </div>
</div>
