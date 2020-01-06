<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{
   public function index()
   {
       $titulo = 'DNAHapinness';
       return view('site.home.index', compact('titulo'));
   } 

   public function idealizadora() 
   { 

        $titulo = 'Idealizadora';

        $data['titulo'] =  "DNAHapinness - $titulo";
        $data['controller'] =  'Sobre';
        $data['service'] = $titulo;

        return view('site.sobre.idealizadora', $data);
   }

   public function conheca() 
   {
  
        $titulo = 'Conheça a DNAHappinesss';

        $data['titulo'] =  "DNAHapinness - $titulo";
        $data['controller'] =  'Sobre';
        $data['service'] = $titulo;

    return view('site.sobre.conheca_a_dna', $data);
   }
   
   public function nossoDna() 
   {
        $titulo = 'Nosso DNA';

        $data['titulo'] =  "DNAHapinness - $titulo";
        $data['controller'] =  'Sobre';
        $data['service'] = $titulo;

    return view('site.sobre.nosso_dna', $data);
   }

}
