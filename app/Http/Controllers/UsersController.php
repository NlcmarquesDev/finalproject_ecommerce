<?php

namespace App\Http\Controllers;

use App\Models\locations;
use App\Models\Photo;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $fillableFields = ['name','is_active','email', 'role_id'];
        $users = User::withTrashed()->paginate(10);

        return view("admin.users.index", compact('users','fillableFields'));
        //of
        //return view('admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $roles = Role::pluck('name','id')->all();
        return view('admin.users.create',compact('roles'));

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
        $user->password = Hash::make($request->password);
        if ($file = $request->file("photo_id")) {
            $path = request()
                ->file("photo_id")
                ->store("users");
            $photo = Photo::create(["file" => $path]);
            //update photo_id (FK in users table)
            $input["photo_id"] = $user->photo_id = $photo->id;
        }

        $user->save();
        $location = new locations();
        $location->user_id = $user->id;
        $location->street = $request->street;
        $location->number = $request->number;
        $location->city = $request->city;
        $location->zipcode = $request->zipcode;
        $location->save();

        $user->role_id = $request->role_id;

        return redirect()->route('users.index')->with([
            'alert' => [
                'message' => 'User added',
                'type' => 'success'
            ]
        ]);
        //return back()->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $user = User::findOrFail($id);
        $roles = Role::pluck('name','id')->all();
        return view('admin.users.edit',compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        request()->validate([
            'name'=> ['required','max:255','min:5'],
            'email'=>['required','email'],

            'is_active'=>'required',
        ]);
        $user = User::findOrFail($id);
        $location = Locations::findOrFail($id);
        if(trim($request->password) == ''){
            $input = $request->except('password');
        } else {
            $input = $request->all();
            $input['password'] = Hash::make($request['password']);
        }
        // oude foto verwijderen
        //we kijken eerst of er een foto bestaat
//        @dd($request->hasFile('photo_id'));
        if ($request->hasFile('photo_id')) {
            $oldPhoto = $user->photo; // de huidige foto van de gebruiker
            $path = request()->file('photo_id')->store('users');
            if ($oldPhoto) {
                unlink(public_path($oldPhoto->file));
                // $oldPhoto->delete();
                $oldPhoto->update(['file'=>$path]);
                $input['photo_id'] = $oldPhoto->id;
            }else{
                $photo = Photo::create(['file' => $path]);
                $input['photo_id'] = $photo->id;
            }
        }


        $user->update($input);
        $location->update($input);
//        $user->roles()->sync($request->roles, true);
        return redirect('/admin/users')->with('status', 'User updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $user = User::findOrFail($id);

        $user->delete();
        return redirect()->route('users.index');
    }
    public function usersRestore($id){
        User::onlyTrashed()->where('id', $id)->restore();
        // herstel ook alle posts van de gebruiker
        $user = User::withTrashed()->where('id', $id)->first();
//        $user->posts()->onlyTrashed()->restore();
        $user->is_active = 1;
        $user->save();
        return redirect()->route('users.index')->with([
            'alert' => [
                'message' => 'User deleted',
                'type' => 'danger'
            ]
        ]);;
    }
}
