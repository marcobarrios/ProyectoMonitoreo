/**
 * Created by Gerson on 11/05/2015.
 */
var $divi = $('#idiomas'),
    $btn1 = $('#btn-login');

function mostrarDiv()
{
    $divi.slideToggle()
}

//eventos
$btn1.click( mostrarDiv )