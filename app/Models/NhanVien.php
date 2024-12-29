<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVien extends Model
{
    use HasFactory;

    protected $table = 'NhanVien'; // Tên bảng
    protected $primaryKey = 'MaNhanVien'; // Khóa chính
    public $incrementing = false; // Khóa chính không tự tăng
    protected $keyType = 'string'; // Kiểu dữ liệu của khóa chính

    protected $fillable = [
        'MaNhanVien',
        'HoTen',
        'ChucVu',
        'SoDienThoai',
        'CaLam',
    ];

    // Quan hệ 1-n với bảng PhongGiam
    public function phongGiams()
    {
        return $this->hasMany(PhongGiam::class, 'MaNhanVien', 'MaNhanVien');
    }
}
