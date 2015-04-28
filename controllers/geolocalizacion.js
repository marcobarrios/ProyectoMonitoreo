/**
* Created by Marco Barrios on 23/02/2015.
*/
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(mostrarUbicacion);
} else {alert("¡Error! Este navegador no soporta la Geolocalización.");}

function mostrarUbicacion(position) {
    var times = position.timestamp;
    var latitud = position.coords.latitude;
    var longitud = position.coords.longitude;
    var altitud = position.coords.altitude;
    var exactitud = position.coords.accuracy;

    jQuery("#latitud").attr("value", latitud);
    jQuery("#longitud").attr("value", longitud);
    jQuery("#altitud").attr("value", altitud);
}