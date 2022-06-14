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
      <h1 class="h3 mb-3 fw-normal">Criar uma conta</h1>
      
      <form method="POST" action="salvar-user">

        <div class="mb-3">
            <label for="nome-usuario" class="form-label">Informe seu nome</label>
            <input type="text" class="form-control nome-usuario" name="name-usuario" aria-label="Username">
        </div>  
        
        <div class="mb-3">
            <label for="email-usuario" class="form-label">Informe seu email</label>
            <input type="email" class="form-control" name="email-usuario" id="email-usuario" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="senha-usuario" class="form-label">Informe sua senha</label>
            <input type="password" class="form-control" name="senha-usuario" id="senha-usuario">
        </div>
        
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <input class="btn salvar" type="submit" value="Salvar">
          </div>
    </form>

    </div>
  </div>

</body>
</html>