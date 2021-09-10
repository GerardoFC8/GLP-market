
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($producto as $product)

    <div class="container-prod">
        <div class="prod">
            <img src="{{asset('storage').'/'.$product->Imagen_producto}}" alt="">
            <h4>{{$product->Nombre}}</h4>
            <h5>{{$product->Descripcion}}</h5>
            <a href="#">Ver más</a>
        </div>
    </div>

    @endforeach
</body>
</html>

    
    
