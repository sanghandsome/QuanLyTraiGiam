<?php

namespace App\Http\Controllers;

use App\Models\PhamNhan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
class PhamNhanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phamNhans = DB::select('EXECUTE HienThiDS');

        $dsphamNhans = DB::select('EXECUTE DSDaHoanThanh');
        return view('phamnhans.index',compact('phamNhans','dsphamNhans'));
    }


    public function search(Request $request)
    {
        $timKiem = $request->input('tim_kiem', '');
        $phamNhans = PhamNhan::where('HoTen', 'LIKE', '%' . $timKiem . '%')->paginate(10);
        return view('phamnhans.search', compact('phamNhans', 'timKiem'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('phamnhans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $request->validate([
                'MaPhamNhan' => 'required',
                'HoTen' => 'required',
                'DiaChi' => 'required',
                'SDT' => 'required',
                'TheCanCuoc' => 'required',
                'GioiTinh' => 'required',
                'NgaySinh' => 'required',
                'ChiTietToiDanh' => 'required',
                'NgayBatDauAn' => 'required',
                'NgayKetThucAn' => 'required',
                'MaPhongGiam' => 'required',
            ]);
            PhamNhan::create($request->all());
            session()->flash('success', 'Thêm mới thành công!');
            return redirect()->route('phamnhans.index');
        }
        catch(QueryException $e){
            abort(403, 'Lôi SQL hay kiem tra dieu kien  ');

        }
//        $request->validate([
//            'MaPhamNhan' => 'required',
//            'HoTen' => 'required',
//            'DiaChi' => 'required',
//            'SDT' => 'required',
//            'TheCanCuoc' => 'required',
//            'GioiTinh' => 'required',
//            'NgaySinh' => 'required',
//            'ChiTietToiDanh' => 'required',
//            'NgayBatDauAn' => 'required',
//            'NgayKetThucAn' => 'required',
//            'MaPhongGiam' => 'required',
//        ]);
//        PhamNhan::create($request->all());
//        session()->flash('success', 'Thêm mới thành công!');
//        return redirect()->route('phamnhans.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $phamNhan = DB::select('EXEC HienThiChiTiet @MaPN = ?', [$id]);
//        dd($phamNhan);
//        $phamNhan = PhamNhan::findOrFail($id);
        return view('phamnhans.show', compact('phamNhan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Không cần phải gọi PhamNhan::findOrFail() vì Laravel sẽ tự động tìm đối tượng
        $phamNhan = PhamNhan::findOrFail($id); // Hoặc find() nếu bạn muốn kiểm tra trước khi lấy bản ghi
        return view('phamnhans.edit', compact('phamNhan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'MaPhamNhan' => 'required',
            'HoTen' => 'required',
            'DiaChi' => 'required',
            'SDT' => 'required',
            'TheCanCuoc' => 'required',
            'GioiTinh' => 'required',
            'NgaySinh' => 'required',
            'ChiTietToiDanh' => 'required',
            'NgayBatDauAn' => 'required',
            'NgayKetThucAn' => 'required',
            'MaPhongGiam' => 'required',
        ]);
        $phamNhan = PhamNhan::findOrFail($id);
        $phamNhan->update($request->all());

        session()->flash('success','Cập nhật thành công');
        return redirect()->route('phamnhans.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
            DB::statement('EXEC deletaDS @MaPN = ?', [$id]);
//        $phamNhan = PhamNhan::findOrFail($id);
//        $phamNhan->delete();
//        session()->flash('success', 'Xóa thành công!');
        return redirect()->route('phamnhans.index');
    }
}
