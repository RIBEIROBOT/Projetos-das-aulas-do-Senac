<?php require_once '../cabecalho.php' ?>

	<section class=primeira>
		<h1>
			Cálculos simples
		</h1>
	<?php
		$numero1=4;
		$numero2=2;
		$soma=$numero1+$numero2;
		$subtracao=$numero1-$numero2;
		$produto=$numero1*$numero2;
		$divisao=$numero1/$numero2;
		$potenciacao=pow($numero1, $numero2);
		$raiz1=sqrt($numero1);
		$raiz2=sqrt($numero2);
		echo "<p>O numero1 é <b>$numero1</b></p>";
		echo "<p>O numero2 é <b>$numero2</b></p>";	
		echo "<p>A soma de <b>$numero1</b> + <b>$numero2</b> = <b>$soma</b></p>";		
		echo "<p>A subtracão de <b>$numero1</b> - <b>$numero2</b> = <b>$subtracao</b></b></p>";		
		echo "<p>O produto de <b>$numero1</b> x <b>$numero2</b> = <b>$produto</b></p>";	
		echo "<p>A divisão de <b>$numero1</b> &divide; <b>$numero2</b> = <b>$divisao</b></p>";		
		echo "<p>A potenciaçaõ de <b>$numero1</b><sup><b>$numero2</b></sup> = <b>$potenciacao</b></p>";
		echo "<p>A raiz de &radic;<b>$numero1</b> = <b>$raiz1</b> e a de &radic;<b>$numero2</b> = <b>$raiz2</b></p>";
	?>
	</section>
</body>
</html>	