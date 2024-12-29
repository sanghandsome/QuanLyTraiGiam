<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LichTrinh extends Model
{
    use HasFactory;

    protected $table = 'LichTrinh'; // Tên bảng
    protected $primaryKey = 'MaLichTrinh'; // Khóa chính
    public $incrementing = false; // Khóa chính không tự tăng
    protected $keyType = 'string'; // Kiểu dữ liệu của khóa chính

    protected $fillable = [
        'MaLichTrinh',
        'MaPhamNhan',
        'HoatDong',
        'ThoiGianBatDau',
        'ThoiGianKetThuc',
        'ViTri',
    ];

    // Quan hệ n-1 với bảng PhamNhan
    public function phamNhan()
    {
        return $this->belongsTo(PhamNhan::class, 'MaPhamNhan', 'MaPhamNhan');
    }
}
