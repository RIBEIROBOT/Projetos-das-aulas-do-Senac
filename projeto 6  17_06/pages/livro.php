<?php require_once '../cabecalho.php' ?>

<form action="livro.php" method="GET">
	<h1>
		Questionario
	</h1>
	<p>
		Autor 1:
	</p>
	<p>
		<input type="text" name="au1" size="80" maxlength="50" pattern="[a-zA-Z\sçãÃéÉáÁíÍóÓúÚâÂ0-9]{2,120}" required>
	</p>
	<p>
		Livro 1:
	</p>
	<p>
		<input type="text" name="li1" size="80" maxlength="50" pattern="[a-zA-Z\sçãÃéÉ0-9]{2,120}" required>
	</p>
	<p>
		N<sup>0</sup> de paginas
	</p>
	<p>
		<input type="numero" min="1" name="npag1">
	</p>
	<p>
		Autor 2:
	</p>
	<p>
		<input type="text" name="au2" size="80" maxlength="50" pattern="[a-zA-Z\sçãÃéÉ0-9]{2,120}" required>
	</p>
	<p>
		Livro 2:
	</p>
	<p>
		<input type="text" name="li2" size="80" maxlength="50" pattern="[a-zA-Z\sçãÃéÉ0-9]{2,120}" required>
	</p>
	<p>
		N<sup>0</sup> de paginas
	</p>
	<p>
		<input type="numero" min="1" name="npag2">
	</p>
	<p>
		<input type="submit" name="botao" value="Comparar">
	</p>
</form>
<?php
	if (isset($_GET['botao'])) {
	  	$livro1=$_GET['li1'];
	  	$livro2=$_GET['li2'];
	  	$autor1=$_GET['au1'];
	  	$autor2=$_GET['au2'];
	  	$numero_de_paginas1=$_GET['npag1'];
	  	$numero_de_paginas2=$_GET['npag2'];
	  	echo "<section class='primeira'>";
	  	if ($numero_de_paginas1<$numero_de_paginas2) {
	  		echo "<p>o livro $livro2 do autor $autor2 é maior que o livro $livro1 do autor $autor1</p>";
	  	} else if ($numero_de_paginas1>$numero_de_paginas2) {
	  		echo "<p>o livro $livro1 do autor $autor1 é maior que o livro $livro2 do autor $autor2</p>";
	  	} else {
	  		echo "<p>ambos os livros tem o mesmo tamanho</p>";
	  	}
	  	
	  	echo "</section>";
	  }  
?>
</body>
</html>