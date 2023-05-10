<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/csslogin.css')}}">
    <link rel="shortcut icon" href="{{asset('img/LOGO_ARD-PETS-branca.png')}}" type="image/gif">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,1,0" />
    <title>{{ $title }}</title>
</head>

<body>

    {{ $slot }}
</body>

</html>