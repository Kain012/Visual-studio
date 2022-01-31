header();
mostrarLista();
function header() {
    var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    var diasSemana = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
    var fecha = new Date();
    var hora = fecha.getHours();
    var dia = fecha.getDay();
    var dianum = fecha.getDate();
    var mes = fecha.getMonth();
    var año = fecha.getFullYear();
    if (hora > 7 && hora < 14) {
        document.getElementById("tintulo").innerHTML = ("Buenos dias, hoy es " + diasSemana[dia] + ", " + dianum + " de " + meses[mes] + " de " + año);
    } else if (hora > 13 && hora < 21) {
        document.getElementById("tintulo").innerHTML = ("Buenas tardes, hoy es " + diasSemana[dia] + ", " + dianum + " de " + meses[mes] + " de " + año);
    } else {
        document.getElementById("tintulo").innerHTML = ("Buenas noches, hoy es " + diasSemana[dia] + ", " + dianum + " de " + meses[mes] + " de " + año);
    }
}
//

function fondo() {
    var animo = document.getElementById('animo').value;
    switch (animo) {
        case "0":
            document.getElementById("side").style.backgroundColor = "#25CDF7";
            break;
        case "1":
            document.getElementById("side").style.backgroundColor = "green";
            break;
        case "2":
            document.getElementById("side").style.backgroundColor = "red";
            break;
    }

}
var tareas = [];
var texto = localStorage.getItem("tareas");
var nuevotexto = texto.split(",");
nuevotexto.forEach((item, i) => {
    tareas.push(item);
});
if (tareas.length == 0) {
    tareas = ["Consultar mi email"];
    var texto = localStorage.getItem("tareas");
    var nuevotexto = texto.split(",");
    nuevotexto.forEach((item, i) => {
        tareas.push(item);
    });
}


function anadirTarea() {
    let valueTxtTarea = document.getElementById('txtTarea').value;
    if (valueTxtTarea === "") {
        alert("Debe especificar un nombre de tarea");
    } else {
        var arraySplitTareas = valueTxtTarea.split(",");
        arraySplitTareas.forEach((item, i) => {
            tareas.push(item);
        });
        localStorage.setItem("tareas", tareas);
        mostrarLista();
    }

}

function limpiar() {
    tareas = [];
    localStorage.clear("tareas");
    localStorage.setItem("tareas", "Consultar mi email");
    tareas = ["Consultar mi email"];
    mostrarLista();
}

function mostrarLista() {
    var htmlListaTareas = "";
    for (var i = 0; i < tareas.length; i++) {
        htmlListaTareas += '<li>' + tareas[i] + '</li>';
    }
    document.getElementById('listaTareas').innerHTML = htmlListaTareas;
}
