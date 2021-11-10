<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\admin;
use App\User;

class AuthController extends Controller
{
    public function showFormLogin(request $request)
    {
        return view('website.login');
    }
 
    public function login(Request $request)
    {
        $data = admin::where('email', $request->email)->first();        
        if($data){
            if(Hash::check($request->password, $data->password)){
                session(['sudahLogin' => true]);
                session(['idAdmin' => $data->id]);
                session(['nama' => $data->name]);
                session(['level' => $data->level]);
                return redirect('adminPg');
            }
            else{
                session(['error' => 'Password Anda Salah!']);
                return redirect('login');
            }
        }        
        else{
            session(['error' => 'Email Tidak Ditemukan']);
            return redirect('login');
        }
    }
 
    public function showFormRegister()
    {
        return view('website.register');
    }
 
    public function register(Request $request)
    {
        $data = admin::where('email', $request->email)->first();
        if($data){
            session(['eror' => 'Email Telah Digunakan!']);
            return redirect('register');
        }
        else{
            $user = new admin;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->level = '2';
            $user->created_at = \Carbon\Carbon::now();
            $user->updated_at = \Carbon\Carbon::now();
            $simpan = $user->save();
 
            session(['sukses' => 'Berhasil daftar, silahkan login!']);
            return redirect('logout');
        }
    }
 
    public function logout(request $request)
    {
        $request->session()->flush();
        session(['berhasilUbahAdmin' => 'Silahkan Login Kembali Untuk Melanjutkan!']);
        return redirect('/login');
    }
    
}
