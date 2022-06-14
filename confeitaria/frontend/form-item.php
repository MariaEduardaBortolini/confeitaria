<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Itens</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet">


</head>
<body>
  <!-- HEADER -->

  <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="index.html" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-4">Sakura Confeitaria</span>
        </a>
  
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.html" class="nav-link px-2 link-secondary">Home</a></li>
          <li><a href="cardapio.php" class="nav-link px-2 link-dark">Cardápio</a></li>
          <li><a href="contato.php" class="nav-link px-2 link-dark">Contato</a></li>
          <li><a href="carrinho.php" class="nav-link px-2 link-dark">Carrinho</a></li>
        </ul>
  
        <div class="col-md-3 text-end">
          <a href="form-user-login.php" type="button" class="btn login">Login</a>
          <a href="form-user-registro.php" type="button" class="btn sign-up">Sign-up</a>
        </div>
      </header>
    </div>

    <!-- FORM -->

  <div class="container shadow-sm p-3 mb-5 bg-body rounded cont-item">
    <div class="container">
      <h1 class="h3 mb-3 fw-normal">Cadastrar produto</h1>
      
      <form method="POST" action="salvar-item">
        
        <div class="input-group mb-3">
          <input type="text" class="form-control nome-produto" name="nome-produto" placeholder="Nome do produto" aria-label="Username">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1 descricao-produto">Descrição do produto</label>
            <textarea class="form-control" name="descricao-produto" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="input-group mb-3 preco-produto">
          <span class="input-group-text">$</span>
          <input type="number" class="form-control" name="preco-produto">
          <span class="input-group-text">.00</span>
        </div>

        <div class="form-group categoria-produto">
          <label for="categoria">Categoria do produto</label>
          <select class="form-control" name="categoria-produto" id="exampleFormControlSelect1">
            <option value="doces">Doces</option>
            <option value="salgados">Salgados</option>
            <option value="tortas">Tortas</option>
          </select>
          
          <div class="foto-produto">
            <label for="inputGroupFile02">Envie uma foto do produto</label>
            <input type="file" class="form-control" name="foto-produto" id="inputGroupFile02">
          </div>
          
          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn salvar" type="submit" value="Salvar">
          </div>
        </div>

      </form>
    </div>
  </div>

</body>
</html>