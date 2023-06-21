@extends('admin.index')
@section('content')
    <x-admin.heading_table title="All Payments" name="{{ $totalPayments }}" button="All Payments"
        route="{{ route('payment') }}">
    </x-admin.heading_table>
    <livewire:payments />
@endsection
