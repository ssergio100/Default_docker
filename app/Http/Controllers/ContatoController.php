<?php

namespace App\Http\Controllers;


use Mail;
use App\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function add(Request $request)
    {
       
        $assunto = isset($request->assunto) ? $request->assunto : '';
        $mensagem = isset($request->mensagem) ? $request->mensagem : '';
        $nome = isset($request->nome) ? $request->nome : '';
        $sobrenome = isset($request->sobrenome) ? $request->sobrenome : '';
        $telefone = isset($request->telefone) ? $request->telefone : '';
        $celular = isset($request->celular) ? $request->celular : '';
        $email = isset($request->email) ? $request->email : '';
        $produto = isset($request->produto) ? $request->produto : '';

        if (rtrim($assunto == '')) {
            return response()->json([
                'success' => false,
                'message' => 'Por favor, preencha o campo assunto :)',
                'target' => 'assunto'
            ]);
        }

        if (rtrim($mensagem == '')) {
            return response()->json([
                'success' => false,
                'message' => 'Por favor, preencha o campo mensagem :)',
                'target' => 'mensagem'
            ]);
        }

        if (rtrim($nome == '')) {
            return response()->json([
                'success' => false,
                'message' => 'Por favor, preencha o campo nome :)',
                'target' => 'nome'
            ]);
        }

        if (
            (rtrim($telefone)  == '')
            &&  (rtrim($celular) == '')
            &&  (rtrim($email) == '')
        ) {
            return response()->json([
                'success' => false,
                'message' => 'Por favor, preencha ao menos um meio para entrarmos em contao :)',
                'target' => 'email', 'celular', 'telefone'
            ]);
        }

        if (rtrim($produto == '')) {
            return response()->json([
                'success' => false,
                'message' => 'Por favor, selecine um produto :)',
                'target' => 'produto'
            ]);
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return response()->json([
                'success' => false,
                'message' => 'Desculpe, mas o e-mail digitado parece inválido :(',
                'target' => 'email'
            ]);
        }

        $contato = new Contato;

        $contato->assunto = $assunto;
        $contato->mensagem = $mensagem;
        $contato->nome = $nome;
        $contato->sobrenome = $sobrenome;
        $contato->telefone = $telefone;
        $contato->celular = $celular;
        $contato->email = $email;
        $contato->produto = $produto;
        $contato->save();

        $captcha = $request['g-recaptcha-response'];
        $captcha_secret_key = env('RECAPTCHA_SECRET_KEY');
        $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$captcha_secret_key&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']), TRUE);

        if ($response['success'] == false) {
            return response()->json([
                'success' => false,
                'message' => "Não esqueça de marcar a caixa 'Não sou um robô'!"
            ]);
        }
        
        // Envia email para o responsavel

        Mail::send('mail.contato', ['data' => $request], function ($m) {
            $m->subject('Formulário de Contato');
            $m->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $m->to(env('MAIL_FROM_ADDRESS'));
        });

        // Envia email para o cliente
        $request['whatsapp'] = env('WHATSAPP');
        Mail::send('mail.contato_cliente', ['data' => $request], function ($m) {
            $m->subject('Formulário de Contato');
            $m->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $m->to($_POST['email']);
        });

        return response()->json([
            'success' => true,
            'message' => 'Formulário enviado! Você receberá uma confirmação por e-mail. Por favor, aguarde nosso contato.'
        ]);
       
    }
}
