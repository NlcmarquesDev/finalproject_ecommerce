@extends('admin.index')
@section('content')
    <h1 class="mt-4">Orders</h1>
        <div class="d-flex justify-content-between mb-4">

            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="d-flex justify-content-between ">
                    <a class="navbar-brand" href="#"><h2>Orders</h2></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <button class="btn btn-secondary">All User</button>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>

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
            @foreach($orders as $order)
            <tr class="{{$order->deleted_at ? 'bg-warning' :  ''}}">

                <td>{{$order->id}}</td>
                <td> {{$order->user_id}}</td>
                <td> <span class="badge rounded-pill {{$order->order_status =='paid' ? 'bg-success' : 'bg-danger'}}">{{$order->order_status}}</span></td>
                <td>{{$order->order_email}} </td>
                <td>{{$order->order_name }}</td>
                <td>{{$order->order_adress }}</td>
                <td>{{$order->order_bus }}</td>
                <td>{{$order->order_postcode }}</td>
                <td>{{$order->order_city }}</td>
                <td>{{$order->order_cupon ?? 'No cupon added' }}</td>
                <td>{{$order->order_taxes }}</td>
                <td>{{$order->order_total }}</td>
                <td><span class="badge rounded-pill {{$order->order_status =='shipped' ? 'bg-success' : 'bg-danger'}}">{{$order->order_shipped }}</span></td>
                <td>{{$order->created_at}}</td>
                <td>{{$order->updated_at}}</td>
                <td>{{$order  ->deleted_at ? $order->deleted_at->diffForHumans() : ''}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>

{{$orders->links()}}


@endsection
