<?php

namespace App\Http\Controllers;

use App\Models\Kontragent;
use Illuminate\Http\Request;

class KontragentController extends Controller
{
    public function index() {
        $kontagents = Kontragent::paginate(100);
        return view("kontragents")->with("kontragents", $kontagents);
    }
}
