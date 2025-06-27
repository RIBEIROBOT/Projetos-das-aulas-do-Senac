<?php require_once '../cabecalho.php' ?>
	<section class="primeira">
		<h1>FACILITADOR PARA MOTORISTAS</h1>
<?php
	$nome=$_POST['nome'];
	$pagamento_por_pessoa=$_POST['pagp'];
	$total_do_diap=$_POST['totalp'];
	$km_inicial=$_POST['kmi'];
	$km_final=$_POST['kmf'];
	$litros=$_POST['litros'];
	$km_percorrido=$km_final-$km_inicial;
	$gasolina_pkm=$km_percorrido/$litros;
	$pagamento_recebido=$pagamento_por_pessoa*$km_percorrido;
	$mediap=$pagamento_recebido/$total_do_diap;
	$gasto_gasosa=$gasolina_pkm*6.28;
	$total=$pagamento_recebido-$gasto_gasosa;
	$mediap=number_format($mediap,2,",",".");
	$total=number_format($total,2,",",".");
	$gasto_gasosa=number_format($gasto_gasosa,2,",",".");
	$avaliacao=$_POST['avaliacao'];
	
	echo "<p>Ola tudo bem $nome?</P>";
	echo "<p>gostariamos de lhe informar que no dia de hj:</P>";
	echo "  <ul>
				<li>
					<p>
						- Seu carro correu um total de $km_percorrido KM,
					</p>
				</li>
				<li>
					<p>
						- Seu carro esta gastando cerca de $gasolina_pkm litros por KM rodado,
					</p>
				</li>
				<li>
					<p>
						- Você teve um gasto de R$:$gasto_gasosa em gasolina hj,
					</p>
				</li>
				<li>
					<p>
						- Porem teve um ganho de R$:$pagamento_recebido,
					</p>
				</li>
				<li>
					<p>
						- Obteve uma media de R$:$mediap por passageiro levado,
					</p>
				</li>
				<li>
					<p>
						- Ficando com um total de R$:$total, 
					</p>
				</li>
			</ul>";

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