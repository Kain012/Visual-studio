var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
var diasSemana = new Array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");
var fecha = new Date();
var hora = fecha.getHours();
var dia = fecha.getDay();
var dianum = fecha.getDate();
var mes = fecha.getMonth();
var año = fecha.getFullYear();
if (hora > 7 && hora < 14) {
    document.write("Buenos dias, hoy es " + diasSemana[dia] + ", " + dianum + " de " + meses[mes] + " de " + año);
} else if (hora > 13 && hora < 21) {
    document.write("Buenas tardes, hoy es " + diasSemana[dia] + ", " + dianum + " de " + meses[mes] + " de " + año);
} else {
    document.write("Buenas noches, hoy es " + diasSemana[dia] + ", " + dianum + " de " + meses[mes] + " de " + año);
}