<?php
    require('config.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_TITLE ?></title>
    <meta name="description" content="<?php echo $_META_DESCRIPTION ?>">
    <meta property="og:title" content="<?php echo $_TITLE ?>" />
    <meta property="og:description" content="<?php echo $_META_DESCRIPTION ?>">
    <meta property="og:image" content="https:/byefugas.cl/img/og-image.jpg">
    <meta property="og:image:width" content="300">
    <meta property="og:image:height" content="200">
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="es_ES" />
    <link rel="stylesheet" href="css\style.min.css">
    <link rel="shortcut icon" href="favicon.gif" type="image/gif">
    <script src="https://kit.fontawesome.com/c18d6efc94.js"></script>
    <script src="js\jquery-3.4.1.min.js"></script>
    <script src="js\bootstrap.bundle.min.js"></script>
</head>
<body>
    <section id="hero">
        <div class="container pt-5">
            <div class="row">
                <div class="col-sm-12 col-md pb-5 text-center text-md-left">
                    <div class="logo">
                        <img src="img\byefugas-logo.png" alt="Logo Bye Fugas">
                    </div>
                    <div class="mt-5 text-md-left text-center">
                        <h1 class="font-weight-bold mb-4">Detección y reparación de fugas <br>de redes de <span class="text-primary">Agua</span> fría y caliente <br>en Santiago y Valparaíso</h1>
                        <h4>Servicio a nivel domiciliario</h4>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <a href="tel:+56992447341" class="phone">
                    <div class="text-center card">
                        <div class="card-body">
                            <p class="mb-1">Llámanos ahora al</p>
                            <p class="font-weight-bold number">+569 9244 7341</p>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="container pt-5">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6 text-center text-md-left mb-3">
                    <h3 class="font-weight-bold text-primary">Antonio Pacheco Álvarez</h3>
                    <h5 class="font-weight-bold ">Técnico con más de 25 años de experiencia</h5>
                    <p>Detectamos para reparar su fuga y así evitar romper sus muros o pisos buscando la filtración.</p>
                </div>
                <div class="col-sm-12 col-md-6 text-center mb-3">
                    <img class="img-fluid rounded" src="img/deteccion.jpg" alt="Detección de fugas">
                </div>
            </div>
            <div class="row align-items-center mt-5">
                <div class="col-sm-12 col-md-6 text-center mb-3">
                    <iframe width="315" height="315" src="https://www.youtube.com/embed/8K46MbmiaHw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-sm-12 col-md-6 text-center text-md-left mb-3">
                   <h3 class="font-weight-bold">No pases malos ratos y detecta</h3>
                   <h6 class="mt-3 font-weight-bold">Costo de la detección</h6>
                   <h4 class="font-weight-bold text-primary">$90.000 + IVA</h4>
                   <ul>
                       <li>Avanzada tecnología de detección.</li>
                       <li>Trabajos con 3 meses de garantía.</li>
                       <li>Si no encontramos la fuga, cobramos solo la visita técnica.</li>
                   </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="contacto">
        <div class="container pt-5">
            <div class="row">
                <div class="col text-center">
                    <h2 class="font-weight-bold mb-4">¿Ya decidiste solucionar tu problema de fugas?</h2>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12 col-md-6 mb-5">
                    <p class="text-center text-md-left">Puedes contactarnos de <strong>lunes a domingo</strong>.<br>
                    Trabajos en toda la <strong>Quinta Región</strong> y <strong>Región Metropolitana</strong>.</p>
                    <a href="tel:+56992447341" class="phone">
                        <div class="text-center card">
                            <div class="card-body">
                                <p class="mb-1">Llámanos ahora al</p>
                                <p class="font-weight-bold number">+569 9244 7341</p>
                            </div>
                        </div>
                    </a>
                    <a class="facebook" href="https://www.facebook.com/Byefugas/" target="_blank">
                        <i class="fab fa-facebook-square"></i><span>Conectemos!</span>
                    </a>
                </div>
                <div class="col-12 col-md-6">
                    <form action="functions.php?action=send" method="POST" id="contacto">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Nombre y Apellido" name="name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                </div>
                                <input type="email" class="form-control" placeholder="tuemail@correo.com" name="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                                <input type="phone" class="form-control" placeholder="+569 1234 5678" name="phone" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" placeholder="Mensaje" name="message"></textarea>
                        </div>
                        <button type="submit" class="btn-lg btn-primary btn-block">Enviar</button>
                        <?php if(isset($_GET['status']) && isset($_SESSION['status'])):?>
                        <div class="mt-3 alert <?php echo $_GET['status'] == 'success' ? 'alert-success' : 'alert-danger' ?>" role="alert">
                            <?php echo $_SESSION['status'] ?>
                        </div>
                        <?php endif ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer class="mt-5 pb-1 bg-primary text-white">
        <div class="container text-center">
            <p class="pt-3">Bye Fugas 2019 - Diseñado por dobleb.cl</p>
        </div>
    </footer>
</body>
</html>