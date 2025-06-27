<?php require_once '../cabecalho.php' ?>
	<section class="primeira">
		<h1>Area triangulo</h1>
<?php

	$base=$_GET['basic'];
	$altura=$_GET['alt'];
	$area=($base*$altura)/2;
	$avaliacao=$_GET['avaliacao'];

	echo "<p>A area do triangulo é $area</p>";

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