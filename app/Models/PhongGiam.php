<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhongGiam extends Model
{
    use HasFactory;

    // Tên bảng (nếu không theo chuẩn Laravel)
    protected $table = 'PhongGiam';

    // Khóa chính của bảng
    protected $primaryKey = 'MaPhongGiam';

    // Chỉ định khóa chính không tự tăng
    public $incrementing = false;

    // Kiểu dữ liệu của khóa chính (string thay vì int)
    protected $keyType = 'string';

    // Các trường có thể được gán giá trị bằng cách mass-assignment
    protected $fillable = [
        'MaPhongGiam',
        'SucChua',
        'SoLuongPhamNhanHienTai',
        'ViTri',
        'MaNhanVien',
    ];

    // Quan hệ n-1 với bảng NhanVien
    // Phòng giam thuộc về một nhân viên (nhân viên quản lý)
    public function nhanVien()
    {
        return $this->belongsTo(NhanVien::class, 'MaNhanVien', 'MaNhanVien');
    }

    // Quan hệ 1-n với bảng PhamNhan
    // Một phòng giam có nhiều phạm nhân
    public function phamNhans()
    {
        return $this->hasMany(PhamNhan::class, 'MaPhongGiam', 'MaPhongGiam');
    }
}
