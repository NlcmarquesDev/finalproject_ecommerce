@extends('admin.index')
@section('content')
    <x-admin.heading_table title="All Orders" name="{{ $totalOrders }}" button="All Orders"
        route="{{ route('orders.index') }}">
    </x-admin.heading_table>

    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th>Id</th>
                <th>User_id</th>
                <th>Order Status</th>
                <th>Order Email</th>
                <th>Order name</th>
                <th>Order adress</th>
                <th>Order bus</th>
                <th>Order postcode</th>
                <th>Order city</th>
                <th>Order cupon</th>
                <th>Order Taxes</th>
                <th>Order Total</th>
                <th>Shipped</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Deleted_at</th>
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
                    <td>{{ $order->order_adress }}</td>
                    <td>{{ $order->order_bus }}</td>
                    <td>{{ $order->order_postcode }}</td>
                    <td>{{ $order->order_city }}</td>
                    <td>{{ $order->order_cupon ?? 'No cupon added' }}</td>
                    <td>{{ $order->order_taxes }}</td>
                    <td>{{ $order->order_total }}</td>
                    <td><span
                            class="badge rounded-pill {{ $order->order_status == 'shipped' ? 'bg-success' : 'bg-danger' }}">{{ $order->order_shipped }}</span>
                    </td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->updated_at }}</td>
                    <td>{{ $order->deleted_at ? $order->deleted_at->diffForHumans() : '' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $orders->links() }}
@endsection
