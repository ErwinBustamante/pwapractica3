<?php
$productos = array(
    array("Producto 1", "imag/Producto1.jpg", "10.00"),
    array("Producto 2", "imag/Producto2.jpg", "20.00"),
    array("Producto 3", "imag/Producto3.jpg", "15.00"),
);

foreach ($productos as $producto) {
    echo '<tr>';
    echo '<td>';
    echo '<span>' . $producto[0] . '</span>';
    echo '</td>';
    echo '<td>';
    echo '<img src="' . $producto[1] . '" alt="' . $producto[0] . '" width="50" height="50">';
    echo '</td>';
    echo '<td>$' . $producto[2] . '</td>';
    echo '<td><button onclick="comprar(\'' . $producto[0] . '\', \'' . $producto[2] . '\')">Comprar</button></td>';
    echo '</tr>';
}
?>

