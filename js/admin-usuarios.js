/* DATATABLE OPTIONS - https://datatables.net/reference/option/ 
*/
$(document).ready(function () {
    var tablaUsuarios = $('#tablaUsuarios').DataTable({
        responsive: true,
        "autoWidth": false,
        paging: true,
        pageLength: 10,
        order: [[0, 'desc']],
        language: {
            paginate: {
                next: 'Siguiente',
                previous: 'Anterior'
            },
            info: 'Mostrando _START_ a _END_ de _TOTAL_ registros',
            search: 'Buscar:',
        }
    });

    $('#tablaUsuarios tbody').on('click', 'tr', function () {
        // Desseleccionar todas las filas y eliminar la clase 'selected'
        tablaUsuarios.rows().nodes().to$().removeClass('selected');

        // Seleccionar la fila actual y agregar la clase 'selected'
        $(this).addClass('selected');
    });
});