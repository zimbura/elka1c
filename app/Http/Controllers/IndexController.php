<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $users = User::all();
        $roles = Role::all();
        return view("xmlupload")->with(["users" => $users, "roles" => $roles]);
    }
}
