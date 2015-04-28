/**
 * Created by Marco Barrios on 22/02/2015.
 */
function SelectChanged() {
    if(document.myform.cultura.value == "8") {
        mostrar('div_id_otra_cultura');
    } else {
        ocultar('div_id_otra_cultura');
    }

    if(document.myform.vivienda.value == "5") {
        mostrar('div_id_otra_vivienda');
    } else {
        ocultar('div_id_otra_vivienda');
    }

    if(document.myform.idservicio_salud.value == "6") {
        mostrar('div_id_otro_servicio');
    } else {
        ocultar('div_id_otro_servicio');
    }

    if(document.myform.motivo_acercamiento.value == "7") {
        mostrar('div_id_especifica_motivo');
    } else {
        ocultar('div_id_especifica_motivo');
    }

    if(document.myform.donde_escucho.value == "5") {
        mostrar('div_id_especifica_escucho');
    } else {
        ocultar('div_id_especifica_escucho');
    }

    if(document.myform.consigue_condones.value == "6") {
        mostrar('div_id_otro_lugar_condones');
    } else {
        ocultar('div_id_otro_lugar_condones');
    }

    if(document.myform.atencion_abuso.value == "1") {
        mostrar('div_id_prestador_maneja_kit');
    } else {
        ocultar('div_id_prestador_maneja_kit');
    }

    if(document.myform.atencion_abuso.value == "1") {
        mostrar('div_id_prestador_maneja_kit');
    } else {
        ocultar('div_id_prestador_maneja_kit');
    }

    if(document.myform.atencion_abuso.value == "1") {
        mostrar('div_id_prestador_maneja_kit');
    } else {
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
    ocultar('div_id_otra_vivienda');
    ocultar('div_id_otro_servicio');
    ocultar('div_id_especifica_motivo');
    ocultar('div_id_especifica_escucho');
    ocultar('div_otro_servicio_sugerido');
    ocultar('div_porque_derecho_relacion');
    ocultar('div_porque_derecho_condon');
    ocultar('div_id_otro_lugar_condones');
    ocultar('div_id_relacion_6meses');
    ocultar('div_id_estado_relacion');
    ocultar('div_id_quien_relacion');
    ocultar('div_id_utilizo_condon');
}