class Persona {
    constructor(nombre, apellido1, apellido2) {
        this.nombre = nombre;
        this.apellido1 = apellido1;
        this.apellido2 = apellido2;
    }
}
class Entrenador extends Persona {
    constructor(nombre, apellido1, apellido2, entrena) {
        super(nombre, apellido1, apellido2);
        this.entrena = entrena;
    }
}
class Deportista extends Persona {
    constructor(nombre, apellido1, apellido2, deporte) {
        super(nombre, apellido1, apellido2);
        this.deporte = deporte;
    }
}
class Deporte {
    constructor(nombre, tipo, entrenador) {
        this.nombre = nombre;
        this.tipo = tipo;
        this.entrenador = entrenador;
    }
}

var Monica = new Entrenador("Monica", "Espina", "Perez", "Hockey");
var Santiago = new Entrenador("Santiago", "Ramos", "Garcia", "Baloncesto");
var Sergio = new Entrenador("Sergio", "Rodriguez", "Romero", "Tiro");
var Rafael = new Entrenador("Rafael", "Nadal", "Parera", "Tenis");
var Silene = new Entrenador("Silene", "Diaz", "Filgueroa", "Quidditch");

var Entrenadores = [Monica, Santiago, Sergio, Rafael, Silene];

var Hockey = new Deporte("Hockey", "Colectivo", Monica);
var Baloncesto = new Deporte("Baloncesto", "Colectivo", Santiago);
var Tiro = new Deporte("Tiro", "Colectivo", Sergio);
var Tenis = new Deporte("Tenis", "Colectivo", Rafael);
var Quidditch = new Deporte("Quidditch", "Colectivo", Silene);

var Deportes = [Hockey, Baloncesto, Tiro, Tenis, Quidditch];

var Agata = new Deportista("Agata", "Jimenez", "Cortes", [Hockey, Baloncesto]);
var Anibal = new Deportista("Anibal", "Ramos", "Martinez", [Baloncesto, Tiro]);
var Agustin = new Deportista("Agustin", "Cano", "Dragic", [Tiro, Tenis]);
var Benjamin = new Deportista("Benjamin", "Gaztambide", "Lopez", [Tenis, Quidditch]);
var Mirko = new Deportista("Mirko", "Marquina", "Oliveira", [Quidditch, Hockey]);

var Deportistas = [Agata, Anibal, Agustin, Benjamin, Mirko];
var texto = "";
Deportistas.forEach(elemento1 => {
    texto += (elemento1.nombre + " " + elemento1.apellido1 + " " + elemento1.apellido2 + "<br><br>");
    elemento1.deporte.forEach(elemento2 => {
        console.log(elemento2);
        texto += (elemento2.nombre + ":<br>" + elemento2.entrenador.nombre + " " + elemento2.entrenador.apellido1 + " " + elemento2.entrenador.apellido2 + "<br>");
    });
    texto += ("<br><hr>");
});
texto += ("<hr>");

var Eldrick = new Entrenador("Eldrick", "Tont", "Woods", "Golf");
var Golf = new Deporte("Golf", "Individual", Eldrick);
var i=1;
Deportistas.forEach(elemento => {
    if(i%2!=0){
        let array = elemento.deporte;
        array.push(Golf);
        elemento.deporte=array;
        
    }
    i++;
});

Deportistas.forEach(elemento1 => {
    texto += (elemento1.nombre + " " + elemento1.apellido1 + " " + elemento1.apellido2 + ", Entrena en: " + elemento1.deporte.length + " deportes.<br><br>");
    elemento1.deporte.forEach(elemento2 => {
        console.log(elemento2);
        texto += (elemento2.nombre + ":<br>" + elemento2.entrenador.nombre + " " + elemento2.entrenador.apellido1 + " " + elemento2.entrenador.apellido2 + "<br>");
    });
    texto += ("<br><hr>");
});
texto += ("<hr>");

var TEldrick = 0;

Deportistas.forEach(elemento1 => {
    elemento1.deporte.forEach(elemento2 => {
        console.log(elemento2);
        if (elemento2.entrenador.nombre=="Eldrick") {
            TEldrick++;
        }
    });
});

texto += "<br>Eldrick Tont Woods entrena a " + TEldrick + " personas. <br>";

var TMonica = 0;
var TSantiago = 0;
var TSergio = 0;
var TRafael = 0;
var TSilene = 0;

Deportistas.forEach(elemento1 => {
    elemento1.deporte.forEach(elemento2 => {
        console.log(elemento2);
        switch (elemento2.entrenador.nombre) {
            case "Monica":
                TMonica++;
                break;
            case "Santiago":
                TSantiago++;
                break;
            case "Sergio":
                TSergio++;
                break;
            case "Rafael":
                TRafael++;
                break;
            case "Silene":
                TSilene++;
                break;
            default:
                break;
        }
    });
});

texto += "<br>Monica Espina Perez entrena a " + TMonica + " personas. <br>";
texto += "<br>Santiago Ramos Garcia entrena a " + TSantiago + " personas. <br>";
texto += "<br>Sergio Rodriguez Romero entrena a " + TSergio + " personas. <br>";
texto += "<br>Rafael Nadal Parera entrena a " + TRafael + " personas. <br>";
texto += "<br>Silene Diaz Filgueroa entrena a " + TSilene + " personas. <br>";

document.write(texto);