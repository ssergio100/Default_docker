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
                'message' => 'Por favor, preencha ao mesnos um meio para entrarmos em contao :)',
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

        // Envia email para o responsavel

        Mail::send('mail.contato', ['data' => $request], function ($m) {
            $m->subject(utf8_encode('Inscrição Newsletter'));
            $m->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $m->to($_POST['email']);
        });
    }
}
