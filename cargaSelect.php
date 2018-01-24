<?php
    $directorioRaiz = dirname($_SERVER['SCRIPT_FILENAME']);
    $directoriosInternos = scandir ( $directorioRaiz , $sorting_order = SCANDIR_SORT_ASCENDING );
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Comply - Free Bootstrap 4 Product Landing Page Template</title>
        <meta name="description" content="Download free Bootstrap 4 product landing page template Comply." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Bootstrap 4-->
        <link rel="stylesheet" href="plantilla/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <!--icons-->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    </head>
    <body>
        <!--header-->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top sticky-navigation">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ion-grid icon-sm"></span>
            </button>
            <a class="navbar-brand hero-heading" href="#">Santo Tom&aacute;s 2018</a>
        </nav>

        <!--main section-->
        <section class="bg-texture hero" id="main">
            <div class="container">
                <div class="row d-md-flex">
                    <div class="col-md-6 hidden-sm-down wow fadeIn">
                        <img class="img-fluid mx-auto d-block" src="plantilla/img/product.png"/>
                    </div>
                    <div class="col-md-6 col-sm-12 text-white wow fadeIn">
                        <h2 class="pt-4">Seleccione el <b class="text-primary-light">Juego</b></h2>
                        <p class="mt-5">
        <form action="cargaJuego.php">
            <select name="juego">
            <?php foreach ($directoriosInternos as $filename) : ?>
                <?php if(is_dir($filename) && $filename[0] !='.') : ?>
                <option value="<?php echo $filename ?>"><?php echo $filename ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
            </select>
            <input class="btn btn-primary mr-2 mb-2 page-scroll" type="submit" value="Enviar" />
        </form>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!--footer-->
        <section class="bg-footer" id="connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-xs-12 text-center wow fadeIn">
                        <h1>I.E.S. Dos Mares</h1>
                        <p class="mt-4">
                            <a href="https://twitter.com/iesdosmares" target="_blank"><em class="ion-social-twitter text-twitter-alt icon-sm mr-3"></em></a>
                            <a href="https://facebook.com/iesdosmares" target="_blank"><em class="ion-social-github text-facebook-alt icon-sm mr-3"></em></a>
                        </p>
                        <p class="pt-2 text-muted">
                            &copy; 2017 Comply Theme. A Free Bootstrap 4 product landing page theme by 
                            <a href="https://wireddots.com">Wired Dots</a>. Developed by <a href="https://twitter.com/attacomsian">@attacomsian</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
        <script src="plantilla/js/scripts.js"></script>
    </body>
</html>

