<?php

namespace Database\Factories;

use App\Models\PhamNhan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PhamNhanFactory extends Factory
{
    protected $model = PhamNhan::class;

    public function definition()
    {
        return [
            'MaPhamNhan' => Str::random(6), // Mã phạm nhân ngẫu nhiên
            'HoTen' => $this->faker->name, // Họ và tên
            'DiaChi' => $this->faker->address, // Địa chỉ
            'SDT' => $this->faker->phoneNumber, // Số điện thoại
            'TheCanCuoc' => $this->faker->numerify('##########'), // Căn cước công dân
            'GioiTinh' => $this->faker->randomElement(['Nam', 'Nữ']), // Giới tính
            'NgaySinh' => $this->faker->date('Y-m-d', '-20 years'), // Ngày sinh cách đây ít nhất 20 năm
            'ChiTietToiDanh' => $this->faker->sentence(10), // Tội danh
            'NgayBatDauAn' => $this->faker->date('Y-m-d', '-5 years'), // Ngày bắt đầu án
            'NgayKetThucAn' => $this->faker->date('Y-m-d', '+5 years'), // Ngày kết thúc án
            'MaPhongGiam' => $this->faker->word(4), // Mã phòng giam (giả sử chỉ là chuỗi ngẫu nhiên)
        ];
    }
}
