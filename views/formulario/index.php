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
        <div class="container text-center text-dark"><h1>Formulario Noticias</h1></div>

        <section class="main">
            <form method="POST" action="<?php echo constant('URL')?>formulario/registrarNuevaNoticia">
                <label for="title">Título</label><br>
                <input class="formulario" type="text" id="title" name="title"><br><br>

                <label for="category">Categoría</label><br>
                <input class="formulario" type="text" id="category" name="category"><br><br>

                <label for="article">Artículo</label><br>
                <textarea class="formulario" id="article" name="article" rows="10" cols="70" ></textarea><br><br>

                <p>Adjuntar Imagen<input type="file" name="archivoimagen" accept="image/*" /></p><br>

                <p>Adjuntar Audio<input type="file" name="archivoaudio" accept="audio/*" /></p><br>

                <p>Adjuntar Video<input type="file" name="archivovideo" accept="video/*" /></p><br>
                
                <p class="tipo-noticia">
                    Seleccione Sección:
                    <select name="menu">
                        <option>Deportes</option>
                        <option>Negocios</option>
                        <option>General</option>
                    </select>
                </p>

                </p><input type="submit" name="btn_submit" id="btn_submit" value="Enviar noticia"></p><br><br>

            </form>
        </section>
    </div>

<?php require 'views/footer.php'; ?> 

</body>
</html>