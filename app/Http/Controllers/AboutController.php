<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Menampilkan halaman about
     */
    public function index()
    {
        return view('about.index');
    }
}