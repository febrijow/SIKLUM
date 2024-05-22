<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use Illuminate\Http\Request;

class pengaduanController extends Controller
{
    public function index() {
        return view('admin.tabel', [
            'pengaduan' => Pengaduan::latest()->get()
        ]);
    }
    public function add(){
        return view('tabel.insert');
    }
}
