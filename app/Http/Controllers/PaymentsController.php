<?php

namespace App\Http\Controllers;

use App\Models\PlategLinc;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function index() {
        $payments = PlategLinc::paginate(100);
        return view("payments")->with("payments", $payments);
    }
}
