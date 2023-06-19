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
                    <h4 class="mb-3">Product Detail Information</h4>
                    <div class="row g-3 mb-9">
                        <div class=" col-md-12">
                            <div class="form-floating">
                                <p class="form-control">{{ $product->name }}</p>
                                <label for="floatingInputFirstname">Product Name</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floating">
                                <p class="form-control">{{ $product->description }}</p>
                                <label for="floatingInputdescription">Product description</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">
                                <p class="form-control">{{ app('price')->format($product->price) }}</p>
                                <label for="floatingInputPhone">Product
                                    Price</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">
                                <p class="form-control">{{ $product->quantity }}</p>
                                <label for="floatingInputPhone">Quantity</label>
                            </div>
                        </div>

                        <div class=" col-md-4">
                            <div class="form-floating">
                                <p class="form-control">{{ $product->rating }}</p>
                                <label for="floatingInputCompany">Rating</label>
                            </div>
                        </div>
                        <div class=" col-md-4">
                            <div class="form-floating">
                                <p class="form-control">{{ $product->created_at }}</p>
                                <label for="floatingInputCompany">Created at</label>
                            </div>
                        </div>
                        <div class=" col-md-4">
                            <div class="form-floating">
                                <p class="form-control">{{ $product->updated_at }}</p>
                                <label for="floatingInputCompany">Updated at</label>
                            </div>
                        </div>
                        <div class=" col-md-12">
                            <div class="form-floating">
                                <p class="form-control">
                                    @foreach ($product->colors as $color)
                                        <span class="dot me-2"
                                            style="background-color: {{ $color->code }};"></span>{{ $color->name }}
                                    @endforeach
                                </p>
                                <label for="floatingInputCompany">Color From the Product</label>
                            </div>
                        </div>
                        <div class=" col-md-12">
                            <div class="form-floating">
                                <p class="form-control">
                                    @foreach ($product->hastags as $hastag)
                                        <span class="badge bg-dark">{{ $hastag->name }}</span>
                                    @endforeach
                                </p>
                                <label for="floatingInputCompany">Hastags from the Product</label>
                            </div>
                        </div>
                        <div class=" col-md-12">
                            <div class="form-floating">
                                <p class="form-control">
                                    @foreach ($product->categories as $category)
                                        <span class="badge bg-danger">{{ $category->name }}</span>
                                    @endforeach
                                </p>
                                <label for="floatingInputCompany">Categories from the Product</label>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end mt-6">
                            <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">
                                Edit Product
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <div class="d-flex align-items-end position-relative mb-7">
                        <div class=" rounded-circle cursor-pointer d-flex flex-column flex-center mb-5 ">
                            <h3 class="m-auto pb-3">Principal Photo</h3>
                            <img src="{{ $product->photos->first() ? asset($product->photos->first()->file) : 'http://via.placeholder.com/62x62' }}"
                                alt="" style="width: 200px; height: 200px" class="m-auto" />
                            <div class="d-flex flex-column justify-content-center">
                                <h3 class="m-auto py-3">All Photos</h3>
                                <div>
                                    <img src="{{ $product->photos->first() ? asset($product->photos->skip(1)->first()->file) : 'http://via.placeholder.com/62x62' }}"
                                        alt="{{ $product->name }}" style="width: 150px; height: 150px" />

                                    <img src="{{ $product->photos->first() ? asset($product->photos->first()->file) : 'http://via.placeholder.com/62x62' }}"
                                        alt="stone lamp" style="width: 150px; height: 150px" />
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
