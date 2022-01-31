document.getElementById("regis").addEventListener('click', registro, false);

function registro(formulario) {
    console.log(formulario);
    console.log(formulario.target.form.value);
    console.log(formulario.target.form[0].value);
    console.log(formulario.target.form[1].value);
    console.log(formulario.target.form[2].value);
    console.log(formulario.target.form[3].value);
    console.log(formulario.target.form[4].value);
    console.log(formulario.target.form[5].value);
    console.log(formulario.target.form[6].value);
    console.log(formulario.target.form[7].checked);
    console.log(formulario.target.form[8].checked);
    console.log(formulario.target.form[9].value);
    console.log(formulario.target.form[10].checked);
    console.log(formulario.target.form[11].checked);
    console.log(formulario.target.form[12].checked);
    console.log(formulario.target.form[13].checked);
    console.log(formulario.target.form[14].value);
    document.body.innerHTML += "<p>Entro el registro</p>"
}