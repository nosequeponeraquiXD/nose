<?php
require_once 'cabecalho.php'
?>

<form action="media.php" method="GET">
	<h1>Média Aritmetica</h1>
	<p>De quantos números você quer a média?</p>
	<p><input type="number" name="quantidade" min="2" max="10" required></p>
	<p><input type="submit" name="botao" value="Começar"></p>

</form>
<?php

if (isset($_GET['botao'])&&isset($_GET['quantidade'])) {
	$quantidade=$_GET['quantidade'];
	echo "<form action='media.php' method='GET'>";
	echo "<h1>Digite:</h1>";
	$i=1;
	while ($i<=$quantidade) {
		echo "<p>o $i&ordm;:<input type='number' name='numero$i'></p>";
		$i++;
	}

	echo "<input type='hidden' name='quant' value='$quantidade'>";
	echo "<p><input type='submit' name='botao' value='Calcular'></p>";
	echo "</form>";

}else if(isset($_GET['botao'])&&isset($_GET['quant'])){
	$quantidade=$_GET['quant'];
	$numero=array();
	$media=0;
	for ($i=1;$i<$quantidade;$i++) { 
		$aux=$i+1;
		$numero[$i]=$_GET["numero$aux"];
		$media=$media+$numero[$i];
	}
	$media=$media/$quantidade;
	echo "<h2>A media para $quantidade números é $media</h2>";
}


?>
</body>
</html>