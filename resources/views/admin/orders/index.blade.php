@extends('admin.index')
@section('content')
    <x-admin.heading_table title="All Orders" name="{{ $totalOrders }}" button="All Orders"
        route="{{ route('orders.index') }}">
    </x-admin.heading_table>

    <livewire:orders-data-table></livewire:orders-data-table>
@endsection
