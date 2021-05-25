<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect("/");
        }

        return redirect()->back()->withErrors([
            'email' => 'Данные для входа не верны',
        ]);
    }

    public function page() {
        return view("pages.login");
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/loginpage');
      }
}