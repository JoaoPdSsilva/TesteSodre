<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Empresa Tal!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Empresa de Tal</a>
    <button class="navbar-toggler navbar-light " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=inicio">Pagina Inicial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo colaborador</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar colaboradores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novoCargo">Novos Cargos</a>
</li>
          <li class="nav-item">
          <a class="nav-link" href="?page=listarCargo">Listar Cargos</a>
          </li>
      </form>
    </div>
  </div>
</nav>

<div class="class"></div>
    <div class="row">
        <div class="col mt-5">

        <?php 
        include("config.php");
    switch(@$_REQUEST["page"]){
        case "novo":
            include("novo-usuario.php");
        break;
        case "listar":
            include("listar-usuario.php");
        break;
        case "inicio":
            print "<h1>Bem Vindo!</h1>";
        break;
        case "salvar":
            include("salvar-usuario.php");
        break;
        case "editar":
          include("editar-usuario.php");
      break;
        case "salvarCargo":
          include("salvar-cargos.php");
      break;
      case "novoCargo":
        include("novo-cargo.php");
    break;
    case "listarCargo":
      include("listar-cargos.php");
  break;
        default:
            print "<h1>Bem Vindo!</h1>";
    }
?>
        </div>
    </div>
</div>

    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>