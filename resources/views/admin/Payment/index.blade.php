@extends('admin.index')
@section('content')
    <h1 class="mt-4">Payments</h1>
        <div class="d-flex justify-content-between mb-4">

            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="d-flex justify-content-between ">
                    <a class="navbar-brand" href="#"><h2>Payments</h2></a>
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
                <th>Order_id</th>
                <th>Transation id</th>
                <th>Payment Status</th>
                <th>Payment Gateway</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </tr>
            </thead>
            <tbody>
            @foreach($payments as $payment)
            <tr>
                <td>{{$payment->id}}</td>
                <td> {{$payment->order_id}}</td>
                <td> {{$payment->transation_id}}</td>
                <td> <span class="badge rounded-pill {{$payment->payment_status =='paid' ? 'bg-success' : 'bg-danger'}}">{{$payment->payment_status}}</span></td>
                <td>{{$payment->payment_gateway}} </td>
                <td>{{$payment->created_at}}</td>
                <td>{{$payment->updated_at}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>

{{-- {{$orders->links()}} --}}


@endsection
