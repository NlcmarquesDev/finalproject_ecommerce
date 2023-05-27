{{ dd($cartContent) }}

@if (count($cartContent) > 0)
    <x-offcanvas title="Your Cart {{$numberOfProducts}}" number="2" icon="fas fa-shopping-bag" numbercart="{{$numberOfProducts}}">
        @include('ecommerce.offcanvas-cart')
    </x-offcanvas>
@endif
