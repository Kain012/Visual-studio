
function botones() {
    for (let i=1; i<51;i++){
        var boton= document.createElement("button");
        boton.textContent="boton " + i;
        boton.id=i;
        document.getElementById("contenedor").appendChild(boton);
        document.getElementById(i).addEventListener("click",mensajeboton,false);
    }
    document.getElementById("contenedor").addEventListener("click",mensaje,false);
}

function mensaje() {
    alert("Has hecho click en el contenedor");
}

function mensajeboton(id){
    alert("Hola, soy el botón " + id.path[0].id);
}
var div=document.createElement("div");
div.id="contenedor";
document.body.appendChild(div);
botones();
