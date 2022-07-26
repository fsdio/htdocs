<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'travel');

class Database{
  public $host = DB_HOST;
	public $user = DB_USER;
	public $pass = DB_PASS;
	public $dbnm = DB_NAME;
    public $dbh;
    public $stmt;
    public function __construct()
    {
        {
            try {
                $dsn = 'mysql:host='. $this->host .';dbname='. $this->dbnm;
                $this->dbh = new PDO($dsn,$this->user,$this->pass);
                // set the PDO error mode to exception
                $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo "Connected successfully </br>";
              } catch(PDOException $e) {
                // echo "Connection failed: " . $e->getMessage()."</br>";
              }
        }
    }
    
	public function query($query)
	{
		$this->stmt = $this->dbh->prepare($query);
	}
    public function execute()
	{
		$this->stmt->execute();

	}

	public function resultSet()
	{
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);


	}
}
?>
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
	<nav class="navbar navbar-expand-lg bg-light">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#"><b><i>KEIBAR TRAVEL</i></b></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link" href="uas.html">Beranda</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="index.php">Booking</a>
	        </li>
	         <li class="nav-item">
	          <a class="nav-link" href="opentrip.php">Open Trip</a>
	        </li>
	         <li class="nav-item">
	          <a class="nav-link" href="paket.php">Paket</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="tips.html">Tips</a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</nav>
    <div> 

        
    <div class="card">
    <div class="card-body">
        <br> <br>
        <h3 class="center"><b>SELAMAT DATANG ADMIN</b></h3><br>

		<h4 class="card-title">Update Data</h4><br>
        <form action = "updaterute.php" method = "POST">
        <div class="form-group">
			<label for="no_reg">No.Registrasi :</label>
            <input type="text" class="form-control" name="no_reg" id="no_reg"><br>
			<label for="jadwal_pilihan">Jadwal yang diubah :</label>
            <select class="form-control" name="jadwal_pilihan" id="jadwal_pilihan">
              <option>05:00 WIB</option>
              <option>06:00 WIB</option>
              <option>07:00 WIB</option>
              <option>08:00 WIB</option>
              <option>09:00 WIB</option>
              <option>10:00 WIB</option>
              <option>11:00 WIB</option>
              <option>12:00 WIB</option>
              <option>13:30 WIB</option>
              <option>14:30 WIB</option>
              <option>15:30 WIB</option>
              <option>16:30 WIB</option>
              <option>17:30 WIB</option>
              <option>19:00 WIB</option>
              <option>20:00 WIB</option>
              <option>21:00 WIB</option>
              <option>22:00 WIB</option>
            </select><br>
			<label for="rute">Rute :</label>
            <select class="form-control" name="rute" id="rute">
              <option>Bandung-Sukabumi</option>
              <option>Bandung-Cirebon</option>
              <option>Bandung-Sumedang</option>
              <option>Bandung-Indramayu</option>
              <option>Bandung-Kuningan</option>
              <option>Bandung-Cikarang</option>
              <option>Bandung-Bekasi</option>
              <option>Bandung-Majalengka</option>
              <option>Bandung-Tangerang</option>
              <option>Bandung-Depok</option>
              <option>Bandung-Cianjur</option>
              <option>Bandung-Karawang</option>
              <option>Bandung-Jakarta</option>
            </select> <br>
            
            <button type="submit" class="btn btn-primary" name="simpan" id="simpan">PERBARUI</button><br><br>
        </form>
        </div>
        <h4 class="card-title">Lihat Data</h4><br>
        <form action = "selectdata.php" method = "GET">
        <div class="form-group">
			
            
            <button type="submit" class="btn btn-primary" name="simpan" id="simpan">LIHAT</button><br><br>
        </form>
        </div>

        <h4 class="card-title">Hapus Data</h4><br>
        <form action = "deletedata.php" method = "POST">
        <div class="form-group">
            <label for="no_reg">No.Registrasi :</label>
            <input type="text" class="form-control" name="no_reg" id="no_reg"><br>
            <button type="submit" class="btn btn-primary" name="simpan" id="simpan">HAPUS</button><br><br>
            <p>Output Admin :</p>
        </form>
        </div></div></div>

			


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>