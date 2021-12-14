<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        /* MENU - STYLE: INICIO */
        .modal{
            width:300px;
        }
        .modal-content{
            width:300px;
        }
        .list-group-item:hover{
            background-color: rgba(59, 57, 57, 0.164)!important;
        }
        .list-group-item a{
            text-decoration:none;
            color: black;
        }

      /* MENU-STYLE: FIM */

      .card-header {
        padding-top: 2%;
        margin-bottom: 1%;
      }

      .card mb-3 {
        margin-bottom: 0.5%;
      }

    </style>
  </head>

  <body>
    
    <!-- ####### MENU: INICIO ####### -->
    <!-- As a heading -->
    <nav class="navbar navbar-light bg-light shadow">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">
            <img src="logo.png" width="30px" height="30px">
              Help Desk
            </span>

            <button class="navbar-toggler" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="http://localhost/projetos/app_help_desk/consultar_chamado.php"> Consultar Chamado <a>
                    </li>

                    <li class="list-group-item">
                        <a href="http://localhost/projetos/app_help_desk/abrir_chamado.php"> Abrir Chamado <a>
                    </li>
                </ul>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
        <!-- ####### MENU: FIM ####### -->
    
    <?php   
        $conexao = new PDO('pgsql:host=localhost;dbname=help_desk','postgres',"753951");
        $sqlread = $conexao->prepare("SELECT * FROM tbuser");
        $sqlread->execute();
        $fetchAll = $sqlread->fetchAll();
    ?>

    <div class="card-header">
        <h5>Usuários</h5>
    </div>

    <?php
        foreach($fetchAll as $user){  
    ?>

            <div class="card mb-3">
                <div class="row mb-3 d-flex align-items-center tarefa">
					<div class="col-sm-9" >
                        <?php 
                            echo $user['name'];  
                        ?>		
                    </div>  
                    <div class="col-sm-3 mt-2 d-flex justify-content-between">
						<i class="fas fa-trash-alt fa-lg text-danger"></i>
						<i class="fas fa-edit fa-lg text-info"></i>
						<i class="fas fa-check-square fa-lg text-success"></i>									
					</div>
                </div>
            </div>

        <?php } ?> 

 

    
  </body>
</html>