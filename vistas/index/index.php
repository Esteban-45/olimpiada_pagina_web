<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/index/styleIndex.css">
    <title>Página Inicial</title>
</head>

<body>
    <?php

    include("../header/vistas_header.php")

    ?>

    <div class="container-portada">

        <div class="container-details">
            <div class="details">
                <h1>Bienvenidos</h1>
                <p>En este museo podrá encontrar diferentes tipo de salas de las cuales disfrutará. Cuentacon 14 salas de exposición
                    con diversas temáticas, sin la posibilidad de aburrirse  de lo interesante que és. !No se van a arrepentir a conocerlas</p>
                <a href="">Ver más detalles</a>
            </div>
        </div>

    </div>

    <main>

        <div class="cover">
            <div class="text__informacion-cover">
                <h1>Visitas al Museo</h1>
                <p>Visita las más grandes colecciones de nuestro país en el Museo con entrada libre y gratuita, las más de 14 salas de la colección permanente.
                </p>
                <div class="bottons__cover">
                    <a href="../visitas/vistas_visitas.php"><input type="button" value="Leer más" class="btn__readMore--cover"></a>
                </div>
            </div>

            <div class="media__cover">
                <img src="../../media/museo.jpg" alt="" width="500px">
            </div>

        </div>

    
        <div class="container__banner">
            <div class="banner">
                <div class="banner__icon--heart">
                    <img src="../../media/parallex1.jpg" alt="" id="icon_heart">
                </div>
                <div class="banner__icon--fire">
                    <img src="../../media/parallex2.jpeg" alt="" id="icon_fire">
                </div>
                <div class="banner__text">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur exercitationem nulla beatae accusamus modi optio hic, mollitia perferendis repellendus dolorem quo dolorum laudantium odio quos. Voluptate laborum praesentium voluptas doloribus.</h2>
                    <a href="#">Leer Más</a>
                </div>
            </div>
        </div>

    </main>
    <script src="../../js/script.js"></script>


    <?php

    include("../footer/vistas_footer.php")

    ?>

    
</body>

</html>