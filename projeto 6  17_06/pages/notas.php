<?php require_once '../cabecalho.php' ?>

<form action="notas.php" method="GET">
	<h1>
		Calculo de nota
	</h1>
	<p>
		Nome do aluno:
	</p>
	<p>
		<input type="text" name="nome" size="80" maxlength="50" pattern="[a-zA-Z\sçãÃéÉáÁíÍóÓúÚâÂ0-9]{2,80}" required>
	</p>
	<p>
		Digite a nota do 1<sup>o</sup> trimestre:
	</p>
	<p>
		<input type="numero" min="1" max="100" name="nota1" required>
	</p>
	<p>
		Digite a nota do 2<sup>o</sup> trimestre:
	</p>
	<p>
		<input type="numero" min="1" max="100" name="nota2" required>
	</p>
	<p>
		Digite a nota do 2<sup>o</sup> trimestre:
	</p>
	<p>
		<input type="numero" min="1" max="100" name="nota3" required>
	</p>
	<p>
		<input type="submit" name="botao" value="Comparar">
	</p>
</form>
<?php
	if (isset($_GET['botao'])) {
	  	$nome=$_GET['nome'];
	  	$nota1=$_GET['nota1'];
	  	$nota2=$_GET['nota2'];
	  	$nota3=$_GET['nota3'];
	  	$resultado=($nota1+$nota2+$nota3)/3;
	  	if ($resultado>=60){
	  		$final="aprovado";
		} else if ($resultado<60) {
			$final="reprovado";
		}
	  		
	  	echo "<section class='primeira'>";
	  	 echo "<p>caro $nome sua media é $resultado e você esta $final</p>";
	  	echo "</section>";
	 }  
?>
</body>
</html>