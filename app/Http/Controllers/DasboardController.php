<?php

namespace App\Http\Controllers;
use App\Models\Barang; 

use Illuminate\Http\Request;


class DasboardController extends Controller
{
    //
    public function index()
    {
    // $barang = Barang::all(); // Mengambil semua data Barang dari database
    //     return view('backoffice.main', ['barangs' => $barang]);
    return view('/welcome');
    }  
    
    public function dasboard()
    {
    $barang = Barang::all(); // Mengambil semua data Barang dari database
        return view('backoffice.main', ['barangs' => $barang]);
    }   

}
