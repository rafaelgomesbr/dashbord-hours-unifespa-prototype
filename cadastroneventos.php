<?php
session_start();

include ('conexao.php');
include ('verifica_login.php');
?>

 

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Unifesspa</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Google fonts - Popppins for copy-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,800">
    <!-- orion icons-->
    <link rel="stylesheet" href="css/orionicons.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png?3">

  </head>
  <body>
   <!-- navbar-->
   <header class="header">
      <nav class="navbar navbar-expand-lg px-4 py-2 bg-white shadow"><a href="#" class="sidebar-toggler text-gray-500 mr-4 mr-lg-5 lead"><i class="fas fa-align-left"></i></a> 
      <a href="painelAdm.php" class="navbar-brand font-weight-bold text-uppercase text-base">Gerenciar Recursos</a>
      
        <ul class="ml-auto d-flex align-items-center list-unstyled mb-0">
         
          
          <li class="nav-item dropdown ml-auto"><a id="userInfo" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><img src="img/avatar-6.jpg" alt="Jason Doe" style="max-width: 2.5rem;" class="img-fluid rounded-circle shadow"></a>
            <div aria-labelledby="userInfo" class="dropdown-menu"><a href="#" class="dropdown-item"><strong class="d-block text-uppercase headings-font-family"><?php  echo $_SESSION['usuario']?> </strong><small>Usuario</small></a>
            
              <div class="dropdown-divider"></div><a href="logout.php" class="dropdown-item">Sair</a>
            </div>
          </li>
        </ul>
      </nav>
    </header>
    
    <div class="d-flex align-items-stretch">
    <div id="sidebar" class="sidebar py-3">
                    <div class="text-gray-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family">Menu</div>
                    <ul class="sidebar-menu list-unstyled">
                        <li class="sidebar-list-item"><a href="painel2.php" class="sidebar-link text-muted"><i class="o-home-1 mr-3 text-gray"></i><span>Home</span></a></li>
                
                        <li class="sidebar-list-item"><a href="cadastroneventos.php" class="sidebar-link text-muted active"><i class="o-survey-1 mr-3 text-gray"></i><span>Cadastrar Novos Eventos</span></a></li>
            
                        <li class="sidebar-list-item"><a href="contahoras.php" class="sidebar-link text-muted"><i class="o-table-content-1 mr-3 text-gray"></i><span>Contabilizar Horas</span></a></li>

                        <li class="sidebar-list-item"><a href="usuarios.php" class="sidebar-link text-muted"><i class="o-table-content-1 mr-3 text-gray"></i><span>Visão Geral</span></a></li>


                        <li class="sidebar-list-item"><a href="cadastrousuarios.php" class="sidebar-link text-muted"><i class="o-table-content-1 mr-3 text-gray"></i><span>Cadastrar Usuario</span></a></li>
                       
                                                                 
                        <li class="sidebar-list-item"><a href="logout.php" class="sidebar-link text-muted"><i class="o-exit-1 mr-3 text-gray"></i><span>Alterar Conta</span></a></li>
                    </ul>        
                </div>
      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
             
          <?php
          if(isset($_POST["save"])):

            $nome = $_POST["nome"];
            $categoria = $_POST["categoria"];
            $estado = $_POST["estado"];
            $cidade = $_POST["cidade"];
            $peso = $_POST["peso"];
            $qtdhoras = $_POST["qtdhoras"];
            $dataa = $_POST["dataa"];

          $sql = "INSERT INTO eventos(nome, categoria, estado, cidade, peso, qtdhoras, dataa) VALUES ('$nome','$categoria','$estado','$cidade','$peso','$qtdhoras','$dataa')";
          $save=mysqli_query($conexao, $sql);
          echo "<script>alert('Contado cadastro com sucesso'); </script>"; 
             endif;
           
           
            
                    
                  
          
            
         
         ?>

              <!-- Form Elements -->
              <form method="post">
              <div class="col-lg-12 mb-5">
                <div class="card">
                  <div class="card-header">
                    <h3 class="h6 text-uppercase mb-0">Atividades Extracurriculares e Eventos</h3>
                  </div>
                 
                  <div class="card-body">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Nome</label>
                        <div class="col-md-9">
                          <input type="text"  name="nome" class="form-control">
                        </div>
                      </div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Categoria</label>
                        <div class="col-md-9 select mb-3">
                          <select name="categoria" class="form-control">
                            <option>Selecione</option>
                            <option>Tecnologia da Informação</option>
                            <option>Psicologia</option>
                            <option>Agropecuários e Agroindustriais</option>
                            <option>Medicina</option>
                            <option>Engenharia Civil</option>
                          </select>
                        </div></div>


                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Estado</label>
                        <div class="col-md-9">
                          <input type="text" class="form-control" name="estado">
                           </div>
                      </div>
                     
                     
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Cidade</label>
                        <div class="col-md-9">
                          <input type="text" name="cidade" class="form-control">
                        </div>
                      </div>
                     
                     
                     
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Peso</label>
                        <div class="col-md-9">
                          <input type="text" name="peso"class="form-control">
                        </div>
                      </div>
                     
                     
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Quatidade de Horas</label>
                        <div class="col-md-9">
                          <input type="text" name="qtdhoras" class="form-control">
                        </div>
                      </div>
                      </form>


                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-md-3 form-control-label">Data</label>
                        <div class="col-md-9">
                          <input type="text" name="dataa" class="form-control">
                        </div>
                      </div>
                      </form>
                </div>
              </div>
                     
                     
                     

                      <div class="line"></div>
                      <div class="form-group row">
                        <div class="col-md-9 ml-auto">
                          <button type="submit" class="btn btn-secondary">Cancel</button>
                          <button type="submit" name="save" class="btn btn-primary">Savar Dados</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
    
                                    <div class="container-fluid">
                                        <div class="row">
                                        <div class="col-md-6 text-center text-md-left text-primary">
                                            <p class="mb-2 mb-md-0">Duck development &copy; 2018</p>
                                        </div>
                                        </div>
                                    </div>
                                    </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>