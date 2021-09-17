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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Open+Sans" rel="stylesheet"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fontawesome.com/v5.15/icons/facebook?style=brands">
    <script src="https://kit.fontawesome.com/74ea913bab.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="icon" href="image/icono.ico" rel="icono">
    <link rel="stylesheet" href="css/root.css">
    <link rel="stylesheet" href="css/barra_navegacion.css">
    <link rel="stylesheet" href="css/sub_barra_navegacion.css">
    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet" href="@yield('estilo_propio')">
    <link rel="stylesheet" href="@yield('responsive')">
</head>
<body>
@yield('content')
</body>
<script>
    switch(true) {
    case (window.location.href.indexOf("productos") != -1):
        document.getElementById("main_producto").style.backgroundColor = "var(--fushia)";
        break;

    case (window.location.href.indexOf("contacto") != -1):
        document.getElementById("main_contacto").style.backgroundColor = "var(--fushia)";
        break;
    }
    
    switch(true) {
    case (window.location.href.indexOf("BATERIAS") != -1):
        document.getElementById("sub_bateria").style.backgroundColor = "var(--fushia)";
        break;

    case (window.location.href.indexOf("LLANTAS") != -1):
        document.getElementById("sub_aros").style.backgroundColor = "var(--fushia)";
        break;

    case (window.location.href.indexOf("AUDIO") != -1):
        document.getElementById("sub_audio").style.backgroundColor = "var(--fushia)";
        break;
    

    case (window.location.href.indexOf("LIMPIEZA") != -1):
        document.getElementById("sub_limíeza").style.backgroundColor = "var(--fushia)";
        break;
    

    case (window.location.href.indexOf("Herramientas") != -1):
        document.getElementById("sub_herramientas").style.backgroundColor = "var(--fushia)";
        break;
    }
</script>
</html>




