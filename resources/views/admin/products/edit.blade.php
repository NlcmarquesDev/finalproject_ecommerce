@extends('admin.index')
@section('content')
    <x-admin.heading_table title="Edit Product" button="All Products"  rota="{{route('products.index')}}"></x-admin.heading_table>
    <div class="row">
        <form action="{{route('products.update', $product->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="d-xl-flex col-xl-12">
                <div class="col-lg-6">
                    <h4 class="mb-3">Product Information </h4>
                    <div class="row g-3 mb-9">
                        <div class=" col-md-12">
                            <div class="form-floating">
                                <input class="form-control" name="name" id="floatingInputFirstname" type="text" placeholder="Product name">
                                <label for="floatingInputFirstname">{{$product->name}}</label>
                            </div>
                            @error('name')
                            <p class="text-danger fs-6">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <textarea class="form-control" name="description" rows="14" cols="50" id="floatingInputEmail" type="text" placeholder="email"></textarea>
                                <label for="floatingInputEmail">{{$product->description}}</label>
                            </div>
                            @error('description')
                            <p class="text-danger fs-6">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input class="form-control" name="price" id="floatingInputPhone" type="number" placeholder="Stock" >
                                <label for="floatingInputPhone">{{$product->price}}</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input class="form-control" name="stock" id="floatingInputPhone" type="number" placeholder="Stock" >
                                <label for="floatingInputPhone">{{$product->stock}}</label>
                            </div>
                        </div>

                        <div class=" col-md-12">
                            <div class="form-floating">
                                <input class="form-control" name="rating" id="floatingInputCompany" type="number" placeholder="Rating">
                                <label for="floatingInputCompany">{{$product->rating}}</label>
                            </div>
                        </div>
                        <div class=" col-md-12">
                            <div class="form-floating" >
                                <select name="colors[]" class="form-select" id="floatingSelectIndustry" style="height: 100px; " multiple>
                                    @foreach ($colors as $color)
                                        <option value="{{ $color }}">{{ $color->name }}</option>
                                    @endforeach
                                </select>
                                <label for="floatingSelectIndustry">Color "hou de ctrl toets ingedrukt om meerdere te selecteren"</label>
                                @error('colors')
                                <p class="text-danger fs-6">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end mt-6">
                            <button type="submit" class="btn btn-primary ms-2">Create Product</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <div class="d-flex align-items-end position-relative mb-7">
                        <input class="d-none" id="upload-avatar" type="file">
                        <div class=" rounded-circle cursor-pointer d-flex flex-center mb-5" style="max-width: 300px; max-height: 300px">
                            <div class="form-group">
                                <img class="rounded-circle mb-2" src="{{$product->photo ? asset($product->photo->file) : "https://i.pravatar.cc/250"}}" alt="">
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
