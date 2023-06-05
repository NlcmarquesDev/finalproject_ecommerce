@extends('admin.index')
@section('content')
    <x-admin.heading_table title="All Payments" name="{{ $totalPayments }}" button="All Payments"
        route="{{ route('payment') }}">
    </x-admin.heading_table>
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
            @foreach ($payments as $payment)
                <tr>
                    <td>{{ $payment->id }}</td>
                    <td> {{ $payment->order_id }}</td>
                    <td> {{ $payment->transation_id }}</td>
                    <td> <span
                            class="badge rounded-pill {{ $payment->payment_status == 'paid' ? 'bg-success' : 'bg-danger' }}">{{ $payment->payment_status }}</span>
                    </td>
                    <td>{{ $payment->payment_gateway }} </td>
                    <td>{{ $payment->created_at }}</td>
                    <td>{{ $payment->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- {{$orders->links()}} --}}
@endsection
