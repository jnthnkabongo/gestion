<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\admins;

use Illuminate\Http\Request;

class login extends Controller
{
    public function index(){
        return view('administration.pages.login');
    }
    public function authentification(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $req = admins::whereEmail($email)->wherePassword($password)->first();
        if($req == true){
            session_start();
            Session::put('admins', $email);
            return redirect()->route('home_admin');
        }else{

            return back()->with('status', ['message' => 'Utilisateur n\'est pas reconnu dans notre base de données ']);
        }
    }
    public function create(){
        
    }
    public function store(){

    }
    public function logout(){
        session_start();
        session_unset();
        session_destroy();
        return redirect()->route('login_admin');
    }
}
