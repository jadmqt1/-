<?php

namespace App\Http\Controllers;

use App\Models\reglement;
use Illuminate\Http\Request;

class ReglementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reglements = reglement::all();
        return view('reglements.index',['reglements'=>$reglements]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reglements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        reglement::create($request->post());
        return redirect()->route('reglements.index');
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
        $reglements = reglement::find($id);
        return view('reglements.edit',['reglements' => $reglements]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reglements = reglement::find($id);
        $reglements->update($request->post());
        return redirect()->route('reglements.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reglements = reglement::find($id);
        $reglements->delete();
        return redirect()->route('reglements.index');
    }
}
