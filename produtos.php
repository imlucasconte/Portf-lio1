<!DOCTYPE html>
<html>
  <head>
    <?php include_once("_CODIGOS/headconf.php") //CONFIGURACAO DA PAGINA ?>
  </head>
  <body>
    <header>
      <div class="row">
        <div class="col-md-12 col-sm-12 a-right">
          <span class="header-link separator"></span>
          <a class="linkls" rel="follow" style="cursor: pointer">Ajuda</a>
          <a class="linkls separator" rel="follow" style="cursor: pointer">Atendimendo</a>
        </div>
      </div>
      <div class="col-md-12">
        <img class="logotipo" src="images/logotipo.png"style="cursor: pointer">
      </div>
      <nav class="botoes">
        <div class="alinha">
          <div class="container">
            <ul id="nav">
            <!--   <li class="homeList"> <a href="index.html"></a> <img class="home" src="images/home.png" alt=""></span>  </li> --->
              <div class="col-md-12">
                <li class="homeList"><a href="index.php">HOME</a></li>
                <li class="prodList"><a href="produtos.php" >PRODUTOS</a></li>
                <li class="mascList"><a href="quemsomos.php">QUEM SOMOS?</a></li>
                <li class="contList"><a href="contatos.php">CONTATOS</a></li>
              </div>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <div id="imgs" class="row">
      <div id="container"class="lado">
        <div class="col-md-3 " >  <img src="images/fcamiseta2.jpg"> </div>
        <div class="col-md-3 " >  <img src="images/mcamiseta4.jpg"> </div>
        <div class="col-md-3 " >  <img src="images/fcamiseta4.jpg"> </div>
        <div  class="col-md-3 " > <img src="images/fcamiseta1.jpg"> </div>
      </div>
    </div>
    <div id="imgs" class="row">
      <div id="container"class="lado">
        <div class="col-md-3 " >  <img src="images/fcamiseta2.jpg"> </div>
        <div class="col-md-3 " >  <img src="images/mcamiseta4.jpg"> </div>
        <div class="col-md-3 " >  <img src="images/fcamiseta4.jpg"> </div>
        <div  class="col-md-3 " > <img src="images/fcamiseta1.jpg"> </div>
      </div>
    </div>

      <!--  AQUI É O RODAPÉ -->
      <?php include_once("_CODIGOS/footer.php"); ?>

              <script type="text/javascript" src="js/jquery-1.12.3.js"></script>
              <script type="text/javascript" src="js/bootstrap.min.js"></script>
              <script type="text/javascript" src="js/script.js"></script>

  </body>
</html>
