<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function index(){
        return view('hello.index');
    }

    public function perkenalan($nama){
        $data = [
            'nama' => $nama
        ];
        return view('hello.perkenalan', $data);
    }

    
}
