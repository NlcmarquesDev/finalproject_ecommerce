@extends('admin.index')
@section('content')
    <x-admin.heading_table title="Create Product" name="New Product" button="All Products"
        route="{{ route('products.index') }}">
    </x-admin.heading_table>
    <div class="row">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="d-xl-flex col-xl-12">
                <div class="col-lg-6">
                    <h4 class="mb-3">Product Information </h4>
                    <div class="row g-3 mb-9">
                        <div class=" col-md-12">
                            <div class="form-floating">
                                <input class="form-control" name="name" id="floatingInputFirstname" type="text"
                                    placeholder="Product name">
                                <label for="floatingInputFirstname">Product Name</label>
                            </div>
                            @error('name')
                                <p class="text-danger fs-6">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <textarea class="form-control" name="description" rows="14" cols="50" id="floatingInputEmail" type="text"
                                    placeholder="email"></textarea>
                                <label for="floatingInputEmail">Description</label>
                            </div>
                            @error('description')
                                <p class="text-danger fs-6">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control" type="number" id="floatingInputprice" placeholder="0.00"
                                    required name="price" min="0" step="0.01" title="Currency"
                                    pattern="^\d+(?:\.\d{1,2})?$"
                                    onblur="this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'">

                                <label for="floatingInputprice">Product
                                    Price</label>
                            </div>
                        </div>


                        <div class=" col-md-6">
                            <div class="form-floating">
                                <input class="form-control" name="rating" id="floatingInputCompany" type="number"
                                    placeholder="Rating">
                                <label for="floatingInputCompany">Rating</label>
                                @error('rating')
                                    <p class="text-danger fs-6">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label>Colors:</label>
                            @foreach ($colors as $index => $color)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $color->id }}"
                                        id="color{{ $index }}" name="colors[]">
                                    <label class="form-check-label"
                                        for="color{{ $index }}">{{ $color->name }}</label>
                                    <input class="form-control" name="quantities[{{ $color->id }}]" type="number"
                                        placeholder="quantity">
                                    @error('quantities.' . $color->id)
                                        <p class="alert alert-danger" role="alert">{{ $message }}</p>
                                    @enderror
                                </div>
                            @endforeach
                        </div>
                        @error('colors')
                            <p class="alert alert-danger" role="alert">{{ $message }}</p>
                        @enderror

                        <div class=" col-md-4">
                            <label>Hastags:</label>
                            @foreach ($hastags as $hastag)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $hastag->id }}"
                                        id="hastag{{ $hastag->id }}" name="hastags[]">
                                    <label class="form-check-label"
                                        for="hastag{{ $hastag->id }}">{{ $hastag->name }}</label>
                                </div>
                            @endforeach

                        </div>
                        <div class=" col-md-4">
                            <label>Categories:</label>
                            @foreach ($categories as $category)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $category->id }}"
                                        id="category{{ $category->id }}" name="categories[]">
                                    <label class="form-check-label"
                                        for="category{{ $category->id }}">{{ $category->name }}</label>
                                </div>
                            @endforeach

                        </div>


                        <div class="col-12 d-flex justify-content-end mt-6">
                            <button type="submit" class="btn btn-primary ms-2">Create Product</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <div class="d-flex align-items-end position-relative mb-7">
                        <input class="d-none" id="upload-avatar" type="file">
                        <div class=" rounded-circle cursor-pointer d-flex flex-center mb-5"
                            style="max-width: 300px; max-height: 300px">
                            <div class="form-group">
                                <input type="file" name="photo_id[]" id="ChooseFile" multiple>
                                <label for="photo_id"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
