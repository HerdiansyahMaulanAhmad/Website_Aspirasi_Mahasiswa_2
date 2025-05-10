<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Menampilkan halaman data user
     */
    public function index()
    {
        $users = User::all();
        return view('data.index', compact('users'));
    }
}