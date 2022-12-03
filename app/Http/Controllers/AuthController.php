<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


class AuthController extends Controller
{
    public function getLogin()
    {
        return view('signin.index');
    }

    public function postLogin(Request $request)
    {
        if(!auth()->attempt(['email' => $request->email,'password' => $request->password])) {
            return redirect()->back();
        }

        $user = User::where('email', $request->email)->first();
        if($user->id_level == 1) {
            return redirect('/admin');
        } elseif($user->id_level == 2) {
            return redirect('/member');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');

    }

}
