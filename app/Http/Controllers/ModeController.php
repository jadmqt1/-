<?php

namespace App\Http\Controllers;

use App\Models\mode_Regl;
use Illuminate\Http\Request;

class ModeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modes = mode_Regl::all();
        return view('modes.index',['modes'=>$modes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        mode_Regl::create($request->post());
        return redirect()->route('modes.index');
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
        $modes = mode_Regl::find($id);
        return view('modes.edit',['modes' => $modes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $modes = mode_Regl::find($id);
        $modes->update($request->post());
        return redirect()->route('modes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $modes = mode_Regl::find($id);
        $modes->delete();
        return redirect()->route('modes.index');
    }
}
