<?php
require_once 'cabecalho.php';


$media=0;
for ($i=1;$i<=100;$i++) { 
	$media=$media+$i; //somando os numeros de 1 ate 100
}
$media=$media/100;

echo "<h2>A média de 1 a 100 é $media</h2>";

?>

</body>
</html>