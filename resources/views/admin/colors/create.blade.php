@extends('admin.index')
@section('content')
    <x-admin.heading_table title="Create Color" name=" New Color" button="All Color" rota="{{ route('colors.index') }}">
    </x-admin.heading_table>
    <div class="row">
        <form action="{{ action('\App\Http\Controllers\Admin\ColorsController@store') }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="d-xl-flex col-xl-12">
                <div class="col-lg-9">
                    <h4 class="mb-3">Color Information </h4>
                    <div class="row g-3 mb-9">
                        <div class=" col-md-12">
                            <div class="form-floating">
                                <input class="form-control" name="name" id="floatingInputName" type="text"
                                    placeholder="First name">
                                <label for="floatingInputName">Name Color</label>
                            </div>
                            @error('name')
                                <p class="text-danger fs-6">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-8">
                            <div class="form-floating">
                                <input class="form-control" name="code" id="floatingInputCode" type="text"
                                    placeholder="code color">
                                <label for="floatingInputCode">Code Color</label>
                            </div>
                            @error('code')
                                <p class="text-danger fs-6">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary ms-2">Create Color</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
