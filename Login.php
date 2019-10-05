<?php

namespace App\Http\Controllers;
use App\ModelKontak;
use Illuminate\Http\Request;
use Session;

class Login extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function cek(Request $req)
    {
        
        $this->validate($req,[
            'email'=>'required',
            'password'=>'required'
        ]);
        // echo $req->email;
        // echo $req->password;
        $proses=ModelKontak::where('email', $req->email)->where('password', $req->password)->first();
        if($proses){
            Session::put('id_kontak', $proses->id_kontak);
            Session::put('email', $proses->email);
            Session::put('password',$proses->password);
            Session::put('hak_akses', $proses->hak_akses);
            Session::put('nama', $proses->nama);
            Session::put('login_status', true);
            return redirect('/');
        } else {
            Session::flash('alert_pesan', 'Username dan password tidak cocok');
            return redirect('login');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('login');
    }
}
