<?php

namespace App\Http\Controllers;


use Mail;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
   public function newsletter($request)
   {
  
        Mail::send('mail.newsletter',['email'=>$request], function($m){
        $m->subject(utf8_encode('Inscrição Newslatter'));
        $m->from('newslatter@dnahappiness.com','Ana');
        $m->to('ana@dnahappiness.com');
   });

}
}