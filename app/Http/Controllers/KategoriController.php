<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{
    public function index4()
    {
        // mengambil data dari table pegawai
        $kategori = DB::table('kategori')->pluck('Nama','ID');

        // mengirim data pegawai ke view index
        return view('index4') -> with('kategori', $kategori);
    }

    public function hasilcombo(Request $request)
    {
        $request->validate([
            'index4' => 'required|exists:kategori,ID',
        ]);

        $selectedOptionId = $request->input('index4');

        return view('hasilcombo')->with('selectedOptionId', $selectedOptionId);
    }
}
