<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function login(Request $request){

        if(Auth::check()){

            return redirect()->intended(route('user.private'));
        }

        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(User::where('username', '=', ($request->username))
            ->where('password', '=', ($request->password))
            ->exists()){
            $user = User::where('username', '=', ($request->username))->first();
            auth()->login($user);
            if ($request->session()->has('url')) {

                $url = session('url');
                session()->forget('url');
                return Redirect::to($url);

            }
            return redirect(route('user.private'));

        }

        return redirect(route('user.login'))->withErrors([
            'email' => 'Error'
        ]);
    }
}
