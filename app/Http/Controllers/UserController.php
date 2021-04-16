<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::paginate(100);
        return view("users")->with("users", $users);
    }

    public function show(Request $request, User $user){
        return view("userview")->with("user", $user);
    }
}
