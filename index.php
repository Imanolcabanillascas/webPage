<?php  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\assets\style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> <title>Page web</title>
</head>
<body id=""fondo_body>
<div class="fondo_principal">
    <nav class="navbar navbar-expand-lg navbar-dark bg-light">
      <div class="container">
        <a class="navbar-brand text-dark" href="#">
          Logo
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto">
            <li class="nav-item">
              <a class="nav-link text-dark fw-bold" aria-current="page" href="#principal">INICIO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark fw-bold" href="#section_productos">PRODUCTOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark fw-bold" href="#section_nosotros">NOSOTROS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark fw-bold" href="#section_contacto">CONTACTO</a>
            </li>

          </ul>
        
        </div>
      </div>
    </nav>


    <div class="container-fluid mt-2" id="principal">
      <div class="row m-5 align-items-center justify-content-center">
        <div class="col-sm-auto col-md-auto col-lg-auto col-xl-5 col-xxl-5 text-light text-center">
          <p class=" fs-1 text-uppercase mt-5">venta de todo tipo de calzado.
          </p>
          <button type="button" class="btn  btn-outline-light btn-lg mt-4"
            onClick="window.open('https://www.whatsapp.com')">&nbsp&nbsp&nbsp <i class="bi bi-chat-dots-fill"></i>
            Consultar &nbsp&nbsp</button>
        </div>

      </div>

    </div>
  </div>


  <!-- seccion de productos -->

  <div class="container mt-5" id="section_productos">

    <div class="row align-items-center justify-content-center mt-5 ">
      <div class="col">

      </div>
      <div class="col-auto text-dark" id="title__section">
        Productos
      </div>
      <div class="col">

      </div>
    </div>

  </div>


  <div class="container-fluid">
    <div class="row align-items-center justify-content-center">
      <div class="col-sm-auto col-md-auto col-lg-auto col-xl-auto col-xxl-auto" id="columna">
        <!-- tarjeta 1 -->
        <div class="card m-auto" id="tarjeta">
          <div class="card-header" id="tarjeta_cabecera">
            <a href="#"><img class="card-img-top" alt="Card image cap" src="assets\img\shoe02.png"></a>
          </div>
          <div class="card-body" id="tarjeta_cuerpo">
            <h5 class="card-title text-center">Zapato 01</h5>
            <h5 class="card-title text-center">S/ 50</h5>
          </div>
       

       
        </div>
      </div>
     




    </div>
  </div>
  <!-- fin de seccion productos -->



  <!-- Seccion de nosotros -->

  <div class="container mt-5" id="section_nosotros">

    <div class="row align-items-center justify-content-center mt-5">
      <div class="col">

      </div>
      <div class="col-auto text-dark mt-5" id="title__section">
        Nosotros
      </div>
      <div class="col">

      </div>
    </div>

  </div>

  <div class="container" id="tarjeta_nosotros">

    <div class="container-fluid" id="section_nosotros" class="h-auto">
      <div class="row  m-2 align-items-center justify-content-center">


        <div class="col-sm-auto col-md-auto col-lg-auto col-xl-4 col-xxl-4 text-dark mt-3 center-block">
          <p class=" fs-2 word-wrap text-uppercase ">
            Somos una tienda que cuenta con los mejores diseños de calzado.
          </p>

        </div>
        <div class="col-sm-auto col-md-auto col-lg-auto col-xl-6 col-xxl-8 mt-3 text-light " style="text-align:center;">
          <!-- <p class=" fs-2 word-wrap text-uppercase">
                      NEXTWAVE DIGITAL </p> -->
          <img id="img_Nos" src="img\image_end.png" alt="" class="mw-100 word-wrap" width="90%" />
        </div>
      </div>

    </div>
  </div>
  <!-- fin de seccion nosotros -->
  <!-- Inicio de Footer  -->

  <footer class="text-center text-lg-start  text-light" id="section_contacto">


    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              Venta Calzado
            </h6>
            <p>
              Somos una tienda que cuenta con los mejores diseños de calzado.
            </p>
            
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Enlaces
            </h6>
            <p>
              <a href="#principal" class="text-reset">Inicio</a>
            </p>
            <p>
              <a href="#section_productos" class="text-reset">Productos</a>
            </p>
            <p>
              <a href="#section_nosotros" class="text-reset">Nosotros</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 " id="footer_social">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Redes Sociales
            </h6>
            <br>
            <a href="#!" class="text-reset"><i class="bi bi-facebook"></i></a>
            <br>
            <a href="#!" class="text-reset"><i class="bi bi-whatsapp"></i> </a>
            <br>
            <a href="#!" class="text-reset"><i class="bi bi-instagram"></i></a>
            <br>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Contacto
            </h6>
            <p><i class="fas fa-home me-3"></i> Lambayeque, PE</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              TiendaCalzado@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 123456789</p>
            <p><i class="fas fa-print me-3"></i> + 123456789</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);" id="copy">
      © 2022 Copyright:
      <a class="text-reset fw-bold" href="#principal">Tienda Calzado</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Fin de Footer -->


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
    crossorigin="anonymous"></script>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>    
</body>

</html>
