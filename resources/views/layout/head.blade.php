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
    <link href="https://fonts.googleapis.com/css2?family=Georama:ital,wght@0,100;0,200;0,400;0,700;0,900;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,300;0,400;0,500;0,600;0,900;1,200;1,500;1,600;1,800&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <link rel="stylesheet" href="css/reset.css">
    <link rel="icon" href="image/icono.ico" rel="icono">
    <link rel="stylesheet" href="css/root.css">
    <link rel="stylesheet" href="css/barra_navegacion.css">
    <link rel="stylesheet" href="css/sub_barra_navegacion.css">

    <link rel="stylesheet" href="@yield('estilo_propio')">
    <link rel="stylesheet" href="@yield('responsive')">
</head>
<body>
@yield('content')
</body>
</html>




