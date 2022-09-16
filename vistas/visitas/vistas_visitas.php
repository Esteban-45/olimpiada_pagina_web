<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/visitas/styleVisitas.css">
    <title>Document</title>
</head>

<body>

    <?php

    include("../header/vistas_header.php");

    ?>

    <div class="container-portada">

        <div class="container-details">
            <div class="details">
                <h1>Visitas</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, provident aut adipisci inventore ut aspernatur rerum
                    ratione beatae quaerat, sequi tenetur nisi suscipit quibusdam saepe assumenda corrupti porro dolores dolorum?</p>
                <a href="">Ver más detalles</a>
            </div>
        </div>

    </div>

    <main>
        <div class="container-descripcion">
            <div class="tit-descripcion">
                Visita al Museo Nacional 
            </div>
            <div class="text-descripcion">
                El Museo Nacional  invita a recorrer, con entrada libre y gratuita, las más de 30 salas de la
                permanente y dos muestras temporarias: "Carmelo Arden Quin, en la trama del arte constructivo", con 163 obras
                del maestro uruguayo y de los creadores de distintos países del mundo con los que tejió vínculos artísticos a
                lo largo de siete décadas, y "Rob Verf. Vanitas", una muestra con curaduría de Marta Penhos que reúne una serie
                de obras del artista nacido en los Países Bajos, pero de larga trayectoria en la Argentina, vinculadas a la idea
                de la “vanitas” contemporánea, en diálogo con piezas históricas de la colección institucional.
            </div>
            <div class="tit-descripcion">
                Plano de las Instalaciones
            </div>
            <div class="img-museo">
                <img src="../../media/plano_instalación.jpeg" alt="">
            </div>
            <div class="container-horarios">
                <div class="text-hor">
                    <h2><b>Horarios</b></h2>
                </div>
                <div class="text-info">
                    <ul>
                        <li><b>Martes a viernes:</b>de 11.00 a 20.00.</li>
                        <li><b>Sábados y domingos de 10.00 a 20.00</b> </li>
                        <li><b>Lunes:</b> cerrado.</li>
                    </ul>
                    <p>
                    El Museo permanece cerrado al público los días 1.º y 18 de mayo, 24, 25 y 31 de diciembre de 2022, y 1.º de enero de 2023.
                    </p>

                </div>
            </div>
        </div>
    </main>

    <?php

    include("../../vistas/footer/vistas_footer.php");

    ?>
</body>


</html>