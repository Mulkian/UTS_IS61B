<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class costumerController extends Controller
{
    public function index()
    {
        return view('costumer.index');
    }
}
