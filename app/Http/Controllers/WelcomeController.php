<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello (){
        return 'Anjay Mabar';
    }

    public function greeting(){
        // return view('blog.hello', ['name' => 'Adid']);
        return view('blog.hello')->with('name', 'Adid')
        ->with('occupation', 'College Student');
    }
}
