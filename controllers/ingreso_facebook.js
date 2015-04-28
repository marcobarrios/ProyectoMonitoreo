var $divi = $('#facebook'),
	$btn1 = $('#btn-login');

function mostrarDiv()
{
	$divi.slideToggle()
}

//eventos
$btn1.click( mostrarDiv );
