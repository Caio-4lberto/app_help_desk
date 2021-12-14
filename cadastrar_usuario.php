<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <?php include("create_user.php"); ?>

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }

      a{
        font-size: 12px;
        text-align: left;
      }
      .logo{
        text-align: center;
        margin-top: 8%;
      }
      .form-control{
        margin-bottom: 4%;
      }
      
    </style>

  </head>

  <body>

    <nav class="navbar">
      <a class="navbar-brand" href="http://localhost/projetos/app_help_desk/">
        Help Desk
      </a>
    </nav>

    <div class="container">
        <div class="logo">
          <img src="logo.png" width="200" height="200" class="d-inline-block align-top" alt="">
        </div>       
        <div class="row">

          <div class="card-login">
            <div class="card">
              <div class="card-header">
                Cadastro de Usuário
              </div>
              <div class="card-body">
                <!-- <form action="cadastrar_usuario.php" method="post"> -->    <!-- #### DEVIDO O AJAX, NÃO NECESSITA DO FORM ####-->
                  <div class="form-group">
                      <input id="name_client" name="nome" type="text" class="form-control" placeholder="Nome">
                      <input id="email_client" name="email" type="email" class="form-control" placeholder="E-mail">
                      <input id="password_client" name="password" type="text" class="form-control" placeholder="Senha">
                  </div>
                  <button id="salvar_cadastro" class="btn btn-lg btn-info btn-block" type="submit">Cadastrar</button>
                <!-- </form> -->

              </div>
            </div>
          </div>
    </div>

    <div id="mensagens"></div>

  </body>
  
  </html>