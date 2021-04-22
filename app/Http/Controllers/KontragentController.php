<?php

namespace App\Http\Controllers;

use App\Models\Kontragent;
use App\Models\User;
use Illuminate\Http\Request;

class KontragentController extends Controller
{
    public function index()
    {
        if (!auth()->check() || !auth()->user()->hasRole("admin", "director", "accountant")) {
            abort(404);
        }
        $kontragents = Kontragent::paginate(100);
        return view("kontragents")->with("kontragents", $kontragents);
    }

    public function show(Request $request, Kontragent $kontragent)
    {
        if (!auth()->check() && !auth()->user()->hasRole("admin", "director", "accountant")) {
            abort(404);
        }
        $users = User::all();
        return view("kontragentview")->with(["kontragent" => $kontragent, "users" => $users]);
    }

    public function editkontragent(Request $request, Kontragent $kontragent)
    {
        // Я знаю что это можно сделать в разы красивей и аккуратней
        // Местами база мешает, местами собвственная лень
        // Todo: Поправить этот код и добавить валидацию
        $kontragent->name_kontragent = $request->name ?? $kontragent->name_kontragent;
        $kontragent->email_kontragent = $request->email ?? $kontragent->email_kontragent;
        $kontragent->MyKontragent = $request->mykontragent ? 1 : 0 ?? 0;
        $kontragent->NdsKontragent = $request->nds ? 1 : 0 ?? 0;
        $kontragent->KontaktUserKontragent = $request->contactname ?? $kontragent->KontaktUserKontragent;
        $kontragent->KontaktUserKontragent2 = $request->contactnameobj ?? $kontragent->KontaktUserKontragent2;
        $kontragent->TelKontragent2 = $request->phone ?? $kontragent->TelKontragent2;
        $kontragent->forma_kontragent = $request->type ?? $kontragent->forma_kontragent;
        $kontragent->nalog_kontragent = $request->tax ?? $kontragent->nalog_kontragent;
        $kontragent->NoteKontragent = $request->note ?? $kontragent->NoteKontragent;
        $kontragent->inn_kontragent = $request->inn ?? $kontragent->inn_kontragent;
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
