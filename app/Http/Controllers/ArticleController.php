<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $articles = Article::all();
    return view('article.index', ['articles' => $articles]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $request['image'] = "$profileImage";
        };
        Article::create($request->post());
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view ('article.edit');


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $article = article::find($id);
        // $article->update($request->post());
        // if ($image = $request->file('image')) {
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $request->image->move(public_path('images'), $profileImage);
        //     $article->image = "$profileImage";
        // }else{
        //     unset($request['image']);
        // }
        // $article->save();
        // return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
