
     <?php
        session_start();
     ?>
<!DOCTYPE html>
<html>
    
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Banco de Horas</title>
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
    <!-- Favicon
    <link rel="shortcut icon" href="img/favicon.png?3">-->
   
</head>



<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
     
                    <div class="box">
                        <form action="login.php" method="POST">
                             
                        <div class="page-holder d-flex align-items-center">
      <div class="container">
        <div class="row align-items-center py-5">
        <!-- <div class="col-5 col-lg-7 mx-auto mb-5 mb-lg-0">
            <div class="pr-lg-5"><img src="img/illustration.svg" alt="" class="img-fluid"></div>
          </div>--> 
          <div class="col-lg-5 px-lg-4">
            <h1 class="text-base text-primary text-uppercase mb-4">UNIFESSPA</h1>
            <h2 class="mb-4">Atividades Extracurriculares Unifesspa</h2>
            <p class="text-muted">Monitore as horas registradas e acompanhe em quais atividades elas foram aplicadas.</p>
            <form id="loginForm" action="index.html" class="mt-4">
            
        
            <div class="form-group mb-4">
                <input type="text" name="usuario" placeholder="Usuario" class="form-control border-0 shadow form-control-lg">
              </div>
            
              
              <div class="form-group mb-4">
                <input type="password" name="senha" placeholder="Senha" class="form-control border-0 shadow form-control-lg text-violet">
              </div>
          <div class="form-group mb-4">
               
          <div class="custom-control custom-checkbox">
                <?php
                            if(isset($_SESSION['nao_autenticado'])):
                                                                     ?>
                                 <div class="erro">Usuario ou senha incorreto. </div> 
                            <?php
                            endif;
                            unset($_SESSION['nao_autenticado']);
                                 ?>          
                </div>
         
            </div>
              <div>
              <button type="submit" class="btn btn-primary shadow px-5">Acessar</button>
            
            
            </div></form>
          </div>
        </div>
        <p class="mt-5 mb-0 text-gray-400 text-center"> <a href="https://bootstrapious.com/admin-templates" class="external text-gray-400">Duck development</a> Todos os direitos reservados</p>
        </div>
    </div>
            </form>
          </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


  <!-- JavaScript files-->
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/bootbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="js/front.js"></script>
</body>

</html>