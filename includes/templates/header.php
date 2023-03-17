<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CACER'os</title>
    <link
      rel="shortcut icon"
      href="https://res.cloudinary.com/dahz5phaf/image/upload/v1678716965/Logo-peque%C3%B1o_ym9ly6_vn3rig.png"
    />
    <link rel="stylesheet" href="./css/styles.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="contenedor-total">
      <header class="navbar-contenedor contenedor">
        <div class="logo">
          <a href="./index.php"
            ><img
              src="https://res.cloudinary.com/dahz5phaf/image/upload/v1678366861/Logo_Black_uasogm.png"
          /></a>
        </div>
        <div class="navbar">
          <nav>
            <!--Menu que se despliega horizontalmente-->
            <a href="./productos.php">Productos</a>
            <a href="./nosotros.php">Sobre Nosotros</a>
            <a href="./blog-recetas.php">Blogs y Recetas</a>
            <a href="./calendario.php">Calendario</a>
            <a href="./contacto.php">Contacto</a>
          </nav>
          <div class="hamburguesa">
            <!--Tres rayas que aparecen cuando la pantalla es menor a 768px-->
            <a href="#" id="menu_on">
              <span></span>
              <span></span>
              <span></span>
            </a>
          </div>
        </div>
      </header>
      <nav class="menu-lateral">
        <!--Menu que se despliega lateralmente al oprimir el menu de hamburguesa-->
        <ul>
          <li><a href="./productos.php">Productos</a></li>
          <li><a href="./nosotros.php">Sobre Nosotros</a></li>
          <li><a href="./blog-recetas.php">Blogs y Recetas</a></li>
          <li><a href="./contacto.php">Contacto</a></li>
        </ul>
      </nav>
      <!-- Esta por fuera para que se pueda hubicar detras del nav pero por encima del inicio -->
      <div class="inicio-paginas principal"></div>