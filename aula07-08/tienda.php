<?php
require_once'cabecalho.php'

?>

<form action="tienda.php" method="POST">
	<h1>Loja de Produtos</h1>
	<p>Pegue o Porduto</p>
	<p><input type="radio" name="prato" value="coca">Coca
			<input type="radio" name="prato" value="pepsi">Pepsi
			<input type="radio" name="prato" value="fanta">Fanta
			<input type="radio" name="prato" value="guarana">Guarana
			<input type="radio" name="prato" value="limonada">Limonada</p>
			<p>Quantidade:<input type="number" name="quantidade" min="1" max="5"></p>
	<p><input type="submit" name="botao" value="Mostrar"></p>

</form>
<?php
if (isset($_POST['botao'])) {
	$prato=$_POST['prato'];
	$quantidade=$_POST['quantidade'];
	switch ($prato) {
		case 'coca':
			$total=$quantidade*4.00;
			break;
		case 'pepsi':
			$total=$quantidade*3.70;
			break;
		case 'fanta':
			$total=$quantidade*3.50;
			break;
		case 'guarana':
			$total=$quantidade*3.00;
			break;
		case 'limonada':
			$total=$quantidade*2.50;
			break;
		/*default:
		
			break;*/
	}
	echo "<h2>Para $quantidade unidade(s) de $prato o total é R$ $total</h2>";
}


?>
</body>
</html>