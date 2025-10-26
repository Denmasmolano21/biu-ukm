<?php

namespace App\Http\Controllers;

use App\Models\Ukm;
use App\Models\KategoriUkm;
use Illuminate\Http\Request;

class UkmController extends Controller
{
    /**
     * Tampilkan daftar UKM dengan filter, pencarian, dan sorting.
     */
    public function index(Request $request)
    {
        $query = Ukm::with(['kategori', 'dokumentasi'])
            ->active()
            ->withCount('anggotaActive');

        // 🔍 Filter berdasarkan kategori
        $kategoriSlug = $request->get('kategori');
        if ($kategoriSlug && $kategoriSlug !== 'semua') {
            $kategori = KategoriUkm::where('slug', $kategoriSlug)->first();
            if ($kategori) {
                $query->byKategori($kategori->id);
            }
        }

        // 🔎 Pencarian
        if ($search = $request->get('search')) {
            $query->search($search);
        }

        // 🔄 Sorting
        $sort = $request->get('sort', 'nama_asc');
        $sortOptions = [
            'nama_asc'   => ['nama', 'asc'],
            'nama_desc'  => ['nama', 'desc'],
            'populer'    => ['views', 'desc'],
            'terbaru'    => ['created_at', 'desc'],
        ];

        [$column, $direction] = $sortOptions[$sort] ?? ['nama', 'asc'];
        $query->orderBy($column, $direction);

        // 📄 Pagination
        $ukms = $query->paginate(12)->withQueryString();

        // 📚 Ambil semua kategori aktif
        $kategoris = KategoriUkm::active()->ordered()->get();

        return view('ukm.index', compact('ukms', 'kategoris'));
    }

    /**
     * Tampilkan detail UKM berdasarkan slug.
     */
    public function show($slug)
    {
        $ukm = Ukm::with([
            'kategori',
            'dokumentasi' => fn($q) => $q->ordered(),
            'anggotaActive',
            'pengurus'
        ])
            ->where('slug', $slug)
            ->active()
            ->firstOrFail();

        // 👁️ Tambah jumlah views
        $ukm->incrementViews();

        // 🔗 UKM terkait (kategori sama, random)
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
