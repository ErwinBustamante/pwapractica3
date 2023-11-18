
var productosSeleccionados = [];


var totalFinal = 0;


function comprar(nombre ,imagen, precio) {
 
  alert('¡Has comprado un producto!');

  var precioNumerico = parseFloat(precio.replace('$', ''));

  if (!isNaN(precioNumerico)) {
    productosSeleccionados.push({ imagen:imagen, nombre: nombre, precio: precioNumerico });

    actualizarResumenCompra();
  } else {
    alert('Error: El precio no es válido.');
  }
}

function actualizarResumenCompra() {
  var listaProductos = document.getElementById('productosSeleccionados');
  var totalElement = document.getElementById('totalFinal');

  listaProductos.innerHTML = '';

  totalFinal = 0;
  productosSeleccionados.forEach(function (producto) {
    totalFinal += producto.precio;

    var listItem = document.createElement('li');

    var imagen = document.createElement('img');
    imagen.src = producto.imagen;
    imagen.alt = producto.nombre; 
    imagen.height = 50;
    listItem.appendChild(imagen);

    var nombreText = document.createTextNode(' ' + producto.nombre);
    listItem.appendChild(nombreText);

    var precioText = document.createTextNode(' $' + producto.precio.toFixed(2));
    listItem.appendChild(precioText);

    listaProductos.appendChild(listItem);
  });

  totalElement.textContent = 'Total: $' + totalFinal.toFixed(2);
}
