<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountsController extends Controller
{
    /** Display a listing of the resource.*/
    public function index(){}

    /** Show the form for creating a new resource.*/
    public function create(){}

    /** Store a newly created resource in storage. */
    public function store(Request $request){

        $validate = $request->validate([
            'firstname' => 'bail|required',
            'lastname'  => 'bail|required',
            'email'     => 'bail|email|required|unique:accounts,email',
            'password'  => 'regex:"^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$"',
        ],['password.regex' =>'The :attribute minimum eight characters, at least one uppercase letter, one lowercase letter and one number']
        );

        //Create user info
        $user = new Users();
        $user->firstname = $request->firstname;
        $user->lastname  = $request->lastname;
        $user->email     = $request->email;

        $user->save();
        //Create account
        $account = new Accounts();
        $account->user_id = $user->id;
        $account->email   = $request->email;
        $account->password = bcrypt($request->password);

        $account->save();

        return redirect()->route('login-account')->with('create-account','Create Account Success');
    }

    public function getLogin(){return view('main_public.login');}

    public function getSignup(){return view('main_public.signup');}

    public function checkLogin(Request $request){
        $arr = [
            'email' => $request->email,
            'password' =>$request->password,
        ];
        if(Auth::attempt($arr)){
            if(Auth::user()->role === "USER"){
                return redirect()->route('user-home-index');
            }else if(Auth::user()->role === "ADMIN"){
                return redirect()->route('admin-home-index');
            }
        }else{
            return back()->withInput()->with('error-login','Email Or Password Not Match');
        }
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('home-index');
    }

    public function userChangePassword(Request $request){
        dd($request->all());
    }

    /** Display the specified resource. */
    public function show(Accounts $accounts){}

    /** Show the form for editing the specified resource. */
    public function edit(Accounts $accounts){}

    /** Update the specified resource in storage. */
    public function update(Request $request, Accounts $accounts){}

    /** Remove the specified resource from storage. */
    public function destroy(Accounts $accounts){}
}
