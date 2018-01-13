<!DOCTYPE html> 
<html> 
<head> 
<meta charset="utf-8"> <meta name="viewport" content="width=device-width"> 
<title>Mirror Fashion</title>
<link rel="stylesheet" href="css/reset.css"> 
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/produto.css"> 
<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)"> 
<script src="js/jquery.js"></script> 
</head> 
<body>
<?php include("cabecalho.php"); ?>

<div class="container">
<div class="produto">
 <h1>Fuzzy Cardigan</h1> 
 <p>por apenas R$ 129,00</p>
  <form action="checkout.php" method="POST"> 
  <fieldset class="cores"> 
  <legend>Escolha a cor:</legend>
  <input type="radio" name="cor" value="verde" id="verde" checked> 
  <label for="verde"> <img src="img/produtos/foto2-verde.png" alt="verde"> </label>
  <input type="radio" name="cor" value="rosa" id="rosa"> <label for="rosa"> <img src="img/produtos/foto2-rosa.png" alt="rosa"> </label>
  <input type="radio" name="cor" value="azul" id="azul"> <label for="azul"> <img src="img/produtos/foto2-azul.png" alt="azul"> </label>
  </fieldset>


<fieldset class="tamanhos"> <legend>Escolha o tamanho:</legend>
<input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho"> 
<output for="tamanho" name="valortamanho">42</output>
</fieldset> 
  <input type="submit" class="comprar" value="Comprar"> 
<input type="hidden" name="nome" value="Fuzzy Cardigan"> 
<input type="hidden" name="preco" value="129.00"> 
  </form>
</div> 

<div class="detalhes"> <h2>Detalhes do produto</h2>
<p>Esse � o melhor casaco de Cardig� que voc� j� viu. 
Excelente material italiano com estampa desenhada pelos 
artes�os da comunidade de Krotor nas ilhas gregas. 
Compre j� e receba hoje mesmo pela nossa entrega a jato.
</p> 
<table> 
<thead> 
<tr>
<th>Caracter�stica</th> 
<th>Detalhe</th> 
</tr> 
</thead>
<tbody> 
<tr>
<td>Modelo</td> 
<td>Cardig� 7845</td> 
</tr> 
<tr> 
<td>Material</td> 
<td>Algod�o e poliester</td> 
</tr> 
<tr> 
<td>Cores</td> 
<td>Azul, Rosa e Verde</td> 
</tr> 
<tr> 
<td>Lavagem</td> 
<td>Lavar a m�o</td> 
</tr> 
</tbody> 
</table>

</div> 

</div> 

<?php include("rodape.php"); ?> 
<script src="js/produto.js"></script> 

</body> 
</html>