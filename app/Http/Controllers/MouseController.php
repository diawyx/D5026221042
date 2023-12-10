<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MouseController extends Controller
{
    public function index3()
    {
    	// mengambil data dari table pegawai
    	$mouse = DB::table('mouse')->get();

    	// mengirim data pegawai ke view index
    	return view('index3',['mouse' => $mouse]);

    }
    public function tambah3()
{

	// memanggil view tambah
	return view('tambah3');
}

public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('mouse')->insert([
		'kodemouse' => $request->kodemouse,
		'merkmouse' => $request->merkmouse,
		'stockmouse' => $request->stockmouse,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/mouse');

}
public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$mouse = DB::table('mouse')
		->where('merkmouse','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('index3',['mouse' => $mouse]);

	}
public function edit3($kodemouse)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$mouse = DB::table('mouse')->where('kodemouse',$kodemouse)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('edit3',['mouse' => $mouse]);

}
public function update(Request $request)
{
	// update data pegawai
	DB::table('mouse')->where('kodemouse',$request->kodemouse)->update([
		'merkmouse' => $request->merkmouse,
		'stockmouse' => $request->stockmouse,
		'tersedia' => $request->tersedia
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/mouse');
}
public function hapus($kodemouse)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('mouse')->where('kodemouse',$kodemouse)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/mouse');
}
public function view3($kodemouse) {
    // mengambil data pegawai berdasarkan id yang dipilih
    $mouse = DB::table('mouse')->where('kodemouse',$kodemouse)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('view3',['mouse' => $mouse]);
}
}
