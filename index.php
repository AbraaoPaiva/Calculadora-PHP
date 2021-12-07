<?php
require "calculos.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet">

</head>
<body>

<div class="jumbotron text-center">
  <h1>Calculadora em PHP</h1>
  <p>Utilizando PHP puro para realizar operações matemáticas</p>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
    <div class="titulo">
	<h3>Calculadora</h3>
	</div>
	  <form method="POST" action="calculos.php">

	  	<div class="form-group">
			<label for="usr">Digite o 1ª número:</label>
			<input type="number" name="n1" class="form-control">
		</div>
		<div class="form-group">
			<label for="usr">Digite o 1ª número:</label>
			<input type="number" name="n2" class="form-control">
		</div>

		<div class="form-group">
			<label for="sel1">Selecione uma operação:</label>
			<select class="form-control" name="operacao">
				<option value="somar">Somar</option>
				<option value="subtrair">Subtrair</option>
				<option value="dividir">Dividir</option>
				<option value="multiplicar">Multiplicar</option>
			</select>
		</div>

		
		
		<input type="submit" class="btn btn-success btn-block" name="Calcular">
		
	  </form>

	  <?php
				if ($_SESSION["total"]) {
					echo "<div class='alert alert-success sucesso' >
							<strong>Sucesso!</strong> O RESULTADO É: ".$_SESSION["total"]."
				  		  </div>";					
				}else{
					echo "Digite dois números para poder calcular";
				}

	  ?>
    </div>
    <div class="col-sm-4">
    </div>
 </div>
 <h2>Sobre</h2>
  <p>Sistema de calculadora criado por</p>
  <div class="card" style="width:250px">
    <img class="card-img-top" src="eu.jfif" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Abraão Paiva</h4>
      <p class="card-text">Desenvolvedor web | React | NodeJS | PHP | HTML | CSS </p>
      <a href="https://www.linkedin.com/in/abraaopaiva/" class="btn btn-primary">Linkedin</a>
    </div>
  </div>
</div>

</body>
</html>