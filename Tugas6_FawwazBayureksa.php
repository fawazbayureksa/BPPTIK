<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://grapedrop.com/css/gjs-base.css?id=d0383dd1e92b8b8ea83e">
</head>
<body>
<div id="ixf4" data-gjs-type="wrapper">
  <section class="gpd-section" id="if1z" data-gjs-type="section">
    <div class="gpd-container gpd-cnt" id="id2h" data-gjs-type="container">
      <div class="gpd-text" id="ioxh" data-gjs-type="text">NILAI PESERTA PELATIHAN
      </div>
    </div>
  </section>
  <section class="gpd-section" id="ikjn" data-gjs-type="section">
    <div class="gpd-container gpd-cnt" id="izuu" data-gjs-type="container">
      <div class="gpd-text" data-gjs-type="text">Input Nilai
      </div>
      <form method="post" class="form" id="isig" data-gjs-type="form">
        <div class="form-group" data-gjs-type="default" data-gjs-draggable="form, form *" data-gjs-custom-name="Form Group">
          <label class="label" data-gjs-type="label">Nilai Praktek<br></label>
          <input type="number" placeholder="Masukkan Nilai Praktek" name="praktek" class="input" data-gjs-type="input"/>
        </div>
        <div class="form-group" data-gjs-type="default" data-gjs-draggable="form, form *" data-gjs-custom-name="Form Group">
          <label class="label" data-gjs-type="label">Nilai Pilihan Ganda</label>
          <input type="number" placeholder="Masukkan Nilai Pilihan Ganda" name="pil" class="input" data-gjs-type="input"/>
          <div class="form-group" data-gjs-type="default" data-gjs-draggable="form, form *" data-gjs-custom-name="Form Group">
            <label class="label" data-gjs-type="label">Nilai Kehadiran</label>
            <input type="number" placeholder="Masukkan Nilai Kehadiran" name="hadir" class="input" data-gjs-type="input"/>
          </div>
          <div class="form-group" data-gjs-type="default" data-gjs-draggable="form, form *" data-gjs-custom-name="Form Group">
            <label class="label" data-gjs-type="label">Nilai Sikap</label>
            <input type="number" placeholder="Masukkan Nilai Sikap" name="sikap" class="input" data-gjs-type="input"/>
          </div>
        </div>
        <div class="form-group" data-gjs-type="default" data-gjs-draggable="form, form *" data-gjs-custom-name="Form Group">
          <button type="submit" class="button" id="i1ajh" data-gjs-type="button" name="hitung" data-gjs-text="Hitung">Hitung</button>
        </div>
        <div data-form-state="success" class="state-success" id="it78f" data-gjs-type="text" data-gjs-form-state-type="success">Thanks! We received your request
        </div>
        <div data-form-state="error" class="state-error" id="i300u" data-gjs-type="text" data-gjs-form-state-type="error">An error occurred on processing your request, try again!
        </div>
      </form>
     
    </div>
  </section>
</div>
</body>
</html>

<?php 


	if (isset($_POST['hitung'])){

		$praktek = $_POST['praktek'];
		$pil = $_POST['pil'];
		$hadir = $_POST['hadir'];
		$sikap = $_POST['sikap'];

		$np = 0.6*$praktek;
		$npil = 0.3*$pil;
		$nh = 0.05*$hadir;
		$ns = 0.05*$sikap;

		$na = $np+$npil+$nh+$ns;

		if (($na >= 100) || ($na < 0) ) {
			$Kriteria= "nilai tidak valid";
		}
		elseif ($na >= 95) {
			$Kriteria= "memuaskan";
			}	
		elseif ($na >= 85) {
			$Kriteria= "Baik Sekali";
		}
		elseif ($na >= 75) {
			$Kriteria= "Baik ";
		}elseif ($na >= 65) {
			$Kriteria= "Cukup";
		}else {
			$Kriteria= "Tidak Lulus";
		}

		echo '<div class="gpd-text" id="ip2sl" data-gjs-type="text">Nilai Akhir :&nbsp '.$na.';
        <br>Kriteria Kelulusan : '.$Kriteria.'
      </div>';

	}

	

 ?>

