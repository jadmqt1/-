<?php

namespace App\Http\Controllers;

use App\Models\detail_bl;
use Illuminate\Http\Request;

class Detail_blController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $details = detail_bl::all();
        return view('details.index',['details'=>$details]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('details.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        detail_bl::create($request->post());
        return redirect()->route('details.index');
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
        $details = detail_bl::find($id);
        return view('details.edit',['details' => $details]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $details = detail_bl::find($id);
        $details->update($request->post());
        return redirect()->route('details.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $details = detail_bl::find($id);
        $details->delete();
        return redirect()->route('details.index');
    }
}
