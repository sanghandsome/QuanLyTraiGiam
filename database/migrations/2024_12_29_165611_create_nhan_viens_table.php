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
        Schema::create('NhanVien', function (Blueprint $table) {
            $table->char('MaNhanVien', 6)->primary();
            $table->string('HoTen', 100);
            $table->string('ChucVu', 50);
            $table->string('SoDienThoai', 15);
            $table->string('CaLam', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhan_viens');
    }
};
