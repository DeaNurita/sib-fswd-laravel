<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function tampilin(){
        return view ('tampil');
    }

    public function tambahin(){
        return view ('tambah');
    }

    public function editin(){
        return view('edit');
    }
    public function detailin(){
        return view('detail');
    }
}
