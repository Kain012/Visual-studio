var relojito = "";
reloj();
function reloj() {
    var H = new Date();
    var hora = H.getHours();
    var min = H.getMinutes();
    var sec = H.getSeconds();
    relojito = "<h1>" + hora + ":" + min + ":" + sec + "</h1>";
    document.getElementById('relojito').innerHTML = relojito;
    setTimeout("reloj()", 1000);
}