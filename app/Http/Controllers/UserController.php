<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class UserController extends Controller
{

    public function index() {
        return view('user.homepage');
    }

    public function storeUser() {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'password' => 'required|confirmed'
        ]);

        $user = User::create(request(['name', 'email', 'username', 'password']));

        auth()->login($user);

        return redirect()->to('/home');
    }

    public function loginUser() {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            Session::flash('error', 'The email or password is incorrect, please try again');
            return back();
        }

        return redirect()->to('/home');
    }

    public function destroy() {
         auth()->logout();
         return redirect()->to('/');
    }
}
