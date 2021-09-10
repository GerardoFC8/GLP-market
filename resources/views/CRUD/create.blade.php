<form action="{{ url('/index') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="Categoria">Categoria: </label>
    <input type="text" name="Categoria">
    <br><br>

    <label for="ImgCategoria">Imagen Categoria: </label>
    <input type="file" name="ImgCategoria">
    <br><br>

    <label for="Descripcion">Descripcion: </label>
    <textarea name="Descripcion"></textarea>
    <br><br>
    
    <input type="submit" value="Agregar">
    <br><br>

</form>