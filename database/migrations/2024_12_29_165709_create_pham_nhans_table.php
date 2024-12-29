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
        Schema::create('PhamNhan', function (Blueprint $table) {
            $table->char('MaPhamNhan', 6)->primary();
            $table->string('HoTen', 100);
            $table->date('NgaySinh');
            $table->text('ChiTietToiDanh');
            $table->date('NgayBatDauAn');
            $table->date('NgayKetThucAn');
            $table->char('MaPhongGiam', 4);
            $table->foreign('MaPhongGiam')->references('MaPhongGiam')->on('PhongGiam')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pham_nhans');
    }
};
