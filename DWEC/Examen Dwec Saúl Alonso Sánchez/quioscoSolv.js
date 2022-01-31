//objetos

class Ejemplar {
    constructor(categoria, nombre, descripcion) {
        this.categoria = categoria;
        this.nombre = nombre;
        this.descripcion = descripcion;
    }
}
var quiosco = [
    new Ejemplar("prensa", "El Mundo", "Noticias, actualidad, debates, sociedad, servicios, entretenimiento y última hora en España y el mundo. El Mundo, antes denominado El Mundo del Siglo XXI, es un periódico español diario.​ Tiene su sede en Madrid. El director desde su fundación el 23 de octubre de 1989 hasta el 30 de enero de 2014 fue Pedro J. Ramírez."),
    new Ejemplar("prensa", "El País", "Noticias de última hora sobre la actualidad en España y el mundo: política, economía, deportes, cultura, sociedad, tecnología, gente, opinión, viajes, moda, ... El País es un periódico español fundado en 1976. Se redacta en español, aunque también publica contenidos en catalán, inglés y portugués."),
    new Ejemplar("prensa", "La Nueva España", "La Nueva España es el periódico más difundido en el Principado de Asturias y el noveno de información general en España. Se define a sí mismo como un 'diario independiente de Asturias', de tendencia liberal moderada. Se publica en Oviedo desde 1936 y es editado por la empresa Editorial Prensa Ibérica."),
    new Ejemplar("moda", "Fashion", "Tendencias de moda, Street Style, el look de los famosos y mucho más en Fashion, una Revista de Moda y estilo de vida. La industria de la moda se dedica a la creación y venta de prendas de vestir que se impondrán como referencia en la temporada estival siguiente al lanzamiento como, por ejemplo, la moda invierno. La moda es un reflejo de los cambios sociales, políticos y culturales que tienen lugar alrededor del mundo"),
    new Ejemplar("corazón", "Hola", "¡Hola! es una revista del corazón española de publicación semanal. Es la segunda revista más vendida de España. El 8 de septiembre de 1944 se sacó a la venta el primer número de ¡Hola!. La revista fue fundada y dirigida por Antonio Sánchez Gómez (1911-1984), quien procedía del diario vespertino La Prensa de Barcelona. Desde 1984, fue su hijo, Eduardo Sánchez Junco, quien le sucedió en la dirección​ hasta su fallecimiento el 14 de julio de 2010."),
    new Ejemplar("moda", "Vogue", "Vogue es una revista estadounidense de moda que se fundó en 1892. Moda y belleza, todas las pasarelas internacionales, tendencias, diseñadores, modelos y fotógrafos de moda; joyas, moda en la calle. Su fundador fue Arthur Baldwin Turnure. Cuando falleció en 1909, la revista pasó a manos de la editorial Conde Nast Publications Inc. Fue la primera publicación estadounidense que logró conquistar Europa."),
    new Ejemplar("corazón", "Lecturas", "Lecturas es una revista española de carácter semanal especializada en informar sobre la crónica social o prensa rosa. Lecturas es la revista decana​ de la prensa rosa en España. La publicación está consolidada en el podium de revistas más leídas, según la medición de EGM"),
    new Ejemplar("otros", "Fotogramas", "Fotogramas es una revista española de cine de periodicidad mensual. Es el punto de encuentro de la mejor información sobre la actualidad cinematográfica: estrenos, trailers, entrevistas, opiniones... Su primer número apareció el 15 de noviembre de 1946 de la mano del matrimonio formado por Antonio Nadal-Rodó y María Fernanda Gañán."),
    new Ejemplar("otros", "National Geographic", "National Geographic Magazine es una entidad sin ánimo de lucro que funciona como el órgano de expresión oficial de la National Geographic Society de Estados Unidos. Incluye reportajes y fotografías de naturaleza, ciencia, historia, viajes y aventura. Su primera edición data de octubre de 1888, ​ nueve meses después de que la sociedad fuera fundada.")
];

//funciones

if (!localStorage.getItem("opcion")) {
    localStorage.setItem("opcion","nada");
}

var primera = false;
mostrar();
function mostrar() {
    if (primera == false) {
        if (localStorage.getItem("opcion")) {
            var opG = localStorage.getItem("opcion");
        } else {
            var opG = document.getElementById("categoria").value;
        }
        primera = true;
    } else {
        if (localStorage.getItem("opcion") == document.getElementById("categoria").value) {
            var opG = localStorage.getItem("opcion");
        } else {
            var opG = document.getElementById("categoria").value;
        }
    }
    if (opG == "") {
        var texto = ("<script src=\"quiosco.js\"></script><h1>El quiosco</h1><hr><form>Categoría:<input type=\"text\" id=\"categoria\"value=\"\"><button type=\"button\" onclick=\"mostrar()\">Buscar</button></form>");
        var eleccion = document.getElementById("categoria").value;
        localStorage.setItem("opcion", eleccion);
        quiosco.forEach(elemento => {
            if (elemento.categoria == eleccion) {
                texto += ("<h2>" + elemento.nombre + "</h2>");
                texto += ("<p>" + elemento.descripcion + "</p>");
            }
        });
        var textofinal = texto.split(",");
        document.body.innerHTML = textofinal;
    } else {
        var texto = ("<script src=\"quiosco.js\"></script><h1>El quiosco</h1><hr><form>Categoría:<input type=\"text\" id=\"categoria\"value=\"\"><button type=\"button\" onclick=\"mostrar()\">Buscar</button></form>");
        var eleccion = opG;
        localStorage.setItem("opcion", eleccion);
        quiosco.forEach(elemento => {
            if (elemento.categoria == eleccion) {
                texto += ("<h2>" + elemento.nombre + "</h2>");
                texto += ("<p>" + elemento.descripcion + "</p>");
            }
        });
        var textofinal = texto.split(",");
        document.body.innerHTML = textofinal;
    }
}