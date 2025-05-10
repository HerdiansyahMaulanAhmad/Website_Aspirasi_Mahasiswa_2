<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AspirasiController extends Controller
{
    /**
     * Menampilkan halaman aspirasi
     */
    public function index()
    {
        // Mengambil data aspirasi, diurutkan dari yang terbaru
        $aspirasis = Aspirasi::with('user')
                        ->orderBy('created_at', 'desc')
                        ->get();
        
        return view('aspirasi.index', compact('aspirasis'));
    }

    /**
     * Menyimpan aspirasi baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'komentar' => 'required|string',
        ]);

        Aspirasi::create([
            'user_id' => Auth::id(),
            'komentar' => $request->komentar,
        ]);

        return redirect()->route('aspirasi.index')
                ->with('success', 'Aspirasi berhasil ditambahkan!');
    }

    /**
     * Menghapus aspirasi
     */
    public function destroy(Aspirasi $aspirasi)
    {
        // Hanya user yang membuat aspirasi yang bisa menghapus
        if ($aspirasi->user_id !== Auth::id()) {
            return redirect()->route('aspirasi.index')
                    ->with('error', 'Anda tidak memiliki akses untuk menghapus aspirasi ini!');
        }

        $aspirasi->delete();

        return redirect()->route('aspirasi.index')
                ->with('success', 'Aspirasi berhasil dihapus!');
    }
}