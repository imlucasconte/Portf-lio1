<!DOCTYPE html>
<html>
  <head>
    <?php include_once("_CODIGOS/headconf.php") //CONFIGURACAO DA PAGINA ?>

  </head>
  <body>
    <!-- CABEÇARIO DA PAGINA -->
    <?php include_once("_CODIGOS/header.php") //CONFIGURACAO DA PAGINA ?>

      <section class="alinha">
          <div id="alinha" class="col-md-12">

          </div>
          </section>


          <div class="container" style="padding: 20px;">
            <div class="row">
              <div class="boxForm">
                  <form class="frmContact">
                      <label>Nome</label>
                      <div class="input-group">
                          <div class="input-group-addon"><span class="fa fa-user"></span></div>
                          <input type="text" name="nome" class="form-control" />
                      </div>
                      <label>E-mail:</label>
                      <div class="input-group">
                          <div class="input-group-addon"><span class="fa fa-envelope"></span></div>
                          <input type="email" name="email" class="form-control" required />
                      </div>
                      <label>Mensagem</label>
                      <div class="input-group">
                          <div class="input-group-addon"><span class="fa fa-phone"></span></div>
                          <input type="text" name="fone" class="form-control" required />
                      </div>
                      <div class="pull-right" style="margin-top:15px">
                         <input ype="submit" value="Enviar" class="btn btn-danger" />
                         </div>
                  </form>

          </div>
        </div>
          </div>

          <!--  AQUI É O RODAPÉ -->
          <?php include_once("_CODIGOS/footer.php"); ?>

              <script type="text/javascript" src="js/jquery-1.12.3.js"></script>
              <script type="text/javascript" src="js/bootstrap.min.js"></script>
              <script type="text/javascript" src="js/script.js"></script>

      </body>
      </html>
