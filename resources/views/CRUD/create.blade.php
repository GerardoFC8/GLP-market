<form action="{{ url('/index') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="Categoria">Categoria: </label>
    <input type="text" name="Categoria">
    <br>

    <label for="Categoria_imagen">Categoria_imagen: </label>
    <input type="text" name="Categoria_imagen">
    <br>

    <label for="Imagen_producto">Imagen producto: </label>
    <input type="file" name="Imagen_producto">
    <br>

    <label for="Nombre">Nombre: </label>
    <input type="text" name="Nombre">
    <br>

    <label for="Descripcion">Descripcion: </label>
    <textarea name="Descripcion"></textarea>
    <br>

    <label for="Precio">Precio: </label>
    <input type="double" name="Precio">
    <br>
    
    <input type="submit" value="Agregar">
    <br>

</form>