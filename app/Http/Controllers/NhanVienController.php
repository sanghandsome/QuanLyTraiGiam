<?php

namespace App\Http\Controllers;

use App\Models\NhanVien;
use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
{
    

    // Lấy từ khóa tìm kiếm từ request
    $search = $request->input('search');

    // Kiểm tra nếu có từ khóa tìm kiếm
    if (!empty($search)) {
        // Lọc danh sách nhân viên theo Mã Nhân Viên
        $nhanviens = NhanVien::where('MaNhanVien', 'LIKE', "%{$search}%")->paginate(5);
    } else {
        // Nếu không có từ khóa, hiển thị tất cả nhân viên
        $nhanviens = NhanVien::paginate(5);
    }

    return view('nhanviens.index', compact('nhanviens', 'search'));
}

    public function getNhanVienByCaLam($caLam)
    {
        // Lấy danh sách nhân viên theo ca làm
        $nhanviens = NhanVien::where('CaLam', $caLam)->paginate(5); // Hiển thị 10 nhân viên mỗi trang
        return view('nhanviens.index', compact('nhanviens'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nhanviens.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'MaNhanVien' => 'required',
            'HoTen' => 'required',
            'ChucVu' => 'required',
            'SoDienThoai' => 'required',
            'CaLam' => 'required',
        ],[
            'CaLam.required' => 'Vui lòng chọn ca làm việc.', 
            
        ]);

        Nhanvien::create($request->all());

        return redirect()->route('nhan-vien.index')->with('success', 'Nhân viên được tạo thành công.');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {   
        $nhanvien = NhanVien::findOrFail($id);
        return view('nhanviens.show', compact('nhanvien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $nhanvien = NhanVien::findOrFail($id);
        return view('nhanviens.edit', compact('nhanvien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'MaNhanVien' => 'required',
            'HoTen' => 'required',
            'ChucVu' => 'required',
            'SoDienThoai' => 'required',
            'CaLam' => 'required',
        ]);
        $nhanvien = NhanVien::findOrFail($id);
        $nhanvien->update($request->all());

        return redirect()->route('nhan-vien.index')->with('success', 'Nhân viên cập nhật thành công.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {   
        $nhanvien = NhanVien::findOrFail($id);
        $nhanvien->delete();
        return redirect()->route('nhan-vien.index')->with('success', 'Nhân viên được xóa thành công.');

    }

   
public function xemPhongGiam($id)
{
    $nhanVien = NhanVien::with('phongGiams')->find($id);

    if (!$nhanVien) {
        return redirect()->route('nhan-vien.index')->with('error', 'Nhân viên không tồn tại.');
    }

    $phongGiams = $nhanVien->phongGiams; // Lấy danh sách phòng giam quản lý
    return view('nhanviens.phonggiam', compact('nhanVien', 'phongGiams'));
}

}
