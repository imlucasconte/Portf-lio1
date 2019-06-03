<!DOCTYPE html>
<html>
  <head>
    <?php include_once("_CODIGOS/headconf.php") //CONFIGURACAO DA PAGINA ?>
  </head>
  <body>
  <!-- CABEÇARIO DA PAGINA -->
  <?php include_once("_CODIGOS/header.php") //CONFIGURACAO DA PAGINA ?>
    <nav>
      <section id="galeria">
        <div>
          <div class="row">
            <div class="col-md-12">
                <div id="boxImg">
                    <div id="flechaEsq">
                        <span class="fa fa-chevron-left  fa-3x"></span>
                    </div>
                    <div id="flechaDir">
                        <span class="fa fa-chevron-right fa-3x"></span>
                    </div>
                    <img src="" id="imgGde">
                </div>
            </div>
          </div>
        </div>
      </section>
    </nav>
    <hr>
        <!--  AS CAMISETAS VÃO AQUI -->
    <nav>
      <fieldset>
      <legend class="title">  CAMISETAS</legend>
                      <div id="container" class="lado">
                      <div id="imgs" class="row">
                         <div class="col-md-6 " > <img src="https://static.wixstatic.com/media/0449c4_e96c3a7b61f545d0b85fe7f959e8c8a6.jpg_srz_682_1023_85_22_0.50_1.20_0.00_jpg_srz"> </div>
                         <div class="col-md-3 " >  <img src="images/mcamiseta2.jpg"> </div>
                         <div class="col-md-3 " >  <img src="images/fcamiseta5.jpg"> </div>
                         <div id="desconto"class="col-md-6"  > <img  src="images/blackfriday.gif" alt=""> </div>
                         <div class="col-md-3 " >  <img src="images/mcamiseta3.jpg"> </div>
                         <div class="col-md-3 " >  <img src="images/fcamiseta3.jpg"> </div>
                  </div>
                 </div>

               <div id="container"class="lado">
                   <div id="imgs" class="row">
                 <div class="col-md-3 " >  <img src="images/fcamiseta2.jpg"> </div>
                 <div class="col-md-3 " >  <img src="images/mcamiseta4.jpg"> </div>
                 <div class="col-md-3 " >  <img src="images/fcamiseta4.jpg"> </div>
                 <div  class="col-md-3 " > <img src="images/fcamiseta1.jpg"> </div>
               </div>

               <div id="container"class="lado">
                   <div id="imgs" class="row">
                 <div  class="col-md-3 " > <img src="images/fcamiseta1.jpg"> </div>
                 <div class="col-md-3 " >  <img src="images/fcamiseta4.jpg"> </div>
                 <div class="col-md-3 " >  <img src="images/fcamiseta2.jpg"> </div>
                 <div class="col-md-3 " >  <img src="images/mcamiseta4.jpg"> </div>
               </div>
             </div>


           </fieldset>
      </nav>

      <! OS CALÇADOS VÃO AQUI>
      <nav>

            <fieldset>
              <legend class="title"> CALÇADOS </legend>
            <div id="shoe"><div class="col-md-12"> <img src="images/fsapato01.jpg" alt=""></div>
             <div id="texto" class="lado">
               <div id="container"class="lado">
                   <div id="imgs" class="row">
                 <div class="col-md-3"><img src="images/fsapato05.jpg"  title=""/></div>
                 <div class="col-md-3"><img src="images/fsapato02.jpg"  title=""/></div>
                 <div class="col-md-3"> <a href="mizuno.html" target="parent"><img src="images/mizuno01.jpg" title="mizuno"/></a> </div>
                 <div class="col-md-3"><img src="images/msapato01.jpg"  title=""/></div>
                 </div>

          <div id="container"class="lado">
                <div id="imgs" class="row">
                  <div class="col-md-3">  <a href="mizuno.html" target="parent"><img src="images/mizuno01.jpg" title="mizuno"/></a> </div>
                <div class="col-md-3"><img src="images/fsapato02.jpg"  title=""/></div>
                <div class="col-md-3"><img src="images/msapato01.jpg"  title=""/></div>
                <div class="col-md-3"><img src="images/fsapato05.jpg"  title=""/></div>
               </div>
            </div>
        </div>
          </fieldset>
        <hr>
        <!--  AQUI É O RODAPÉ -->
        <?php include_once("_CODIGOS/footer.php"); ?>

        <script type="text/javascript" src="js/jquery-1.12.3.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
