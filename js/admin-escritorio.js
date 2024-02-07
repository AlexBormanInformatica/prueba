/*
GRAFICOS
https://www.chartjs.org/docs/latest/
*/
//GRAFICO 1 - USUARIOS

// Obtener la fecha actual
var fechaActual = new Date();

// Array para almacenar los nombres de los meses
var nombresMeses = [];

// Obtener los últimos 5 meses actuales
for (var i = 4; i >= 0; i--) {
    // Obtener el mes actual restando i meses a la fecha actual
    var fechaMes = new Date(fechaActual);
    fechaMes.setMonth(fechaMes.getMonth() - i);

    // Obtener el nombre del mes en formato de texto
    var nombreMes = obtenerNombreMes(fechaMes.getMonth());

    // Agregar el nombre del mes al array
    nombresMeses.push(nombreMes);
}

// Función para obtener el nombre del mes a partir de su número
function obtenerNombreMes(numeroMes) {
    var nombres = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    return nombres[numeroMes];
}

// Objeto de datos para el gráfico
var user_data = {
    labels: nombresMeses,
    datasets: [{
        label: 'Usuarios nuevos',
        data: [10, 20, 15, 25, 30],
        backgroundColor: 'rgba(223,73,91, 0.2)',
        borderColor: 'rgba(223,73,91, 1)',
        borderWidth: 1
    }]
};


// Configuración del gráfico
var user_options = {
    scales: {
        y: {
            beginAtZero: true
        }
    }
};

// Obtener el contexto del canvas
var user_ctx = document.getElementById('register-chart').getContext('2d');

// Crear el gráfico
var user_chart = new Chart(user_ctx, {
    type: 'line',
    data: user_data,
    options: user_options
});

//GRAFICO 2 - PEDIDOS

var register_data = {
    labels: nombresMeses,
    datasets: [{
        label: 'Pedido nuevos',
        data: [35, 12, 26, 21, 5],
        backgroundColor: 'rgba(223,73,91, 0.2)',
        borderColor: 'rgba(223,73,91, 1)',
        borderWidth: 1
    }]
};

// Configuración del gráfico
var register_options = {
    scales: {
        y: {
            beginAtZero: true
        }
    }
};

// Obtener el contexto del canvas
var register_ctx = document.getElementById('order-chart').getContext('2d');

// Crear el gráfico
var register_chart = new Chart(register_ctx, {
    type: 'line',
    data: register_data,
    options: register_options
});
