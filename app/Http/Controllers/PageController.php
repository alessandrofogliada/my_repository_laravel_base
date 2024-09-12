<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index (){

        $title = 'Benvenuto nel tuo nuovo progetto!';
        $text = 'Carico per il nuovo progetto!!';

        return view('home', compact('text', 'title'));
    }

    public function contacts (){
        return view('contacts');
    }

    public function about (){
        return view('about');
    }
}
