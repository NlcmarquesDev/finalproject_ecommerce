@extends('admin.index')
@section('content')
    <x-admin.heading_table title="Edit Product" name="{{ $product->name }}" button="All Products"
        route="{{ route('products.index') }}">
    </x-admin.heading_table>
    <div class="row">
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="d-xl-flex col-xl-12">
                <div class="col-lg-6">
                    <h4 class="mb-3">Product Information </h4>
                    <div class="row g-3 mb-9">
                        <div class=" col-md-12">
                            <div class="form-floating">
                                <input class="form-control" name="name" value="{{ $product->name }}"
                                    id="floatingInputFirstname" type="text" placeholder="Product name">
                                <label for="floatingInputFirstname">{{ $product->name }}</label>
                            </div>
                            @error('name')
                                <p class="text-danger fs-6">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <textarea class="form-control" name="description" value="{{ $product->description }}" rows="14" cols="50"
                                    id="floatingInputdescription" type="text" placeholder="description">{{ $product->description }}</textarea>
                                <label for="floatingInputdescription">{{ $product->description }}</label>
                            </div>
                            @error('description')
                                <p class="text-danger fs-6">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input type="number" placeholder="0.00" required name="price" min="0"
                                    value="{{ $product->price }}" step="0.01" title="Currency"
                                    pattern="^\d+(?:\.\d{1,2})?$"
                                    onblur="
this.parentNode.parentNode.style.backgroundColor=/^\d+(?:\.\d{1,2})?$/.test(this.value)?'inherit':'red'

                                <label for="floatingInputPhone">{{ $product->price }}</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <input class="form-control" name="stock" value=" {{ $product->stock }}"
                                    id="floatingInputPhone" type="number" placeholder="Stock">
                                <label for="floatingInputPhone">{{ $product->stock }}</label>
                            </div>
                        </div>

                        <div class=" col-md-12">
                            <div class="form-floating">
                                <input class="form-control" name="rating" value="{{ $product->rating }}"
                                    id="floatingInputCompany" type="number" placeholder="Rating">
                                <label for="floatingInputCompany">{{ $product->rating }}</label>
                            </div>
                        </div>
                        <div class=" col-md-12">
                            <div class="form-floating">
                                <select name="colors[]" class="form-select" id="floatingSelectIndustry"
                                    style="height: 100px; " multiple>
                                    @foreach ($colors as $color)
                                        <option value="{{ $color }}">{{ $color->name }}</option>
                                    @endforeach
                                </select>
                                <label for="floatingSelectIndustry">Color "hou de ctrl toets ingedrukt om meerdere te
                                    selecteren"</label>
                                @error('colors')
                                    <p class="text-danger fs-6">{{ $message }}</p>
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
                        <div class=" rounded-circle cursor-pointer d-flex flex-center mb-5"
                            style="max-width: 300px; max-height: 300px">
                            <div class="form-group">
                                <img src="{{ $product->photos->first() ? asset($product->photos->skip(1)->first()->file) : 'http://via.placeholder.com/62x62' }}"
                                    alt="stone lamp" style="width: 300px; height: 300px" />
                                <input type="file" name="photo_id[]" value="photo_id[]" id="ChooseFile" multiple>
                                <label for="photo_id"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
