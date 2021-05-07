<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Periodico El Faro</title>
    
</head>
<body>

    <?php require 'views/header.php'; ?>

    <div id="main">
        <div class="container text-center text-dark"><h1>Registro de Usuario</h1></div>

        <div class="m-0 row justify-content-center"><?php echo $this->mensaje; ?></div>

        <section class="main">
            <form method="POST" action="<?php echo constant('URL')?>registro/registrarNuevoUsuario">
                <label for="title">Nombre</label><br>
                <input class="formulario" type="text" id="nombre" name="nombre" required><br><br>

                <label for="category">Correo</label><br>
                <input class="formulario" type="email" id="email" name="email" required><br><br>                    

                </p><input class="btn btn-secondary" type="submit" name="btn_submit" id="btn_submit" value="Registrar"></p><br><br>

            </form>
        </section>
    </div>

<?php require 'views/footer.php'; ?> 

</body>
</html>