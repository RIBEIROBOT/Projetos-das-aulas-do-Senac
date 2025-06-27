<?php require_once '../cabecalho.php' ?>
	<section class="primeira">
		<h1>Salario bruto</h1>
<?php
	$nome=$_POST['nome'];
	$horast=$_POST['horast'];
	$valorh=$_POST['valorh'];
	$avaliacao=$_POST['avaliacao'];
	$salario_bruto=$horast*$valorh;
	echo "<p>Caro(a) $nome,</p>";
	echo "<p>Seu salario bruto é de R$:$salario_bruto</p>";
	if ($avaliacao=="sim") {
		echo "<p class=resposta><strong>Obrigado, tambem gostamos de você :)</strong></p>";
	} 
	else if ($avaliacao=="não") {
		echo "<p class=resposta><strong>Obrigado pelo feedback, mas poderia nos dizer o porque você não gosta do nosso site?</strong></p>";
	}
?>		
	</section>
	</section>
	<style>
		p.resposta{
		margin-top: 4.5vh;
	}
	</style>
</body>
</html>