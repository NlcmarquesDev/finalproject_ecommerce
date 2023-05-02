@extends('admin.index')
@section('content')
    <div class="d-flex shadow-lg p-3 mb-5 bg-body-tertiary rounded justify-content-between">
        <h1>Edit | <strong>{{$category->name}}</strong></h1>
        <div class="d-flex">
            <a class="btn btn-primary mx-1 my-2 rounded-pill" href="{{route('categories.index')}}">All Categories</a>
            <a class="btn btn-primary mx-1 my-2 rounded-pill" href="{{route('categories.create')}}">Create Category</a>
        </div>
    </div>
    <div class="row my-2">
        <div class="col-6 offset-3">
            <form action="{{action("\App\Http\Controllers\CategoriesController@update", $category)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group mb-3">
                    <input type="text" name="name" class="form-control" id="floatingInputValue" placeholder="title" value="{{$category->name}}">
                    @error('name')
                    <p class="text-danger fs-6">{{$message}}</p>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn btn-dark d-flex justify-content-end ml-auto">Update post</button>
                </div>
            </form>
        </div>
    </div>
    @endsection
