<?php 

  $x = $_POST["x"];
  $desimal = $_POST["desimal"];

  // Arrays Dari DataX
  $datax = array();
  $datax[0] = $_POST["x0"];
  $datax[1] = $_POST["x1"];
  $datax[2] = $_POST["x2"];
  $datax[3] = $_POST["x3"];

  // Arrays Dari DataF(X)
  $dataf = array();
  $dataf[0] = $_POST["f0"];
  $dataf[1] = $_POST["f1"];
  $dataf[2] = $_POST["f2"];
  $dataf[3] = $_POST["f3"];

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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | Methode Numerik Interpolasi Newton</title>
  <style>
    td, input {
      text-align: center;
    }
  </style>
</head>
<body>
  <h1>Numerik Interpolasi Newton</h1>
  <form action="index.php" method="post">
    <p>Tentukan prakiraan nilai f pada titik x = <input type="number" name="x" value="8"> dengan menggunakan metode interpolasi newton dengan ketelitian hingga <input type="number" name="desimal" value="2" /></label> desimal, jika diketahui :</p>

    <table border="1" cellpadding="5" >
      <tr>
        <td>X</td>
        <td><input type="number" name="x0" value=0></td>
        <td><input type="number" name="x1" value=0></td>
        <td><input type="number" name="x2" value=0></td>
        <td><input type="number" name="x3" value=0></td>
      </tr>
      <tr>
        <td>F(X)</td>
        <td><input type="number" name="f0" value=0></td>
        <td><input type="number" name="f1" value=0></td>
        <td><input type="number" name="f2" value=0></td>
        <td><input type="number" name="f3" value=0></td>
      </tr>
    </table>
    <input type="submit" value="Hitung">
  </form>

  <table border="1" cellpadding="5" >
    <tr>
      <th>Iterasi</th><th>Xi</th><th>F(Xi)</th>
      <th>ST-1</th><th>ST-2</th><th>ST-3</th>
    </tr>
    <tr>
      <td>0</td>
      <td><?php echo number_format($datax[0], $desimal) ?></td>
      <td><?php echo number_format($dataf[0], $desimal) ?></td>
      <td><?php echo $st1[0]?></td>
      <td><?php echo $st2[0]?></td>
      <td><?php echo $st3[0]?></td>
    </tr>
    <tr>
      <td>1</td>
      <td><?php echo number_format($datax[1], $desimal) ?></td>
      <td><?php echo number_format($dataf[1], $desimal) ?></td>
      <td><?php echo $st1[1]?></td>
      <td><?php echo $st2[1]?></td>
      <td style="background-color: #000000"></td>
    </tr>
    <tr>
      <td>2</td>
      <td><?php echo number_format($datax[2], $desimal) ?></td>
      <td><?php echo number_format($dataf[2], $desimal) ?></td>
      <td><?php echo $st1[2]?></td>
      <td style="background-color: #000000"></td>
      <td style="background-color: #000000"></td>
    </tr>
    <tr>
      <td>3</td>
      <td><?php echo number_format($datax[3], $desimal) ?></td>
      <td><?php echo number_format($dataf[3], $desimal) ?></td>
      <td style="background-color: #000000"></td>
      <td style="background-color: #000000"></td>
      <td style="background-color: #000000"></td>
    </tr>
  </table>
  <h2>Hasilnya Adalah [ <?php echo $HASIL?> ]</h2>
</body>
</html>
