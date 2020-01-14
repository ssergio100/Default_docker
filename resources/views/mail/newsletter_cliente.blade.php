
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Olá!</p>
    <p>Você está recebendo este e-mail porquê se cadastrou para receber as novidades da DNAHappiness!</p>
    <p>Caso não tenha sido você, clique <a href="{{ URL::asset('newsletter') }}<?php echo '/'.$token;?>" <?php echo $token; ?>>aqui</a> para cancelar o cadastro.</p>
    <p>Tenha um bom dia!</p>
</body>
</html>
