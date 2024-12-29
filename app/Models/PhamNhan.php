<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhamNhan extends Model
{
    use HasFactory;

    protected $table = 'PhamNhan'; // Tên bảng
    protected $primaryKey = 'MaPhamNhan'; // Khóa chính
    public $incrementing = false; // Khóa chính không tự tăng
    protected $keyType = 'string'; // Kiểu dữ liệu của khóa chính

    protected $fillable = [
        'MaPhamNhan',
        'HoTen',
        'NgaySinh',
        'ChiTietToiDanh',
        'NgayBatDauAn',
        'NgayKetThucAn',
        'MaPhongGiam',
    ];

    // Quan hệ n-1 với bảng PhongGiam
    public function phongGiam()
    {
        return $this->belongsTo(PhongGiam::class, 'MaPhongGiam', 'MaPhongGiam');
    }

    // Quan hệ 1-n với bảng LichTrinh
    public function lichTrinhs()
    {
        return $this->hasMany(LichTrinh::class, 'MaPhamNhan', 'MaPhamNhan');
    }

    // Quan hệ 1-n với bảng HoSoYTe
    public function hoSoYTes()
    {
        return $this->hasMany(HoSoYTe::class, 'MaPhamNhan', 'MaPhamNhan');
    }
}
