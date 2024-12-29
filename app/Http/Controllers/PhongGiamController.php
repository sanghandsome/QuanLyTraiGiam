<?php

namespace App\Http\Controllers;

use App\Models\PhongGiam;
use Illuminate\Http\Request;

class PhongGiamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('phonggiams.index');
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
    public function show(PhongGiam $phongGiam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PhongGiam $phongGiam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PhongGiam $phongGiam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PhongGiam $phongGiam)
    {
        //
    }
}
