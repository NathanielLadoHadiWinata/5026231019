<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PageCounterController extends Controller
{
    public function pageindex()
    {
        // Tambah nilai jumlah +1
        DB::table('pagecounter')
            ->where('ID', 1)
            ->update([
                'Jumlah' => DB::raw('Jumlah + 1')
            ]);

        // Ambil data jumlah setelah di-update
        $jumlah = DB::table('pagecounter')
            ->where('ID', 1)
            ->value('Jumlah');

        // Kirim ke view
        return view('pagecounter', ['jumlah' => $jumlah]);
    }
}
