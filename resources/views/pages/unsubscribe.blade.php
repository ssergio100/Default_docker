<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NewsLetter</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
</head>
<body>
@if($success == true)
    <div class="alert alert-success text-center">{{$message}}</div>
@else
    <div class="alert alert-danger text-center">{{$message}}</div>
@endif
   
</body>
</html>