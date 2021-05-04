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
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <h1>Negocios</h1>
                </div>
            </div>
        </div>
        <div class="col-11" id="articulo"></div>
        <div class="container">
            <section class="main row">
                <article class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="titulo-noticia">
                        Los 5 emprendimientos más
                        rentables en Chile
                    </div>
                    <div class="categoria-noticia">Productividad</div>
                    <div class="texto-noticia">
                        <img src="views/img/productividad.jpg" class="image" />
                        En Chile, hay más de 1 millón
                        900 micro emprendedores, y el 83% de ellos trabaja por
                        cuenta propia, según la V Encuesta de Microemprendimiento,
                        realizada por el Ministerio de Economía, Fomento y
                        Turismo, junto al INE. Además, las Pymes y negocios
                        son el motor principal del desarrollo económico en
                        Chile, ocupando el 98% de las empresas del país y
                        generando más del 70% de los empleos.
                        <br>
                        ¿Estás buscando tener tu propia empresa, pero aún no
                        sabes en qué rubro?
                        <br>
                        Conversamos con René Toro, publicita experto
                        en marketing digital, quien analiza los emprendimientos
                        más rentables de Chile, entregando consejos para que
                        puedas dar el siguiente paso:<br><br>
                        1.	Sector gastronómico<br>
                        2.	Rubro turístico<br>
                        3.	Rubro de cuidado personal<br>
                        4.	Sector de entretenimiento y ocio<br>
                        5.	Rubro tecnológico<br>
                    </div>
                </article>
                <article class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="titulo-noticia">
                        Emprendedores que se reinventaron
                        para ganarle al Covid-19
                    </div>
                    <div class="categoria-noticia">Coronavirus</div>
                    <div class="texto-noticia">
                        <img src="views/img/coronavirus.jpg" class="image" />
                        Después de superar el shock
                        inicial por el brusco cambio y ante la amenaza
                        de quiebra, los dueños de pymes reformularon su
                        plan de negocios para aprovechar las oportunidades
                        que está generando el coronavirus.
                        <br>
                        Emprendedores que destacan por su rapidez y
                        creatividad para adaptarse a la nueva realidad,
                        y convertir la crisis en oportunidad. <br>Esto les
                        permitió transformar sus pymes para ofrecer nuevos
                        productos y servicios para evitar la quiebra.
                        Aquí te compartimos tres ejemplos de mujeres y
                        hombres que se reinventaron para no sucumbir al
                        impacto económico del Covid-19.<br><br>
                        1.	De uniformes a mascarillas reutilizables -
                        Victoria Outdoor Gear, empresa dedicada a confeccionar
                        indumentaria para las Fuerzas Armadas, policía y
                        personal de las empresas de seguridad en la
                        Argentina, cambió su rubro por el de mascarillas
                        reutilizables.<br>
                        2.	Party box - Según la fiesta que desee realizar
                        el cliente, Milena Flurh experta event planner y
                        diseñadora, envía la caja con todos los elementos
                        y las instrucciones para que las personas
                        realicen su propia decoración de acuerdo al
                        motivo elegido.<br>
                        3.	Quiero Pannet - Antonio Bertasio tiene una
                        fábrica de pan, creó la app hace varios años,
                        pero no tuvo éxito. Ahora en plena cuarentena,
                        la aplicación renació y se convirtió en el
                        caballo de batalla de su fábrica que le permite
                        vender productos congelados a supermercados,
                        restaurantes, comedores y a particulares.
                    </div>
                </article>
                <article class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="titulo-noticia">
                        “Semana circular”: Anuncian nuevo Festival
                        de Innovación y Emprendedores en Tarapacá
                    </div>
                    <div class="categoria-noticia">Emprendimiento</div>
                    <div class="texto-noticia">
                        <img src="views/img/emprendimiento.jpg" class="image" />
                        Entre este martes 23 hasta el
                        25 de marzo, Tarapacá será protagonista del Capital
                        Circular, Festival de Innovación y Emprendedores que
                        se iniciará luego de tres meses de actividades online
                        y más de 15 mil visitas a la página y redes sociales.
                        <br>
                        La “Semana Circular” consta de tres días de talleres
                        y actividades sobre economía circular, innovación,
                        empresas B, medioambiente, sustentabilidad y mucho
                        más, tendrá la participación de destacadas
                        personalidades del ecosistema emprendedor. Todas
                        las actividades son gratuitas y 100% online.
                        <br>
                        “Cuando el 10 de diciembre del año pasado lanzamos
                        la plataforma Capital Circular, estábamos sumamente
                        entusiasmados en poder establecer un hito a nivel
                        de ferias virtuales sobre emprendimiento e
                        innovación social, pero los resultados han superado
                        las mejores expectativas”, comentó Pablo Rodríguez,
                        director ejecutivo del proyecto.
                    </div>
                </article>
            </section>
        </div>

<!--        <div class="subtitle2"><h1>Agregar Artículo</h1></div>
        <section class="container" id="form_container">
            <form id="article_form" name="article_form">
                <label for="title">Título</label><br>
                <input class="formulario" type="text" id="title" name="title" required><br><br>

                <label for="category">Categoría</label><br>
                <input class="formulario" type="text" id="category" name="category" required><br><br>

                <label for="article">Artículo</label><br>
                <textarea class="formulario" id="article" name="article" rows="10" cols="70" required></textarea><br><br>

                <button onclick="myFunction()">Enviar Noticia</button>
                <script src="views/scripts/news.js" type="text/javascript"></script>

            </form>
        </section>  -->

    </div>

    <?php require 'views/footer.php'; ?>

</body>
</html>