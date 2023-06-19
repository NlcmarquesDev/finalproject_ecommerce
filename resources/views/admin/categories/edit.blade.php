@extends('admin.index')
@section('content')
    <x-admin.heading_table title="Edit Categories" name="{{ $category->name }}" button="All Categories"
        route="{{ route('categories.index') }}">
    </x-admin.heading_table>
    <div class="row my-2">
        <div class="col-6 offset-3">
            <form action="{{ action('\App\Http\Controllers\Admin\CategoriesController@update', $category) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group mb-3">
                    <input type="text" name="name" class="form-control" id="floatingInputValue" placeholder="title"
                        value="{{ $category->name }}">
                    @error('name')
                        <p class="text-danger fs-6">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn btn-dark d-flex justify-content-end ml-auto">Update post</button>
                </div>
            </form>
        </div>
    </div>
@endsection
