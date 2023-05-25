<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class UserController extends Controller
{
    //
    public function tampilin(){
        // $data_users=users::all();
        // return view('tampil', compact('data_users'));
        return view('tampil');
    }

    public function tambahin(){
        // $data_users=users::all();
        // return view ('tambah', compact('data_users'));
        return view('tambah');
    }

    public function editin(){
        // $data_users=users::all();
        // return view ('edit', compact('data_users'));
        return view('edit');
    }
    public function detailin(){
        // $data_users=users::all();
        // return view ('detail', compact('data_users'));
        return view('detail');
    }

    public function index() {
        return view('user.index');
    }
}
