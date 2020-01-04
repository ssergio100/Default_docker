<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoachingController extends Controller
{
   public function index()
   {
       $titulo = 'DNAHapinness';
       return view('site.home.index', compact('titulo'));
   } 

   public function businessCoaching() 
   { 

        $titulo = 'Business Coaching';

        $data['titulo'] =  "DNAHapinness - $titulo";
        $data['controller'] =  'Serviços';
        $data['service'] = $titulo;

        return view('site.servicos.coaching.business_coaching', $data);
   }

   public function cafeCoaching() 
   {
  
        $titulo = ' Café com coaching';

        $data['titulo'] =  "DNAHapinness - $titulo";
        $data['controller'] =  'Serviços';
        $data['service'] = $titulo;

    return view('site.servicos.coaching.cafe_com_coaching', $data);
   }
   
   public function coachingAssessment() 
   {
        $titulo = 'Executive Assessment';

        $data['titulo'] =  "DNAHapinness - $titulo";
        $data['controller'] =  'Serviços';
        $data['service'] = $titulo;

    return view('site.servicos.coaching.coaching_assessment', $data);
   }

   public function coachingSaude() 
   {

        $titulo = 'Coaching de Saúde';

        $data['titulo'] =  "DNAHapinness - $titulo";
        $data['controller'] =  'Serviços';
        $data['service'] = $titulo;

    
    return view('site.servicos.coaching.coaching_de_saude', $data);
   }

   public function coachingAtletas() 
   {
        $titulo = 'Executive para Atletas';

        $data['titulo'] =  "DNAHapinness - $titulo";
        $data['controller'] =  'Serviços';
        $data['service'] = $titulo;

    return view('site.servicos.coaching.coaching_para_atletas', $data);
   }

   public function coachingVocacional() 
   {

        $titulo = 'Executive Vocacional';

        $data['titulo'] =  "DNAHapinness - $titulo";
        $data['controller'] =  'Serviços';
        $data['service'] = $titulo;

    return view('site.servicos.coaching.coaching_vocacional', $data);
   }

   public function executiveCoaching() 
   {
        $titulo = 'Executive Coaching';

        $data['titulo'] =  "DNAHapinness - $titulo";
        $data['controller'] =  'Serviços';
        $data['service'] = $titulo;

    return view('site.servicos.coaching.executive_coaching', $data);
   }

   public function lifeCoaching() 
   {
        $titulo = 'Life Coaching';

        $data['titulo'] =  "DNAHapinness - $titulo";
        $data['controller'] =  'Serviços';
        $data['service'] = $titulo;

    return view('site.servicos.coaching.life_coaching', $data);
   }

   public function coachingGrupo() 
   {
        $titulo = 'Coaching em Grupo';

        $data['titulo'] =  "DNAHapinness - $titulo";
        $data['controller'] =  'Serviços';
        $data['service'] = $titulo;

    return view('site.servicos.coaching.coaching_em_grupo', $data);
   }
}
