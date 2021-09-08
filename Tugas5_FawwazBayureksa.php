<!DOCTYPE html>
<html>
<head>
	<title>Tugas 5</title>
</head>
<body>
	<?php 

	$a = 9;
	$b = 3;

	function Penjuamlahan($a,$b){
		return $a+$b;
	}
	function Pengurangan($a,$b){
		return $a-$b;
	}
	function Perkalian($a,$b){
		return $a*$b;
	}
	function Pembagian($a,$b){
		return $a/$b;
	}

	echo "Bilangan 1 : $a ";
	echo "<br>";
	echo "Bilangan 2 : $b ";
	echo "<hr>";
	echo "<hr>";

	echo "Hasil penjumlahan adalah : ".Penjuamlahan($a,$b);
	echo "<br>";

	echo "Hasil pengurangan adalah : ".Pengurangan($a,$b);
	echo "<br>";

	echo "Hasil perkalian adalah : ".Perkalian($a,$b);
	echo "<br>";
	
	echo "Hasil pembagian adalah : ".Pembagian($a,$b);


	 ?>
</body>
</html>