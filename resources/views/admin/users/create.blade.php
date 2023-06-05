@extends('admin.index')
@section('content')
    <x-admin.heading_table title="Create User" name="New User" button="All User" route="{{ route('users.index') }}">
    </x-admin.heading_table>
    <div class="row">
        <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="d-xl-flex col-xl-12">
                <div class="col-lg-9">
                    <h4 class="mb-3">Lead Information </h4>
                    <div class="row g-3 mb-9">
                        <div class=" col-md-12">
                            <div class="form-floating">
                                <input class="form-control" name="name" id="floatingInputFirstname" type="text"
                                    placeholder="First name">
                                <label for="floatingInputFirstname">Full Name</label>
                            </div>
                            @error('name')
                                <p class="text-danger fs-6">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control" name="email" id="floatingInputEmail" type="text"
                                    placeholder="email">
                                <label for="floatingInputEmail">Your Email address</label>
                            </div>
                            @error('email')
                                <p class="text-danger fs-6">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class=" col-md-6">
                            <div class="form-floating">
                                <input class="form-control" name="password" id="floatingInputCompany" type="password"
                                    placeholder="Company">
                                <label for="floatingInputCompany">Password required:</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">
                                <select class="form-select" name="is_active" id="floatingSelectRating">
                                    <option value="1">Active</option>
                                    <option value="0" selected>Not Active</option>
                                </select>
                                <label for="floatingSelectRating">Status</label>
                                @error('is_active')
                                    <p class="text-danger fs-6">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class=" col-md-8">
                            <div class="form-floating">
                                <select name="roles[]" class="form-select" id="floatingSelectIndustry"
                                    style="height: 100px; " multiple>
                                    @foreach ($roles as $role)
                                        <option value="{{ $role }}">{{ $role }}</option>
                                    @endforeach
                                </select>
                                <label for="floatingSelectIndustry">Roles "hou de ctrl toets ingedrukt om meerdere te
                                    selecteren"</label>
                                @error('roles')
                                    <p class="text-danger fs-6">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <h4 class="mt-6">Address Information</h4>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input name="street" class="form-control" id="floatingInputStreet" type="text"
                                    placeholder="street">
                                <label for="floatingInputStreet">Street</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input name="city" class="form-control" id="floatingInputCompany" type="text"
                                    placeholder="City">
                                <label for="floatingInputCompany">City</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input name="number" class="form-control" id="floatingInputCompany" type="text"
                                    placeholder="phone">
                                <label for="floatingInputCompany">Phone number: +32 </label>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-floating">
                                <input name="zipcode" class="form-control" id="floatingInputZipcode" type="text"
                                    placeholder="postcode">
                                <label for="floatingInputZipcode">Post code</label>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end mt-6">
                            <button type="submit" class="btn btn-primary ms-2">Create User</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-flex justify-content-center align-items-center">
                    <div class="d-flex align-items-end position-relative mb-7">
                        <input class="d-none" id="upload-avatar" type="file">
                        <div class=" rounded-circle cursor-pointer d-flex flex-center mb-5"
                            style="max-width: 300px; max-height: 300px">
                            <div class="form-group">
                                <input name="photo_id" id="photo_id" type="file">
                                <label for="photo_id"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
