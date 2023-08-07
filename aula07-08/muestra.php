<?php
require_once 'cabecalho.php'
?>

<form action="muestra.php" method="POST">
	<h1>Digite 5 numeros</h1>
<?php
$i=1;
do {
	echo "<p>$i&ordm;:<input type='number' name='numero$i'</p>";
	$i++;
} while ($i<=5);
?>
<p><input type="submit" name="botao" value="Mostrar"></p>
</form>

<?php
	if (isset($_POST['botao'])) {
		$numero=array();
		$i=0;
		while ($i<5){
			$aux=$i+1;
			$numero[$i]=$_POST["numero$aux"];
			echo "$numero[$i] ";
			$i++;
		}

	}


?>
</body>
</html>