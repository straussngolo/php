<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){

        $title= 'webflix';
    
    return view('home', [
        'title' => $title,
        'numbers'=>[1,2,3],
    ]);
    
    }
}
