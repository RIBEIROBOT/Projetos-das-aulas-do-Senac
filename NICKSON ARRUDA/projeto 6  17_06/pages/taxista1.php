<?php require_once '../cabecalho.php' ?>

	<form action="taxista2.php" method="POST">
		<h1>
			Facilitador de um Motorista
		</h1>
		<p>
			Digite seu nome:
		</p>
		<p>
			<input type="text" name="nome" size="50" maxlength="50" required>
		</p>
		<p>
			Pagamento do passageiro por KM rodado(4,70):
		</p>
		<p>
			R$:<input type="number" name="pagp" min="0.01" max="25" step="0.01" required>
		</p>
		<p>
			Total de passageiros do dia:
		</p>
		<p>
			<input type="number" name="totalp" min="0" max="999999" step="1" required>
		</p>
		<p>
			kilometragem inicial:
		</p>
		<p>
			<input type="number" name="kmi" min="0" max="9999999999" step="1" required>
		</p>
		<p>
			kilometragem final:
		</p>
		<p>
			<input type="number" name="kmf" min="0" max="9999999999" step="1" required>
		</p>
		<p>
			litros de gasolina gastos hj:
		</p>
		<p>
			<input type="number" name="litros" min="0" max="999" step="1" required>
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