<?php

namespace App\Http\Controllers;

use App\Models\BonLivraison;
use Illuminate\Http\Request;

class BonLivraisonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bonLivraisons = BonLivraison::all();
        return view('bonlivraisons.index',['bonlivraisons'=>$bonLivraisons]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bonLivraisons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        BonLivraison::create($request->post());
        return redirect()->route('bonlivraisons.index');
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
    public function edit($id)
    {
        $bonlivraison = BonLivraison::find($id);
        return view('bonlivraisons.edit',['bonlivraison' => $bonlivraison]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bonLivraisons = BonLivraison::find($id);
        $bonLivraisons->update($request->post());
        return redirect()->route('bonlivraisons.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bonLivraisons = BonLivraison::find($id);
        $bonLivraisons->delete();
        return redirect()->route('bonlivraisons.index');
    }
}
