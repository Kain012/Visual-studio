function inicio() {
    console.dir(contactar);
    console.dir(contactar.action);
    for (const key in contactar) {
        if (Object.hasOwnProperty.call(contactar, key)) {
            const element = contactar[key];
            console.dir(element);
        }
    }
    document.getElementById("btnLimpiar").addEventListener("click",reset,false);
}
function reset() {
    for (const key in contactar) {
        if (Object.hasOwnProperty.call(contactar, key)) {
            const element = contactar[key];
            if (element.type=="text") {
                element.contentText="";
                console.dir(element);
            }
        }
    }
}
var comunidades= ["Andalucía", "Aragón", "Canarias", "Cantabria", "Castilla y León", "Castilla-La Mancha", "Cataluña", "Ceuta", "Comunidad Valenciana", "Comunidad de Madrid", "Extremadura", "Galicia", "Islas Baleares", "La Rioja", "Melilla", "Navarra", "País Vasco", "Principado de Asturias", "Región de Murcia"];
var opciones = document.createElement("select");
opciones.id="opciones"
document.body.appendChild(opciones);
comunidades.forEach(element => {
    var opcion = document.createElement("option");
    opcion.id=element;
    opcion.innerText=element;
    document.getElementById("opciones").appendChild(opcion);
});
document.body.appendChild(opciones);
