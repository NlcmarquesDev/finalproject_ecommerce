<div>
    <div class="d-flex justify-content-between align-items-baseline">
        <input wire:model="tablesearch" type="search" name="tablesearch" class="form-control bg-white border-0 small w-50"
            placeholder="Search for..">
        <div class="form-check">
            <input wire:model="is_active" type="checkbox" id="is_active" name="is_active">
            <label for="is-active" class="form-check-label">Active?</label>
        </div>
    </div>
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th><button wire:click="sortBy('id')" class="d-flex align-items-center border-0 bg-transparent p-0"
                        style=" font-weight:bold; ">
                        <p class="m-0 pe-2 ">Id</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z" />
                        </svg></th>
                <th>
                    <button wire:click="sortBy('name')" class="d-flex align-items-center border-0 bg-transparent p-0"
                        style=" font-weight:bold; ">
                        <p class="m-0 pe-2">Name</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-arrow-down-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z" />
                        </svg>

                    </button>
                </th>
                <th>Email</th>
                <th>Status</th>
                <th>Role</th>
                <th>Created_at</th>
                <th>Deleted_at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="{{ $user->deleted_at ? 'bg-warning' : '' }}">
                    <td>{{ $user->id }}</td>
                    <td>
                        <div class="d-flex align-items-center">
                            <img src="{{ $user->photo ? asset($user->photo->file) : 'https://i.pravatar.cc/250' }}"
                                alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                            <div class="ms-3">
                                <p class="fw-bold mb-1">{{ $user->name }}</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="text-muted mb-0">{{ $user->email }}</p>
                    </td>
                    <td> <span
                            class="badge rounded-pill {{ $user->is_active == 1 ? 'bg-success' : 'bg-danger' }}">{{ $user->is_active == 1 ? 'Active' : 'Not Active' }}</span>
                    </td>
                    <td> <span class="badge text-bg-info text-white">{{ $user->role->name }}</span> </td>
                    <td>{{ $user->created_at }}</td>
                    <td>{{ $user->deleted_at ? $user->deleted_at->diffForHumans() : '' }}</td>
                    <td>
                        <div class="d-flex justify-content-between">
                            @if ($user->deleted_at != null)
                                <form action="{{ route('users.restore', $user->id) }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="btn btn-info">
                                        Restore
                                    </button>
                                </form>
                            @else
                                <a class="btn btn-primary" href="{{ route('users.show', $user->id) }}"> Details</a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        Delete
                                    </button>
                                </form>
                            @endif
                        </div>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-4">
        {{ $users->links() }}
    </div>

</div>
