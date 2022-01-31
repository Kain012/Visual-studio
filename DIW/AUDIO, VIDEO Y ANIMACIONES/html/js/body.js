
class modulo {
    constructor(codigo, nombre, horas, recursos, curso) {
        this.codigo = codigo;
        this.nombre = nombre;
        this.horas = horas;
        this.recursos = recursos;
        this.curso = curso;
    }
}
class moduloInf extends modulo {
    constructor(codigo, nombre, horas, recursos, curso, tecnologias) {
        super(codigo, nombre, horas, recursos, curso);
        this.tecnologias = tecnologias;
    }
}
class moduloFct extends modulo {
    constructor(codigo, nombre, horas, recursos, curso, fct) {
        super(codigo, nombre, horas, recursos, curso);
        this.fct = fct;
    }
}

var cabecera = ["NOMBRE", "HORAS", "RECURSOS", "TECNOLOGIAS", "FCT"];

var SISIN = new moduloInf("SISIN", "Sistemas informaticos", 160, "https://www.cesareox.com/docencia/simm/", 1, "Ordenadores viejos y herramientas");
var BBDD = new moduloInf("BBDD", "Bases de Datos", 192, "https://www.cesareox.com/docencia/sxbd/", 1, "MySqlLite");
var PROG = new moduloInf("PROG", "Programacion", 224, "https://www.cesareox.com/docencia/dfsi/aprender-a-programar", 1, "Eclipse");
var LDM = new moduloInf("LDM", "Lenguaje de marcas", 128, "https://www.cesareox.com/docencia/dfsi/el-lenguaje-html", 1, "Brackets");
var ENDES = new moduloInf("ENDES", "Entornos de desarrollo", 96, "https://www.cesareox.com/docencia/dfsi/", 1, "Papel y Boli");
var FOL = new modulo("FOL", "Formación y Orientación Laboral", 96, "https://www.cesareox.com/aprendiendo/cursos/el.html", 1);
var ING = new modulo("ING", "Lengua extranjera para uso profesional", 64, "https://www.cesareox.com/opinion/articulos/49219/cual-es-mi-nivel-de-ingles", 1);

var curso1 = [SISIN, BBDD, PROG, LDM, ENDES, FOL, ING];

var DWEC = new moduloInf("DWEC", "Desarrollo web en entorno cliente", 150, "https://www.cesareox.com/opinion/articulos/89670/como-hago-para-tener-mi-pagina-web", 2, "Visual Studio");
var DWES = new moduloInf("DWES", "Desarrollo web en entorno servidor", 150, "https://www.cesareox.com/docencia/dfsi/", 2, "Visual Studio");
var DAWEB = new moduloInf("DAWEB", "Despliegue de aplicaciones web", 110, "https://www.cesareox.com/opinion/swcat/112971", 2, "VMware Workstation 16 Player");
var DIW = new moduloInf("DIW", "Diseño de interfaces web", 132, "https://www.cesareox.com/docencia/varios/atencion_diversificada", 2, "Brackets");
var EIE = new moduloInf("EIE", "Empresa e iniciativa emprendedora", 88, "https://www.cesareox.com/aprendiendo/cursos/el.html", 2, "Libros");
var PDAW = new moduloInf("PDAW", "Proyecto de desarrollo de aplicaciones web", 30, "https://www.cesareox.com/docencia/dfsi/paginas-dinamicas", 2, "Visual Studio");
var FCT = new moduloFct("FCT", "Formacion en Centros de Trabajo", 380, "https://i.gifer.com/8158.mp4", 2, "MundoPc");

