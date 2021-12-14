<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
                Login
              </div>
              <div class="card-body">
                <form action="valida_login.php" method="post">
                  <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="E-mail">
                  </div>
                  <div class="form-group">
                    <input name="senha" type="password" class="form-control" placeholder="Senha">
                    <a href="http://localhost/projetos/app_help_desk/cadastrar_usuario.php"> Cadastre-se</a>
                  </div>
                  <button onclick="createUser()" class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                </form>
              </div>
            </div>
          </div>
    </div>
  </body>
</html>