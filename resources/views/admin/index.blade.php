@extends('layouts.admin')
@section('content')
    <h1 class="my-4">Dashboard</h1>
    <div class="row">
        <x-admin.card color='primary' route=" {{ route('users.index') }}" title='Users' icon='fas fa-user '></x-admin.card>
        <x-admin.card color='warning' route=" {{ route('products.index') }}" title='Products'
            icon="fas fa-shopping-cart"></x-admin.card>
        <x-admin.card color='secondary' route=" {{ route('orders.index') }}" title='Orders'
            icon="fa-solid fa-truck"></x-admin.card>
        <x-admin.card color='danger' route=" {{ route('payment') }}" title='Payments'
            icon="fa-brands fa-cc-stripe"></x-admin.card>
        <x-admin.card color='dark' route=" {{ route('categories.index') }}" title='Categories'
            icon="fas fa-tags"></x-admin.card>
    </div>
    <x-admin.chart></x-admin.chart>
@endsection
