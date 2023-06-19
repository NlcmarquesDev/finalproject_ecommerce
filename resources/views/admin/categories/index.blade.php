@extends('admin.index')
@section('content')
    <x-admin.heading_table title="All Categories" name="{{ $totalCategories }}" button="All Categories"
        route="{{ route('categories.index') }}">
    </x-admin.heading_table>
    <table class="table table-striped shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Deleted</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->created_at ? $category->created_at->diffForHumans() : '' }}</td>
                    <td>{{ $category->updated_at ? $category->updated_at->diffForHumans() : '' }}</td>
                    <td>{{ $category->deleted_at ? $category->deleted_at->diffForHumans() : '' }}</td>
                    <td class="d-flex gap-2">
                        @if ($category->deleted_at != null)
                            <form action="{{ route('categories.restore', $category->id) }}" method="POST">
                                @csrf
                                @method('POST')
                                <button type="submit" class="btn btn-warning">
                                    Restore
                                </button>
                            </form>
                        @else
                            <a class="btn btn-primary" href="{{ route('categories.edit', $category->id) }}">
                                Edit
                            </a>
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    Delete
                                </button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{--    {{$categories->links()}} --}}
@endsection
