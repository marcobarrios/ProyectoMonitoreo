/**
 * Created by Marco Barrios on 22/02/2015.
 */
function SelectChanged() {
    if(document.myform.cultura.value == "8") {
        mostrar('div_id_otra_cultura');
    } else {
        ocultar('div_id_otra_cultura');
    }

    if(document.myform.idservicio_salud.value == "6") {
        mostrar('div_id_otro_servicio');
    } else {
        ocultar('div_id_otro_servicio');
    }

    if(document.myform.tiempo_servicio.value == "4") {
        mostrar('div_id_especifica_tiempo');
    } else {
        ocultar('div_id_especifica_tiempo');
    }

    if(document.myform.donde_consigue_pf.value == "6") {
        mostrar('div_donde_consigue_condon');
    } else {
        ocultar('div_donde_consigue_condon');
    }

    if(document.myform.proporcionaron_pf.value == "1") {
        mostrar('div_id_brindaron_opciones');
    } else {
        ocultar('div_id_brindaron_opciones');
    }

    if(document.myform.brindaron_opciones.value == "3") {
        mostrar('div_id_especifica_opciones');
    } else {
        ocultar('div_id_especifica_opciones');
    }

    if(document.myform.atencion_abuso.value == "1") {
        mostrar('div_id_kit_emergencia');
        mostrar('div_id_prestador_maneja_kit');
    } else {
        ocultar('div_id_kit_emergencia');
        ocultar('div_id_prestador_maneja_kit');
    }
}

function ocultar(id){
    var elDiv = document.getElementById(id);
    elDiv.style.display='none';
}

function mostrar(id){
    var elDiv = document.getElementById(id);
    elDiv.style.display='block';
}

window.onload = function() {
    ocultar('div_id_otra_cultura');
    ocultar('div_id_otro_servicio');
    ocultar('div_id_especifica_tiempo');
    ocultar('div_donde_consigue_condon');
    ocultar('div_id_brindaron_opciones');
    ocultar('div_id_especifica_opciones');
    ocultar('div_id_kit_emergencia');
    ocultar('div_id_prestador_maneja_kit');
}