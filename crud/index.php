<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>CRUD</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">CRUD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="?page=cadastro">Create</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=exibicao">Read</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" disabled>Update</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" disabled>Delete</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col mt-5">
          <?php
            include("db.php");
            switch(@$_REQUEST["page"]){
              case "cadastro": 
                include("cadastrar_produto.php");
              break;
              case "exibicao":
                include("listar_produto.php");
              break;
              case "edicao":
                include("editar_produto.php");
              break;
              case "exclusao":
                include("excluir_produto.php");
              break;
              case "salvar":
                include("salvar_produto.php");
              break;
            default:
              print '<h1>Seja Bem Vindo!</h1>';
              print '<h6>Controle de estoque de produtos.</h6>';
            }
          ?>
        </div>
      </div>
    </div>

    <img src="../img/gestaoestoque2.png" width="100%">

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>