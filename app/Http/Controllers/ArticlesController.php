<?php

namespace App\Http\Controllers;

use App\Models\articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // L'index
    {
        $article = articles::latest()->paginate(100);
        return view('utilisateur.pages.e-commerce', compact('article'))
        ->with('i',(request()->input('page',1)-1) * 100);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //La page Afficher article
    {
        $article = articles::latest()->paginate(100);
        return view('administration.pages.articles', compact('article'))
        ->with('i',(request()->input('page',1)-1) * 100);
    }
    public function detail(articles $article){
        return view('utilisateur.pages.details', compact('article'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('utilisateur.pages.poster');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $request->validate([
            'article_nom'=>'required',
            'article_detail'=>'required',
            'prix'=>'required',
            'date_fabrication'=>'required',
            'ville'=>'required',
            'image'=>'required|image|mimes:jpg,png,jpeg,gif,svg,heic|max:4096',
        ]);
        $input = $request->all();
        if($image = $request->file('image')){
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
         }
         articles::create($input);
         return redirect()->route('home_e-commerce')
                            ->with('succes','L\'article a été ajouter avec succes!!');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function edit(articles $articles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, articles $articles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy(articles $articles)
    {
        //
    }
}
