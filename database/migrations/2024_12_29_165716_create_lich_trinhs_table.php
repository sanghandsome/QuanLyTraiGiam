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
        Schema::create('LichTrinh', function (Blueprint $table) {
            $table->char('MaLichTrinh', 6)->primary();
            $table->char('MaPhamNhan');
            $table->string('HoatDong', 50);
            $table->time('ThoiGianBatDau');
            $table->time('ThoiGianKetThuc');
            $table->string('ViTri', 50);
            $table->foreign('MaPhamNhan')->references('MaPhamNhan')->on('PhamNhan')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lich_trinhs');
    }
};
