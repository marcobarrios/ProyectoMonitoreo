<!DOCTYPE html>
<html>
<head lang="es">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Consentimiento</title>
    <link href='http://fonts.googleapis.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="styles/styles-portada.css">
</head>
<body>

<header>
    <h1>Hoja de Consentimiento</h1>
</header>

<section id="box-condition">
    <p id = "condition">Esta hoja de consentimiento pretende conocer tu nivel de satisfacción y de respuesta a
        través de un monitoreo a los servicios sexuales y reproductivos, en especial los programas
        en favor de adolescentes y jóvenes, comprendidos entre las edades de 10 a 24 años.
        Encontrarás una serie de preguntas que debes responder. Esta información es de carácter
        confidencial y no se le comunicará a nadie, la encuesta no menciona el nombre de ninguna
        persona y tendrá como fin que demandemos que la calidad de los servicios respondan a
        las demandas de las y los adolescentes de los municipios priorizados. El cuestionario te
        tomara unos 10 minutos  y es completamente voluntario. Si  no quieres participar, esto no
        afecta en nada la atención que recibas del centro de salud; y si lo deseas hacer, puedes
        negarte a responder cualquiera de las preguntas que te molesten y terminar la encuesta
        Si  tienes preguntas en relación al cuestionario, o quisieras  saber acerca de los resultados
        del estudio, puedes contactarse nosotros, 15 avenida ¨A¨ 3-33 zona 1, Quetzaltenango.
        Teléfono: 7765 – 8613
        <span id="accept-condition">¿Aceptas entonces llenar el cuestionario?</span>
    <p>
    <div>
        <a href="monitoreo.php?idiomas=<?php echo $_GET['idiomas'];?>" class = "btn btn-success"><img src="images/maya2.png" width="20px" alt=""/> Si acepto</a>
        <a href="index.php" class = "btn btn-danger"><img src="images/maya2.png" width="20px" alt=""/> No acepto</a>
    </div>
</section>
<footer>
    <div>
        <img class = "img-footer" src="images/footer.png">
    </div>
    <span id = "s-footer">- Monitoreo 2015 -</span>
</footer>

</body>
</html>
