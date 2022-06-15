<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Raldiney Ribeiro">
    <meta name="description" content="Prova final: BLOG Desenvolvimento WEB.">
    
    <title>BLOG: Diário Online</title>

    <!-- CSS caminho -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  </head>
<body>

<?php include('nav.php');?>



<nav class="navbar navbar-expand-lg navbar-light bg-light">

<a class="navbar-brand" href="#">RaldineyR</a>

<div class="container nav-bar">
  <ul>
    <li><a href="#">Inicio</a></li>
    <li><a href="#">Produtos</a></li>
    <li><a href="#">Serviços</a></li>
  </ul>
</div>

<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <span>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquise" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">pesquisar</button>
    </form>
    </span>
  </div>
</nav>


<div id="carouselExampleIndicators" class="carousel slide container-fluid" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
    <li data-target="#mainSlider" data-slide-to="1"></li>
    <li data-target="#mainSlider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./images/image1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/image2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./images/image3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only"></span>
  </a>
</div>


<div class ="container">
<div class="card-deck row row-cols-1 row-cols-md-3 g-4">


  <div class="card">
    <img class="card-img-top" src="./images/album-fotografia.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Albúns</h5>
      <p class="card-text">Design e impressão de álbuns fotográficos<br> para casamento, newborn, aniversários,<br> viagens e formaturas.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="./images/camera-fotografia.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Portfólio</h5>
      <p class="card-text">Veja o nosso trabalho em diversos ensaios<br> diferentes.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>

  </div>
  <div class="card">
    <img class="card-img-top" src="./images/estudio-fotografia.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Ensaios em estúdio</h5>
      <p class="card-text">Os ensaios podem ser realizados em estúdio<br> e aproveitar o máximo de criatividade possivel.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
</div>





<footer class="container bg-light text-center text-lg-start mt-5 p-5">
  <!-- Copyright -->
  <div class="text-center p-3 " style="bg-light">
    © 2022 Copyright todos os direitos reservados.
    <a class="text-dark" href="#"></a>
  </div>
</footer>



<?php include('footer.php');?>
</body>
</html>