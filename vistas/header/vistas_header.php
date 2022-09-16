<!DOCTYPE html>
<html>

<head>
  <title></title>
  <!-- fonr awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="../../style/header/style_header.css">
</head>

<body>
  <header>

    <a href="#" class="brand">
      <h2>Museo</h2>
    </a>
    <nav class="menu">
      <div class="btn">
        <i class="fas fa-times close-btn"></i>
      </div>
      <ul>
        <li><a href="../index/index.php">Home</a></li>
        <li><a href="../visitas/vistas_visitas.php">Visita</a></li>
        <li><a href="">Colección</a></li>
        <li><a href="../exhibiciones/vistas_exhibiciones.php">Exibiciones</a></li>
        <li><a href="#">Contactos</a></li>
        <li><a href="#"><input type="button" value="Inscripción" class="btn__header-register"></a></li>
      </ul>
    </nav>

    <div class="btn">
      <i class="fas fa-bars menu-btn"></i>
    </div>
  </header>



  <script type="text/javascript">
    //javascript for navigation bar effect on scroll
    window.addEventListener("scroll", function() {
      var header = document.querySelector("header");
      header.classList.toggle('down', window.scrollY > 0);


    });

    //javascript for responsive navigation sidebar menu
    var menu = document.querySelector('.menu');
    var menuBtn = document.querySelector('.menu-btn');
    var closeBtn = document.querySelector('.close-btn');

    menuBtn.addEventListener("click", () => {
      menu.classList.add('active');
    });

    closeBtn.addEventListener("click", () => {
      menu.classList.remove('active');
    });
  </script>
</body>

</html>