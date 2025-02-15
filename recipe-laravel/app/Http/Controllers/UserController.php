<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Show register/Create form
    public function create(){
        return view('users.register');
    }

    //Create new user
    public function store(Request $request){
        // dd($request->all());
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')], 
            'password' => 'required|confirmed|min:6', 
        ]);

        //Hash password
        $formFields['password']= bcrypt($formFields['password']);
        
        //Create user in database
        $user= User::create($formFields);

        //Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in ');

    }

    //logout user
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 

        return redirect('/')->with('message', 'You have been logged out!');

    }

    //Show login form
    public function login(){
        return view('users.login');

    }

    //Authenticate user
    public function authenticate(Request $request){
        // dd($request->all());
        $formFields = $request->validate([
            'email' => ['required', 'email'], 
            'password' => 'required', 
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');

        }

        return back()->withErrors(['email'=> 'Invalid Credentials'])->onlyInput('email');

    }
}
