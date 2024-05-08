<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackOfficeController extends Controller
{
    public function index()
    {
        return view('backoffice.main');
    }

    public function show(Barang $barang)
{
    return view('backoffice.main', compact('barang'));
}
}
