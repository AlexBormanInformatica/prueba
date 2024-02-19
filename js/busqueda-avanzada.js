document.getElementById('limpiar').addEventListener('click', function (event) {
    event.preventDefault();

    document.getElementById('selectSector').selectedIndex = 0;
    document.getElementById('selectCategoria').selectedIndex = 0;
    document.getElementById('selectSubcategoria').selectedIndex = 0;

    actualizarCantidadProductos();
});

function actualizarCantidadProductos() {
    var productos = document.querySelectorAll('.product-container .products .product');

    var cantidadProductos = 0;

    productos.forEach(function (producto) {
        var estilo = window.getComputedStyle(producto);
        if (estilo.display !== 'none') {
            cantidadProductos++;
        }
    });

    var texto = 'Mostrando ' + cantidadProductos + (cantidadProductos === 1 ? ' producto' : ' productos');
    document.getElementById('cantidad-productos').textContent = texto;
}



function obtenerCantidadProductosSeleccionados() {
    var cantidadProductos = document.querySelectorAll('.product-container .products .product').length;
    return cantidadProductos;
}

function realizarBusqueda() {
    // Obtener los valores seleccionados por el usuario
    var categoriaSeleccionada = document.getElementById('selectCategoria').value;
    var subcategoriaSeleccionada = document.getElementById('selectSubcategoria').value;

    // Recorrer todos los productos
    var productos = document.querySelectorAll('.product-container .products .product');
    productos.forEach(function (producto) {
        var categoriaProducto = producto.querySelector('.product-category').textContent.trim();
        // En este ejemplo, asumo que la subcategoría está dentro de la misma etiqueta que la categoría
        var subcategoriaProducto = producto.querySelector('.product-category').textContent.trim();

        // Verificar si el producto coincide con la selección del usuario
        if ((categoriaSeleccionada === '0' || categoriaProducto === categoriaSeleccionada) &&
            (subcategoriaSeleccionada === '0' || subcategoriaProducto === subcategoriaSeleccionada)) {
            producto.style.display = 'block'; // Mostrar el producto
        } else {
            producto.style.display = 'none'; // Ocultar el producto
        }
    });
    actualizarCantidadProductos();
}

document.getElementById('selectCategoria').addEventListener('change', realizarBusqueda);
document.getElementById('selectSubcategoria').addEventListener('change', realizarBusqueda);

$(document).ready(function () {
    $('#selectCategoria').change(function () {
        var categoriaSeleccionada = $(this).val();
        if (categoriaSeleccionada != 0) {
            $.ajax({
                url: 'DAO/categoria-subcategoria.php',
                method: 'POST',
                data: { categoria: categoriaSeleccionada },
                success: function (response) {
                    console.log(response);
                    $('#selectSubcategoria').html(response);
                },
                error: function (xhr, status, error) {
                    // Manejar errores
                    console.error('Error al obtener las subcategorías:', error);
                }
            });
        }
    });
});


document.addEventListener('DOMContentLoaded', function () {
    actualizarCantidadProductos();
});