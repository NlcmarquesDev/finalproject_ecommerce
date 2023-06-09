@extends('admin.index')
@section('content')
    <x-admin.heading_table title="All Users" name="{{ $totalUsers }}" button="All User"
        route="{{ route('users.index') }}">
    </x-admin.heading_table>
    <livewire:users-data-table />
@endsection
