@extends('admin.index')
@section('content')
    <x-admin.heading_table title="All Users" name="{{ $userEdit->name }}" button="All User"
        route="{{ route('users.index') }}">
    </x-admin.heading_table>

    <div class="row">
        <form action="{{ action('\App\Http\Controllers\UsersController@update', $userEdit->id) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="d-xl-flex col-xl-12">
                <div class="col-lg-9">
                    <h4 class="mb-3">Lead Information </h4>
                    <div class="row g-3 mb-9">
                        <div class=" col-md-12">
                            <div class="form-floating">
                                <input class="form-control" name="name" value="{{ $userEdit->name }}"
                                    id="floatingInputFirstname" type="text" placeholder="Full name">
                                <label for="floatingInputFirstname">{{ $userEdit->name }}</label>
                            </div>
                            @error('name')
                                <p class="text-danger fs-6">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control" name="email" value="{{ $userEdit->email }}"
                                    id="floatingInputEmail" type="text" placeholder="email">
                                <label for="floatingInputEmail">{{ $userEdit->email }}</label>
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
                                    <option value="1" {{ $userEdit->is_active == 1 ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="0" {{ $userEdit->is_active == 0 ? 'selected' : '' }}>Not Active
                                    </option>
                                </select>
                                <label for="floatingSelectRating">Status</label>
                                @error('is_active')
                                    <p class="text-danger fs-6">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class=" col-md-8">
                            <div class="form-floating">
                                <select name="role_id" class="form-select" id="floatingSelectIndustry">
                                    <option value="1" {{ $userEdit->role_is == 1 ? 'selected' : '' }}>Administrator
                                    </option>
                                    <option value="2" {{ $userEdit->role_id == 2 ? 'selected' : '' }}>Custumer
                                    </option>
                                    <option value="3" {{ $userEdit->role_id == 3 ? 'selected' : '' }}>Guess</option>
                                </select>
                                <label for="floatingSelectIndustry">Roles</label>
                                @error('roles')
                                    <p class="text-danger fs-6">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        @foreach ($userEdit->locations as $location)
                            <h4 class="mt-6">Address Information</h4>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="street" class="form-control" value="{{ $location->street }}"
                                        id="floatingInputStreet" type="text" placeholder="street">
                                    <label for="floatingInputStreet">{{ $location->street }}</label>
                                    {{--                                @dd($userEdit->locations) --}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="city" class="form-control" value="{{ $location->city }}"
                                        id="floatingInputCompany" type="text" placeholder="City">
                                    <label for="floatingInputCompany">{{ $location->city }}</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input name="number_tel" class="form-control" value="{{ $location->number_tel }}"
                                        id="floatingInputPhone" type="number" placeholder="Phone number">
                                    <label for="floatingInputPhone">{{ $location->number_tel }}</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input name="zipcode" class="form-control" value="{{ $location->zipcode }}"
                                        id="floatingInputZipcode" type="text" placeholder="postcode">
                                    <label for="floatingInputZipcode">{{ $location->zipcode }}</label>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary ms-2">Update User</button>
                            </div>
                        @endforeach
                        <div class="col-12 d-flex justify-content-end mt-6">




                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-flex justify-content-center align-items-center">
                    <input class="d-none" id="upload-avatar" type="file">
                    <div class=" rounded-circle cursor-pointer  flex-center mb-5">
                        <div class="form-group">
                            <img class="rounded-circle mb-2 "
                                src="{{ $userEdit->photo ? asset($userEdit->photo->file) : 'https://i.pravatar.cc/250' }}"
                                alt="" style="max-width: 200px; max-height: 200px">
                            <input name="photo_id" id="photo_id" type="file">
                            <label for="photo_id"></label>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
