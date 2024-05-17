<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Costumer; // Pastikan model diimpor dengan benar

class CostumerController extends Controller
{
    public function index()
    {
        return view('costumer.index', [
            'costumer' => Costumer::latest()->get() // Menggunakan nama variabel jamak untuk konsistensi
        ]);
    }
}
