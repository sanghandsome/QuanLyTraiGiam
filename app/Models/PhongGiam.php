<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhongGiam extends Model
{
    use HasFactory;

    protected $table = 'PhongGiam'; // Tên bảng
    protected $primaryKey = 'MaPhongGiam'; // Khóa chính
    public $incrementing = false; // Khóa chính không tự tăng
    protected $keyType = 'string'; // Kiểu dữ liệu của khóa chính

    protected $fillable = [
        'MaPhongGiam',
        'SucChua',
        'SoLuongPhamNhanHienTai',
        'ViTri',
        'MaNhanVien',
    ];

    // Quan hệ n-1 với bảng NhanVien
    public function nhanVien()
    {
        return $this->belongsTo(NhanVien::class, 'MaNhanVien', 'MaNhanVien');
    }

    // Quan hệ 1-n với bảng PhamNhan
    public function phamNhans()
    {
        return $this->hasMany(PhamNhan::class, 'MaPhongGiam', 'MaPhongGiam');
    }
}
