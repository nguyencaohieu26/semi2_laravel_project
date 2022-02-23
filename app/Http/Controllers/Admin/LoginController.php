<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Models\Admin;
    use Illuminate\Http\Request;

//    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;

    class LoginController extends Controller
    {
        public function login()
        {
            return view('admin.auth.login');
        }

        public function register()
        {
            return view('admin.auth.register');
        }
//    public function checkLogin(Request $request){
//        $arr = ['email'=> $request->email, 'password' => $request->password];
//        if(Auth::attempt($arr)){
//            return redirect()->route('admin-home-index');
//        }
//        return redirect()->route('admin.auth.auth')->with('error', 'Email or Password Incorrect');
//    }

//        Register
        public function save(Request $request)
        {
//         validate
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:admins',
                'password' => 'required|min:5|max:16',
            ]);
            $admin = new Admin();
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->password = Hash::make($request->password);

            $save = $admin->save();
            if ($save) {
                return back()->with('success', 'success add database');
            } else {
                return back()->with('error', 'error database');
            }
        }

        // Login
        public function check(Request $request)
        {
            // validate
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:5|max:16',
            ]);
            $userInfo = Admin::where('email', '=', $request->email)->first();
            if (!$userInfo) {
                return back()->with('error', 'we do not recognize your email address');
            } else {
                if (Hash::check($request->password, $userInfo->password)) {
                    $request->session()->put('LoggedUser', $userInfo->id);
                    return redirect()->route('admin-home-index');
                } else {
                    return back()->with('error', 'Incorrect Password');
                }
            }
        }

        public function logout(){
            if(session()->has('LoggedUser')){
                session()->pull('LoggedUser');
                return redirect()->route('auth.login');
            }
//            return redirect()->route('auth.login');
//            Auth::logout();
//            return redirect()->route('auth.login');
        }

    }
