<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    /** */
    public function index(Request $request){
//        $query = Users::with('accounts')->where('deleted_at','=',null);
//        if(isset($request->id)){
//            $query = $query->getbyid($request->id);
//        }
//        if(isset($request->name)){
//            $query = $query->getbyname($request->name);
//        }
//        if(isset($request->email)){
//            $query = $query->getbyemail($request->email);
//        }
        $query = DB::table('users')
            ->select('users.id','users.avatar','users.firstname','users.lastname','users.gender','users.email','users.date_of_birth','accounts.role')
            ->join('accounts','users.id','=','accounts.user_id');
        if(isset($request->id)){
            $query = $query->where('users.id','=',$request->id);
        }
        if(isset($request->name)){
            $query = $query->where('users.lastname','like','%'.$request->name.'%');
        }
        if(isset($request->email)){
            $query = $query->where('users.email','like','%'.$request->email.'%');
        }
        return $query->paginate(10);
    }

    /** */
    public function create(){}

    /** */
    public function store(Request $request){}

    /** */
    public function show(Users $users){}

    /** */
    public function edit(Users $users){}

    /** */
    public function update(Request $request,$id)
    {
        $user = Users::findOrFail($id);
        if(isset($request->image)){
            $validate = $request->validate([
                'f_name' => 'bail|required',
                'l_name' => 'bail|required',
                'email'  => ['bail','email','required', Rule::unique('users')->ignore($id)],
                'phone'  => 'bail|required',
                'address'=> 'bail|required',
                'birthday' => 'bail|required|before:now',
                'gender'   => 'bail|required',
                'image'    => 'bail|image',
            ]);
        }else{
            $validate = $request->validate([
                'f_name' => 'bail|required',
                'l_name' => 'bail|required',
                'email'  => ['bail','email','required', Rule::unique('users')->ignore($id)],
                'phone'  => 'bail|required',
                'address'=> 'bail|required',
                'birthday' => 'bail|required|before:now',
                'gender'   => 'bail|required'
            ]);

            $user->firstname = $request->f_name;
            $user->lastname  = $request->l_name;
            $user->address   = $request->address;
            $user->email     = $request->email;
            $user->gender    = $request->gender;
            $user->date_of_birth  = $request->birthday;

            $user->save();

            return redirect()->back()->with('update-info','Update Info Successfully');
        }
    }

    /** */
    public function destroy(Users $users)
    {
        //
    }
}
