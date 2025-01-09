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
        return view('phongGiam.index', compact('phongGiam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('phongGiam.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ma_phong_giam' => 'required',
            'suc_chua' => 'required',
            'so_luong_pham_nhan' => 'required',
            'vi_tri' => 'required',
            'ma_nhan_vien' => 'required',
        ]);

        PhongGiam::create($request->only([
            'ma_phong_giam', 
            'suc_chua', 
            'so_luong_pham_nhan', 
            'vi_tri', 
            'ma_nhan_vien'
        ]));

        return redirect()->route('phong-giam.index')->with('success', 'Phòng giam đã được tạo thành công.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PhongGiam $phongGiam)
    {
        return view('phongGiam.show', compact('phongGiam'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PhongGiam $phongGiam)
    {
        return view('phongGiam.edit', compact('phongGiam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PhongGiam $phongGiam)
    {
        $request->validate([
            'ma_phong_giam' => 'required',
            'suc_chua' => 'required',
            'so_luong_pham_nhan' => 'required',
            'vi_tri' => 'required',
            'ma_nhan_vien' => 'required',
        ]);

        $phongGiam->update($request->only([
            'ma_phong_giam', 
            'suc_chua', 
            'so_luong_pham_nhan', 
            'vi_tri', 
            'ma_nhan_vien'
        ]));

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
