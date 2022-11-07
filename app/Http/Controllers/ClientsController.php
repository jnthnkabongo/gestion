<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administration.pages.clients');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('utilisateur.pages.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        return view('utilisateur.pages.profil');
    }
    public function verif(Request $request){
        $email = $request->input('email');
        $req = clients::whereEmail($email)->first();
        if($req == true){
            return redirect()->route('recuperation_compte');
        }else{
            return back()->with('status', ['message' => 'Une erreur se produite']);
        }
    }
    public function verification(Request $request){
        $nom = $request->input('nom');
        $pseudo = $request->input('pseudo');
        $numero = $request->input('numero');
        $securite = $request->input('securite');
        $req = clients::whereNom($nom)->wherePseudo($pseudo)->whereNumero($numero)->whereSecurite($securite)->first();
        if($req == true){
            return redirect()->route('changer_mdp');
        }else{
            return back()->with('status', ['message'=> 'Une erreur se produite !!']);
        }
    }
    public function mdp(){
        return view('utilisateur.pages.changermdp');
    }
    public function recup(){
        return view('utilisateur.pages.recuperation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function show(clients $clients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function edit(clients $clients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $email = $request->input('email_user');
        $password = $request->input('password_user');
        $req = clients::whereEmail($email)->wherePassword($password)->first();
        if($req == true){
            session_start();
            $reqs = clients::whereEmail($email)->get();
            foreach ($reqs as $reqss):
                $user = $reqss->pseudo;
                 Session::put('users', $user);
            endforeach;
            Session::put('users', $email);
            return redirect()->route('profil_users');
        }else{
            return back()->with('status', ['message' => 'Le compte n\'existe pas veuillez reéssayer']);
        }
    }
    public function logout_users(){
        session_start();
        session_unset();
        session_destroy();
        return redirect()->route('login_users');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clients  $clients
     * @return \Illuminate\Http\Response
     */
    public function destroy(clients $clients)
    {
        return view('utilisateur.pages.login_users');
    }
}
