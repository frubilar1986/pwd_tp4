// validacion de formularios
// alert("inicia validajs ")
function validaForm() {
    var inp_nro = document.getElementById('nro');
    var resp = true
    if (inp_nro.value == "") {
        inp_nro.style.backgroundColor = 'orangered'
        alert("campo nro es obligatorio");
        resp = false;
    }
    return resp;
}

function valHsPwd() {
    var semana = new Array()
    var cero = 0;
    resp = true;
    for (var i = 0; i < 5; i++) {
        semana[i] = document.getElementById(i).value;
        if (semana[i] == 0) {
            cero += 1;
        }

    }
    if (cero == 5) {
        resp = false;
        alert('no hay horas ingresadas');
    }


    return resp;

}
// Controla formulario ejercicio 7 tp1 
//impide que se submita formulario si el divisor es cero
function ctrlJsEje7() {
    var $submit = false;
    var $nro1 = document.getElementById('nro1').value;
    var $nro2 = document.getElementById('nro2').value;
    var $selec = document.getElementsByName('operador')[0];
    //var $opcion = $selec.options[$selec.selectedIndex].value;
    var $opcion = $selec.value;
    // alert($opcion); 
    $nro1 = parseInt($nro1);
    $nro2 = parseInt($nro2);
    if (!isNaN($nro1)) {

        if (!isNaN($nro2)) {

            $submit = true;
        }

    }
    // if(!$submit){

    //     alert("error el los campos de numeros");
    // }


    // alert("compara operador");
    if ($nro2 == 0 && $opcion == 4) {
        $submit = false;
        //alert('no se puede dividir por CERO')
        //document.getElementById('alerta').innerHTML ='NO ES POSIBLE LA DIVISION POR CERO';
        document.getElementById('alerta').style = 'display: inline';

    }
    //alert($submit);
    return $submit;

}

//validacion de edad en ejejrcicio 6 tp4 
function validaEdad() {
    //$resp = false;
    //    document.getElementById('edad').value.innerhtml ="";
    document.getElementById("edad").style.background = "";
    var resp = false;
    // var d = document.getElementById("dia").value;
    // var m = document.getElementById("mes").value;
    // var a = document.getElementById("anio").value;
    var fn = document.getElementById("fn").value;

    if (fn != "") {

        var fechaInput = new Date(fn);
        var fecha = new Date();
        var edad = fecha.getFullYear() - fechaInput.getFullYear();
        if (fechaInput.getMonth == fecha.getMonth() && fechaInput.getDate() > fecha.getDay()) {
            edad = edad - 1;
        }
        if (fechaInput.getMonth() > fecha.getMonth()) {
            edad = edad - 1;
        }
        document.getElementById('edad').value = edad;
        
        if (edad <= 0 || edad > 100) {

            document.getElementById("edad").style.background = "orangered";
            // document.getElementById("dia").style.backgroundColor = "orangered";
            // document.getElementById("mes").style.backgroundColor = "orangered";
            // document.getElementById("anio").style.backgroundColor = "orangered";
            
            // alert("LA EDAD NO ES CORRECTA");
            document.getElementById('alerta').style = 'display: inline';



        }else{
            resp = true;
        }
        
    }else{

        edad = 0;
    }
    return resp;

}