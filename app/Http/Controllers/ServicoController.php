<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicoController extends Controller
{
   public function index()
   {
       $titulo = 'DNAHapinness';
       return view('site.home.index', compact('titulo'));
   } 

   public function Coaching() 
   { 

        $titulo = 'Coaching';

        $data['titulo'] =  "DNAHapinness - $titulo";
        $data['controller'] =  'Serviços';
        $data['service'] = $titulo;

        return view('site.servicos.coaching', $data);
   }

   public function treinamentos() 
   {
  
        $titulo = 'Palestras e Treinamentos';

        $data['titulo'] =  "DNAHapinness - $titulo";
        $data['controller'] =  'Serviços';
        $data['service'] = $titulo;

    return view('site.servicos.treinamentos', $data);
   }
   
   public function ministrante_best_sellers() 
   {
        $titulo = 'Ministrante Best Sellers';

        $data['titulo'] =  "DNAHapinness - $titulo";
        $data['controller'] =  'Serviços';
        $data['service'] = $titulo;

    return view('site.servicos.ministrantes_best_sellers', $data);
   }

   public function comunicacao_positiva() 
   {

        $titulo = 'Comunicação Positiva';

        $data['titulo'] =  "DNAHapinness - $titulo";
        $data['controller'] =  'Serviços';
        $data['service'] = $titulo;

    
    return view('site.servicos.comunicacao_positiva', $data);
   }

}
