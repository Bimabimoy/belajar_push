<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class peminjamanController extends Controller
{
    //
    // public function index()
    // {
    //     return view('public.Form_pinjam');
    // }
    public function Form_pinjam()
    {
        // Konten logika Anda di sini
        return view('public.form_pinjam');
    }

      
    public function index()
    {
        $barangs = Barang::all();
        return view('form_peminjaman', ['barangs' => $barangs]);
    }
    
    public function showForm()
    {
    $barangs = Barang::all(); // Perhatikan penggunaan $barang (bukan $barangs)
    return view('form_peminjaman', compact('barang'));
    }


}
