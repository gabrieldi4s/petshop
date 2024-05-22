<?php  
  session_start();

  if(!isset($_SESSION['carrinho'])){
    $_SESSION['carrinho'] = array();
  }

//Adiciona produto
  if(isset($_GET['acao'])){
    // Adicionar carrinho
    if($_GET['acao'] == 'add'){
      $id = intval($_GET['id']);
      if(isset($_SESSION['carrinho'][$id])){
        $_SESSION['carrinho'][$id] = 1;
      }else{
        $_SESSION['carrinho'][$id] += 1;
      }
    }

    //Remover itens do carrinho
    if($_GET['acao'] == 'del'){
      $id = intval($_GET['id']);
      if(isset($_SESSION['carrinho'][$id])){
        unset($_SESSION['carrinho'][$id]);
      }
    }
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
          <div class="col-sm-12 titulosCadastros"><h2>Carrinho de compras</h2>
          <div class="col-sm-12">&nbsp</div>

                  
<table>
  
  <thead>
    <tr>
      <th width="244">Produto</th>

      <th width="120">Quantidade </th>

      <th width="89"> Preço</th>

      <th width="100">Subtotal</th>

      <th width="64">Remover</th>
    </tr>
  </thead>

  <form action="?acao=up" method="POST">
    <tfoot>
      <tr>
        <td colspan="5"><input type="submit" name="" value="Atualizar carrinho" /></td>
      </tr>
        <tr>
          <td colspan="5"><a href="caixa.php">Continuar comprando </a></td>
        </tr>
    </tfoot>

    <tbody>

      <?php
        if(count($_SESSION['carrinho']) == 0){
          echo '<tr><td colspan="5"> Não há produtos no carrinho</td></tr>';
        }else{
          require("config.php");
          foreach (($_SESSION['carrinho']) as $id => $qtd) {
            $sql = "SELECT * FROM produtos WHERE id= '$id'";
            $qr = mysqli_query($conexao, $sql) or die (mysql_error());
            $ln = mysqli_fetch_assoc($qr);

            $nome = $ln['nome'];
            $preco = number_format($ln['preco'], 2, '.', '.');
            $sub = number_format($ln['preco'] * $qtd, 2, '.', '.');
            @$total += $sub;

            echo '<tr>
                    <td>'.$nome.'</td>

                    <td><input type="text" size="3" name="prod['.$id.']" value="'.$qtd.'" /></td>

                    <td>R$ '.$preco.'</td>

                    <td>R$ '.$sub.'</td>

                    <td><a href="?acao=del&id='.$id.'">Remove</a></td>
             </tr>';
          }
          $total = number_format($total, 2, '.', '.');
          echo '<tr>s
                    <td colspan="4"> Total</td>
                    <td>R$ '.$total.'</td>
                </tr>';
        }

      ?>


    </tbody>
  </form>
</table>




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