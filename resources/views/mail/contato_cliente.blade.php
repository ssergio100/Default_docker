<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato</title>
    <p>Olá!</p>
    <p>A sua mensagem foi enviada. Abaixo estão os dados preenchidos:</p>
    <p>Nome: <strong>{{$data['nome']}} {{$data['sobrenome']}}</strong></p>
    <p>E-mail: <strong>{{$data['email']}}</strong></p>
    <p>Telefone: <strong>{{$data['telefone']}}</strong></p>
    <p>Celular: <strong>{{$data['celular']}}</strong></p>
    <p>Produto: <strong>{{$data['produto']}}</strong></p>
    <p>Assunto: <strong>{{$data['assunto']}}</strong></p>
    <p>Mensagen: <strong>{{$data['mensagem']}}</strong></p>
    <p>Agradecemos o seu interesse e prometemos responder em breve.</p>
    <p>Se preferir você também pode entrar em contato por outros meios.</p>
    <a href="https://api.whatsapp.com/send?phone=55{{$data['whatsapp']}}&text=ol%C3%A1">Whatsapp</a>
   
    <p>Tenha um bom dia!</p>
</head>
<body>
    
</body>
</html>