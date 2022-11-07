<?php

namespace App\Http\Controllers;

use App\Models\articles;
use Illuminate\Http\Request;

class utilisateur extends Controller
{
    public function index(){
        $article = articles::latest()->paginate(100);
        return view('utilisateur.pages.e-commerce', compact('article'))
        ->with('i',(request()->input('page',1)-1) * 100);
    }
}
