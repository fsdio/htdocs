<?php
require 'opentrip.php';
if( !empty($_POST["nama"]) || !empty($_POST["jenis_kelamin"])
 || !empty($_POST["email"]) || !empty($_POST["no_wa"]) || !empty($_POST["rute"]) ){
    $nama = $_POST["nama"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $email = $_POST["email"];
    $no_wa = $_POST["no_wa"];
    $rute = $_POST["rute"];
    $db = new Database;
     $query = "insert into opentrip(nama,jenis_kelamin,email,no_wa,rute)
     values ('$nama','$jenis_kelamin','$email', '$no_wa', '$rute')";
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
            <h2><b>Pemesanan open trip berhasil!</b></h2>
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
            <a href="opentrip.php">Kembali</a>
        </div>
                
    
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
    </body>
    </html>';
}
?>

