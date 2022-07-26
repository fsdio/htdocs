<?php ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Interpolasi Newton</title>
        <link rel="icon" href="../bs/img/icon.png" type="image/x-icon">
        <link rel="stylesheet" href="../bs/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bs/mycss/style.css">
        <script src="../bs/js/bootstrap.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>

      <!-- Header Buka -->
    <header>
        <ul>
          <li><a class="left" href="/">Kelompok C</a></li>
          <li><a class="right" onclick="myRahmat()">Rahmat</a></li>
          <li><a class="right" onclick="myNurul()">Nurul</a></li>
          <li><a class="right" onclick="myIqbal()">Iqbal</a></li>
          <li><a class="right" onclick="myRena()">Rena</a></li>
          <li><a class="right" onclick="myCintana()">Cintana</a></li>
          <li><a class="right" onclick="myChairul()">Chairul</a></li>
        </ul>
    </header>

    <script>
    function myRahmat() {
      alert("Nama : Rahmat Sunjani\nNIM : 55201120030");
    }
    function myNurul() {
      alert("Nama : Nurulqolbi Mutmainnah\nNIM : 55201120026");
    }
    function myIqbal() {
      alert("Nama : Iqbal Bayyinah Bilhaqqi\nNIM : 55201120050");
    }
    function myRena() {
      alert("Nama : Rena Imanina Ilmiah\nNIM : 55201120021");
    }
    function myCintana() {
      alert("Nama : Cintana Saummi Agira\nNIM : 55201120040");
    }
    function myChairul() {
      alert("Nama : Chairul Wirahman\nNIM : 55201120012");
    }
    </script>
    <!-- Header Tutup -->
	
	    <!-- Example split danger button -->
    <div class="btn-group mt-5">
      <button type="button" class="btn btn-danger">Pilih Method</button>
      <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="sr-only"></span>
      </button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="inne.php">Method Interpolasi Newton</a>
		<a class="dropdown-item" href="elgajo.php">Method Eliminasi Gauss Jordan</a>
      </div>
    </div>
    
    
    </body>
</html>   

