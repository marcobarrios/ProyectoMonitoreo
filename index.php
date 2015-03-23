<?php
/**
 * Created by PhpStorm.
 * User: Marco Barrios
 * Date: 23/02/2015
 * Time: 9:55 PM
 */
require_once 'php_facebook/app/start.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Monitoreo</title>
    <meta name = "viewport" content= "width=device-width, minimum-scale=1, maximum-scale=1"/>
    <link rel ="shortcut icon" type = "image/x-icon" href = "images/logo.ico">
    <link rel="stylesheet" href="styles/styles-portada.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
</head>
<body>
<header>
    <figure id = "logo">
        <img src="images/logo.png">
    </figure>
    <h1>Instrumento de Monitoreo</h1>
    <div id = "btn-login">
        <a href="#" id = "btn-log">Iniciar Encuesta</a>
    </div>
</header>
        <div id = "facebook">
            <?php if(!isset($_SESSION['facebook'])): ?>
                <a href="<?php echo $helper->getLoginUrl($config['scopes']); ?>" class="btn btn-primary">Iniciar Sesión con Facebook</a>
            <?php else:
                header('Location: monitoreo.php?name='.$facebook_user->getName() . '&id='.$facebook_user->getId());
            endif; ?>
        </div>
<div id = "box-img">
    <!---->
    <div id="myCarousel" class = "carousel">
        <ol class = "carousel-indicators">
            <li data-target = "#myCarousel" data-slide-to = "0" class = "active"></li>
            <li data-target = "#myCarousel" data-slide-to = "1"></li>
            <li data-target = "#myCarousel" data-slide-to = "2"></li>
        </ol>

        <div class="carousel-inner">
            <div class = "item active">
                <img src="images/r1.jpg" alt="img1" class = "img-responsive">
                <div class = "carousel-caption">
                    <h3>Imagen1</h3>
                </div>
            </div>
            <div class = "item">
                <img src="images/r2.jpg" alt="img12" class = "img-responsive">
                <div class = "carousel-caption">
                    <h3>Imagen2</h3>
                </div>
            </div>
            <div class = "item">
                <img src="images/r3.jpg" alt="img3"  class = "img-responsive">
                <div class = "carousel-caption">
                    <h3>Imagen3</h3>
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
<!---->
<footer>
    <div>
        <img class = "img-footer" src="images/logoHIVOS.png">
        <img class = "img-footer" src="images/logoIDEI.png">
        <img class = "img-footer" src="images/logoPARLAMENTO.png">
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src = "controllers/ingreso_facebook.js"></script>
</body>
</html>