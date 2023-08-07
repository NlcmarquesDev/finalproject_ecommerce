@extends('admin.index')
@section('content')
    <x-admin.heading_table title="All Hastags" name="{{ $totalHastags }}" button="All Hastags"> </x-admin.heading_table>

    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Updated_at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hastags as $hastags)
                <tr>
                    <td>{{ $hastags->id }}</td>
                    <td>{{ $hastags->name }}</td>
                    <td>{{ $hastags->updated_at }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            @if ($hastags->deleted_at != null)
                                <form action="{{ route('hastags.restore', $hastags->id) }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="btn btn-info">
                                        Restore
                                    </button>
                                </form>
                            @else
                                <a class="btn btn-primary" href="{{ route('hastags.edit', $hastags->id) }}">
                                    Edit
                                </a>
                                <form action="{{ route('hastags.destroy', $hastags->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                            @endif
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
