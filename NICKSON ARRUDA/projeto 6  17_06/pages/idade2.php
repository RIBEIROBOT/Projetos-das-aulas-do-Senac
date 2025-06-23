<?php require_once '../cabecalho.php' ?>
	<section class="primeira">
		<h1>Idade do Individuo</h1>
<?php
	$nome=$_GET['nome'];
	$ano=$_GET['ano'];
	$avaliacao=$_GET['avaliacao'];
	$idade=date('Y')-$ano;
	
	echo "<p>Querido $nome, podemos com certeza afirmar que sua idade é de $idade anos</p>";

	if ($avaliacao=="sim") {
		echo "<p class=resposta><strong>Obrigado, tambem gostamos de você :)</strong></p>";
	} 
	else if ($avaliacao=="não") {
		echo "<p class=resposta><strong>Obrigado pelo feedback, mas poderia nos dizer o porque você não gosta do nosso site?</strong></p>";
	}
?>		
	</section>
	<style>
		p.resposta{
		margin-top: 4.5vh;
	}
	</style>
</body>
</html>