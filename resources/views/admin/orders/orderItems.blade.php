@extends('admin.index')
@section('content')
    <x-admin.heading_table title="All Orders" button="All Orders" route="{{ route('orders.index') }}">
    </x-admin.heading_table>

    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th>Id</th>
                <th>Order_id</th>
                <th>Product Name</th>
                <th>Product Color</th>
                <th>Product Price</th>
                <th>Product Taxes</th>
                <th>Quantity</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orderDetail as $orderItem)
                <tr>
                    <td>{{ $orderItem->id }}</td>
                    <td> {{ $orderItem->order_id }}</td>
                    <td>{{ $orderItem->product_name }}</td>
                    <td>{{ $orderItem->product_color }}</td>
                    <td>{{ app('price')->format($orderItem->product_price) }}</td>
                    <td>{{ app('price')->format($orderItem->product_taxes) }}</td>
                    <td>{{ $orderItem->quantity }}</td>
                    <td>{{ $orderItem->created_at }}</td>
                    <td>{{ $orderItem->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- {{$ordersItems->links()}} --}}
@endsection
