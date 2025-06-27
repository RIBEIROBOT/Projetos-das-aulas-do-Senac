<?php require_once '../cabecalho.php' ?>

<form action="parouimpar.php" method="GET">
	<h1>
		Par ou Impar
	</h1>
	<p>
		Digite um numero
	</p>
	<p>
		<input type="number" name="numero" min="0" step="1" required>
	</p>
	<p>
		<input type="submit" name="botao" value="Verificar">
	</p>
</form>
<?php
	if (isset($_GET['botao'])) {
	  	$numero=$_GET["numero"];
	  	echo "<section class='primeira'>";
	  	if($numero%2==0) {
	  		echo "<p>$numero é par</p>";
	  	}else{
	  		echo "<p>$numero é impar</p>";
	  	}
	  	echo "</section>";
	  }  
?>
</body>
</html>