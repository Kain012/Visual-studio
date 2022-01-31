function funcion(){
    var div= document.createElement("div");

    var visi= document.createElement("input");
    visi.type="button";
    visi.id="visi";
    visi.onclick="visible";
    var texto= document.createTextNode("Botones visibles");
    visi.appendChild(texto);

    var invisi= document.createElement("input");
    invisi.type="button";
    invisi.id="invisi";
    invisi.onclick="invisible()";
    var texto= document.createTextNode("Botones invisibles");
    invisi.appendChild(texto);


    var parrafo= document.createElement("p");
    parrafo.id="miParrafo";
    var contenido= document.createTextNode("Texto del parafo");

    parrafo.appendChild(contenido);



    var input= document.createElement("input");
    input.type="text";


    div.appendChild(parrafo);
    div.appendChild(input);



    var br= document.createElement("br");
    for (let i = 1; i < 51; i++) {
        var boton= document.createElement("input");
        boton.type="button";
        boton.id="boton"+i;
        var contenidoB= document.createTextNode("boton"+i);
        boton.appendChild(contenidoB);
        var br= document.createElement("br");
        div.appendChild(br);
        div.appendChild(boton);
    }

    document.body.appendChild(visi);
    document.body.appendChild(invisi);
    document.body.appendChild(div);
    
}
function visible() {
    document.body.innerHTML="";
    var div= document.createElement("div");

    var visi= document.createElement("input");
    visi.type="button";
    visi.id="visi";
    visi.onclick="visible";
    var texto= document.createTextNode("Botones visibles");
    visi.appendChild(texto);

    var invisi= document.createElement("input");
    invisi.type="button";
    invisi.id="invisi";
    invisi.onclick="invisible()";
    var texto= document.createTextNode("Botones invisibles");
    invisi.appendChild(texto);


    var parrafo= document.createElement("p");
    parrafo.id="miParrafo";
    var contenido= document.createTextNode("Texto del parafo");

    parrafo.appendChild(contenido);



    var input= document.createElement("input");
    input.type="text";


    div.appendChild(parrafo);
    div.appendChild(input);
    div.className="visible";

    var br= document.createElement("br");

    for (let i = 1; i < 51; i++) {
        var boton= document.createElement("input");
        boton.type="button";
        boton.id="boton"+i;
        var contenidoB= document.createTextNode("boton"+i);
        boton.appendChild(contenidoB);
        var br= document.createElement("br");
        div.appendChild(br);
        div.appendChild(boton);
    }
    document.body.appendChild(visi);
    document.body.appendChild(invisi);
    document.body.appendChild(div);
}
function invisible() {
    document.body.innerHTML="";
    var div= document.createElement("div");
    div.className="invisible"

    var visi= document.createElement("input");
    visi.type="button";
    visi.id="visi";
    visi.onclick="visible";
    var texto= document.createTextNode("Botones visibles");
    visi.appendChild(texto);

    var invisi= document.createElement("input");
    invisi.type="button";
    invisi.id="invisi";
    invisi.onclick="invisible()";
    var texto= document.createTextNode("Botones invisibles");
    invisi.appendChild(texto);


    var parrafo= document.createElement("p");
    parrafo.id="miParrafo";
    var contenido= document.createTextNode("Texto del parafo");

    parrafo.appendChild(contenido);



    var input= document.createElement("input");
    input.type="text";


    div.appendChild(parrafo);
    div.appendChild(input);
    div.className="invisible";

    var br= document.createElement("br");
    
    for (let i = 1; i < 51; i++) {
        var boton= document.createElement("button");
        boton.id="boton"+i;
        var contenidoB= document.createTextNode("boton"+i);
        boton.appendChild(contenidoB);
        var br= document.createElement("br");
        div.appendChild(br);
        div.appendChild(boton);
    }
    document.body.appendChild(visi);
    document.body.appendChild(invisi);
    document.body.appendChild(div);
}
