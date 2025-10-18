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
        Schema::create('ukms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_ukm_id')->constrained('kategori_ukms')->onDelete('cascade');
            $table->string('nama');
            $table->string('slug')->unique();
            $table->string('singkatan', 10);
            $table->string('gambar_profil')->nullable();
            $table->text('deskripsi');
            $table->text('visi')->nullable();
            $table->text('misi')->nullable();
            $table->json('kontak')->nullable(); // {email, phone, instagram, etc}

            // Pengurus
            $table->string('nama_ketua');
            $table->string('foto_ketua')->nullable();
            $table->string('nama_wakil_ketua')->nullable();
            $table->string('foto_wakil_ketua')->nullable();
            $table->string('nama_sekretaris')->nullable();
            $table->string('nama_bendahara')->nullable();

            // Statistik
            $table->integer('jumlah_anggota')->default(0);
            $table->integer('tahun_berdiri')->nullable();
            $table->integer('views')->default(0);

            // Status
            $table->boolean('is_active')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_open_recruitment')->default(false);

            // SEO
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ukms');
    }
};
