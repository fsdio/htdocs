<?php
require 'paket.php';
if( !empty($_POST["nama_pengirim"]) || !empty($_POST["nama_penerima"])
 || !empty($_POST["no_wa_pengirim"]) || !empty($_POST["no_wa_penerima"]) || !empty($_POST["jenis_paket"])
  || !empty($_POST["berat_paket"]) || !empty($_POST["alamat_penerima"])) {
    $nama_pengirim = $_POST["nama_pengirim"];
    $nama_penerima = $_POST["nama_penerima"];
    $no_wa_pengirim = $_POST["no_wa_pengirim"];
    $no_wa_penerima = $_POST["no_wa_penerima"];
    $jenis_paket = $_POST["jenis_paket"];
    $berat_paket = $_POST["berat_paket"];
    $alamat_penerima = $_POST["alamat_penerima"];
    $db = new Database;
    $query = "insert into paket(nama_pengirim,nama_penerima,no_wa_pengirim,no_wa_penerima,jenis_paket,berat_paket,alamat_penerima)
     values ('$nama_pengirim','$nama_penerima','$no_wa_pengirim', '$no_wa_penerima','$jenis_paket', '$berat_paket', '$alamat_penerima')";
    $db->query($query);
    $db->execute();
    echo'
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
            div{
                font-family: tahoma;
            }
            .center {
              text-align: center;
            }
        </style>
        <title>KEIBAR TRAVEL INDONESIA</title>
        
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    </head>
    <body>
        
        <div class="center"> 
            <br> <br>
            <h2><b>Pemesanan jasa paket berhasil!</b></h2>
             <h4>link pembayaran akan dikirimkan melalui Email yang anda daftarkan
            </h4>
            <a href="uas.html">OK</a>
        </div>
                
    
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    </body>
    </html>';
}else{
    echo'
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
            div{
                font-family: tahoma;
            }
            .center {
              text-align: center;
            }
        </style>
        <title>KEIBAR TRAVEL INDONESIA</title>
        
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    </head>
    <body>
        
        <div class="center"> 
            <br> <br>
            <h2><b>Maaf, Terjadi Kesalahan</b></h2>
             <h4>Silahkan untuk mencoba kembali.
            </h4>
            <a href="paket.php">Kembali</a>
        </div>
                
    
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    </body>
    </html>';
}
?>

