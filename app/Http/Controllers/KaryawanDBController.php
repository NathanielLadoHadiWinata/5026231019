<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanDBController extends Controller
{
    public function index()
    {
        $karyawan = DB::table('karyawan')->paginate(10);
    	return view('indexkaryawan',['karyawan' => $karyawan]);
    }

    public function tambah(){
        return view('tambahkaryawan');
    }

public function store(Request $request)
{
	DB::table('karyawan')->insert([
		'kodepegawai' => $request->kodepegawai,
		'namalengkap' => $request->namalengkap,
		'divisi' => $request->divisi,
		'departemen' => $request->departemen
	]);
	return redirect('/karyawan');

}

public function hapus($id)
{
	DB::table('karyawan')
    ->where('kodepegawai',$id)
    ->delete();
	return redirect('/karyawan');
}

}
