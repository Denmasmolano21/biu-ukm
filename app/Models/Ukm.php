<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Ukm extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'kategori_ukm_id',
        'nama',
        'slug',
        'singkatan',
        'gambar_profil',
        'deskripsi',
        'visi',
        'misi',
        'kontak',
        'nama_ketua',
        'foto_ketua',
        'nama_wakil_ketua',
        'foto_wakil_ketua',
        'nama_sekretaris',
        'nama_bendahara',
        'jumlah_anggota',
        'tahun_berdiri',
        'views',
        'is_active',
        'is_featured',
        'is_open_recruitment',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'kontak' => 'array',
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
        'is_open_recruitment' => 'boolean',
        'jumlah_anggota' => 'integer',
        'tahun_berdiri' => 'integer',
        'views' => 'integer',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($ukm) {
            if (empty($ukm->slug)) {
                $ukm->slug = Str::slug($ukm->nama);
            }
        });

        static::updating(function ($ukm) {
            if ($ukm->isDirty('nama')) {
                $ukm->slug = Str::slug($ukm->nama);
            }
        });
    }

    public function kategori()
    {
        return $this->belongsTo(KategoriUkm::class, 'kategori_ukm_id');
    }

    public function dokumentasi()
    {
        return $this->hasMany(DokumentasiUkm::class)->orderBy('urutan')->orderBy('created_at', 'desc');
    }

    public function anggota()
    {
        return $this->hasMany(AnggotaUkm::class);
    }

    public function anggotaActive()
    {
        return $this->hasMany(AnggotaUkm::class)->where('is_active', true);
    }

    public function pengurus()
    {
        return $this->hasMany(AnggotaUkm::class)
            ->whereIn('jabatan', ['Ketua', 'Wakil Ketua', 'Sekretaris', 'Bendahara', 'Koordinator Divisi'])
            ->where('is_active', true);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeOpenRecruitment($query)
    {
        return $query->where('is_open_recruitment', true);
    }

    public function scopeByKategori($query, $kategoriId)
    {
        return $query->where('kategori_ukm_id', $kategoriId);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where(function ($q) use ($search) {
            $q->where('nama', 'like', "%{$search}%")
                ->orWhere('singkatan', 'like', "%{$search}%")
                ->orWhere('deskripsi', 'like', "%{$search}%");
        });
    }

    public function incrementViews()
    {
        $this->increment('views');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function updateJumlahAnggota()
    {
        $this->update([
            'jumlah_anggota' => $this->anggotaActive()->count()
        ]);
    }
}
