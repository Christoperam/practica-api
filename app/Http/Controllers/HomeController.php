<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    //
    public function index()
    {
        //$usuarios = HTTP::get('https://jsonplaceholder.typicode.com/comments');
        //$usuarios = HTTP::get('https://jsonplaceholder.typicode.com/users');
        //$usuarios = HTTP::get('https://mindicador.cl/api');
        $usuarios = HTTP::get('https://kitsu.io/api/edge/anime');
        
        $showArray = $usuarios->json();
        return view('api')->with('showArray',$showArray);
    }
}
