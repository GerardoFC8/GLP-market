<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('page_name', 'You should not be here')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Georama:ital,wght@0,200;0,400;1,200;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/app.css">

    <link rel="stylesheet" href="@yield('estilo_propio')">
    <link rel="stylesheet" href="@yield('responsive')">
</head>
<body>
@yield('header')
@yield('content')
</body>
</html>




