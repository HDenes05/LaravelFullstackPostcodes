<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\County;

class Countycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $counties = County::all();

        return view('hd_county.index', compact("counties"));
        return view("hd_county.create");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("hd_county.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'postal_code' => 'required',
        ]);

        $county = new County();
        $county->postal_code = $request->postal_code;
        $county->save();

        return redirect()->route("hd_county.index")->with('success', 'County created successfully!');

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
