<?php

namespace App\Http\Controllers;

use App\Models\LichTrinh;
use Illuminate\Http\Request;

class LichTrinhController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lichTrinhs = LichTrinh::all();
        return view('lichtrinhs.index', compact('lichTrinhs'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lichtrinhs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        LichTrinh::create($request->all());

        return redirect()->route('lichtrinhs.index')
            ->with('success', 'Lịch trình được tạo thành công.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $lichTrinh = Lichtrinh::findOrFail($id);
        return view('lichtrinhs.show', compact('lichTrinh'));
      

    // Định dạng lại thời gian để hiển thị chính xác nếu cần
    $lichTrinh->ThoiGianBatDau = \Carbon\Carbon::parse($lichTrinh->ThoiGianBatDau)->format('H:i');
    $lichTrinh->ThoiGianKetThuc = \Carbon\Carbon::parse($lichTrinh->ThoiGianKetThuc)->format('H:i');

    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $lichTrinh = Lichtrinh::findOrfail($id);
        $lichTrinh->ThoiGianBatDau = \Carbon\Carbon::parse($lichTrinh->ThoiGianBatDau)->format('H:i');
$lichTrinh->ThoiGianKetThuc = \Carbon\Carbon::parse($lichTrinh->ThoiGianKetThuc)->format('H:i');

        return view('lichtrinhs.edit', compact('lichTrinh'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id    )
    {

 $lichTrinh = Lichtrinh::findOrfail($id);
        $lichTrinh->update($request->all());

        return redirect()->route('lichtrinhs.index')
            ->with('success', 'Lịch trình được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $lichTrinh = Lichtrinh::findOrfail($id);
        $lichTrinh->delete();

        return redirect()->route('lichtrinhs.index')
            ->with('success', 'Lịch trình được xóa thành công.');
    }
}
