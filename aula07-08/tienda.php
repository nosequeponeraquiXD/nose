<?php
require_once'cabecalho.php'

?>

<form action="tienda.php" method="GET">
		<h1>Loja</h1>
		<p>Cuantos produtos você quer?</p>
		<p><input type="number" name="quantidade" min="1" max="5" required></p>
		<p><input type="submit" name="botao" value="Começar"></p>
	</form>
<?php
if (isset($_GET['botao'])&&isset($_GET['quantidade'])) {
	$quantidade=$_GET['quantidade'];
	echo "<form action='tienda.php' method='GET'>";
	echo "<h1>Digite:</h1>";
	$i=1;
	while ($i<=$quantidade) {
		echo "<p>o $i&ordm; produto <input type='text' name='produto$i'></p>";
		echo "<p>o preço <input type='number' name='preco$i'></p> ";

		$i++;
	}

	echo "<input type='hidden' name='quant' value='$quantidade'></p>";
	echo "<p><input type='submit' name='botao' value='Calcule'></p>";
	echo "</form>";

}else if (isset($_GET['botao'])&&isset($_GET['quant'])) {
	$quantidade=$_GET['quant'];
	$produto=array();
	$preco=array();
	$cont=0;
	$total=0;
	while ($cont<$quantidade) {
		$aux=$cont+1;
		$produto[$cont]=$_GET["produto$aux"];
		echo "<h2>$produto[$cont]</h2>";
		$preco[$cont]=$_GET["preco$aux"];
		$total=$total+$preco[$cont];
		$cont++;
	}
	echo "<h2>o total é R$ $total<h2>";


}
?>
</body>
</html>