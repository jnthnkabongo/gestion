<?php

namespace App\Http\Controllers;

use App\Models\parametres;
use Illuminate\Http\Request;

class ParametresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administration.pages.parametres');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\parametres  $parametres
     * @return \Illuminate\Http\Response
     */
    public function show(parametres $parametres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\parametres  $parametres
     * @return \Illuminate\Http\Response
     */
    public function edit(parametres $parametres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\parametres  $parametres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, parametres $parametres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\parametres  $parametres
     * @return \Illuminate\Http\Response
     */
    public function destroy(parametres $parametres)
    {
        //
    }
}
