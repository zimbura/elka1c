<?php

namespace App\Http\Controllers;

use App\Models\Kontragent;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if (!auth()->check()) {
            abort(404);
        }
        if (!auth()->user()->hasRole("admin", "director", "accountant")) {
            // Обходной костыль для foreach
            $users = [User::find(Auth::id())];
        } else {
            $users = User::paginate(100);
        }
        return view("users")->with("users", $users);
    }

    public function show(Request $request, User $user)
    {
        if (!auth()->check()) {
            abort(404);
        }
        if (!auth()->user()->hasRole("admin", "director", "accountant") && $user->id !== Auth::id()) {
            abort(404);
        }
        $my_kontragent = $user->my_kontragent;
        $mycompanies = Kontragent::where("MyKontragent", 1)->get();
        $roles = Role::all();
        return view("userview")->with(["user" => $user, "roles" => $roles, "mycompanies" => $mycompanies]);
    }

    public function edituser(Request $request, User $user)
    {
        $user->email = $request->email ?? $user->email;
        $user->name = $request->name ?? $user->name;
        $user->phone = $request->phone ?? $user->phone;
        $user->phone2 =  $request->phone2 ?? $user->phone2;
        $user->status = $request->status ?? $user->status;
        $user->wage = $request->wage ?? $user->wage;
        $user->percent = $request->percent ?? $user->percent;
        $user->salary = $request->salary ?? $user->salary;
        $user->dismissdate = $request->dismissdate ?? $user->dismissdate;
        $user->my_kontragent = $request->mycompany ?? $user->my_kontragent;
        $user->password = bcrypt($request->password) ?? $user->password;
        $roles = Role::findMany($request->input("roles"));
        $user->roles()->detach();
        $user->roles()->attach($roles);
        $user->save();
        return back();
    }
}
