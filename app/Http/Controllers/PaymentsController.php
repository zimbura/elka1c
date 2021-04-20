<?php

namespace App\Http\Controllers;

use App\Models\PlategLinc;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function index() {
        // Должно быть мидлой, знаю
        if (!auth()->check() || !auth()->user()->hasRole("admin", "director")) {
            abort(404);
        }
        $payments = PlategLinc::paginate(100);
        return view("payments")->with("payments", $payments);
    }
}
