<?php 

session_start();
session_destroy();?>

    <!-- Header Buka -->
    <?php require_once ('header.php');?>
    <!-- Header Tutup -->
<h1>
Hasil dalam bentuk matriks</h1>
<?php
           
            $koefisien = array(array());
           
            if(isset($_SESSION['jumlah_persamaan'])){
                  $jumlah_persamaan = $_SESSION['jumlah_persamaan'];
                  buatArray($jumlah_persamaan);
                  echo '<h3>Tampilan Matrik Pertama</h3>
';
                  tampilkanMatrik($koefisien);
                  ubah($jumlah_persamaan);
                  kesimpulan($jumlah_persamaan);
                 
            }
           
            function kesimpulan($jumlah_persamaan){
                  global $koefisien ;
                  echo 'Sehingga: ' ;
                  for($i=0; $i<$jumlah_persamaan;$i++){
                        echo '<br>X<sub>'.$i .'</sub>: ' ;
                        for($j=0; $j<$jumlah_persamaan+1;$j++){
                              if ($j==$jumlah_persamaan){
                                    echo $koefisien[$i][$j];
                              }
                        }
                  }
           
            }

            function buatArray($jumlah_persamaan){
                  global $koefisien ;
                  for($i=0; $i<$jumlah_persamaan;$i++){
                        for($j=0; $j<$jumlah_persamaan+1;$j++){
                              if(isset($_GET['var'.$i.$j])){
                        $koefisien[$i][$j] = $_GET['var'.$i.$j];
                              }
                        }
                  }
            }
           
            function tampilkanMatrik($koefisien){
                  echo '<table border="2">';
                  $rows =     count($koefisien);
                 
                  for($i=0; $i<$rows;$i++){
                        $cols = count($koefisien[$i]);
                        echo '
<tr>';
                        for($j=0; $j<$cols;$j++){
                        echo '<td>';
                        echo $koefisien[$i][$j] .'   ';
                                    echo '</td>';
                        }
                        echo '</tr>
';
                  }
                  echo '</table>
';
                  echo '<hr>
';
            }
           
      function ubah($persamaan){
      global $koefisien ;
            for($i=0;$i<$persamaan;$i++){
                  $persamaan_pivot = $i + 1;
            echo 'Persamaan '.$persamaan_pivot.' menjadi pivot dan ';
                  $pivot = $koefisien[$i][$i];
                  for($j=0;$j<$persamaan+1;$j++){
                        $koefisien[$i][$j]=$koefisien[$i][$j]/$pivot;
                  }
                 
                  for($k=0;$k<$persamaan;$k++){
                        if($k!=$i){
                              $pivot = $koefisien[$k][$i];
                              for($l=0;$l<$persamaan+1;$l++){
$koefisien[$k][$l]=$koefisien[$k][$l]-$pivot*$koefisien[$i][$l];
                              }
                       
                        }
                        $persamaan_ubah = $k +1 ;
                  echo 'Persamaan '. $persamaan_ubah .' telah dirubah';
                        tampilkanMatrik($koefisien);
                  }
                 
            }    
      }
                       
?>