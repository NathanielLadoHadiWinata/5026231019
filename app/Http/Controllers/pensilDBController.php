<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pensilDBController extends Controller
{
    public function index()
    {
    // mengambil data dari table pensil

    // untuk pagination, kita bisa pake paginate() yang akan membagi data menjadi beberapa halaman
    // paginate(10) artinya kita akan menampilkan 10 data per halaman
    // jadi, jika ada 25 data, akan ada 3 halaman (10+10+5)

        //$pensil = DB::table('pensil')->get(); // ini pake get() untuk mengambil semua data
        $pensil = DB::table('pensil')->paginate(10);

    // mengirim data pensil ke view index
    return view('pensilindex',['pensil' => $pensil]);
    }

// method untuk menampilkan view form tambah pensil
    public function tambah(){
        // memanggil view tambah
        return view('tambah');
    }

    // method untuk insert data ke table pensil
public function store(Request $request)
{
// insert data ke table pensil
DB::table('pensil')->insert([
'pensil_nama' => $request->nama,
'pensil_jabatan' => $request->jabatan,
'pensil_umur' => $request->umur,
'pensil_alamat' => $request->alamat
]);
// alihkan halaman ke halaman pensil
return redirect('/pensil');

}

// method untuk edit data pensil
public function edit($id)
{
// mengambil data pensil berdasarkan id yang dipilih
$pensil = DB::table('pensil')->get();
// passing data pensil yang didapat ke view edit.blade.php
return view('pensil.index', ['pensil' => $pensil]);

}

// update data pensil
public function update(Request $request)
{
// update data pensil
DB::table('pensil')->where('pensil_id',$request->id)->update([
'pensil_nama' => $request->nama,
'pensil_jabatan' => $request->jabatan,
'pensil_umur' => $request->umur,
'pensil_alamat' => $request->alamat
]);
// alihkan halaman ke halaman pensil




return redirect('/pensil');
}

// method untuk hapus data pensil
public function hapus($id)
{
// menghapus data pensil berdasarkan id yang dipilih
DB::table('pensil')->where('pensil_id',$id)->delete();

// alihkan halaman ke halaman pensil
return redirect('/pensil');
}

public function cari(Request $request)
{
    // menangkap data pencarian
    $cari = $request->cari;

        // mengambil data dari table pensil sesuai pencarian data
    $pensil = DB::table('pensil')
    ->where('pensil_nama','like',"%".$cari."%")
    ->paginate();

        // mengirim data pensil ke view index
    return view('index',['pensil' => $pensil]);

}
}
