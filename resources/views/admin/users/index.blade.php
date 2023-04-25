@extends('admin.index')
@section('content')
    <h1 class="mt-4">Users</h1>
        <div class="d-flex justify-content-between mb-4">

            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="d-flex justify-content-between ">
                    <a class="navbar-brand" href="#"><h2>Users</h2></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <button class="btn btn-secondary">Create User</button>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>

        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
            <tr>

                    <td>{{$user->id}}</td>
                <td>
                    <div class="d-flex align-items-center">
                        <img
                            src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                            alt=""
                            style="width: 45px; height: 45px"
                            class="rounded-circle"
                        />
                        <div class="ms-3">
                            <p class="fw-bold mb-1">{{$user->name}}</p>

                        </div>
                    </div>
                </td>
                <td>
                    <p class="text-muted mb-0">{{$user->email}}</p>
                </td>
                <td>
                    <span class="badge text-bg-secondary">{{$user->role_id ? $user->role->name : 'No role' }}</span>
                </td>

                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
                <td> <span class="badge rounded-pill {{$user->is_active ==1 ? 'bg-success' : 'bg-danger'}}">{{$user->is_active ==1 ? 'Active' : 'Not Active'}}</span></td>
                <td>
                 actions
                </td>

            </tr>
            @endforeach
            </tbody>
        </table>




@endsection
