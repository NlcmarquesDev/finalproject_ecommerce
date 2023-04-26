@props([
    'items' => $items,
    ])
<div class="col-10 mx-auto">
    <div class="row">
        <div class="d-flex my-4">
            @foreach($items as $key => $item)
                <div class="{{ $key == 0 ? '': 'mx-2' }}">
                    @if($key > 0)
                        <span>/</span>
                    @endif
                    <a href="{{ $item['route'] }}" class="indexfooter p-1">{{ $item['name'] }}</a>
                </div>
            @endforeach
        </div>
    </div>
</div>


