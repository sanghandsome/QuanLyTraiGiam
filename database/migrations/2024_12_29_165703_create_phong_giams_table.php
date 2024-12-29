<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('PhongGiam', function (Blueprint $table) {
            $table->char('MaPhongGiam', 4)->primary();
            $table->integer('SucChua');
            $table->integer('SoLuongPhamNhanHienTai');
            $table->string('ViTri', 50);
            $table->char('MaNhanVien', 6);
            $table->foreign('MaNhanVien')->references('MaNhanVien')->on('NhanVien')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phong_giams');
    }
};
