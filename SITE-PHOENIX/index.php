<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/style.css">

  <base href="http://localhost/TechAcademy-2/SITE%20PHOENIX/">

  <link rel="icon" href="imagens/_5926fa45-9bda-4fb7-932b-49650c112174 (1).png">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

  <title>PHOENIX</title>
</head>

<body>
  <?php
  //buscar os dados da API de games
  $url = "http://localhost/TechAcademy-2/SITE%20PHOENIX/api/games.php";
  //importar os dados da API
  $dadosApi = file_get_contents($url);
  //transformar de JSON para array ou objeto
  $dadosJogos = json_decode($dadosApi);

  ?>
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid" href="index.php">
      <a href="index.php">
        <img src="imagens/icone.png" width="70px" height="75px" alt="Phoenix">
      </a>

      <a class="navbar-brand" href="index.php">PHOENIX</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php?pagina=home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?pagina=quemsomos">Quem Somos</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Games
            </a>
            <ul class="dropdown-menu">
              <?php
              foreach ($dadosJogos as $dados) {
                echo "<li><a class='dropdown-item' href='games/{$dados->id}'>{$dados->nome}</a>
              </li>";
              }
              ?>
            </ul>
          </li>
        </ul>
        <li class="btn-contato">
          <a href="index.php?pagina=contato">
            <button class="btn-hover color-2">ENTRE EM CONTATO</button>
          </a>
      </div>
      </li>
    </div>
  </nav>
  <main>
    <?php

    $pagina = $_GET["pagina"] ?? "home";

    $pagina = "paginas/{$pagina}.php";

    if (file_exists($pagina)) {
      include $pagina;
    } else {
      include "paginas/erro.php";
    }

    ?>
  </main>

  

  <footer>
    <h3>Site desenvolvido por - Raul Miguel<h3>
  </footer>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/fslightbox.js"></script>

</body>

</html>