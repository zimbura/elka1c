<?php

namespace App\Http\Controllers;

use App\Models\Kontragent;
use App\Models\User;
use Illuminate\Http\Request;

class KontragentController extends Controller
{
    public function index()
    {
        $kontragents = Kontragent::paginate(100);
        return view("kontragents")->with("kontragents", $kontragents);
    }

    public function show(Request $request, Kontragent $kontragent)
    {
        $users = User::all();
        return view("kontragentview")->with(["kontragent" => $kontragent, "users" => $users]);
    }

    public function editkontragent(Request $request, Kontragent $kontragent)
    {
        // Я знаю что это можно сделать в разы красивей и аккуратней
        // Местами база мешает, местами собвственная лень
        // Todo: Поправить этот код и добавить валидацию
        $kontragent->name_kontragent = $request->name ?? $kontragent->name_kontragent;
        $kontragent->MyKontragent = $request->mykontragent ? 1 : 0 ?? 0;;
        $inn = $kontragent->INNs()->first();
        if (!$inn->empty) {
            $inn->inn_kontragent = $request->inn ?? $inn->inn_kontragent;
            $inn->save();
        }
        $user = User::find($request->input("user"));
        if ($user !== NULL) {
            $kontragent->user()->dissociate();
            $kontragent->user()->associate($user);
        }
        $kontragent->save();
        return back();
    }

    public function mykontragents()
    {
        $kontragents = Kontragent::where("MyKontragent", 1)->paginate(100);
        return view("kontragents")->with("kontragents", $kontragents);
    }
}
