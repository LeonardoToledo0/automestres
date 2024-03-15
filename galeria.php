<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Oficina Auto Mestre</title>
  <!--Comentarios -->
  <link rel="stylesheet" href="css/reset.css" />

  <!--Icons Google-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" type="text/css" href="css/slick.css" />
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
  <link rel="stylesheet" href="css/anima.css" />
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/mobile.css" />
</head>

<body>
  <!-- cabecalho -->
  <?php require_once('conteudo/topo.php'); ?>
  <!--Corpo do Site -->
  <?php require_once('conteudo/banner.php'); ?>
  <main>
    <!--SOBRE-->
    <?php require_once('conteudo/sobre.php'); ?>
    <!--SERVICO-->
    <?php require_once('conteudo/servico.php'); ?>
    <!--Inicio Tecnologia -->
    <?php require_once('conteudo/tecnologia.php'); ?>
    <!-- Inicio Galeria  -->
    <?php require_once('conteudo/galeria.php'); ?>
    <!-- Inicio Depoimentos -->
    <?php require_once('conteudo/depoimentos.php'); ?>
    <!-- inicio Projeto oficina -->
    <?php require_once('conteudo/projeto.php'); ?>
    <!-- Inicio carrosel montadora -->
    <?php require_once('conteudo/montadora.php'); ?>
  </main>
  <?php require_once('conteudo/footer.php'); ?>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="Js/slick.min.js"></script>
  <script src="Js/wow.min.js"></script>
  <script src="Js/animacao.js"></script>
</body>

</html>