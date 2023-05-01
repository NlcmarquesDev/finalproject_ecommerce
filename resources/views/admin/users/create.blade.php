@extends('admin.index')
@section('content')
    <x-admin.heading_table title="All User" button="Create User"  rota="{{route('users.create')}}"></x-admin.heading_table>
    <div class="row">
        <form action="{{action('App\Http\Controllers\UsersController@store')}}" method="POST">
            @csrf
        <div class="d-xl-flex col-xl-12">
                <div class="col-lg-9">
                    <h4 class="mb-3">Lead Information </h4>
                    <div class="row g-3 mb-9">
                        <div class=" col-md-8">
                            <div class="form-floating"><input class="form-control" id="floatingInputFirstname" type="text" placeholder="First name"><label for="floatingInputFirstname">Full name</label></div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating"><input class="form-control" id="floatingInputTitle" type="text" placeholder="title"><label for="floatingInputTitle">Title</label></div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-floating"><input class="form-control" id="floatingInputEmail" type="text" placeholder="email"><label for="floatingInputEmail">Email</label></div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating"><input class="form-control" id="floatingInputPhone" type="tel" placeholder="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"><label for="floatingInputPhone">Phone</label></div>
                        </div>

                        <div class=" col-md-8">
                            <div class="form-floating"><input class="form-control" id="floatingInputCompany" type="text" placeholder="Company"><label for="floatingInputCompany">Company</label></div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating"><select class="form-select" id="floatingSelectRating">
                                    <option selected="selected"> Active</option>
                                    <option value="1">Inactive</option>
                                    <option value="2">Active</option>
                                </select><label for="floatingSelectRating">rating</label></div>
                        </div>
                        <div class=" col-md-8">
                            <div class="form-floating" >
                                <select class="form-select" id="floatingSelectIndustry" style="height: 100px; " multiple>
                                    <option selected="selected">Administrador</option>
                                    <option value="1">Costumer</option>
                                    <option value="2">Visitor</option>
                                </select>
                                <label for="floatingSelectIndustry">Roles "hou de ctrl toets ingedrukt om meerdere te selecteren"</label></div>
                        </div>

                        <h4 class="mt-6">Address Information</h4>
                        <div class="col-md-4">
                            <div class="form-floating"><input class="form-control" id="floatingInputStreet" type="text" placeholder="street"><label for="floatingInputStreet">Street</label></div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating"><input class="form-control" id="floatingInputCompany" type="text" placeholder="City"><label for="floatingInputCompany">City</label></div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating"><input class="form-control" id="floatingInputCompany" type="text" placeholder="Company"><label for="floatingInputCompany">Provincie</label></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating"><select class="form-select" id="floatingSelectCountry">
                                    <option selected="selected">Belgium</option>
                                    <option value="1">France</option>
                                    <option value="2">Netherlands</option>
                                </select><label for="floatingSelectCountry">Country</label></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-floating"><input class="form-control" id="floatingInputZipcode" type="text" placeholder="postcode"><label for="floatingInputZipcode">Post code</label></div>
                        </div>

                        <div class="col-12 d-flex justify-content-end mt-6"><button type="submit" class="btn btn-primary">Create User</button></div>
                    </div>
                </div>
                <div class="col-lg-3 d-flex justify-content-center align-items-center">
                    <div class="d-flex align-items-end position-relative mb-7"><input class="d-none" id="upload-avatar" type="file">
                            <div class=" rounded-circle cursor-pointer d-flex flex-center mb-5" style="max-width: 300px; max-height: 300px">
                                <label class="avatar avatar-5xl text-center" for="upload-avatar">
                                    <img class="rounded-circle" src="https://i.pravatar.cc/250" alt="">
                                    <strong>Change Image</strong>
                                </label>
                            </div>
                    </div>
                </div>

        </div>
        </form>
    </div>
    </form>

    @endsection
