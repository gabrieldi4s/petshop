<?php
  if(isset($_POST['submit'])){
    include_once('config.php');

    $cod_produto = $_POST['cod_produto'];
    $nome_produto = $_POST['nome_produto'];
    $marca = $_POST['marca'];
    $quant = $_POST['quant'];
    $valor_compra = $_POST['valor_compra'];
    $valor_venda = $_POST['valor_venda'];
    $lucro = $_POST['lucro'];
    $cod_barras = $_POST['cod_barras'];
    $imagem = $_POST['imagem'];

    $result = mysqli_query($conexao, "INSERT INTO produtos(id, nome, marca, quant, preco, valor_venda, lucro, cod_barras, imagem)
    VALUES ('$cod_produto', '$nome_produto', '$marca', '$quant', '$valor_compra', '$valor_venda', '$lucro', '$cod_barras', '$imagem')");
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
          <div class="col-sm-12 titulosCadastros"><h2>Cadastro de produtos</h2>
          <div class="col-sm-12">&nbsp</div>

                  
          <div class="row">
              <form action="cadastroDeProdutos.php" class="row g-3" method="POST"> 

              <div class="col-2">
                  <label for="exampleFormControlInput1" class="form-label">Código do produto</label>
                  <input name="cod_produto" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Informe o código">
              </div>                 
             
              <div class="col-6">
                  <label for="exampleFormControlInput1" class="form-label">Nome do produto</label>
                  <input name="nome_produto" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Informe o nome do produto">
              </div>

              <div class="col-2">
                  <label for="exampleFormControlInput1" class="form-label">Marca</label>
                  <input name="marca" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Informe a marca">
              </div>

              <div class="col-2">
                  <label for="exampleFormControlInput1" class="form-label">Quantidade</label>
                  <input name="quant" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Qual a quantidade?">
              </div>            
                              
          </div>

          <div class="row">
              <div class="col-4">
                  <label for="exampleFormControlInput1" class="form-label">Valor de compra</label>
                  <input name="valor_compra" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Informe quanto pagou">
              </div>

              <div class="col-4">
                  <label for="exampleFormControlInput1" class="form-label">Valor de Venda</label>
                  <input name="valor_venda" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Informe o valor de venda">
              </div>
              
              <div class="col-4">
                  <label for="exampleFormControlInput1" class="form-label">Lucro</label>
                  <input name="lucro" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Lucro">
                  <div class="col-sm-12">&nbsp</div>                  
              </div>
            </div>

             <div class="row">            

                <div class="col-4">
                  <label for="exampleFormControlInput1" class="form-label">Código de barras</label>
                  <input name="cod_barras" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Informe o código de barras">
              </div>

                 <div class="col-4">
                  <label for="exampleFormControlInput1" class="form-label">Insira uma foto</label>
                  <input name="imagem" type="file" class="form-control" id="exampleFormControlInput1" placeholder="Informe o código de barras">
              </div>

            <div class="row">
              <div class="col-sm-10">&nbsp</div>
              <div class="col-sm-10">&nbsp</div>
            </div>

            <div class="row">
                  <div class="col-sm-3 offset-sm-10">
                      <button type="submit" name="submit" id="submit" class="btn btn-warning mb-3">Cadastrar</button>
                      <button type="reset" class="btn btn-warning mb-3">Limpar</button>
                  </div>
              </div>
              </form>
              </div> 


            
          
</div>




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