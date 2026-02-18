<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
        return 'Nama saya Anjay Mabar, saya seorang mahasiswa PWL';
    }

    public function articles($id){
        return 'Halaman artikel dengan id '.$id;
    }
}
