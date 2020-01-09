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
            return response()->json([
                'success' => false,
                'message' => utf8_encode('Desculpe, mas o e-mail digitado parece inválido :(')
            ]);
        }

        Mail::send('mail.newsletter',['email'=>$email], function($m){
            $m->subject(utf8_encode('Inscrição Newsletter'));
            $m->from('newsletter@dnahappiness.com','Ana');
            $m->to('sergio.moreira@callflex.net.br');
         });

         return response()->json([
            'success' => true,
            'message' => utf8_encode('Pronto! Agora é só aguardar as novidades :)')
        ]);
    }
}