<?php require_once '../cabecalho.php' ?>

	<form action="idade2.php" method="GET">
		<h1>
			Calculo da Idade
		</h1>
		<p>
			Digite seu nome:
		</p>
		<p>
			<input type="text" name="nome" size="50" maxlength="50" required>
		</p>
		<p>
			Digite seu ano de nascimento:
		</p>
		<p>
			<input type="number" name="ano" 
			min="<?php 
			$data=new DateTime(date('Y'));
			$data=date_modify($data,'-125 years');
	 		echo $data->format('Y');
	 		?>" 
			max="<?= date('Y')?>" step="1" required>
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