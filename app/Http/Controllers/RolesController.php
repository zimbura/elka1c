<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function changeRoles(Request $request, $id) {
        $user = User::find($id);
        $roles = Role::findMany($request->input("roles"));
        if ($user === NULL) {
            abort(404);
        }
        $user->roles()->detach();
        $user->roles()->attach($roles);
        return back();
    }
}
