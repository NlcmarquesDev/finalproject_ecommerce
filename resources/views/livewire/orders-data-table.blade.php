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
                <th>User_id</th>
                <th><button wire:click="sortBy('order_status')"
                        class="d-flex align-items-center border-0 bg-transparent p-0" style=" font-weight:bold; ">
                        <p class="m-0 pe-2 ">Order Status</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z" />
                        </svg>
                </th>
                <th> <button wire:click="sortBy('order_email')"
                        class="d-flex align-items-center border-0 bg-transparent p-0" style=" font-weight:bold; ">
                        <p class="m-0 pe-2">Email</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z" />
                        </svg>

                    </button></th>
                <th> <button wire:click="sortBy('order_name')"
                        class="d-flex align-items-center border-0 bg-transparent p-0" style=" font-weight:bold; ">
                        <p class="m-0 pe-2">Name</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z" />
                        </svg>

                    </button></th>
                <th>Shipped</th>
                <th>Created_at</th>
                <th>Deleted_at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr class="{{ $order->deleted_at ? 'bg-warning' : '' }}">

                    <td>{{ $order->id }}</td>
                    <td> {{ $order->user_id }}</td>
                    <td> <span
                            class="badge rounded-pill {{ $order->order_status == 'paid' ? 'bg-success' : 'bg-danger' }}">{{ $order->order_status }}</span>
                    </td>
                    <td>{{ $order->order_email }} </td>
                    <td>{{ $order->order_name }}</td>
                    <td><span
                            class="badge rounded-pill {{ $order->order_status == 'shipped' ? 'bg-success' : 'bg-danger' }}">{{ $order->order_shipped }}</span>
                    </td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->deleted_at ? $order->deleted_at->diffForHumans() : '' }}</td>
                    <td>
                        <div class="d-flex justify-content-between gap-2">
                            @if ($order->deleted_at != null)
                                <form action="{{ route('products.restore', $order->id) }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="btn btn-info">
                                        Restore
                                    </button>
                                </form>
                            @else
                                <a class="btn btn-primary" href="{{ route('orders.items', $order->id) }}">
                                    Details
                                </a>
                                <form action="{{ route('products.destroy', $order->id) }}" method="POST">
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

    {{ $orders->links() }}
</div>
