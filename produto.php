<?php $cabecalho_title = "Produtos Mirror Fashion"  ?>
<?php $cabecalho_css = '<link rel="stylesheet" href="css/produto.css">' ;  ?>
<?php include 'cabecalho.php' ?>


<main class="produto-back">


<section class="container">

<div class="produto">
	<h1>Fuzzy Cardigan</h1>
	<p>por apenas R$ 129,00</p>

	<form action="checkout.php" method="POST">
		<fieldset class="cores">
			<legend>Escolha a cor:</legend>

			<input type="radio" name="cor" value="verde" id="verde" checked>
			<label for="verde">
				<img src="img/produtos/foto2-verde.png" alt="verde">
			</label>

			<input type="radio" name="cor" value="rosa" id="rosa">
			<label for="rosa">
				<img src="img/produtos/foto2-rosa.png" alt="rosa">
			</label>

			<input type="radio" name="cor" value="azul" id="azul">
			<label for="azul">
				<img src="img/produtos/foto2-azul.png" alt="azul">
			</label>
		</fieldset>
		<fieldset class="tamanhos">
			<legend> Escolha o tamanho:</legend>
			<input type="range" min="36" max="44" step="2" name="tamanho" value="40">
			<output name="valortamanho" for="tamanho">40</output>

		</fieldset>
		<input type="submit" value="Comprar" class="comprar">

		<input type="hidden" name="nome" value="Fuzzy Cardigan">
		<input type="hidden" name="preco" value="129,00">
		</form>
</div>
<section class="detalhes">
	<h2>Detalhes do produto</h2>
	<p>Esse é o melhor casaco de Cardigã que você já viu. Excelente material italiano com estampa desenhada pelos artesãos da comunidade de Krotor nas ilhas gregas. Compre já e receba hoje mesmo pela nossa entrega ajato.</p>

<table>
	<thead>
		<tr>
		 <th>Características</th>
		 <th>Detalhes</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>Modelo</td>
			<td>Cardigã 7845</td>
		</tr>

		<tr>
			<td>Material</td>
			<td>Algodão e poliester</td>
		</tr>

		<tr>
			<td>Cores</td>
			<td>Azul, Rosa e Verde</td>
		</tr>

		<tr>
			<td>Lavagem</td>
			<td>Lavar a mão</td>
		</tr>
	</tbody>
</table>
</section>
</section>
</main>
<script src="js/produto.js"></script>
<?php include 'rodape.php' ?>
