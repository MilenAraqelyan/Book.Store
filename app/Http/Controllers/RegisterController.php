<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Models\Author;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    public function edit(){
        if(!Auth::check()){
            return redirect(route('user.login'));
        }
        $categories = Category::all();
        $authors = Author::all();
        $user = Auth::user();
        return view('bookshop.editPrivate', compact('categories', 'authors', 'user'));

    }

    public function update(Request $request){



        $user = Auth::user();

        $request->validate([

                'username'=>'required|max:20|min:6',
                'email' => 'email',
                'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
                'password' => [
                    'required',
                    'min:6'
                ],
                'gender'=>'required'

        ]);

        $user->update(['username' => $request['username'],
                        'email' => $request['email'],
                        'phone' => $request['phone'],
                        'password' => $request['password'],
                        'gender' => $request['gender']]);

        $user->save();


        return redirect(route('user.private'));
    }

    public function save(UserStoreRequest $request){

        if(Auth::check()){
            return redirect(route('user.private'));
        }

        $request->validated();
        $user = User::create($request->all());

        if($user){
            auth()->login($user);
            return redirect(route('user.private'));
        }
        return redirect(route('user.login'))->withErrors([
            'formError' => 'Error'
        ]);
    }
}
