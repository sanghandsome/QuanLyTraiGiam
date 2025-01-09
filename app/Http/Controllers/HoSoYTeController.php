<?php

namespace App\Http\Controllers;

use App\Models\HoSoYTe;
use App\Models\HoSoYTeView2;
use Illuminate\Http\Request;
use App\Models\PhamNhan;
use App\Models\HoSoYTeView;
use DB;

class HoSoYTeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hosoytes = HoSoYTeView::orderBy('NgayChanDoan', 'desc')->get();
        $soLuongHoSo = HoSoYTeView2::get();
        return view('hosoytes.index', compact('hosoytes', 'soLuongHoSo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $phamNhans = PhamNhan::all();
        return view('hosoytes.create', compact('phamNhans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'MaHoSo.*' => 'required|string',
            'MaPhamNhan.*' => 'required|string',
            'VanDeYTe.*' => 'required|string',
            'NgayChanDoan.*' => 'required|date',
            'PhuongPhapDieuTri.*' => 'required|string',
            'BacSiPhuTrach.*' => 'required|string',
        ]);
        foreach ($validatedData['MaHoSo'] as $index => $maHoSo) {
            HoSoYTe::create([
                'MaHoSo' => $maHoSo,
                'MaPhamNhan' => $validatedData['MaPhamNhan'][$index],
                'VanDeYTe' => $validatedData['VanDeYTe'][$index],
                'NgayChanDoan' => $validatedData['NgayChanDoan'][$index],
                'PhuongPhapDieuTri' => $validatedData['PhuongPhapDieuTri'][$index],
                'BacSiPhuTrach' => $validatedData['BacSiPhuTrach'][$index],
            ]);
        }

        return redirect()->route('ho-so-y-te.index')->with('success', 'Thêm hồ sơ thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(HoSoYTe $hoSoYTe)
    {
        $hoSoYTe->load('phamNhan'); // Nạp trước quan hệ phamNhan
        return view('hosoytes.show', ['hoSo' => $hoSoYTe]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HoSoYTe $hoSoYTe)
    {
        //
        $phamNhans = PhamNhan::all();
        return view('hosoytes.edit', compact('hoSoYTe', 'phamNhans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HoSoYTe $hoSoYTe)
    {
        $hoSoYTe->update($request->only([
            'PhuongPhapDieuTri',
            'BacSiPhuTrach',
        ]));

        return redirect()->route('ho-so-y-te.index')->with('success', 'Cập nhật hồ sơ thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HoSoYTe $hoSoYTe)
    {
        try {
            // Gọi stored procedure để xóa hồ sơ
            DB::statement('EXEC XoaHoSoYTe @MaHoSo = ?', [$hoSoYTe->MaHoSo]);
            return redirect()->route('ho-so-y-te.index')->with('success', 'Xóa hồ sơ thành công');
        } catch (\Exception $e) {
            return redirect()->route('ho-so-y-te.index')->with('fail', 'Có lỗi xảy ra: ' . $e->getMessage());
        }
    }
    public function show2($maPhamNhan)
    {
        $hoSoYTe = HoSoYTe::where('MaPhamNhan', $maPhamNhan)->get();

        return view('hosoytes.show2', compact('hoSoYTe','maPhamNhan'));
    }
}
