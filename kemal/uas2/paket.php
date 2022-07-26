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
<body>
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
</div>

	<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="paket.png" class="d-block w-100" alt="...">
      </div>
    </div>
  </div>

  
     
	<br>
	<div class="card">
	 <div class="card-body">
		<h4 class="card-title"><b>Mengapa Menggunakan Keibar Paket?</b></h4>
   						<p class="card-text">	
   							<ul>
								<li type="disk">Sistem kami dengan cepat memilih kurir dengan rating tertinggi dan terdekat dengan Anda. Kecepatan dan kepercayaan adalah moto kami.</li>
   								<li type="disk">Kami otomatis kalkulasi biaya sewaktu Anda mengisi form. Langsung dapatkan biaya pengiriman dengan cepat.</li>
   								<li type="disk">Semua kurir kami selalu siap untuk Anda. Kami akan memilih kurir dengan rating terbaik dekat Anda dalam waktu 5 menit.</li>
   								<li type="disk">Kami mengirim informasi kurir melalui Whatsapp secara GRATIS ke setiap penerima.</li>
   								<li type="disk">Kami menyediakan berbagai jenis pembayaran untuk mendukung Anda.</li>   		
   							</ul></p>
	 </div>

<div class="card-body">
    <h4 class="card-title">Formulir Pengiriman Paket</h4>
        <form action="insertformpaket.php" method="post">
          <div class="form-group">
            <label for="nama_pengirim">Nama Pengirim:</label>
            <input type="text" class="form-control" name="nama_pengirim" id="nama_pengirim">
          </div>
          <div class="form-group">
            <label for="nama_penerima">Nama Penerima :</label>
            <input type="text" class="form-control" name="nama_penerima" id="nama_penerima">
        </div>
        <div class="form-group">
            <label for="no_wa_pengirim">No.WhatsApp Pengirim :</label>
            <input type="text" class="form-control" name="no_wa_pengirim" id="no_wa_pengirim">
        </div>
        <div class="form-group">
            <label for="no_wa_penerima">No.WhatsApp Penerima :</label>
            <input type="text" class="form-control" name="no_wa_penerima" id="no_wa_penerima">
        </div>
    <div class="form-group">
            <label for="jenis_paket">Jenis Paket :</label>
            <select class="form-control" name="jenis_paket" id="jenis_paket">
              <option></option>
              <option>Pakaian</option>
              <option>Perkakas</option>
              <option>Elektronik</option>
              <option>Lainnya</option>
            </select>
          </div>
    <div class="form-group">
            <label for="berat_paket">Berat Paket :</label>
            <select class="form-control" name="berat_paket" id="berat_paket">
              <option></option>
              <option>1-5 Kg</option>
              <option>5-10 Kg</option>
              <option>10-15 Kg</option>
              <option>< 15 Kg</option>
            </select>
          </div>
    <div class="form-group">
            <label for="alamat_penerima">Alamat Penerima :</label>
            <input type="text" class="form-control" name="alamat_penerima" id="alamat_penerima">
    </div>
    <br>
     <button type="reset" class="btn btn-primary" name="reset" id="reset">BATAL</button>
      <button type="submit" class="btn btn-primary" name="simpan" id="simpan">KIRIM</button><br><br>
    </form>
</div>

<div  class="center" class="shadow-lg p-3 mb-5 bg-body rounded " class="position=center"><b>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - Contact Us : 022-xxxxx - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </b><br><br>
</div>

	
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>