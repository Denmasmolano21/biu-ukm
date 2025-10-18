<?php

namespace Database\Seeders;

use App\Models\KategoriUkm;
use Illuminate\Database\Seeder;

class KategoriUkmSeeder extends Seeder
{
    public function run(): void
    {
        $kategoris = [
            [
                'nama' => 'Seni & Budaya',
                'slug' => 'seni-budaya',
                'icon' => '🎨',
                'warna' => 'purple',
                'deskripsi' => 'UKM yang fokus pada pengembangan seni dan budaya',
                'urutan' => 1,
            ],
            [
                'nama' => 'Olahraga',
                'slug' => 'olahraga',
                'icon' => '⚽',
                'warna' => 'emerald',
                'deskripsi' => 'UKM yang bergerak di bidang olahraga dan kebugaran',
                'urutan' => 2,
            ],
            [
                'nama' => 'Teknologi',
                'slug' => 'teknologi',
                'icon' => '💻',
                'warna' => 'blue',
                'deskripsi' => 'UKM yang fokus pada pengembangan teknologi dan digital',
                'urutan' => 3,
            ],
            [
                'nama' => 'Akademik',
                'slug' => 'akademik',
                'icon' => '📚',
                'warna' => 'orange',
                'deskripsi' => 'UKM yang mendukung pengembangan akademik mahasiswa',
                'urutan' => 4,
            ],
            [
                'nama' => 'Sosial & Kemanusiaan',
                'slug' => 'sosial-kemanusiaan',
                'icon' => '🤝',
                'warna' => 'rose',
                'deskripsi' => 'UKM yang peduli terhadap isu sosial dan kemanusiaan',
                'urutan' => 5,
            ],
            [
                'nama' => 'Kewirausahaan',
                'slug' => 'kewirausahaan',
                'icon' => '💼',
                'warna' => 'amber',
                'deskripsi' => 'UKM yang mengembangkan jiwa entrepreneur mahasiswa',
                'urutan' => 6,
            ],
        ];

        foreach ($kategoris as $kategori) {
            KategoriUkm::create($kategori);
        }
    }
}
