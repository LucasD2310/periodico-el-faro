<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Periodico El Faro</title>

    <link rel="stylesheet" href="views/css/estilos.css">
    <link rel="stylesheet" href="views/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <?php require 'views/header.php'; ?>

    <div id="main">
        <div class="subtitle2"><h1>Formulario Contacto</h1></div>

        <div class="m-0 row justify-content-center"><?php echo $this->mensaje; ?></div>
        
        <section class="container">
            <form method="POST" action="<?php echo constant('URL')?>contacto/registrarNuevoContacto">
                <label for="name">Nombre</label><br>
                <input class="formulario" type="text" id="name" name="user_name" required><br><br>

                <label for="mail">Email</label><br>
                <input class="formulario" type="email" id="mail" name="user_email" required><br><br>

                <label for="subject">Asunto</label><br>
                <input class="formulario" type="text" id="subject" name="user_subject"><br><br>

                <label for="msg">Mensaje</label><br>
                <textarea class="formulario" id="msg" name="user_msg" rows="10" required></textarea><br><br>

                <input type="submit" value="Registrar Contacto"><br><br>


            </form>
        </section>
    </div>

    <?php require 'views/footer.php'; ?>

</body>
</html>