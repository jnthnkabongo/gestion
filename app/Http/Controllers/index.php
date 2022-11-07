<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;
use App\Models\clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class index extends Controller
{
    public function index(){
        if(Session('admins') == true){
            $admin_session = Session::get('admins');
            $clients = clients::latest()->paginate(100);
            $Compteur_Clients = DB::select('select count(*) as Compteur_Clients from clients');
            $Compteur_Articles = DB::select('select count(*) as Compteur_Articles from articles');
            return view('administration.pages.index', compact('clients','Compteur_Clients','Compteur_Articles'));
        }else{
            return redirect('/');
        }
    }
}
