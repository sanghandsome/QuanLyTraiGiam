<?php

namespace App\Http\Controllers;

use App\Models\HoSoYTe;
use Illuminate\Http\Request;

class HoSoYTeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('hosoytes.index');
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
    public function show(HoSoYTe $hoSoYTe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HoSoYTe $hoSoYTe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HoSoYTe $hoSoYTe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HoSoYTe $hoSoYTe)
    {
        //
    }
}
