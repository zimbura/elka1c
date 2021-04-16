<?php

namespace App\Http\Controllers;

use App\Models\Kontragent;
use Illuminate\Http\Request;

class KontragentController extends Controller
{
    public function index() {
        $kontragents = Kontragent::paginate(100);
        return view("kontragents")->with("kontragents", $kontragents);
    }

    public function show(Request $request, Kontragent $kontragent) {
        return view("kontragentview")->with("kontragent", $kontragent);
    }
}
