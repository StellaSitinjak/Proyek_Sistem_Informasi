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
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    public function register(){
        return view('auth.register');
    }

    public function registerPost(Request $request){
        // $this->validate($request, [
        //     'name' => 'required|string|max:255',
        //     'birthdate' => 'required',
        //     'gender' => 'required',
        //     'alamat' => 'required|max:255',
        //     'phone' => 'required',
        //     'email' => 'required|min:4|email|unique:users',
        //     'password' => 'required|min:8',
        //     'confirmation' => 'required|same:password',
        // ]);

        $tableU =  new User();
        $tableC = new Customer();
        
        $tableC->nama = $request->name;
        $tableC->alamat = $request->alamat;
        $tableC->birthdate = $request->birthdate;
        $tableC->gender = $request->gender;
        $tableC->email = $request->email;
        $tableC->noHP = $request->phone;
        $tableC->visited = 1;
        $tableC->save();

        $tableU->email = $request->email;
        $tableU->password = bcrypt($request->password);
        $tableU->save();

        return redirect('login')->with('alert-success','Kamu berhasil Register');

        // User::create([
        //     'email' => $request->email,
        //     'password' => bcrypt($request->password),
        // ]);

        // return Customer::create([
        //     'name' => $request->name,
        //     'alamat' => $request->alamat,
        //     'birthdate' => $request->birthdate,
        //     'gender' => $request->gender,
        //     'email' => $request->email,
        //     'noHP' => $request->phone,
        // ]);
    }
}
