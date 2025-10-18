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
        Schema::create('anggota_ukms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ukm_id')->constrained('ukms')->onDelete('cascade');
            $table->string('nim')->unique();
            $table->string('nama');
            $table->string('foto')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('prodi')->nullable();
            $table->string('angkatan')->nullable();
            $table->enum('jabatan', ['Ketua', 'Wakil Ketua', 'Sekretaris', 'Bendahara', 'Anggota Biasa', 'Koordinator Divisi'])->default('Anggota Biasa');
            $table->string('divisi')->nullable();
            $table->date('tanggal_bergabung')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_ukms');
    }
};
