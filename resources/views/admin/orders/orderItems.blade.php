@extends('admin.index')
@section('content')
    <h1 class="mt-4">Orders Items</h1>
        <div class="d-flex justify-content-between mb-4">

            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="d-flex justify-content-between ">
                    <a class="navbar-brand" href="#"><h2>Orders Items</h2></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <button class="btn btn-secondary">All Orders Items</button>
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
                <th>Order_id</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Taxes</th>
                <th>Quantity</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orderItems as $orderItem)
            <tr>
                <td>{{$orderItem->id}}</td>
                <td> {{$orderItem->order_id}}</td>
                <td>{{$orderItem->product_name }}</td>
                <td>{{$orderItem->product_price }}</td>
                <td>{{$orderItem->product_taxes }}</td>
                <td>{{$orderItem->quantity }}</td>
                <td>{{$orderItem->created_at}}</td>
                <td>{{$orderItem->updated_at}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>

{{-- {{$ordersItems->links()}} --}}


@endsection
