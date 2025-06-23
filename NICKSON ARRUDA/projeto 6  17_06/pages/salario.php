<?php require_once '../cabecalho.php' ?>

	<form action="salario2.php" method="POST">
		<h1>
			Calculo do salario bruto
		</h1>
		<p>
			Digite seu nome:
		</p>
		<p>
			<input type="text" name="nome" size="50" maxlength="50" required>
		</p>
		<p>
			Digite a quantidade de horas trabalhadas:
		</p>
		<p>
			<input type="number" name="horast" min="1" max="176" step="1" required>
		</p>
		<p>
			Digite o valor da hora em R$:
		</p>
		<p>
			<input type="number" name="valorh" min="1" step="0.01" required>
		</p>
		<p>
			Você gostou dos nosso site?
		</p>
		<p>
			<input type="radio" name="avaliacao" value="sim">sim
			<input type="radio" name="avaliacao" value="não">não
		</p>
		<p>
			<input type="submit" name="botao" value="Calcular">
		</p>
	</form>
</body>
</html>