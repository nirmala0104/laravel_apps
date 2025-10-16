<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index()
    {
        $biodatas = Biodata::all(); // ambil semua data dari tabel biodatas
        return view('biodata', compact('biodatas'));
    }
}
