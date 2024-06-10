<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create(){
        return view('users.register');
    }

    public function store(Request $request){
        $form= $request->validate([
            'name'=> ['required', 'min:3'],
            'email'=> ['required', 'email', Rule::unique('users','email')],
            'password'=>['required', 'confirmed', 'min:6'],
        ]);

        //hash password
        $form['password']= bcrypt($form['password']);

        //create user
        $user = User::create($form);

        //Login
        auth()->login($user);
        
        return redirect('/')->with('message', 'User created and logged in');
    }
    
    public function login(){
        return view('users.login');
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'User Logged out ');
    }

    public function authenticate(Request $request){
        $form= $request->validate([
            'email'=>['required', 'email'],
            'password'=>'required'
        ]);

        if(auth()->attempt($form)){
            $request->session()->regenerate();
            return redirect('/')->with('message', 'User Logged In');
        }

        return back()->withErrors(['email'=> 'invalid Credentials'])->onlyInput('email');

    }
}
