<?php require_once '../cabecalho.php' ?>

	<form action="triangulo2.php" method="GET">
		<p>
			Base:
		</p>
		<p>
			<input type="number" name="basic" min="0" step="0.1" required>
		</p>
		<p>
			Altura:
		</p>
		<p>
			<input type="number" name="alt" min="0" step="0.1" required>
		</p>
		<p>
			Você gostou dos nosso site?
		</p>
		<p>
			<input type="radio" name="avaliacao" value="sim" required>sim
			<input type="radio" name="avaliacao" value="não" required>não
		</p>
		<p>
			<input type="submit" name="botao" value="Calcular">
		</p>
	</form>	
</body>
</html>