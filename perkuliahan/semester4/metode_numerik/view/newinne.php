<?php session_start(); ?>
    <!-- Header Buka -->
    <?php require_once ('header.php');?>
    <!-- Header Tutup -->
<h1>Numerik Interpolasi Newton</h1>
<form action="newinne.php" method="GET">
      Masukan Jumlah yang digunakan :
      <input type="text" name="jumlah_persamaan"><br><br>
      <input type="submit" value="Submit">
      <hr>
</form>

<?php 

// KUMPULAN VARIABEL

  // SAAT DI ISI
  $x  = 8;
  $desimal = 2;

  // Arrays Dari DataX
  $datax = array();
  $datax[0] = !empty($_POST['varX0']) ? $_POST['varX0'] : 1;
  $datax[1] = !empty($_POST['varX1']) ? $_POST['varX1'] : 2;
  $datax[2] = !empty($_POST['varX2']) ? $_POST['varX2'] : 3;
  $datax[3] = !empty($_POST['varX3']) ? $_POST['varX3'] : 4;
  $datax[4] = !empty($_POST['varX4']) ? $_POST['varX4'] : 5;

  // Arrays Dari DataF(X)
  $dataf = array();
  $dataf[0] = !empty($_POST['varF0']) ? $_POST['varF0'] : 1;
  $dataf[1] = !empty($_POST['varF1']) ? $_POST['varF1'] : 2;
  $dataf[2] = !empty($_POST['varF2']) ? $_POST['varF2'] : 3;
  $dataf[3] = !empty($_POST['varF3']) ? $_POST['varF3'] : 4;
  $dataf[4] = !empty($_POST['varF4']) ? $_POST['varF4'] : 5;

  //Arrays ST-1
  $st1[0] = number_format(($dataf[1] - $dataf[0])/($datax[1]-$datax[0]), $desimal);
  $st1[1] = number_format(($dataf[2] - $dataf[1])/($datax[2]-$datax[1]), $desimal);
  $st1[2] = number_format(($dataf[3] - $dataf[2])/($datax[3]-$datax[2]), $desimal);

  //Arrays ST-2
  $st2[0] = number_format(($st1[1] - $st1[0])/($datax[2] - $datax[0]), $desimal);
  $st2[1] = number_format(($st1[2] - $st1[1])/($datax[3] - $datax[1]), $desimal);

  //Arrays ST-3
  $st3[0] = number_format(($st2[1] - $st2[0])/($datax[3] - $datax[0]), $desimal);

  $K0 = $x - $datax[0];
  $K1 = $K0 * ($x - $datax[1]);
  $K2 = $K1 * ($x - $datax[2]);
  $HASIL = number_format( ($dataf[0] + ($st1[0] * $K0) + ($st2[0] * $K1) + ($st3[0] * $K2)), $desimal);
 
?>

<?php
if(isset($_GET['jumlah_persamaan'])){
    if( !empty($_GET['jumlah_persamaan'])){
            $jumlah_persamaan= $_GET['jumlah_persamaan'];
			
            buatForm($jumlah_persamaan);
            $_SESSION['jumlah_persamaan']= $jumlah_persamaan;
    }else{
		echo 'Yang kosong harus diisi';
	}
}
?>

<?php
echo '
	<h3>HASIL TABEL</h3>
	<table border="1" cellpadding="5" >
    <tr>
      <th>Iterasi</th><th>Xi</th><th>F(Xi)</th>
      <th>ST-1</th><th>ST-2</th><th>ST-3</th>
    </tr>
	
    <tr>
      <td>0</td>
      <td>'.number_format($datax[0], $desimal).'</td>
      <td>'.number_format($dataf[0], $desimal).'</td>
      <td>'.$st1[0].'</td>
      <td>'.$st2[0].'</td>
      <td>'.$st3[0].'</td>
    </tr>
	
    <tr>
      <td>1</td>
      <td>'.number_format($datax[1], $desimal).'</td>
      <td>'.number_format($dataf[1], $desimal).'</td>
      <td>'.$st1[1].'</td>
      <td>'.$st2[1].'</td>
      <td style="background-color: #000000"></td>
    </tr>
	
    <tr>
      <td>2</td>
      <td>'.number_format($datax[2], $desimal).'</td>
      <td>'.number_format($dataf[2], $desimal).'</td>
      <td>'.$st1[2].'</td>
      <td style="background-color: #000000"></td>
      <td style="background-color: #000000"></td>
    </tr>
	
    <tr>
      <td>3</td>
      <td>'.number_format($datax[3], $desimal).'</td>
      <td>'.number_format($dataf[3], $desimal).'</td>
      <td style="background-color: #000000"></td>
      <td style="background-color: #000000"></td>
      <td style="background-color: #000000"></td>
    </tr>
	
	<tr>
      <td>4</td>
      <td>'.number_format($datax[4], $desimal).'</td>
      <td>'.number_format($dataf[4], $desimal).'</td>
      <td style="background-color: #000000"></td>
      <td style="background-color: #000000"></td>
      <td style="background-color: #000000"></td>
    </tr>
  </table>';
?>  

<?php
function buatForm($jumlah_persamaan){
	echo '<form action="newinne.php" method="POST"><table border="1">';
	
			echo '<tr><td>X</td>';
            for($i=0; $i<$jumlah_persamaan;$i++){
				echo '<td><input type="text" name="varX'.$i.'"></td>';
            } echo '</tr>';
			
			echo '<tr><td>F(X)</td>';
			for($j=0; $j<$jumlah_persamaan;$j++){
				echo '<td><input type="text" name="varF'.$j.'"></td>';
            }	echo '</tr>';
      echo '</table><br><input type="submit" value="Submit"><hr></form>';
}

?>

