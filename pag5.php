<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Emilys+Candy&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap" rel="stylesheet">
</head>
<body id="p4">
   
    <div>
        
            

            
          
              <nav class="navbar navbar-expand-lg" style="background-color: black;">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.html"><img src="imagens/logob.ico.jpg" alt="" style="width: 30px; height: 30px; ">Leonhard Tatto</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="pag2.html">Serviços</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="pag3.html">Galeria</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="pag4.html">Sobre o Leo</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="pag5.html">Agendar</a>
                      </li>
                        
                        </ul>
                      </li>
                    
                  </div>
                </div>
             <!-- </nav><div id="div-contato"><a href="https://wa.me/5544999355143"> <img src="https://th.bing.com/th/id/R.08bdb7afd047b71c085f69de6e311c53?rik=eOS5pxxO%2bzkrgQ&pid=ImgRaw&r=0" alt="" class="zap">                                   ENTRE EM CONTATO</a></div >-->
          <main>
    </div>
    <form id="formulario">
      <h2 style="color: white;">Agende sua tatuagem</h2>
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" />
      <span id="erro-nome" style="color:red"></span><br />
    
      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" />
      <span id="erro-email" style="color:red"></span><br />
    
      <label for="telefone">Telefone:</label>
      <input type="text" id="telefone" name="telefone" />
      <span id="erro-telefone" style="color:red"></span><br />
    
      <label for="idade">Idade:</label>
      <input type="number" id="idade" name="idade" />
      <span id="erro-idade" style="color:red"></span><br />
    
      <div class="sugestao-box">
        <button type="button" id="botao-ideia" onclick="gerarTatuagem()">Me dê uma ideia!</button>
        <p id="sugestao"></p>
      </div>
    
      <label for="estilo">Estilo:</label>
      <select id="estilo" name="estilo" style="color: black;">
        <option value="" style="color: black;">Selecione</option>
        <option value="realismo" style="color: black;">Realismo</option>
        <option value="tradicional" style="color: black;">Tradicional</option>
        <option value="aquarela" style="color: black;">Aquarela</option>
        <option value="blackwork" style="color: black;">Blackwork</option>
        <option value="pontilhismo" style="color: black;">Pontilhismo</option>
      </select>
      <span id="erro-estilo" style="color:red"></span><br />
    
      <label for="descricao">Descrição da ideia:</label><br />
      <textarea id="descricao" name="descricao"></textarea>
      <span id="erro-descricao" style="color:red"></span><br />
    
      <button type="submit" style="background-color: blueviolet;">Enviar</button>
    </form>
    
    <script>
      const estilos = ["realismo", "tradicional", "aquarela", "blackwork", "pontilhismo"];
      const temas = ["caveira", "rosa", "dragão", "bússola", "olho"];
      const locais = ["braço", "costas", "perna", "antebraço", "peito"];
    
      function gerarTatuagem() {
        const estilo = estilos[Math.floor(Math.random() * estilos.length)];
        const tema = temas[Math.floor(Math.random() * temas.length)];
        const local = locais[Math.floor(Math.random() * locais.length)];
    
        const resultado = `Que tal uma tatuagem de <strong>${tema}</strong> no <strong>${local}</strong>, estilo <strong>${estilo}</strong>?`;
        document.getElementById("sugestao").innerHTML = resultado;
      }
    
      document.getElementById("formulario").addEventListener("submit", function(event) {
        event.preventDefault();
    
        let valido = true;
    
        const nome = document.getElementById("nome").value.trim();
        if (nome.length < 3) {
          valido = false;
          document.getElementById("erro-nome").innerText = "Nome deve ter pelo menos 3 letras.";
        } else {
          document.getElementById("erro-nome").innerText = "";
        }
    
        const email = document.getElementById("email").value.trim();
        const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!regexEmail.test(email)) {
          valido = false;
          document.getElementById("erro-email").innerText = "E-mail inválido.";
        } else {
          document.getElementById("erro-email").innerText = "";
        }
    
        const telefone = document.getElementById("telefone").value.trim();
        const regexTelefone = /^\(?\d{2}\)?\s?\d{4,5}-?\d{4}$/;
        if (!regexTelefone.test(telefone)) {
          valido = false;
          document.getElementById("erro-telefone").innerText = "Telefone inválido. Ex: (11) 91234-5678";
        } else {
          document.getElementById("erro-telefone").innerText = "";
        }
    
        const idade = parseInt(document.getElementById("idade").value);
        if (isNaN(idade) || idade < 18 || idade > 100) {
          valido = false;
          document.getElementById("erro-idade").innerText = "Informe uma idade entre 18 e 100.";
        } else {
          document.getElementById("erro-idade").innerText = "";
        }
    
        const estilo = document.getElementById("estilo").value;
        if (estilo === "") {
          valido = false;
          document.getElementById("erro-estilo").innerText = "Selecione um estilo.";
        } else {
          document.getElementById("erro-estilo").innerText = "";
        }
    
        const descricao = document.getElementById("descricao").value.trim();
        if (descricao.length < 10) {
          valido = false;
          document.getElementById("erro-descricao").innerText = "Descreva melhor sua ideia (mínimo 10 caracteres).";
        } else {
          document.getElementById("erro-descricao").innerText = "";
        }
    
        if (valido) {
          alert("Formulário enviado com sucesso! 😊");
        }
      });
    </script>
    
  
       
        <div id="fixo"><a href="https://wa.me/5544999355143"> <img src="https://logodownload.org/wp-content/uploads/2015/04/Whatsapp-logo-vetor.png" alt="" id="fix">     </a></div >
            
</main>
<footer><a href="https://www.instagram.com/leonhard.tattoo/" target="_blank">
  <img src="https://logos-world.net/wp-content/uploads/2020/06/Instagram-Logo.png" alt="" style="width: 50px; height: 30px; padding-right:0px ;">
</a>
  <a href="https://wa.me/5544997628795" id="footer" style="padding-left:0px ; padding-right: 10px;"> <img src="https://th.bing.com/th/id/R.08bdb7afd047b71c085f69de6e311c53?rik=eOS5pxxO%2bzkrgQ&pid=ImgRaw&r=0" alt="" id="img-footer" style="width: 40px; height: 40px;"> 44999355143</a> //  <a href="https://maps.app.goo.gl/oemxjXUrNpr6vUvx6" target="_blank"><a href="https://maps.app.goo.gl/oemxjXUrNpr6vUvx6"> <img src="https://img.freepik.com/free-icon/placeholder_318-318216.jpg" alt="" style="width: 25px; height: 25px;"></a>  Rua Curiango 750, Cohapar</a></footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>