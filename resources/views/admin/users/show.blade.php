@extends('admin.index')
@section('content')
    <x-admin.heading_table title="Detail User" name="{{ $userDetail->name }}" button="All User"
        route="{{ route('users.index') }}">
    </x-admin.heading_table>
    <div class="row">
        <div class="d-xl-flex col-xl-12">
            <div class="col-lg-9">
                <h4 class="mb-3">Lead Information </h4>
                <div class="row g-3 mb-9">
                    <div class=" col-md-6">
                        <div class="form-floating">
                            <p class="form-control">{{ $userDetail->name }}</p>

                            <label for="floatingInputFirstname">Full Name</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <p class="form-control">{{ $userDetail->email }}</p>
                            <label for="floatingInputEmail">Your Email address</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <p class="form-control">{{ $userDetail->is_active == 1 ? 'Active' : 'Inactive' }}</p>
                            <label for="floatingSelectRating">Status</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <p class="form-control">{{ $userDetail->oauth_type }}</p>
                            <label for="floatingSelectRating">Registration by:</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <p class="form-control">{{ $userDetail->created_at }}</p>
                            <label for="floatingSelectRating">Created at</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <p class="form-control">{{ $userDetail->updated_at }}</p>
                            <label for="floatingSelectRating">Updated at</label>
                        </div>
                    </div>


                    <h4 class="mt-6">Address Information</h4>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <p class="form-control">{{ $locationDetail->street }}</p>
                            <label for="floatingInputStreet">Street</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <p class="form-control">{{ $locationDetail->city }}</p>
                            <label for="floatingInputCompany">City</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <p class="form-control">{{ $locationDetail->phone }}</p>
                            <label for="floatingInputCompany">Phone number: +32 </label>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-floating">
                            <p class="form-control">{{ $locationDetail->zipcode }}</p>
                            <label for="floatingInputZipcode">Post code</label>
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end mt-6">
                        <a class="btn btn-primary" href="{{ route('users.edit', $userDetail->id) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pencil" viewBox="0 0 16 16">
                                <path
                                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                            </svg>
                            Edit
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 d-flex justify-content-center align-items-center">
                <div class="d-flex align-items-end position-relative mb-7">
                    <div class=" rounded-circle cursor-pointer d-flex flex-center mb-5">
                        <img src="{{ $userDetail->photo ? asset($userDetail->photo->file) : 'https://i.pravatar.cc/250' }}"
                            alt="" style="width: 200px; height: 200px" class="rounded-circle" />
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
@endsection
