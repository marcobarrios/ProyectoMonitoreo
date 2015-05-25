/**
 * Created by Marco Barrios on 22/02/2015.
 */
function SelectChanged() {
    if(document.myform.cultura.value == "8") {
        mostrar('div_id_otra_cultura');
    } else {
        ocultar('div_id_otra_cultura');
    }

    if(document.myform.otrotrabajo.value == "9") {
        mostrar('div_id_otrotrabajo');
    } else {
        ocultar('div_id_otrotrabajo');
    }

    if(document.myform.dedica.value == "2" || document.myform.dedica.value == "3") {
        mostrar('div_id_trabajo');
    } else {
        ocultar('div_id_trabajo');
        ocultar('div_id_otrotrabajo');
    }

    if(document.myform.sabe_condon.value == "1") {
        mostrar('div_pasoscondon');
    } else {
        ocultar('div_pasoscondon');
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

    if(document.myform.consigue_metodos.value == "6") {
        mostrar('div_id_otro_lugar_metodos');
    } else {
        ocultar('div_id_otro_lugar_metodos');
    }

    if(document.myform.inicio_relacion.value != "4") {
        mostrar('div_id_frecuenciarelacion');
        mostrar('div_id_estado_relacion');
        mostrar('div_id_quien_relacion');
        mostrar('div_id_utilizo_condon');
    } else {
        ocultar('div_id_frecuenciarelacion');
        ocultar('div_id_estado_relacion');
        ocultar('div_id_quien_relacion');
        ocultar('div_id_utilizo_condon');
    }

    if(document.myform.servicio_sugerido.value == "6") {
        mostrar('div_otro_servicio_sugerido');
    } else {
        ocultar('div_otro_servicio_sugerido');
    }

    if(document.myform.por_idioma.value == "4") {
        mostrar('div_id_otra_razon');
    } else {
        ocultar('div_id_otra_razon');
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
    ocultar('div_id_trabajo');
    ocultar('div_pasoscondon');
    ocultar('div_id_otrotrabajo');
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
    ocultar('div_id_otro_lugar_pruebas');
    ocultar('div_id_otro_lugar_metodos');
}
