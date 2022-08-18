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
        //$usuarios = HTTP::get('https://kitsu.io/api/edge/anime');
        //$usuarios = HTTP::get('https://gateway.marvel.com:443/v1/public/characters?ts=1&apikey=dd0e4779ccbf458a30ea49eb49dd1836&hash=b988e4b8ec4cbd70c9f89fed8a8de772');
        $usuarios = HTTP::get('https://pokeapi.co/api/v2/pokemon/');

        $info = $usuarios->json();
        $showArray = $info['results'];
        //$showArray = $info['data']['results'];

        $x = false;
        return view('pokemon')->with('showArray', $showArray);
    }
}
