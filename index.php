<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/systen.css">
  <script src="js/script.js" defer></script>
</head>
<body>

<table id="miTabla">
  <tr>
    <th>Producto</th>
    <th>Imagen</th>
    <th>Precio</th>
    <th>Comprar</th>
  </tr>
  <?php include 'data.php'; ?>
</table>

<div id="resumenCompra">
  <h2>Resumen de la Compra</h2>
  <ul id="productosSeleccionados"></ul>
  <p id="totalFinal">Total: $0.00</p>
</div>

</body>
</html>
