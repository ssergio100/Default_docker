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
        $token = md5($request->_token);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return response()->json([
                'success' => false,
                'message' => 'Desculpe, mas o e-mail digitado parece inválido :('
            ]);
        }

        if ($news->whereRaw("email = ? and ativo = 1", $email)->count() > 0) {
            return response()->json([
                'success' => false,
                'message' => 'Este e-mail já esta cadastrado!'
            ]);
        }

        $news->key = $token;
        $news->email = $email;
        $news->save();

        // Envia email para o responsável
        Mail::send('mail.newsletter', ['email' => $email], function ($m) {
            $m->subject('Incrição Newsletter');
            $m->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $m->to(env('MAIL_FROM_ADDRESS'));
        });

        // Envia email para o cliente
        Mail::send('mail.newsletter_cliente', ['token' => $token], function ($m) {
            $m->subject('Incrição Newsletter');
            $m->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $m->to($_POST['email']);
        });

        return response()->json([
            'success' => true,
            'message' => 'Pronto! Agora é só aguardar as novidades :)'
        ]);
    }

    public function remove($token)
    {
        $news = new Newsletter;
        $obj =  $news::find($token);

        if (!$obj  || $obj->ativo == 0) {
            $data = array('success' => false, 'message' => 'E-mail não encontrado! Talvez já tenha sido descadastrado.');
            return view('pages/unsubscribe', $data);
        }

        $obj->ativo = 0;
        $obj->save();

        $data = array('success' => true, 'message' => 'Email descadastrado com sucesso!');
        return view('pages/unsubscribe', $data);
    }
}
