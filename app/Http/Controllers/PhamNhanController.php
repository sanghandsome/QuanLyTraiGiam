<?php

namespace App\Http\Controllers;

use App\Models\PhamNhan;
use Illuminate\Http\Request;

class PhamNhanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('phamnhans.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PhamNhan $phamNhan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PhamNhan $phamNhan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PhamNhan $phamNhan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PhamNhan $phamNhan)
    {
        //
    }
}
