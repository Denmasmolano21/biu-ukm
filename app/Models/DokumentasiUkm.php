<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumentasiUkm extends Model
{
    use HasFactory;

    protected $fillable = [
        'ukm_id',
        'judul',
        'gambar',
        'deskripsi',
        'tanggal_kegiatan',
        'urutan',
        'is_cover',
    ];

    protected $casts = [
        'tanggal_kegiatan' => 'date',
        'is_cover' => 'boolean',
        'urutan' => 'integer',
    ];

    public function ukm()
    {
        return $this->belongsTo(Ukm::class);
    }

    public function scopeCover($query)
    {
        return $query->where('is_cover', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('urutan')->orderBy('created_at', 'desc');
    }
}
