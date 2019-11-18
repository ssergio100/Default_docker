<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
       $titulo = 'DNAHapinness';
       return view('site.home.index', compact('titulo'));
   } 

   public function idealizador()
   {
    $titulo = 'DNAHapinness';
    return view('site.home.idealizador', compact('titulo'));
   }
}
