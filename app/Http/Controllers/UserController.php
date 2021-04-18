<?php

namespace App\Http\Controllers;

use App\Models\Kontragent;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(100);
        return view("users")->with("users", $users);
    }

    public function show(Request $request, User $user)
    {
        $roles = Role::all();
        return view("userview")->with(["user" => $user, "roles" => $roles]);
    }

    public function edituser(Request $request, User $user)
    {
        $user->email = $request->email ?? $user->email;
        $user->name = $request->name ?? $user->name;
        $user->phone = $request->phone ?? $user->phone;
        $roles = Role::findMany($request->input("roles"));
        $user->roles()->detach();
        $user->roles()->attach($roles);
        $user->save();
        return back();
    }
}
