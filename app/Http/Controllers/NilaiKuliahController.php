<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index2()
    {
    	// mengambil data dari table pegawai
    	$nilaikuliah = DB::table('nilaikuliah')->get();

    	// mengirim data pegawai ke view index
    	return view('index2',['nilaikuliah' => $nilaikuliah]);

    }

    public function tambah2()
{

	// memanggil view tambah
	return view('tambah2');

}
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('nilaikuliah')->insert([
        'ID' => $request->ID,
		'NRP' => $request->NRP,
		'NilaiAngka' => $request->NilaiAngka,
		'SKS' => $request->SKS
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/nilaikuliah');

}

}
