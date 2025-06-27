<?php require_once '../cabecalho.php' ?>

<form action="instituicao.php" method="GET">
	<h1>
		Questionario
	</h1>
	<p>
		Qual a sua Instituição favorita ?
	</p>
	<p>
		<input type="text" name="inst" size="20" maxlength="10" pattern="[a-zA-Z\sçãÃéÉ]{2,120}" required>
	</p>
	<p>
		<input type="submit" name="botao" value="Confirmar">
	</p>
</form>
<?php
	if (isset($_GET['botao'])) {
	  	$instituicao=$_GET['inst'];
	  	echo "<section class='primeira'>";
	  	if (strtolower($instituicao)=='Senac') {
	  		echo "<p>Que massa, que bom que vc tambem gosta do Senac como eu :)</p>";
	  	} else {
	  		echo "<p>Serião? eu queria que vc gostasse do Senac tanto quanto eu :(</p>";
	  	}
	  	echo "</section>";
	  }  
?>
</body>
</html>