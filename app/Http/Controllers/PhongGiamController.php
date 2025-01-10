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
        $phongGiam = PhongGiam::all();
        return view('phonggiams.index', compact('phongGiam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('phonggiams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        PhongGiam::create($request->all());
        return redirect()->route('phong-giam.index')->with('success', 'Phòng giam đã được tạo thành công.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $phongGiam = PhongGiam::findOrFail($id);
        return view('phonggiams.show', compact('phongGiam'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($MaPhongGiam)
    {
        $phongGiam = PhongGiam::findOrFail($MaPhongGiam);
        return view('phonggiams.edit', compact('phongGiam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $phongGiam = PhongGiam::findOrFail($id);

        $phongGiam->update($request->all());

        return redirect()->route('phong-giam.index')->with('success', 'Phòng giam đã được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PhongGiam $phongGiam)
    {
        $phongGiam->delete();

        return redirect()->route('phong-giam.index')->with('success', 'Phòng giam đã được xóa thành công.');
    }
}
