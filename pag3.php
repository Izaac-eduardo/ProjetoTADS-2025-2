<?php
// Arquivo: galeria.php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">
</head>
<body>
   
  <nav class="navbar navbar-expand-lg" style="background-color: black;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="imagens/logob.ico.jpg" alt="" style="width: 30px; height: 30px;">Leonhard Tatto</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="pag2.php">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="pag3.php">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="pag4.php">Sobre o Leo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="pag5.php">Agendar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div>
    <nav>
      <main>
        <div>
            <div id="carouselGaleria" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="carro" src="imagens/stych.jpg" class="d-block w-100" alt="Trabalho 1">
                  </div>
                  <div class="carousel-item">
                    <img class="carro" src="imagens/caveira.jpg" class="d-block w-100" alt="Trabalho 2">
                  </div>
                  <div class="carousel-item">
                    <img class="carro" src="imagens/dragao.jpg" class="d-block w-100" alt="Trabalho 3">
                  </div>
                  <div class="carousel-item">
                    <img class="carro" src="imagens/carpas.jpg" class="d-block w-100" alt="Trabalho 4">
                  </div>
                  <div class="carousel-item">
                    <img class="carro" src="imagens/cava.jpg" class="d-block w-100" alt="Trabalho 5">
                  </div>
                  <div class="carousel-item">
                    <img class="carro" src="imagens/img1.jpg" class="d-block w-100" alt="Trabalho 6">
                  </div>
                  <div class="carousel-item">
                    <img class="carro" src="imagens/img2.jpg" class="d-block w-100" alt="Trabalho 7">
                  </div>
                  <div class="carousel-item">
                    <img class="carro" src="imagens/img3.jpg" class="d-block w-100" alt="Trabalho 8">
                  </div>
                  <div class="carousel-item">
                    <img class="carro" src="imagens/img4.jpg" class="d-block w-100" alt="Trabalho 9">
                  </div>
                  <div class="carousel-item">
                    <img class="carro" src="imagens/img5.jpg" class="d-block w-100" alt="Trabalho 10">
                  </div>
                  <div class="carousel-item">
                    <img class="carro" src="imagens/img6.jpg" class="d-block w-100" alt="Trabalho 11">
                  </div>
                  <div class="carousel-item">
                    <img class="carro" src="imagens/img7.jpg" class="d-block w-100" alt="Trabalho 12">
                  </div>
                  <div class="carousel-item">
                    <img class="carro" src="imagens/img8.jpg" class="d-block w-100" alt="Trabalho 13">
                  </div>
                  <div class="carousel-item">
                    <img class="carro" src="imagens/img9.jpg" class="d-block w-100" alt="Trabalho 14">
                  </div>
                  <div class="carousel-item">
                    <img class="carro" src="imagens/img10.jpg" class="d-block w-100" alt="Trabalho 15">
                  </div>
                  <div class="carousel-item">
                    <img class="carro" src="imagens/img11.jpg" class="d-block w-100" alt="Trabalho 16">
                  </div>
                </div>
              
                <!-- Botões de navegação -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselGaleria" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                  <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselGaleria" data-bs-slide="next">
                  <span class="carousel-control-next-icon"></span>
                  <span class="visually-hidden">Próximo</span>
                </button>
            </div>
            
            <div id="fixo">
                <a href="https://wa.me/5544999355143">
                    <img src="https://logodownload.org/wp-content/uploads/2015/04/Whatsapp-logo-vetor.png" alt="" id="fix">
                </a>
            </div>
        </div>
      </main>
    </nav>
  </div>

  <footer>
    <a href="https://www.instagram.com/leonhard.tattoo/" target="_blank">
      <img src="https://logos-world.net/wp-content/uploads/2020/06/Instagram-Logo.png" alt="" style="width: 50px; height: 30px; padding-right:0px;">
    </a>
    <a href="https://wa.me/5544997628795" id="footer" style="padding-left:0px; padding-right: 10px;">
      <img src="https://th.bing.com/th/id/R.08bdb7afd047b71c085f69de6e311c53?rik=eOS5pxxO%2bzkrgQ&pid=ImgRaw&r=0" alt="" id="img-footer" style="width: 40px; height: 40px;"> 44999355143
    </a> // 
    <a href="https://maps.app.goo.gl/oemxjXUrNpr6vUvx6" target="_blank">
      <img src="https://img.freepik.com/free-icon/placeholder_318-318216.jpg" alt="" style="width: 25px; height: 25px;"> Rua Curiango 750, Cohapar
    </a>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>