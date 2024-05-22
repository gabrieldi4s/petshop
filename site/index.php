<?php
  if(isset($_POST['submit'])){
    include_once('cadastros (PHP)/config.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO clientes(usuario, senha) 
    VALUES ('$usuario', '$senha')");
  }
?>

<!doctype html>
<html lang="PT-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <title>Feliz Cão - Área Administrativa</title>
  </head>
  <body>

        <div class="container">
          <div class="col-sm-12">&nbsp</div>
          <div class="col-sm-12">&nbsp</div>
          <div class="col-sm-12 background-grid"><h2>Área Administrativa</h2></div>
          <div class="col-sm-12">&nbsp</div>
          <div class="col-sm-12">&nbsp</div>
          <div class="col-sm-12">&nbsp</div>
          <div class="col-sm-12">
             <form method="POST" action="index.php" class="row g-3">                  
                  <div class="col-sm-3 offset-sm-3">
                    <label for="staticEmail2" class="visually-hidden">Login</label>
                    <input name="usuario" type="text" class="form-control" id="staticEmail2" placeholder="Digite seu usuário">
                  </div>

                  <div class="col-sm-3" >
                    <label for="inputPassword2" class="visually-hidden">Senha</label>
                    <input name="senha" type="password" class="form-control" id="inputPassword2" placeholder="Digite sua senha">
                  </div>

                  <div class="col-sm-1">
                      <button type="submit" name="submit" id="submit" class="btn btn-warning mb-3">Acessar</button>
                  </div>

              </form>
            </div>
              <div class="col-sm-4 offset-sm-4"><p><a href="menuPrincipal.html">Recuperar senha</a></p></div>
              <div class="col-sm-12">&nbsp</div>
              <div class="col-sm-12">&nbsp</div>
              <div class="col-sm-12">&nbsp</div>
              <div class="col-sm-12 background-grid-footer">&nbsp</div>
              
              
          </div>

        </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>