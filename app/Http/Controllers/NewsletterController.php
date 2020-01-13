<?php

namespace App\Http\Controllers;
use Mail;
use App\Newsletter;

use Illuminate\Http\Request;


class NewsletterController extends Controller
{
    public function add(Request $request)
   {
        $news = new Newsletter;
        
        $email = $request->email;
        $token = $request->_token;
        
      
     
        if( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
            return response()->json([
                'success' => false,
                'message' => utf8_encode('Desculpe, mas o e-mail digitado parece inválido :(')
             ]);
        }

        if($news->where('email', $email)->count() > 0 ) {
            return response()->json([
                'success' => false,
                'message' => utf8_encode('Este e-mail já está cadastrado!')
             ]);
        }
       
        $news->key = md5($token);
        $news->email = $email;
        $news->save();


        Mail::send('mail.newsletter',['email'=>$email], function($m){
            $m->subject(utf8_encode('Inscrição Newsletter'));
            $m->from('newsletter@dnahappiness.com','Ana');
            $m->to('sergio.moreira@callflex.net.br');
         });

        Mail::send('mail.newsletter_cliente',['token'=>$news->key], function($m){
            $m->subject(utf8_encode('Inscrição Newsletter'));
            $m->from('naoresponda@dnahappiness.com','Newsletter');
            $m->to($_POST['email']);
         });
   
       
         return response()->json([
            'success' => true,
            'message' => utf8_encode('Pronto! Agora é só aguardar as novidades :)')
        ]);
    }

    public function remove($token)
    {
        $news = new Newsletter;
        $obj =  $news::find($token);
        if(!$obj){
              $data = array('success'=>false, 'message'=> 'E-mail não encontrado !');
             return view('pages/unsubscribe', $data);
        }

        $obj->delete();
      
        $data = array('success'=>true, 'message'=> 'Email descadastrado com sucesso!');
        return view('pages/unsubscribe', $data);


    
}

}