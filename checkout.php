<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title>Mirror Fashion</title>
<link rel="stylesheet" href="/css/bootstrap.css">
<link rel="stylesheet" href="/css/checkout.css">

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" name="button" data-toggle="collapse" data-target="#navbar-collapse-id">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">Mirror Fashion</a>

  </div>
<div class="collapse navbar-collapse" id="navbar-collapse-id">
  <ul class="nav navbar-nav">
    <li class="active"><a href="sobre.php">Sobre</a></li>
    <li><a href="#">Ajuda</a></li>
    <li><a href="#">Perguntas Frequentes</a></li>
    <li><a href="#">Entre em contato</a></li>
  </ul>
</div>
</nav>

<div class="jumbotron">
  <div class="container">

  <h1>Ótima escolha!</h1>
  <p>Obrigado por comprar na Mirror Fashion!
  Preencha seus dados para efetivar a compra.</p>
  </div>
</div>
<div class="container">
 <div class="row">


<div class="col-sm-4">


  <div class="panel panel-success">
    <div class="panel-heading">

      <h2 class="panel-title">Sua compra</h2>
    </div>
 <div class="panel-body">

<img src="/img/produtos/foto1-<?= $_POST['cor'] ?>.png" class="img-thumbmail img-responsive" >
<dl>
  <dt>Cor</dt>
  <dd><?= $_POST['cor']?></dd>

  <dt>Tamanho</dt>
  <dd><?= $_POST['tamanho']?></dd>

  <dt>Produto</dt>
  <dd><?= $_POST['nome']?></dd>

  <dt>Preço</dt>
  <dd id="preco">R$ <?= $_POST['preco']?></dd>
</dl>

<div class="form-group">
  <label for="qt">Quantidade</label>
  <input id="qt" class="form-control" type="number" value="1" min="0" max="99">
</div>

<div class="form-group">
  <label for="total">Total</label>
    <output id="total" class="form-control">
      <?= $_POST["preco"] ?>
    </output>
</div>


        </div>
          </div>

            </div>

<form class="col-sm-8">

<div class="row">


  <fieldset class="col-md-6">

    <legend>Dados Pessoais</legend>
    <div class="form-group">
      <label for="nome">Nome Completo</label>
      <input type="text" class="form-control" name="nome" id="nome" autofocus required>
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="email@exemplo.com" required>
    </div>

    <div class="form-group">
      <label for="cpf">Email</label>
      <input type="text" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00">
    </div>

    <div class="checkbox">
      <label>
        <input type="checkbox" name="" value="sim" name="spam" checked>
        Quero receber spam da Mirror Fashion
      </label>
    </div>

  </fieldset>


  <fieldset class="col-md-6">
    <legend>Cartão de crédito</legend>

    <div class="form-group">
      <label for="numero-cartao">Número - CVV</label>
      <input type="text" class="form-control" name="numero-cartao" id="numero-cartao">
    </div>

    <div class="form-group">
      <label for="bandeira-cartao">Bandeira</label>
      <select class="form-control" name="bandeira-cartao" id="bandeira-cartao">
        <option value="master">MasterCard</option>
        <option value="visa">Visa</option>
        <option value="amex">American Express</option>
      </select>
    </div>

    <div class="form-group">
      <label for="validade-cartao">Validade</label>
      <input type="month" class="form-control" name="validade-cartao" id="validade-cartao">
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <div class="input-group">

      <span class="input-group-addon">@</span>
      <input type="email" class="form-control" name="email" id="email">
      </div>
    </div>

  </fieldset>
</div>
  <button type="submit" class="btn btn-primary btn-lg pull-right" name="button">
    <span class="glyphicon glyphicon-thumbs-up"></span>
    Confirmar Pedido
  </button>
  </fieldset>


</form>
</div>
</div>
</div>

<script src="js/total.js"></script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
