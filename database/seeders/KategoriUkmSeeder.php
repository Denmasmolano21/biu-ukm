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
                'warna' => 'purple',
                'deskripsi' => 'UKM yang fokus pada pengembangan seni dan budaya',
                'urutan' => 1,
            ],
            [
                'nama' => 'Olahraga',
                'slug' => 'olahraga',
                'warna' => 'emerald',
                'deskripsi' => 'UKM yang bergerak di bidang olahraga dan kebugaran',
                'urutan' => 2,
            ],
            [
                'nama' => 'Teknologi',
                'slug' => 'teknologi',
                'warna' => 'blue',
                'deskripsi' => 'UKM yang fokus pada pengembangan teknologi dan digital',
                'urutan' => 3,
            ],
            [
                'nama' => 'Akademik',
                'slug' => 'akademik',
                'warna' => 'orange',
                'deskripsi' => 'UKM yang mendukung pengembangan akademik mahasiswa',
                'urutan' => 4,
            ],
            [
                'nama' => 'Sosial & Kemanusiaan',
                'slug' => 'sosial-kemanusiaan',
                'warna' => 'rose',
                'deskripsi' => 'UKM yang peduli terhadap isu sosial dan kemanusiaan',
                'urutan' => 5,
            ],
        ];

        foreach ($kategoris as $kategori) {
            KategoriUkm::create($kategori);
        }
    }
}
