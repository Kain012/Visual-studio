var relojito = "";
reloj();
function reloj() {
    var H = new Date();
    var hora = H.getHours();
    var min = H.getMinutes();
    var sec = H.getSeconds();
    console.log(document.getElementById("relojito"));
    document.getElementById("relojito").innerHTML = hora + ":" + min + ":" + sec;
    setTimeout("reloj()", 1000);
}