<?php require_once '../cabecalho.php' ?>

<form action="apple.php" method="GET">
	<h1>
		Compra de maçâs
	</h1>
	<p>
		Quantidade
	</p>
	<p>
		<input type="number" name="numero" min="0" step="1" required>
	</p>
	<p>
		<input type="submit" name="botao" value="Comprar">
	</p>
</form>
<?php
	if (isset($_GET['botao'])) {
	  	$numero=$_GET["numero"];
	  	echo "<section class='primeira'>";
	  	if($numero<12) {
	  		$valors=$numero*4.00;
	  		echo "<p>o preço vai ser de R$$valors</p>";
	  	}
	    else if ($numero>12) {
	  		$valord=$numero*3.00;
	  		echo "<p>o preço vai ser de R$$valord</p>";
	  	}
	  	echo "</section>";
	  }  
?>
</body>
</html>