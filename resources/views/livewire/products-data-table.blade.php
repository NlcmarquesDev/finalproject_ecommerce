<div>
    <div class="d-flex justify-content-between align-items-baseline">
        <input wire:model="tablesearch" type="search" name="tablesearch" class="form-control bg-white small w-50 mb-3"
            placeholder="Search for..">
    </div>
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th><button wire:click="sortBy('id')" class="d-flex align-items-center border-0 bg-transparent p-0"
                        style=" font-weight:bold; ">
                        <p class="m-0 pe-2 ">Id</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z" />
                        </svg>
                </th>
                <th>Photo</th>
                <th> <button wire:click="sortBy('name')" class="d-flex align-items-center border-0 bg-transparent p-0"
                        style=" font-weight:bold; ">
                        <p class="m-0 pe-2">Name</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z" />
                        </svg>

                    </button></th>
                <th>Description</th>
                <th> <button wire:click="sortBy('price')" class="d-flex align-items-center border-0 bg-transparent p-0"
                        style=" font-weight:bold; ">
                        <p class="m-0 pe-2">Price</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z" />
                        </svg>

                    </button></th>
                <th>Deleted_at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr class="{{ $product->deleted_at ? 'bg-warning' : '' }}">
                    <td>{{ $product->id }}</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img class="img-thumbnail" width="62" height="62"
                                src="{{ $product->photos->first() ? asset($product->photos->first()->file) : 'http://via.placeholder.com/62x62' }}"
                                alt="{{ $product->title }}">
                        </div>
                    </td>
                    <td><strong>{{ $product->name }}</strong></td>
                    <td>{{ $product->description }}</td>
                    <td>{{ app('price')->format($product->price) }}</td>
                    <td>{{ $product->deleted_at ? $product->deleted_at->diffForHumans() : '' }}</td>
                    <td>
                        <div class="d-flex justify-content-between gap-2">
                            @if ($product->deleted_at != null)
                                <form action="{{ route('products.restore', $product->id) }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="btn btn-info">
                                        Restore
                                    </button>
                                </form>
                            @else
                                <a class="btn btn-primary" href="{{ route('products.show', $product->id) }}">
                                    Details
                                </a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                            @endif
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-4">
        {{ $products->links() }}
    </div>
</div>
