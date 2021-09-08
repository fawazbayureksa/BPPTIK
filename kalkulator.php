<style>
.container{
width: 17%;
margin:auto;
border: 1px solid #111;	
padding:7px;
}	
</style>
<?php
echo "
<div class='container'>
<form action='' method='post'>
<p>Bilangan1 <input type='text' name='bilangan1'></p>
<p><input type='Radio' name='operasi' value='tambah'>+ <span style='font-size:10px;'>( penjumlahan )</span></p>
<p><input type='Radio' name='operasi' value='kurang'>- <span style='font-size:10px;'>( pengurangan )</span></p>
<p><input type='Radio' name='operasi' value='bagi'>/ <span style='font-size:10px;'>( pembagian )</span></p>
<p><input type='Radio' name='operasi' value='kali'>x <span style='font-size:10px;'>( perkalian )</span></p>
<p>Bilangan2 <input type='text' name='bilangan2'></p>
<input type='submit' name='submit' value='Submit'>
</form>	
</div>
";
 
include "Kalkulator.php";
 
$kalkulator = new Kalkulator;
 
 if(isset($_POST['submit'])){
	$kalkulator->setOperasi($_POST['bilangan1'],$_POST['bilangan2'], $_POST['operasi']);
	echo $kalkulator->getOperasi();
 }
class Kalkulator
	{
    
		public function setOperasi($bilangan1,$bilangan2,$operasi)
		{
			if($operasi == 'tambah'){
      $this->hasil = $bilangan1 + $bilangan2;
			}else if($operasi == 'kurang'){
      $this->hasil = $bilangan1 - $bilangan2;
			}else if($operasi == 'bagi'){
      $this->hasil = $bilangan1 / $bilangan2;
			}else if($operasi == 'kali'){
      $this->hasil = $bilangan1 * $bilangan2;
			}
			return $this->hasil;
		}
 
		public function getOperasi()
		{
			$html = '<p>Hasil: '.$this->hasil.'</p>';
			return $html;
		}
 
		
	}
 ?>