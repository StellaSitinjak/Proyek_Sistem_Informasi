<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Customer;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Contracts\User as ProviderUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('index');
        }
    }

    public function login(){
        return view('auth.login');
    }

    public function loginPost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = User::where('email',$email)->first();
        $dataC = Customer::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                // $dataC->visited = 
                Session::put('name',$dataC->nama);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return redirect('home');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('login')->with('alert','Kamu sudah logout');
    }
}
