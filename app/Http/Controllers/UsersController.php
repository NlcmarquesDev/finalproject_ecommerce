<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Photo;
use App\Models\locations;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $totalUsers = User::count();

        return view("admin.users.index", compact('totalUsers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $roles = Role::pluck('name', 'id')->all();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->is_active = $request->is_active;
        $user->oauth_type = 'backend';
        $user->password = Hash::make($request->password);
        if ($file = $request->file("photo_id")) {
            $path = request()
                ->file("photo_id")
                ->store("users");
            $photo = Photo::create(["file" => $path]);
            $input["photo_id"] = $user->photo_id = $photo->id;
        }

        $user->save();
        $location = new locations();
        $location->user_id = $user->id;
        $location->street = $request->street;
        $location->phone = $request->phone;
        $location->city = $request->city;
        $location->zipcode = $request->zipcode;
        $location->save();

        $user->role_id = $request->role_id;
        Alert::success('User Created Successfully');

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $userDetail = User::findOrFail($id);
        $locationDetail = Locations::findOrFail($id);


        return view('admin.users.show', compact('userDetail', 'locationDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $userEdit = User::findOrFail($id);

        $roles = Role::pluck('name', 'id')->all();
        return view('admin.users.edit', compact('userEdit', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate([
            'name' => ['required', 'max:255', 'min:3'],
            'email' => ['required', 'email'],

            'is_active' => 'required',
        ]);
        $user = User::findOrFail($id);
        $location = Locations::findOrFail($id);
        if (trim($request->password) == '') {
            $input = $request->except('password');
        } else {
            $input = $request->all();
            $input['password'] = Hash::make($request['password']);
        }
        // oude foto verwijderen
        //we kijken eerst of er een foto bestaat
        if ($request->hasFile('photo_id')) {
            $oldPhoto = $user->photo; // de huidige foto van de gebruiker
            $path = request()->file('photo_id')->store('users');
            if ($oldPhoto) {
                unlink(public_path($oldPhoto->file));
                $oldPhoto->update(['file' => $path]);
                $input['photo_id'] = $oldPhoto->id;
            } else {
                $photo = Photo::create(['file' => $path]);
                $input['photo_id'] = $photo->id;
            }
        }
        $user->update($input);
        $location->update($input);
        Alert::success('User updated Successfully', 'Please continue our work!');
        return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $user = User::findOrFail($id);
        $user->is_active = 0;
        $user->save();

        $user->delete();
        Alert::warning('User deleted Successfully');
        return redirect()->route('users.index');
    }
    public function usersRestore($id)
    {
        User::onlyTrashed()->where('id', $id)->restore();
        $user = User::withTrashed()->where('id', $id)->first();
        $user->is_active = 1;
        $user->save();
        Alert::info('User restore Successfully');
        return redirect()->route('users.index');
    }
}
