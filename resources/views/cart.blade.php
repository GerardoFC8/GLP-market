<?php
    session_start();
    $total = 0;
    echo "<h3 class='titulo'>Carrito de compras</h3>";
    if (isset($_SESSION['carrito'])){
?>
        <table  border='1'>
        {{-- <thead>
            <th>Producto</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Accion</th>
        </thead> --}}
        <tbody>
<?php
        foreach($_SESSION["carrito"] as $indice => $arreglo){
?>
            <tr>
                <td>{{ $indice }}</td>
                <?php $total += $arreglo["cantidad"] * $arreglo["precio"];?>

                <?php foreach ($arreglo as $key => $value) { ?>
                <td>{{ $key.": " . $value }}</td>
                <?php } 

                echo "<td><a href='/?item=$indice'>Eliminar</a></td>";
                ?>

            </tr>

<?php        } ?>
            <tr>
                <td colspan="4" class="td_total">- El total de la compra es S/.{{$total}} -</td>
            </tr>
        
            <tr>
                <td colspan="4">
                    <a href="/?vaciar=true" class="td_vaciar">Vaciar carrito</a>
                </td>
            </tr>
            
        </tbody>
    </table>
<?php

    }else {
        echo "El carrito esta vacio";
        
?>

<?php
    }

    if (isset($_REQUEST["vaciar"])) {
        session_destroy();
        header("location:/");
    }

    if (isset($_REQUEST["item"])){
        $producto = $_REQUEST["item"];

        unset($_SESSION["carrito"][$producto]);
        
        echo "<script>alert('Producto $producto eliminado con exito del carrito de compras');</script>";
        header("location:/");
    }

?>