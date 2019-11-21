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
       $menu = 'Sobra a DNA';
       $page = 'Idealizadora';
       return view('site.home.idealizador', compact('titulo', 'menu','page'));
   } 

   public function missao()
   {
       $titulo = 'DNAHapinness';
       return view('site.home.missao', compact('titulo'));
   } 

   public function valores()
   {
       $titulo = 'DNAHapinness';
       return view('site.home.valores', compact('titulo'));
   } 

   public function visao()
   {
       $titulo = 'DNAHapinness';
       return view('site.home.visao', compact('titulo'));
   } 

   public function contato()
   {
       $titulo = 'DNAHapinness';
       return view('site.home.contato', compact('titulo'));
   } 

   public function coaching()
   {
       $titulo = 'DNAHapinness';
       return view('site.home.coaching', compact('titulo'));
   } 

   public function corporativo()
   {
       $titulo = 'DNAHapinness';
       return view('site.home.corporativo', compact('titulo'));
   } 

   public function individual()
   {
       $titulo = 'DNAHapinness';
       return view('site.home.individual', compact('titulo'));
   } 

   public function ministrante()
   {
       $titulo = 'DNAHapinness | Ministrante';
       return view('site.home.ministrante', compact('titulo'));
   } 

   public function template()
   {
       $titulo = 'DNAHapinness';
       return view('site.template.template', compact('titulo'));
   } 

  
}
