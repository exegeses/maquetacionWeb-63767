<?php
    //capturamos detos enviados por el form
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $consulta = $_POST['consulta'];

    //configuramos datos de email a enviar
    $asunto = 'Email enviado desde Summer Exploring';
    $destinatario = 'acá va tu email';
    $cuerpo = '<div style="width: 500px; margin: auto;
                    background-color: #EC7D54;
                    color: #fff;
                    font-family: sans-serif;
                    font-size: 20px;
                    padding: 40px;
                    border-radius: 12px;
                    ">';
    $cuerpo .= '<img src="https://html-63767-2.000webhostapp.com/imgs/sunsea.png" style="vertical-align: middle; margin-right: 12px;" > Summer Exploring <br>';
    $cuerpo .= 'Nombre: '.$nombre.'<br>';
    $cuerpo .= 'Email: '.$email.'<br>';
    $cuerpo .= 'Consulta: '.$consulta;
    $cuerpo .= '</div>';

/* encabezados adicionales */
$headers = 'MIME-Version: 1.0'."/r/n";
$headers .= 'Content-type: text/html; charset=utf-8'."/r/n";
$headers .='from: consultas@summerexploring.com';
/* enviamos el email */
    mail( $destinatario, $asunto, $cuerpo, $headers );
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Summer Exploring</title>
    <script src="https://kit.fontawesome.com/623d2400f0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <!-- logo + empresa -->
        <a href="index.html">
            <img src="imgs/sunsea.png" alt="Summer Exploring logo">
            Summer Exploring
        </a>

        <!-- navegación -->
        <nav>
            <a href="#promos">Promociones</a>
            <a href="#destinos">Destinos</a>
            <a href="#servicios">Servicios</a>
            <a href="#contacto">Contacto</a>
        </nav>
    </header>
    <main>
        <section id="hero-banner">
            <h1>
                Summer Exploring <br>
                El lugar para tus vacaciones
            </h1>
        </section>

        <section id="contacto">
            <span id="mensaje">Gracias <?= $nombre ?> por contactarnos.</span>
        </section>
    </main>
    <footer>
        <!-- logo + empresa -->
        <a href="index.html">
            <img src="imgs/sunsea-wht.png" alt="Logo Summer Exploring">
            Summer Exploring
        </a>
        <!-- redes sociales -->
        <div>
            <a href="#">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="#">
                <i class="fa-brands fa-square-facebook"></i>
            </a>
            <a href="#">
                <i class="fa-brands fa-twitter"></i>
            </a>
        </div>
    </footer>
</body>
</html>