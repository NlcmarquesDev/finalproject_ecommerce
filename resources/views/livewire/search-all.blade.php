<div class="searchBox ">
    <div>
        <input wire:model.debounce.500ms="search" name="search" type="search" class="no-outline" placeholder="Search" />
        <i class="fa-solid fa-magnifying-glass navicon  m-2"></i>
    </div>
    @if (strlen($search) >= 2)
        <div class="position-absolute mt-3 border  border-dark "
            style="right:20px; width: 300px; z-index:99; overflow:visible;">
            @if (count($productSearch) > 0)
                <ul class="list-group list-group-flush  ">
                    @foreach ($productSearch as $result)
                        <li class="list-group-item border  border-dark bg-grey">
                            <a href="{{ route('products.show', $result['id']) }}" class="py-2 d-flex  ">
                                <img class="img-fluid" height="40" width="40"
                                    src="{{ $result['image'] ?? 'http://via.placeholder.com/62x62' }}"
                                    alt="{{ $result['name'] }}">
                                <p class="ps-3">{{ $result['name'] }}</p>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="border  border-dark bg-grey p-3">
                    No results for : {{ $search }}
                </div>
            @endif
        </div>
    @endif
</div>
