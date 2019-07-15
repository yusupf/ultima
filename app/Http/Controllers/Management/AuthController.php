<?php

namespace App\Http\Controllers\Management;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UsersAdmin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function index(){
        return view('management.login');
    }
    public function loginPost(Request $request){

        // dd($request->all());

        $email = $request->user_email;
        $password = $request->user_pass;

        $data = UsersAdmin::where('email',$email)->first();
        if($data){
            if(Hash::check($password,$data->password)){
                Session::put('id',$data->id);
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('as','admin');
                Session::put('login',TRUE);
                return redirect('/management/dashboard');
            }
            else{
                return redirect('login_admin')->with('alert_danger','Your email or password is wrong!');
            }
        }
        else{
            return redirect('login_admin')->with('alert_danger','Your email or password is wrong!');
        }
    }

    public function logout_admin(){
        Session::flush();
        return redirect('login_admin')->with('alert_success','Successfully logged out!');
    }

  

    public function registerPost(Request $request){
        // $as = $request->as;

        // $this->validate($request, [
        //     'name' => 'required|min:4',
        //     'email' => 'required|min:4|email|unique:users',
        //     'password' => 'required',
        //     'confirmation' => 'required|same:password',
        // ]);

        $data = [
            'name' => 'Superadmin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('adminadmin')
        ];
        UsersAdmin::insert($data);

        return redirect('login_admin')->with('alert_success','Your registration was successful!');
    }
}
