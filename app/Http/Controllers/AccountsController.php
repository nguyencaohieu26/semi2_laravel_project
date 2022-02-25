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
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function getLogin(){
        return view('main_public.login');
    }

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
    /**
     * Display the specified resource.
     */
    public function show(Accounts $accounts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accounts $accounts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Accounts $accounts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accounts $accounts)
    {
        //
    }
}
