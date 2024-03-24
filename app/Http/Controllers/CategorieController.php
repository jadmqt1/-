<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = categorie::all();
        return view('categorie.index',['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view('categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        Categorie::create($request->post());
        return redirect()->route('categories.index')->with('success','create categorie and succssfly');
    }

    /**
     * Display the specified resource.
     */
    public function show(categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categorie = categorie::find($id);
        return view('categorie.edit',['categorie' => $categorie]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categorie = categorie::find($id);
        $categorie->delete();
        return redirect()->route('categories.index')->with('','delete sucess');
    }
}