var curso2 = [DWEC, DWES, DAWEB, DIW, EIE, PDAW, FCT];
function mostrarTabla() {
    switch (document.getElementById("curso").value) {
        case "0":
            document.getElementById("tabla").style.border = "black 0px solid";
            var tablatxt = "";
            document.getElementById("tabla").innerHTML = tablatxt;
            var textoTitulo = "";
            document.getElementById("titulo").innerHTML = textoTitulo;
            break;
        case "1":
            document.getElementById("tabla").style.border = "black 1px solid";
            var tablatxt = "";
            var horasTotales = 0;
            var textoTitulo = "<h3> 1º Curso: ";
            tablatxt += "<tr>";

            for (var i = 0; i < (cabecera.length - 1); i++) {
                tablatxt += "<td><h3>" + cabecera[i] + "</h3></td>";
            }

            tablatxt += "</tr>";

            for (var i2 = 0; i2 < curso1.length; i2++) {
                tablatxt += "<tr>";

                tablatxt += "<td>" + curso1[i2].codigo + " - " + curso1[i2]['nombre'] + "</td>";
                tablatxt += "<td>" + curso1[i2]['horas'] + " Horas</td>";
                tablatxt += "<td><a href='" + curso1[i2]['recursos'] + "' target='_blank'> " + curso1[i2]['recursos'] + " </a></td>";

                curso1[i2]['tecnologias'];
                if (curso1[i2]['tecnologias']) {
                    tablatxt += "<td>" + curso1[i2]['tecnologias'] + "</td>";
                } else {
                    tablatxt += "<td></td>";
                }

                tablatxt += "</tr>";
                horasTotales = horasTotales + curso1[i2]['horas'];

            }
            textoTitulo = textoTitulo + horasTotales + " Horas.<h3>";

            document.getElementById("titulo").innerHTML = textoTitulo;
            document.getElementById("tabla").innerHTML = tablatxt;

            break;
        case "2":
            document.getElementById("tabla").style.border = "black 1px solid";
            var tablatxt = "";
            var horasTotales = 0;
            var textoTitulo = "<h3> 2º Curso: ";
            tablatxt += "<tr>";

            for (var i = 0; i < cabecera.length; i++) {
                tablatxt += "<td><h3>" + cabecera[i] + "</h3></td>";
            }

            tablatxt += "</tr>";

            for (var i2 = 0; i2 < curso2.length; i2++) {
                tablatxt += "<tr>";

                tablatxt += "<td>" + curso2[i2]['codigo'] + " - " + curso2[i2]['nombre'] + "</td>";
                tablatxt += "<td>" + curso2[i2]['horas'] + " Horas</td>";
                if (curso2[i2]['codigo'] == "FCT") {
                    tablatxt += "<td><a href='" + curso2[i2]['recursos'] + "' target='_blank'> Easter egg </a></td>";
                } else {
                    tablatxt += "<td><a href='" + curso2[i2]['recursos'] + "' target='_blank'> " + curso2[i2]['recursos'] + "</a></td>";
                }
                if (curso2[i2]['tecnologias']) {
                    tablatxt += "<td>" + curso2[i2]['tecnologias'] + "</td>";
                } else {
                    tablatxt += "<td></td>";
                }

                if (curso2[i2]['fct']) {
                    tablatxt += "<td>" + curso2[i2]['fct'] + "</td>";
                } else {
                    tablatxt += "<td></td>";
                }
                tablatxt += "</tr>";
                horasTotales = horasTotales + curso2[i2]['horas'];

            }
            textoTitulo = textoTitulo + horasTotales + " Horas.<h3>";

            document.getElementById("titulo").innerHTML = textoTitulo;
            console.log(curso2);
            document.getElementById("tabla").innerHTML = tablatxt;

            break;
        case "3":
            document.getElementById("tabla").style.border = "black 1px solid";
            var tablatxt = "";
            var horasTotales = 0;
            var textoTitulo = "<h3> Todos los Cursos: ";
            tablatxt += "<tr>";

            for (var i = 0; i < cabecera.length; i++) {
                tablatxt += "<td><h3>" + cabecera[i] + "</h3></td>";
            }

            tablatxt += "</tr>";
            tablatxt += "<tr><td><h3>1º Curso</h3></td></tr>";
            for (var i2 = 0; i2 < curso1.length; i2++) {
                tablatxt += "<tr>";

                tablatxt += "<td>" + curso1[i2]['codigo'] + " - " + curso1[i2]['nombre'] + "</td>";
                tablatxt += "<td>" + curso1[i2]['horas'] + " Horas</td>";
                tablatxt += "<td><a href='" + curso1[i2]['recursos'] + "' target='_blank'> " + curso1[i2]['recursos'] + "</a></td>";

                curso1[i2]['tecnologias'];
                if (curso1[i2]['tecnologias']) {
                    tablatxt += "<td>" + curso1[i2]['tecnologias'] + "</td>";
                } else {
                    tablatxt += "<td></td>";
                }

                if (curso2[i2]['fct']) {
                    tablatxt += "<td>" + curso2[i2]['fct'] + "</td>";
                } else {
                    tablatxt += "<td></td>";
                }

                tablatxt += "</tr>";
                horasTotales = horasTotales + curso1[i2]['horas'];

            }
            tablatxt += "<tr><td><h3>2º Curso</h3></td></tr>";
            for (var i2 = 0; i2 < curso2.length; i2++) {
                tablatxt += "<tr>";

                tablatxt += "<td>" + curso2[i2]['codigo'] + " - " + curso2[i2]['nombre'] + "</td>";
                tablatxt += "<td>" + curso2[i2]['horas'] + " Horas</td>";
                if (curso2[i2]['codigo'] == "FCT") {
                    tablatxt += "<td><a href='" + curso2[i2]['recursos'] + "' target='_blank'> Easter egg </a></td>";
                } else {
                    tablatxt += "<td><a href='" + curso2[i2]['recursos'] + "' target='_blank'> " + curso2[i2]['recursos'] + "</a></td>";
                }
                if (curso2[i2]['tecnologias']) {
                    tablatxt += "<td>" + curso2[i2]['tecnologias'] + "</td>";
                } else {
                    tablatxt += "<td></td>";
                }

                if (curso2[i2]['fct']) {
                    tablatxt += "<td>" + curso2[i2]['fct'] + "</td>";
                } else {
                    tablatxt += "<td></td>";
                }
                tablatxt += "</tr>";
                horasTotales = horasTotales + curso2[i2]['horas'];

            }
            textoTitulo = textoTitulo + horasTotales + " Horas.<h3>";

            document.getElementById("titulo").innerHTML = textoTitulo;
            console.log(curso2);
            document.getElementById("tabla").innerHTML = tablatxt;

            break;
            case "4":
            document.getElementById("video").innerHTML = "<video controls muted autoplay loop> <source src='./js/sample_640x360.mp4' type='video/mp4'> Tu navegador no es compatible con videos html5 </video>";
            break;
    }
}
document.getElementById("play").addEventListener(click,play,false);
document.getElementById("pause").addEventListener(click,pause,false);
function play() {
    document.getElementById("musica").play();
}
function pause() {
    document.getElementById("musica").pause();
}
function abreDialog(){
    var miDialog=document.querySelector("dialog");
    miDialog.showModal();
}