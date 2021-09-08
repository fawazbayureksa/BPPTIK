<!DOCTYPE html>
<html>
<head>
	<title>Tugas 4</title>
</head>
<body>

	<form method="post">
		<label>Jumlah Bintang  = </label>
		<input type="number" name="bintang">
		<br>
		<button name="kirim" type="submit">Kirim</button>
	</form>
	<br>
	<br>
<?php 
	
	if (isset($_POST['kirim'])){

	$x = $_POST['bintang'];

	for ($i=1; $i <= $x ; $i++) { 
		for ($j=1; $j <= $i ; $j++) { 
			echo "*";
		}
			echo "<br>";
	}

}

	
 ?>	
</body>
</html>