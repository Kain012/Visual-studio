var coche = {
    modelo:"Mercedes C320",
    color:"azul",
    kms:15000,
    combustible:"diesel",
};
var coche = new Object();
    coche.modelo="Mercedes c320";
    coche.color="azul";
    coche.kms=15000;
    coche.combustible="diesel";

function usuario(nombre,apellido,edad,esAdmin){
    this.nombre=nombre;
    this.apellido=apellido;
    this.edad=edad;
    this.esAdmin=esAdmin;
}
var miUsuario = new usuario('Carlos','Suarez',30,true);
alert(miUsuario.nombre);//Carlos
alert(typeof(usuario));
alert(typeof(miUsuario));

