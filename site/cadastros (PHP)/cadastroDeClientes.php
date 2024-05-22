<?php
  if(isset($_POST['submit'])){
    include_once('config.php');

    $rg = $_POST['rg'];
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $sexo = $_POST['sexo'];
    $data_nasc = $_POST['data_nasc'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $nome_pet = $_POST['nome_pet'];
    $datapet_nasc = $_POST['data_nasc'];
    $sexo_pet = $_POST['sexo_pet'];
    $cor_pet = $_POST['cor_pet'];
    $especie = $_POST['especie'];

    $result = mysqli_query($conexao, "INSERT INTO clientes(rg, nome, sobrenome, sexo, data_nasc, email, telefone, celular) 
    VALUES ('$rg', '$nome', '$sobrenome', '$sexo', '$data_nasc', '$email', '$telefone', '$celular')");
    
    $result = mysqli_query($conexao, "INSERT INTO pet(nome_pet, nome, data_nasc, sexo, cor, especie) 
    VALUES ('$nome_pet', '$nome','$datapet_nasc', '$sexo_pet', '$cor_pet', '$especie')");
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
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">

    <title>Feliz Cão - Menu Principal</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="../menuPrincipal.html"><img src="../imagens/logomarca.png" width="50px" height="50px"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
       <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            
          </a>
        </li>
      </ul>

      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Caixa
          </a>
          <ul class="dropdown-menu dropdown-menu-warning bg-warning" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="caixa.php">Venda de produtos</a></li>
            <li><a class="dropdown-item" href="carrinho.php">Carrinho de compras</a></li>
            
          </ul>
        </li>
      </ul>
      
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cadastro
          </a>
          <ul class="dropdown-menu dropdown-menu-warning bg-warning" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="cadastroDeClientes.php">Cadastro de cliente</a></li>
            <li><a class="dropdown-item" href="cadastroFornecedor.php">Cadastro de fornecedor</a></li>
            <li><a class="dropdown-item" href="cadastroDeProdutos.php">Cadastro de produtos</a></li>
            <li><a class="dropdown-item" href="cadastroDeServicos.php">Cadastro de serviços</a></li>
          </ul>
        </li>
      </ul>

      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Relatórios
          </a>
          <ul class="dropdown-menu dropdown-menu-warning bg-warning" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="/site/relatorios (PHP)/relatorioClientes.php">Relatório de clientes</a></li>
            <li><a class="dropdown-item" href="/site/relatorios (PHP)/relatorioFornecedores.php">Relatório de fornecedor</a></li>
            <li><a class="dropdown-item" href="/site/relatorios (PHP)/relatorioProdutos.php">Relatório de produtos</a></li>
            <li><a class="dropdown-item" href="/site/relatorios (PHP)/relatorioServicos.php">Relatório de serviços</a></li>
          </ul>
        </li>
      </ul>

            <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sistema
          </a>
          <ul class="dropdown-menu dropdown-menu-warning bg-warning" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="cadastroDeUsuarios.php">Cadastro de usuários</a></li>
            
          </ul>
        </li>
      </ul>

    </div>   
    </div>
  </nav>

<div class="container">
          <div class="col-sm-12">&nbsp</div>
          <div class="col-sm-12 titulosCadastros"><h2>Cadastro de clientes</h2>
          <div class="col-sm-12">&nbsp</div>

                  
          <div class="row">
              <form method="POST" action="cadastroDeClientes.php" class="row g-3" onclick="return foo();">                  
             
              <div class="col-2">
                  <label for="exampleFormControlInput1" class="form-label">RG</label>
                  <input name = 'rg' type="text" class="form-control" id="exampleFormControlInput1" placeholder="Informe o RG">
              </div>

              <div class="col-2">
                  <label for="exampleFormControlInput1" class="form-label">Nome do cliente</label>
                  <input name = 'nome' type="text" class="form-control" id="exampleFormControlInput1" placeholder="Informe o nome">
              </div>

              <div class="col-4">
                  <label for="exampleFormControlInput1" class="form-label">Sobrenome</label>
                  <input name = 'sobrenome' type="text" class="form-control" id="exampleFormControlInput1" placeholder="Informe o sobrenome">
              </div>
              
              <div class="col-2">
                  <label for="exampleFormControlInput1" class="form-label">Sexo</label>              
                  <select name = 'sexo' class="form-select" aria-label="Default select example">
                  <option name = 'sexo2' selected>Sexo</option>
                  <option value="Masculino">Masculino</option>
                  <option value="Feminino">Feminino</option>
                  </select>
              </div>

              <div class="col-2">
                  <label for="exampleFormControlInput1" class="form-label">Data de nascimento</label>     
                  <input name = 'data_nasc' type="date" class="form-control" id="exampleFormControlInput1">
              </div>
                               
          </div>

          <div class="row">
              <div class="col-8">
                  <label for="exampleFormControlInput1" class="form-label">e-mail</label>
                  <input name = 'email' type="email" class="form-control" id="exampleFormControlInput1" placeholder="Informe um e-mail válido">
              </div>

              <div class="col-2">
                  <label for="exampleFormControlInput1" class="form-label">Telefone</label>
                  <input name = 'telefone' type="text" class="form-control" id="exampleFormControlInput1" placeholder="11-99999-9999">
              </div>
              
              <div class="col-2">
                  <label for="exampleFormControlInput1" class="form-label">Celular</label>
                  <input name = 'celular' type="text" class="form-control" id="exampleFormControlInput1" placeholder="11-3333-3333">
                  <div class="col-sm-12">&nbsp</div>                  
              </div>
            </div>

            <div class="row">
              <div class="col-sm-12"><h2>Adicionar Pet</h2>              
            </div>

              <div class="col-2">
                  <label for="exampleFormControlInput1" class="form-label">Nome do pet</label>
                  <input name = 'nome_pet' type="text" class="form-control" id="exampleFormControlInput1" placeholder="Informe o nome">
              </div>

               <div class="col-2">
                  <label for="exampleFormControlInput1" class="form-label">Data de nascimento</label>     
                  <input name = 'data_nasc' type="date" class="form-control" id="exampleFormControlInput1">
              </div>

              <div class="col-2">
                  <label for="exampleFormControlInput1" class="form-label">Sexo</label>              
                  <select name = 'sexo_pet' class="form-select" aria-label="Default select example">
                  <option name = 'sexo_pet2' selected>Sexo</option>
                  <option value="Macho">Macho</option>
                  <option value="Femea">Fêmea</option>
                  </select>
              </div>

               <div class="col-2">
                  <label for="exampleFormControlInput1" class="form-label">Cor</label>
                  <input name = 'cor_pet' type="text" class="form-control" id="exampleFormControlInput1" placeholder="Informe a cor">
              </div>

               <div class="col-2">
                  <label for="exampleFormControlInput1" class="form-label">Especie</label>              
                  <select name = 'especie' class="form-select" aria-label="Default select example">
                  <option name = 'especie2' selected>Especie</option>
                  <option value="Ave">Ave</option>
                  <option value="Canino">Canino</option>
                  <option value="Felino">Felino</option>
                  </select>
              </div>
              


            <div class="row">
              <div class="col-sm-12">&nbsp</div>
              <div class="col-sm-12">&nbsp</div>
            </div>


              <div class="row">
                  <div class="col-sm-3 offset-sm-10">
             
                      <button type="submit" name="submit" id="submit" class="btn btn-warning mb-3">Cadastrar</button>
                      <button type="reset" class="btn btn-warning mb-3">Limpar</button>
                  </div>                               
              </div>              

</div>
</form>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>