<?php
// pag2.php - Serviços Leonhard Tattoo
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="imagens/logob.ico.jpg" type="image/x-icon">
</head>
<body>

    <div>
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
        </div>
    </div>

    <main>
        <div class="container mt-5">
            <!-- Grupo 1: Flash Tattoo -->
            <div class="row align-items-start mb-5">
                <!-- Imagens -->
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                    <div class="d-flex flex-wrap justify-content-center">
                        <img src="imagens/serv.jpg" alt="serv" class="img-fluid m-2" style="max-width: 45%;">
                        <img src="imagens/serv2.jpg" alt="serv2" class="img-fluid m-2" style="max-width: 45%;">
                    </div>
                </div>
                <!-- Texto -->
                <div class="col-12 col-md-6" style="width: 500px; height: 155px; background-color: rgba(0, 0, 0, 0.692);">
                    <h4 style="color: rgb(255, 255, 255); ">💥 Flash Tattoo</h4>
                    <p>R$75 cada uma. A partir de 3 tattoos, você ganha mais uma de graça!</p>
                    <p>São tatuagens pequenas (até 7 cm), perfeitas pra quem curte se encher de desenhos pequenos.</p>
                </div>
            </div>

            <!-- Grupo 2: Tatuagens por Tamanho -->
            <div class="row align-items-start mb-5">
                <!-- Imagens -->
                <div class="col-12 col-md-6 mb-3 mb-md-0">
                    <div class="d-flex flex-wrap justify-content-center">
                        <img src="imagens/cava.jpg" alt="cava" class="img-fluid m-2" style="max-width: 45%;">
                        <img src="imagens/gla.jpg" alt="stych" class="img-fluid m-2" style="max-width: 45%;">
                    </div>
                </div>
                <!-- Texto -->
                <div class="col-12 col-md-6" style="width: 500px; height: 155px; background-color: rgba(0, 0, 0, 0.692);">
                    <h4 style="color: rgb(255, 255, 255);">📏 Tatuagens por Tamanho</h4>
                    <ul>
                        <li>Até 10 cm: R$200 a R$500</li>
                        <li>Cerca de 20 cm: R$600 a R$1000</li>
                        <li>Acima de 30 cm: pode passar de R$1000</li>
                    </ul>
                    <p><strong>Obs.:</strong> O valor final depende da quantidade de detalhes da arte.</p>
                </div>
            </div>
        </div>
    </main>

    <!-- WhatsApp fixo -->
    <div id="fixo">
        <a href="https://wa.me/5544999355143">
            <img src="https://logodownload.org/wp-content/uploads/2015/04/Whatsapp-logo-vetor.png" alt="" id="fix">
        </a>
    </div>

    <!-- Rodapé -->
    <footer>
        <a href="https://www.instagram.com/leonhard.tattoo/" target="_blank">
            <img src="https://logos-world.net/wp-content/uploads/2020/06/Instagram-Logo.png" alt="" style="width: 50px; height: 30px; padding-right:0px ;">
        </a>
        <a href="https://wa.me/5544997628795" id="footer" style="padding-left:0px ; padding-right: 10px;"> 
            <img src="https://th.bing.com/th/id/R.08bdb7afd047b71c085f69de6e311c53?rik=eOS5pxxO%2bzkrgQ&pid=ImgRaw&r=0" alt="" id="img-footer" style="width: 40px; height: 40px;"> 44999355143
        </a> //  
        <a href="https://maps.app.goo.gl/oemxjXUrNpr6vUvx6" target="_blank">
            <img src="https://img.freepik.com/free-icon/placeholder_318-318216.jpg" alt="" style="width: 25px; height: 25px;">
        </a>  Rua Curiango 750, Cohapar
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>