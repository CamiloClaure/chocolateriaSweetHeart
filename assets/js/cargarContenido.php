<?php
require_once('Conexion.php');


$consulta = "select nombre,precio_unitario from PRODUCTO;";
$respuesta = mysqli_query($conn,$consulta);

$producto = ' <select multiple name="demo-category" id="demo-category">
            <option selected="true" disabled>Seleccionar</option>';
while($datos = mysqli_fetch_array($respuesta)){
    $producto .= '<option value="'.$datos['nombre'].'~'.$datos['precio_unitario'].'">'.$datos['nombre'].'-'.$datos['precio_unitario'].'</option>';
}
$producto .= '</select>';
echo $producto;


?>