<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio</title>

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

<!-- MENU DE OPÇOES -->

    <div class="container menu">
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 menu2">
            <li><a href="doce.php" class="nav-link link-dark btn doce">Doce</a></li>
            <li><a href="salgado.php" class="nav-link link-dark btn salgado">Salgado</a></li>
            <li><a href="torta.php" class="nav-link link-dark btn torta">Torta</a></li>
        </ul>
    </div>


<!-- CARDAPIO -->
  
    <section class="ftco-section">
        <div class="container shadow p-3 mb-5 bg-body rounded cont-item">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-4">
                    <h2 class="heading-section">Produtos</h2>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <h3 class="h5 mb-4 text-center">Conheça nossos produtos e faça seu pedido aqui.</h3>
                    <div class="table-wrap">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>Produto</th>
                                    <th>Preço</th>
                                    <th>Quantidade</th>
                                    <th>Total</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>


                            <form method="POST" action="adicionarPedido.php">
                                <tr role="alert">
                                    <td>
                                        <img class="img" src="img/brigadeiro.jpg" width=150 height=150>
                                    </td>
                                    <td>
                                        <div class="brigadeiro">
                                            <p>BRIGADEIRO</p>

                                            <p>Brigadeiro feito com leite condensado, cacau em pó e creme de leite</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="preco">
                                            $44.99
                                        </div>
                                    </td>
                                    <td class="quantidade">
                                        <div class="input-group">
                                            <input type="number" name="quantidade" class="quantidade form-control input-number" value="2" min="1" max="100">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="preco">
                                            $89.98
                                        </div>
                                    </td>

                                    <td>
                                        <input class="btn salvar-cardapio" type="submit" value="Salvar"> 
                                    </td>
                                </tr>
                            </form>
                               


                                <form method="POST" action="adicionarPedido.php">
                                <tr role="alert">
                                    <td>
                                        <img class="img" src="img/brigadeiro.jpg" width=150 height=150>
                                    </td>
                                    <td>
                                        <div class="brigadeiro">
                                            <p>BRIGADEIRO</p>

                                            <p>Brigadeiro feito com leite condensado, cacau em pó e creme de leite</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="preco">
                                            $44.99
                                        </div>
                                    </td>
                                    <td class="quantidade">
                                        <div class="input-group">
                                            <input type="number" name="quantidade" class="quantidade form-control input-number" value="2" min="1" max="100">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="preco">
                                            $89.98
                                        </div>
                                    </td>

                                    <td>
                                        <input class="btn salvar-cardapio" type="submit" value="Salvar"> 
                                    </td>
                                </tr>
                            </form>
                               
                            <form method="POST" action="adicionarPedido.php">
                                <tr role="alert">
                                    <td>
                                        <img class="img" src="img/brigadeiro.jpg" width=150 height=150>
                                    </td>
                                    <td>
                                        <div class="brigadeiro">
                                            <p>BRIGADEIRO</p>

                                            <p>Brigadeiro feito com leite condensado, cacau em pó e creme de leite</p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="preco">
                                            $44.99
                                        </div>
                                    </td>
                                    <td class="quantidade">
                                        <div class="input-group">
                                            <input type="number" name="quantidade" class="quantidade form-control input-number" value="2" min="1" max="100">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="preco">
                                            $89.98
                                        </div>
                                    </td>

                                    <td>
                                        <input class="btn salvar-cardapio" type="submit" value="Salvar"> 
                                    </td>
                                </tr>
                            </form>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>