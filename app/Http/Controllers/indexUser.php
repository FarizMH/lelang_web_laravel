<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexUser extends Controller
{
     public function home()
    {
        //menampilkan halaman view di lokasi resources/views/test.blade.php
        return view('indexUser');
    }
}
