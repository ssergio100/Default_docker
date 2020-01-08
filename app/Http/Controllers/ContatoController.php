<?php

namespace App\Http\Controllers;


use Mail;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
   public function newsletter(Request $request)
   {
        $email = $request->email;

        if( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {

        }

        Mail::send('mail.newsletter',['email'=>$email], function($m){
            $m->subject(utf8_encode('Inscrição Newslatter'));
            $m->from('newslatter@dnahappiness.com','Ana');
            $m->to('ana@dnahappiness.com');
         });
    }
}