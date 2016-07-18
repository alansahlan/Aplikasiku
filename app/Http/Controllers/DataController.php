<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DataController extends Controller
{
    public function pemasukan()
    {
        return view('data.masuk');
    }

    public function pengeluaran()
    {
        return view('data.keluar');
    }
}
