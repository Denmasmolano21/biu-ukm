<?php

namespace App\Http\Controllers;

use App\Models\Ukm;
use App\Models\KategoriUkm;
use Illuminate\Http\Request;

class UkmController extends Controller
{
    public function index(Request $request)
    {
        $query = Ukm::with(['kategori', 'dokumentasi'])
            ->active()
            ->withCount('anggotaActive');

        // Filter by kategori
        if ($request->has('kategori') && $request->kategori != 'semua') {
            $kategori = KategoriUkm::where('slug', $request->kategori)->first();
            if ($kategori) {
                $query->byKategori($kategori->id);
            }
        }

        // Search
        if ($request->has('search') && $request->search != '') {
            $query->search($request->search);
        }

        // Sorting
        $sort = $request->get('sort', 'nama_asc');
        switch ($sort) {
            case 'nama_asc':
                $query->orderBy('nama', 'asc');
                break;
            case 'nama_desc':
                $query->orderBy('nama', 'desc');
                break;
            case 'populer':
                $query->orderBy('views', 'desc');
                break;
            case 'terbaru':
                $query->orderBy('created_at', 'desc');
                break;
            default:
                $query->orderBy('nama', 'asc');
        }

        $ukms = $query->paginate(12);
        $kategoris = KategoriUkm::active()->ordered()->get();

        return view('ukm.index', compact('ukms', 'kategoris'));
    }

    public function show($slug)
    {
        $ukm = Ukm::with([
            'kategori',
            'dokumentasi' => function ($q) {
                $q->ordered();
            },
            'anggotaActive',
            'pengurus'
        ])
            ->where('slug', $slug)
            ->active()
            ->firstOrFail();

        // Increment views
        $ukm->incrementViews();

        // UKM terkait berdasarkan kategori yang sama
        $relatedUkms = Ukm::with('kategori')
            ->where('kategori_ukm_id', $ukm->kategori_ukm_id)
            ->where('id', '!=', $ukm->id)
            ->active()
            ->inRandomOrder()
            ->limit(3)
            ->get();

        return view('ukm.show', compact('ukm', 'relatedUkms'));
    }
}
