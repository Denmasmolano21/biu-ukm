<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaUkm extends Model
{
    use HasFactory;

    protected $fillable = [
        'ukm_id',
        'nim',
        'nama',
        'foto',
        'email',
        'phone',
        'prodi',
        'angkatan',
        'jabatan',
        'divisi',
        'tanggal_bergabung',
        'is_active',
    ];

    protected $casts = [
        'tanggal_bergabung' => 'date',
        'is_active' => 'boolean',
    ];

    public function ukm()
    {
        return $this->belongsTo(Ukm::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopePengurus($query)
    {
        return $query->whereIn('jabatan', ['Ketua', 'Wakil Ketua', 'Sekretaris', 'Bendahara', 'Koordinator Divisi']);
    }

    public function scopeByJabatan($query, $jabatan)
    {
        return $query->where('jabatan', $jabatan);
    }

    public function scopeByDivisi($query, $divisi)
    {
        return $query->where('divisi', $divisi);
    }

    public function isPengurus()
    {
        return in_array($this->jabatan, ['Ketua', 'Wakil Ketua', 'Sekretaris', 'Bendahara', 'Koordinator Divisi']);
    }
}