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
        Schema::create('HoSoYTe', function (Blueprint $table) {
            $table->char('MaHoSo', 6)->primary();
            $table->char('MaPhamNhan');
            $table->string('VanDeYTe', 100);
            $table->date('NgayChanDoan');
            $table->text('PhuongPhapDieuTri');
            $table->string('BacSiPhuTrach', 100);
            $table->foreign('MaPhamNhan')->references('MaPhamNhan')->on('PhamNhan')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ho_so_y_tes');
    }
};
