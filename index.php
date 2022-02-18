<?php
  echo 'ciao';


?>




<!DOCTYPE html>
<html>
<head lang="it">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home1</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<link rel="stylesheet" href="css.css">

</head>
<body>
    <nav class="navbar fixed-top navbar-expand-sm navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Freezy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Chi Siamo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Punti Vendita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contatti</a>
            </li>  
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Prodotti</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">prova1</a></li>
                <li><a class="dropdown-item" href="#">prova2</a></li>
                <li><a class="dropdown-item" href="#">prova3</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<h1 id="titolo">Freezy IceCream</h1>

<div class="carousel">
  <div class="slidess fad">
      <img src="carousel-image3.jpg" style="width:100%">
  </div>
  <div class="slidess fad">
      <img src="carousel-image2.jpg" style="width:100%">
  </div>
  <div class="slidess fad">
      <img src="carousel-image1.jpg" style="width:100%">
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
  
  <div class="punti">
      <span class="punto" onclick="dots(1)">&#183;</span>
      <span class="punto" onclick="dots(2)">&#183;</span>
      <span class="punto" onclick="dots(3)">&#183;</span>
  </div>

</div>


<div class="chi">
    <h1>Chi Siamo</h1>
    <div class="container-fluid">
        <p>La nostra gelateria produce quotidianamente il suo gelato e lo espone in vaschette aperte per mostrarne la qualità e la freschezza.
            Utilizziamo latte fresco italiano di alta qualità. Abbiamo anche gusti indicati per chi ha intolleranze al lattosio e al glutine. Utilizziamo esclusivamente cucchiaini e coppette biocompostabili.
        </p>
    </div>
</div>

<div class="prodotti">
    <h1>Prodotti</h1>
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
                <img class="img-fluid" src="2.jpeg" />
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <img class="img-fluid" src="3.jpg" />
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <img class="img-fluid" src="2.jpeg" />
            </div>
        </div>

    
    </div>

</div>


<div class="container-fluid">
    <div class="map">
        <h1>Punti vendita</h1>
        <iframe id="mappa" src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d358167.3364732613!2d10.978767751552285!3d45.46613116535855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d45.4131712!2d11.075584!4m5!1s0x477f4ee7cb4e0319%3A0x1462f10ecc8b7164!2sgelateria!3m2!1d45.5446689!2d11.2808992!5e0!3m2!1sit!2sit!4v1643730219190!5m2!1sit!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>



<div class="contatti">
    <h1>Contatti</h1>
    <div class="bott">
        <button id="b" type="button">Telefono: 337 446 443</button>
        <button id="b" type="button">E-mail: Gelateria@gmail.com</button>
    </div>
    
</div>

<footer>
    <p> &copy; Gelateria Freezy</p>
</footer>
    

<script src="myScript.js"></script>

</body>
</html>
