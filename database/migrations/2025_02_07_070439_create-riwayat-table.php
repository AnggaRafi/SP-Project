<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_riwayat', function (Blueprint $table) {
            $table->id();
            $table->string('bulan');
            $table->integer('nominal_byr');
            $table->integer('nominal_asli');
            $table->enum('status_bayar', ['Lunas','Belum Lunas']);
            $table->string('bukti')->default('-');
            $table->text('keterangan')->default('-');
            $table->foreignId('id_siswa')->constrained(
                table: 'tbl_siswa',
                indexName: 'riwayat_siswa_id'
            )->onDelete('cascade');
            $table->softDeletes('deleted_at', precision: 0);
            $table->timestamps();   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_riwayat');
    }
};
