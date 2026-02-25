<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }
    public function about(){
        return 'Nama: Muhammad Firman Aditiasmara <br> NIM: 244107020094';
    }
    public function articles($id){
        return 'Halaman artikel dengan id '.$id;
    }
}
