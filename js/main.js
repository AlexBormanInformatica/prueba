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
