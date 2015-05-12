<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Me muevo por mis Derechos Sexuales">
    <title>Instrumento de Monitoreo</title>
    <meta name = "viewport" content= "width=device-width, minimum-scale=1, maximum-scale=1"/>
    <link rel ="shortcut icon" type = "image/x-icon" href = "images/logo.ico">
    <link href='http://fonts.googleapis.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="styles/styles-portada.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <link href='http://fonts.googleapis.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
</head>
<body>
<header>
    <h1>Me Muevo Por Mis Derechos Sexuales</h1>
    <div id = "btn-login">
        <a href="#" class="btn">Iniciar Encuesta</a>
    </div>
</header>

<div id="idiomas">
    <a href="monitoreo.php?idiomas=espaniol" class = "btn btn-success">
        <img src="images/maya.png" width="20px" alt=""/> Español
    </a>

    <a href="monitoreo.php?idiomas=aguacateco" class = "btn btn-success">
        <img src="images/maya2.png" width="20px" alt=""/> Aguacateco
    </a>

    <a href="monitoreo.php?idiomas=mam" class = "btn btn-success">
        <img src="images/maya3.png" width="20px" alt=""/> Mam
    </a>

    <a href="monitoreo.php?idiomas=ixil" class = "btn btn-success">
        <img src="images/maya4.png" width="20px" alt=""/> Ixil
    </a>

    <a href="monitoreo.php?idiomas=ni" class = "btn btn-success">
        <img src="images/maya.png" width="20px" alt=""/> Sin Audio
    </a>
</div>

<div id = "box-img">
    <!---->
    <div id="myCarousel" class = "carousel slide">
        <ol class = "carousel-indicators">
            <li data-target = "#myCarousel" data-slide-to = "0" class = "active"></li>
            <li data-target = "#myCarousel" data-slide-to = "1"></li>
            <li data-target = "#myCarousel" data-slide-to = "2"></li>
        </ol>

        <div class="carousel-inner">
            <div class = "item active">
                <img src="images/r1.png" alt="img1" class = "img-responsive">
                <div class = "carousel-caption">
                </div>
            </div>
            <div class = "item">
                <img src="images/r2.png" alt="img12" class = "img-responsive">
                <div class = "carousel-caption">
                </div>
            </div>
            <div class = "item">
                <img src="images/r3.jpg" alt="img3"  class = "img-responsive">
                <div class = "carousel-caption">
                </div>
            </div>
        </div>
        <a class = "carousel-control left" href="#myCarousel" data-slide = "prev">
            <span class="icon-prev"></span>
        </a>
        <a class = "carousel-control right" href="#myCarousel" data-slide = "next">
            <span class="icon-next"></span>
        </a>
    </div>
</div>
<audio src="audios/Bienvenida.mp3" autoplay="autoplay"></audio>
<!---->
<footer>
    <div>
        <img class = "img-footer" src="images/footer.png">
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="controllers/iniciar-encuesta.js"></script>
</body>
</html>