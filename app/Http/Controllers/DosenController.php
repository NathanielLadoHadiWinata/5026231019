<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        //return "<h1>Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com</h1>";
        $nama = "Padet";
        $usia = 20;
        $alamat = "Bali";
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];

        return view('biodata', ['nama'=> $nama, 'usia'=> $usia, 'alamat'=> $alamat, 'matkul' => $pelajaran]);
    }

    public function welcome(){
    return view('welcome');
}

}
