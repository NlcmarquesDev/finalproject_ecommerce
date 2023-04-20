@extends('admin.index')
@section('content')
    <h1 class="mt-4">Users</h1>
        <div class="d-flex justify-content-between mb-4">

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">All users</li>
            </ol>
            <a href="#" class="btn btn-primary">Create User</a>
        </div>

        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Role</th>
                <th>Status</th>
                <th>Created_at</th>
                <th>Updated_at</th>
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
                            <p class="text-muted mb-0">{{$user->email}}</p>
                        </div>
                    </div>
                </td>
                <td>
                    <span class="bg-primary rounded-pill text-white small p-2">{{$user->role_id ? $user->role->name : 'No role' }}</span>
                </td>
                <td>{{$user->is_active ==1 ? 'Active' : 'Not Active'}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
                <td>
                 actions
                </td>

            </tr>
            @endforeach
            </tbody>
        </table>


@endsection
