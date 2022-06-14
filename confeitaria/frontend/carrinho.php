<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>

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

    <!-- CARRINHO -->

    <section class="ftco-section">
        <div class="container shadow p-3 mb-5 bg-body rounded cont-item">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-4">
                    <h2 class="heading-section">Meu carrinho</h2>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
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
                                        <input class="btn salvar-cardapio" type="submit" value="Excluir"> 
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ENVIAR PEDIDO -->

<form method="POST" action="enviarpedido.php">
    <div class="container total" style="background: -moz-linear-gradient(top, rgb(255, 247, 248), rgb(255, 239, 242));">     

    <div class="row">
              <div class="col-md-6 mb-3">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome">
                <div class="invalid-feedback">
                  É obrigatório inserir um nome válido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control" id="sobrenome">
                <div class="invalid-feedback">
                  É obrigatório inserir um sobre nome válido.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="name@exemple.com">
              <div class="invalid-feedback">
                Por favor, insira um endereço de e-mail válido, para atualizações de entrega.
              </div>
            </div>

            <div class="mb-3">
              <label for="endereco">Endereço</label>
              <input type="text" class="form-control" id="endereco" placeholder="Rua das Orquideas, nº 859" name="endereco">
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>

            <h4 class="mb-3">Pagamento</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credito" name="paymentMethod" type="radio" class="custom-control-input">
                <label class="custom-control-label" for="credito">Cartão de crédito</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debito" name="paymentMethod" type="radio" class="custom-control-input">
                <label class="custom-control-label" for="debito">Cartão de débito</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="dinheiro" name="paymentMethod" type="radio" class="custom-control-input">
                <label class="custom-control-label" for="dinheiro">Dinheiro</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-nome">Nome no cartão</label>
                <input type="text" class="form-control" id="cc-nome" name="nomeCartao">
                <small class="text-muted">Nome completo, como mostrado no cartão.</small>
                <div class="invalid-feedback">
                  O nome que está no cartão é obrigatório.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-numero">Número do cartão de crédito</label>
                <input type="text" class="form-control" id="cc-numero" name="numeroCartao">
                <div class="invalid-feedback">
                  O número do cartão de crédito é obrigatório.
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiracao">Data de expiração</label>
                <input type="text" class="form-control" id="cc-expiracao" name="dataCartao">
                <div class="invalid-feedback">
                  Data de expiração é obrigatória.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-cvv">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" name="CVV">
                <div class="invalid-feedback">
                  Código de segurança é obrigatório.
                </div>
            </div>
            
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 total-ul">
                <li><p class="total-text">Total: R$ XX,XX<p></li>
                <li><input type="submit" class="btn total-botao" value="Enviar pedido"></li>
            </ul>
    </div>
    </form>
</body>
</html>