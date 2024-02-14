// Get the button:
let mybutton = document.getElementById("toTop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


if (window.location.pathname === '/' || window.location.pathname === '/index' || window.location.pathname === '/prueba/') {
    // Si es el índice, agregar la clase "master"
    document.getElementById('header').classList.add('master');
}

document.addEventListener('DOMContentLoaded', function () {
    var currentUrl = window.location.pathname;

    // Obtener todos los enlaces dentro del div de enlaces
    var links = document.querySelectorAll('.enlaces a');
    // Iterar sobre cada enlace
    links.forEach(function (link) {
        // Obtener la URL del enlace actual
        var linkUrl = link.getAttribute('href');

        // Verificar si la URL actual coincide con la URL del enlace
        if (linkUrl === currentUrl || '/' + linkUrl === currentUrl) {
            // Agregar la clase "active" al enlace
            link.classList.add('active');
        }
    });
});

// Función para generar un identificador único
function generarIdUnico() {
    return Math.random().toString(36).substring(2, 11); // Cambiado de 9 a 11 para incluir más caracteres
}

// Función para obtener el identificador único del usuario desde una cookie
function obtenerIdUsuario() {
    let idUsuario = getCookie("idUsuario");
    if (!idUsuario) {
        idUsuario = generarIdUnico();
        // Guarda el identificador único en una cookie que expira en 30 días
        setCookie("idUsuario", idUsuario, 30);
    }
    return idUsuario;
}

// Función para crear una cookie
function setCookie(nombre, valor, dias) {
    let fechaExpiracion = new Date();
    fechaExpiracion.setTime(fechaExpiracion.getTime() + (dias * 24 * 60 * 60 * 1000));
    let expiracion = "expires=" + fechaExpiracion.toUTCString();
    document.cookie = nombre + "=" + valor + ";" + expiracion + ";path=/";
}

// Función para obtener el valor de una cookie
function getCookie(nombre) {
    let nombreCookie = nombre + "=";
    let cookies = document.cookie.split(';');
    for (let i = 0; i < cookies.length; i++) {
        let cookie = cookies[i];
        while (cookie.charAt(0) === ' ') {
            cookie = cookie.substring(1);
        }
        if (cookie.indexOf(nombreCookie) === 0) {
            return cookie.substring(nombreCookie.length, cookie.length);
        }
    }
    return "";
}

// Uso:
let idUsuario = obtenerIdUsuario();
console.log("Identificador único del usuario:", idUsuario);

document.addEventListener("DOMContentLoaded", function () {
    var lazyloadImages = document.querySelectorAll("img.lazyload");
    var lazyloadThrottleTimeout;

    function lazyload() {
        if (lazyloadThrottleTimeout) {
            clearTimeout(lazyloadThrottleTimeout);
        }

        lazyloadThrottleTimeout = setTimeout(function () {
            var scrollTop = window.scrollY;
            lazyloadImages.forEach(function (img) {
                if (img.offsetTop < (window.innerHeight + scrollTop)) {
                    img.src = img.dataset.src;
                    img.classList.remove('lazyload');
                }
            });
            if (lazyloadImages.length == 0) {
                document.removeEventListener("scroll", lazyload);
                window.removeEventListener("resize", lazyload);
                window.removeEventListener("orientationChange", lazyload);
            }
        }, 20);
    }

    document.addEventListener("scroll", lazyload);
    window.addEventListener("resize", lazyload);
    window.addEventListener("orientationChange", lazyload);
});
