<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Ukm;

class UkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ukms = [
            [
                'kategori_ukm_id' => 1,
                'nama' => 'Unit Kegiatan Mahasiswa Seni dan Budaya',
                'slug' => Str::slug('Unit Kegiatan Mahasiswa Seni dan Budaya'),
                'singkatan' => 'UKMSB',
                'gambar_profil' => 'ukm-seni.jpg',
                'deskripsi' => 'UKM yang berfokus pada pengembangan seni dan budaya mahasiswa Bina Insani University.',
                'visi' => 'Menjadi wadah kreativitas seni mahasiswa yang berdaya saing dan berbudaya.',
                'misi' => 'Mengadakan kegiatan seni dan budaya secara rutin serta memperkenalkan budaya Indonesia di kampus.',
                'kontak' => json_encode([
                    'email' => 'ukmsb@biu.ac.id',
                    'instagram' => 'ukm_senibudaya_biu'
                ]),
                'nama_ketua' => 'Rizky Ananda',
                'foto_ketua' => 'rizky.jpg',
                'nama_wakil_ketua' => 'Fadhila Putri',
                'foto_wakil_ketua' => 'fadhila.jpg',
                'nama_sekretaris' => 'Tasya Nurhaliza',
                'nama_bendahara' => 'Arif Hidayat',
                'jumlah_anggota' => 45,
                'tahun_berdiri' => 2018,
                'views' => 125,
                'is_active' => true,
                'is_featured' => true,
                'is_open_recruitment' => true,
                'meta_title' => 'UKM Seni dan Budaya BIU',
                'meta_description' => 'Wadah kreativitas seni dan budaya mahasiswa Bina Insani University.',
            ],
            [
                'kategori_ukm_id' => 2,
                'nama' => 'Unit Kegiatan Mahasiswa Olahraga',
                'slug' => Str::slug('Unit Kegiatan Mahasiswa Olahraga'),
                'singkatan' => 'UKMO',
                'gambar_profil' => 'ukm-olahraga.jpg',
                'deskripsi' => 'UKM yang menaungi kegiatan olahraga seperti futsal, basket, dan badminton.',
                'visi' => 'Meningkatkan prestasi olahraga mahasiswa di tingkat nasional.',
                'misi' => 'Melatih, membina, dan mengembangkan potensi olahraga mahasiswa.',
                'kontak' => json_encode([
                    'email' => 'ukm.olahraga@biu.ac.id',
                    'instagram' => 'ukm_olahraga_biu'
                ]),
                'nama_ketua' => 'Dimas Pratama',
                'foto_ketua' => 'dimas.jpg',
                'nama_wakil_ketua' => 'Reza Fauzan',
                'foto_wakil_ketua' => 'reza.jpg',
                'nama_sekretaris' => 'Siti Nuraini',
                'nama_bendahara' => 'M. Fikri',
                'jumlah_anggota' => 60,
                'tahun_berdiri' => 2017,
                'views' => 210,
                'is_active' => true,
                'is_featured' => true,
                'is_open_recruitment' => false,
                'meta_title' => 'UKM Olahraga BIU',
                'meta_description' => 'Tempat pengembangan bakat dan prestasi olahraga mahasiswa BIU.',
            ],
            [
                'kategori_ukm_id' => 3,
                'nama' => 'Unit Kegiatan Mahasiswa IT Club',
                'slug' => Str::slug('Unit Kegiatan Mahasiswa IT Club'),
                'singkatan' => 'UKMIT',
                'gambar_profil' => 'ukm-it.jpg',
                'deskripsi' => 'UKM bagi mahasiswa yang tertarik dengan dunia teknologi, coding, dan inovasi digital.',
                'visi' => 'Meningkatkan kemampuan digital mahasiswa dalam menghadapi era industri 4.0.',
                'misi' => 'Menyelenggarakan pelatihan dan lomba IT bagi mahasiswa.',
                'kontak' => json_encode([
                    'email' => 'itclub@biu.ac.id',
                    'instagram' => 'ukm_itclub_biu'
                ]),
                'nama_ketua' => 'Farhan Nur',
                'foto_ketua' => 'farhan.jpg',
                'nama_wakil_ketua' => 'Alya Prameswari',
                'foto_wakil_ketua' => 'alya.jpg',
                'nama_sekretaris' => 'Rani Aulia',
                'nama_bendahara' => 'Iqbal Saputra',
                'jumlah_anggota' => 80,
                'tahun_berdiri' => 2019,
                'views' => 350,
                'is_active' => true,
                'is_featured' => false,
                'is_open_recruitment' => true,
                'meta_title' => 'UKM IT Club BIU',
                'meta_description' => 'Komunitas teknologi dan inovasi digital mahasiswa BIU.',
            ],
            [
                'kategori_ukm_id' => 4,
                'nama' => 'Unit Kegiatan Mahasiswa Bahasa Inggris',
                'slug' => Str::slug('Unit Kegiatan Mahasiswa Bahasa Inggris'),
                'singkatan' => 'UKMBI',
                'gambar_profil' => 'ukm-bahasa.jpg',
                'deskripsi' => 'UKM yang berfokus pada peningkatan kemampuan berbahasa Inggris mahasiswa.',
                'visi' => 'Menjadi pusat pengembangan bahasa Inggris di lingkungan kampus.',
                'misi' => 'Mengadakan pelatihan speaking, writing, dan English competition.',
                'kontak' => json_encode([
                    'email' => 'englishclub@biu.ac.id',
                    'instagram' => 'ukm_englishclub_biu'
                ]),
                'nama_ketua' => 'Nadia Fitri',
                'foto_ketua' => 'nadia.jpg',
                'nama_wakil_ketua' => 'Rangga Kusuma',
                'foto_wakil_ketua' => 'rangga.jpg',
                'nama_sekretaris' => 'Wulan Rahma',
                'nama_bendahara' => 'Rudi Santoso',
                'jumlah_anggota' => 50,
                'tahun_berdiri' => 2016,
                'views' => 180,
                'is_active' => true,
                'is_featured' => false,
                'is_open_recruitment' => true,
                'meta_title' => 'UKM Bahasa Inggris BIU',
                'meta_description' => 'Wadah bagi mahasiswa untuk mengembangkan kemampuan bahasa Inggris.',
            ],
            [
                'kategori_ukm_id' => 5,
                'nama' => 'Unit Kegiatan Mahasiswa Keagamaan Islam',
                'slug' => Str::slug('Unit Kegiatan Mahasiswa Keagamaan Islam'),
                'singkatan' => 'UKMI',
                'gambar_profil' => 'ukm-islam.jpg',
                'deskripsi' => 'UKM yang bergerak dalam bidang keagamaan dan pembinaan rohani Islam.',
                'visi' => 'Membentuk mahasiswa yang beriman, berilmu, dan berakhlak.',
                'misi' => 'Menyelenggarakan kajian dan kegiatan keislaman rutin.',
                'kontak' => json_encode([
                    'email' => 'ukmi@biu.ac.id',
                    'instagram' => 'ukm_islam_biu'
                ]),
                'nama_ketua' => 'Ahmad Fauzi',
                'foto_ketua' => 'ahmad.jpg',
                'nama_wakil_ketua' => 'Syifa Rahman',
                'foto_wakil_ketua' => 'syifa.jpg',
                'nama_sekretaris' => 'Nurul Lestari',
                'nama_bendahara' => 'Rahmat Hadi',
                'jumlah_anggota' => 70,
                'tahun_berdiri' => 2015,
                'views' => 290,
                'is_active' => true,
                'is_featured' => true,
                'is_open_recruitment' => false,
                'meta_title' => 'UKM Keagamaan Islam BIU',
                'meta_description' => 'Membangun karakter islami di lingkungan kampus BIU.',
            ],
            [
                'kategori_ukm_id' => 6,
                'nama' => 'Unit Kegiatan Mahasiswa Pecinta Alam',
                'slug' => Str::slug('Unit Kegiatan Mahasiswa Pecinta Alam'),
                'singkatan' => 'UKMPA',
                'gambar_profil' => 'ukm-palam.jpg',
                'deskripsi' => 'UKM yang berfokus pada kegiatan alam bebas, konservasi, dan petualangan.',
                'visi' => 'Menumbuhkan kecintaan terhadap alam dan lingkungan.',
                'misi' => 'Melaksanakan kegiatan eksplorasi, konservasi, dan edukasi lingkungan.',
                'kontak' => json_encode([
                    'email' => 'ukmpa@biu.ac.id',
                    'instagram' => 'ukm_palam_biu'
                ]),
                'nama_ketua' => 'Yudi Saputra',
                'foto_ketua' => 'yudi.jpg',
                'nama_wakil_ketua' => 'Ayu Larasati',
                'foto_wakil_ketua' => 'ayu.jpg',
                'nama_sekretaris' => 'Dewi Sinta',
                'nama_bendahara' => 'Andi Gunawan',
                'jumlah_anggota' => 55,
                'tahun_berdiri' => 2014,
                'views' => 240,
                'is_active' => true,
                'is_featured' => false,
                'is_open_recruitment' => true,
                'meta_title' => 'UKM Pecinta Alam BIU',
                'meta_description' => 'Wadah bagi mahasiswa pecinta alam dan lingkungan hidup.',
            ],
        ];

        foreach ($ukms as $ukm) {
            Ukm::create($ukm);
        }
    }
}
