@extends('admin.index')
@section('content')
    <x-admin.heading_table title="All Products" name="{{ $totalProducts }}" button="All Products"
        route="{{ route('products.index') }}">
    </x-admin.heading_table>
    <livewire:products-data-table />
@endsection
