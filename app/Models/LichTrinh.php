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
      // Quan hệ 1-n nếu LichTrinh có thể liên kết với một bảng khác (ví dụ: hoạt động liên quan)
      public function hoatDongs()
      {
          return $this->hasMany(HoatDong::class, 'MaLichTrinh', 'MaLichTrinh');
      }
  
      // Custom Accessor (tuỳ chỉnh thuộc tính)
      public function getFullThoiGianAttribute()
      {
          return $this->ThoiGianBatDau . ' - ' . $this->ThoiGianKetThuc;
      }
  
      // Custom Mutator (tuỳ chỉnh khi set dữ liệu)
      public function setViTriAttribute($value)
      {
          $this->attributes['ViTri'] = ucfirst($value); // Viết hoa chữ cái đầu
      }
}
