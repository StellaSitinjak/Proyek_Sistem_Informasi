<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Customer;
use App\Pegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function login_index(){
        return view('Auth.login');
    }
    public function register_index(){
        return view('Auth.register');
    }
    public function regisWorker(){
        return view('Admin.registrasi-pegawai');
    }
    
    public function register(Request $request){
        $data = User::where('email', $request->email)->get();
        if($data){
            return redirect('login')->with('message','Email telah digunakan sebelumnya!');
        }

        $tableC = new Customer();
        
        $tableC->nama = $request->name;
        $tableC->alamat = $request->alamat;
        $tableC->birthdate = $request->birthdate;
        $tableC->gender = $request->gender;
        $tableC->email = $request->email;
        $tableC->noHP = $request->phone;
        $tableC->visited = 0;
        $tableC->save();

        $this->validate($request,[
            'email'=>'required|string|email|unique:users,email',
            'password'=>'required|min:6|confirmed',
        ]);
        $input_data=$request->all();
        $input_data['password']=Hash::make($input_data['password']);
        User::create($input_data);
        return redirect('/login')->with('alert-success','Kamu berhasil Register');
    }

    public function postWorker(Request $request){
        $data = Pegawai::where('email', $request->email)->get();
        if($data){
            return redirect('login')->with('message','Email telah digunakan sebelumnya!');
        }

        $tableP = new Pegawai();
        
        $tableP->nama = $request->name;
        $tableP->alamat = $request->alamat;
        $tableP->birthdate = $request->birthdate;
        $tableP->gender = $request->gender;
        $tableP->email = $request->email;
        $tableP->noHP = $request->phone;
        $tableP->jabatan = $request->role;
        $tableP->save();

        $this->validate($request,[
            'email'=>'required|string|email|unique:users,email',
            'password'=>'required|min:6|confirmed',
        ]);
        $input_data=$request->all();
        $input_data['password'] = Hash::make($input_data['password']);
        User::create($input_data);

        return redirect('/register-pegawai')->with('alert-success','Pegawai berhasil di Register');
    }

    public function login(Request $request){
        $input_data=$request->all();
        if(Auth::attempt(['email'=>$input_data['email'],'password'=>$input_data['password']])){
            Session::put('email',$input_data['email']);
            $dataP = Pegawai::where('email',$input_data['email'])->first();
            if($dataP){
                Session::put('role',$dataP->jabatan);
                Session::put('nama',$dataP->nama);
                Session::put('login',TRUE);
                if($dataP->jabatan == "Kasir"){
                    return redirect('/billing');
                } else {
                    return redirect('/stok');
                }
            }
            if ($input_data['email'] != "admin@gmail.com" && !$dataP) {
                $data = Customer::where('email',$input_data['email'])->first();
                $data->visited++;
                $data->save();
                Session::put('nama',$data->nama);
                Session::put('id',$data->id);
                Session::put('login',TRUE);
                return redirect('/');
            }
            Session::put('login',TRUE);
            return redirect('/menu');
        }else{
            return back()->with('message','Account is not Valid!');
            // echo 0;
        }
    }
    
    public function logout(){
        Auth::logout();
        Session::forget('email');
        return redirect('/');
    }
    
    public function account(){    
        $user_login=User::where('id',Auth::id())->first();
        return view('users.account',compact('user_login'));
    }

    public function updateprofile(Request $request,$id){
        $this->validate($request,[ 
            'country'=>'required',
            'address'=>'required',
            'province'=>'required',
            'region'=>'required',
            'city'=>'required',
            'barangay'=>'required',
            'postal_code'=>'required',
            'phone_number'=>'required',
            
        ]);
        $input_data=$request->all();
        DB::table('users')->where('id',$id)->update(['name'=>$input_data['name'],
            'address'=>$input_data['address'],
            'province'=>$input_data['province'],
            'region'=>$input_data['region'],
            'city'=>$input_data['city'],
            'barangay'=>$input_data['barangay'],
            'country'=>$input_data['country'],
            'postal_code'=>$input_data['postal_code'],
            'phone_number'=>$input_data['phone_number']]);
        return back()->with('message','Update Profile already!');

    }
    
    public function updatepassword(Request $request,$id){
        $oldPassword=User::where('id',$id)->first();
        $input_data=$request->all();
        if(Hash::check($input_data['password'],$oldPassword->password)){
            $this->validate($request,[
               'newPassword'=>'required|min:6|max:12|confirmed'
            ]);
            $new_pass=Hash::make($input_data['newPassword']);
            User::where('id',$id)->update(['password'=>$new_pass]);
            return back()->with('message','Update Password Already!');
        }else{
            return back()->with('oldpassword','Old Password is Inconrrect!');
        }
    }
}
