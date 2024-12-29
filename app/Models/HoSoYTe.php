<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoSoYTe extends Model
{
    use HasFactory;

    protected $table = 'HoSoYTe'; // Tên bảng
    protected $primaryKey = 'MaHoSo'; // Khóa chính
    public $incrementing = false; // Khóa chính không tự tăng
    protected $keyType = 'string'; // Kiểu dữ liệu của khóa chính

    protected $fillable = [
        'MaHoSo',
        'MaPhamNhan',
        'VanDeYTe',
        'NgayChanDoan',
        'PhuongPhapDieuTri',
        'BacSiPhuTrach',
    ];

    // Quan hệ n-1 với bảng PhamNhan
    public function phamNhan()
    {
        return $this->belongsTo(PhamNhan::class, 'MaPhamNhan', 'MaPhamNhan');
    }
}
