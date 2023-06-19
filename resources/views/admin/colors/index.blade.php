@extends('admin.index')
@section('content')
    <x-admin.heading_table title="All Colors" name="{{ $colors->total() }}" button="All Colors"
        route="{{ route('colors.index') }}">
    </x-admin.heading_table>
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th>Id</th>
                <th>Color Name</th>
                <th>Code</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Deleted_at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($colors as $color)
                {{--     @dd($users) --}}
                <tr>
                    <td>{{ $color->id }}</td>
                    <td>{{ $color->name }}</td>
                    <td>{{ $color->code }}</td>
                    <td>{{ $color->created_at }}</td>
                    <td>{{ $color->updated_at }}</td>
                    <td>{{ $color->deleted_at ? $color->deleted_at->diffForHumans() : '' }}</td>
                    <td class="d-flex gap-2">
                        @if ($color->deleted_at != null)
                            <form action="{{ route('colors.restore', $color->id) }}" method="POST">
                                @csrf
                                @method('POST')
                                <button type="submit" class="btn btn-info">
                                    Restore
                                </button>
                            </form>
                        @else
                            <a class="btn btn-primary" href="{{ route('colors.edit', $color->id) }}">
                                Edit
                            </a>
                            <form action="{{ route('colors.destroy', $color->id) }}" method="POST">
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

    {{ $colors->links() }}
@endsection
