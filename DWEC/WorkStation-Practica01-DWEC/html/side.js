function fondo() {
    var animo = document.getElementById('animo').value;
    switch (animo) {
        case "0":
            document.body.style.backgroundColor = "white";
            break;
        case "1":
            document.body.style.backgroundColor = "green";
            break;
        case "2":
            document.body.style.backgroundColor = "red";
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
mostrarLista();

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