<form action="postYget.php" method="post">
	nom: <input name="nombre"><br>
	sexo: 
		m <input type="radio"name="sexo" value="masc">
		f <input type="radio"name="sexo" value="fem">
	<br>	
	dni: <input name="dni"><br>
	pass: <input name="clave" type="password"><br>
	<input type="submit">
</form>
<?php

echo "Base: " . $_GET['b'];
echo "<br>";
echo "Altura: " . $_GET['h'];
echo "<hr>";
echo "Perimetro: " . ((2 * $_GET['b']) + (2 * $_GET['h']));
echo "<br>";
echo "Superficie: " . $_GET['b'] * $_GET['h'];

?>
<form action="postYget.php" method="get">
	nom: <input name="nombre"><br>
	sexo: 
		m <input type="radio"name="sexo" value="masc">
		f <input type="radio"name="sexo" value="fem">
	<br>	
	dni: <input name="dni"><br>
	pass: <input name="clave" type="password"><br>
	<input type="submit">
</form>