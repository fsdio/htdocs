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
  $query = ("SELECT * FROM pemesanan");
    $num = 0;
      for($i=1;$i<=10;$i++){
    $num = $num + $i;
  }
  $jam=date('H');
  $detik=date('s');
  $jmlh=$num+$jam-$detik;
  $tgl=date('dmy');
  $nounik="REG-".$tgl.-$jmlh;
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

  <div class="card">
    <div class="card-body">
	   <table class="table caption-top">
        <caption>Pilihan Rute Perjalanan Yang Tersedia</caption>
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Tujuan</th>
          <th scope="col">Estimasi Waktu Perjalanan</th>
          <th scope="col">Biaya</th>
        </tr>
      </thead>
    <tbody>
        <tr>
          <th scope="row">1</th>
            <td>Sukabumi</td>
            <td>2 Jam</td>
            <td>Rp.55.000,-</td>
        </tr>
        <tr>
          <th scope="row">2</th>
            <td>Cirebon</td>
            <td>2 Jam</td>
            <td>Rp.125.000,-</td>
        </tr>
        <tr>
          <th scope="row">3</th>
            <td>Sumedang</td>
            <td>1 Jam 30 Menit</td>
            <td>Rp.45.000,-</td>
        </tr>
        <tr>
          <th scope="row">4</th>
            <td>Indramayu</td>
            <td>2 Jam</td>
            <td>Rp.130.000,-</td>
        </tr>
        <tr>
          <th scope="row">5</th>
            <td>Kuningan</td>
            <td>2 Jam 30 Menit</td>
            <td>Rp.110.000,-</td>
        </tr>
        <tr>
          <th scope="row">6</th>
            <td>Cikarang</td>
            <td>1 Jam 30 Menit</td>
            <td>Rp.100.000,-</td>
        </tr>
        <tr>
          <th scope="row">7</th>
            <td>Bekasi</td>
            <td>1 Jam 30 Menit</td>
            <td>Rp.90.000,-</td>
        </tr>
        <tr>
          <th scope="row">8</th>
            <td>Majalengka</td>
            <td>2 Jam</td>
            <td>Rp.85.000,-</td>
        </tr>
        <tr>
          <th scope="row">9</th>
            <td>Tangerang</td>
            <td>2 Jam 30 Menit</td>
            <td>Rp.120.000,-</td>
        </tr>
        <tr>
          <th scope="row">10</th>
            <td>Depok</td>
            <td>2 jam</td>
            <td>Rp.100.000,-</td>
        </tr>
        <tr>
          <th scope="row">11</th>
            <td>Cianjur</td>
            <td>1 Jam 30 Menit</td>
            <td>Rp.45.000,-</td>
        </tr>
        <tr>
          <th scope="row">12</th>
            <td>Karawang</td>
            <td>2 Jam</td>
            <td>Rp.100.000,-</td>
        </tr>
        <tr>
          <th scope="row">13</th>
            <td>Jakarta</td>
            <td>2 Jam 30 Menit</td>
            <td>Rp.115.000,-</td>
        </tr>
      </tbody>
    </table>

 <div class="card-body">
    <h4 class="card-title">Formulir Pemesanan</h4>
        <form action="insertform.php" method="post">
          <div class="form-group">
            <label for="no_reg">No. Reg :</label>
            <input type="text" class="form-control" name="no_reg" id="no_reg" value="<?php echo $nounik ?>" readonly>
          </div>
          <div class="form-group">
            <label for="nama">Nama :</label>
            <input type="text" class="form-control" name="nama" id="nama">
        </div>
    <div class="form-group">
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
            </select>
          </div>
    <div class="form-group">
            <label for="jadwal_pilihan">Pilihan Jadwal Keberangkatan :</label>
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
            </select>
          </div>
    <div class="form-group">
            <label for="email">Email :</label>
            <input type="text" class="form-control" name="email" id="email">
    </div>
    <div class="form-group">
            <label for="no_wa">No WhatsApp :</label>
            <input type="text" class="form-control" name="no_wa" id="no_wa">
    </div>
 <p >Sebelum <b>booking sekarang,</b> berikut beberapa ketentuan yang harus diperhatikan Penumpang :
    <ul>
      <li type="1">Penumpang diharap sudah tiba di pool keberangkatan 15 menit sebelum jadwal keberangkatan</li>
      <li type="1">Penumpang dapat memperlihatkan bukti transaksi pembayaran tiket dan tanda identitas diri kepada petugas pool untuk dapat menerima tiket perjalanan</li>
      <li type="1">Satu tiket hanya berlaku untuk satu penumpang</li>      
    </ul>
  Terima Kasih</p>
      <button type="reset" class="btn btn-primary" name="reset" id="reset">BATAL</button>
 
      <button type="submit" class="btn btn-primary" name="simpan" id="simpan">BOOKING SEKARANG</button><br><br>
  </form>
</div>

<div class="center" class="shadow-lg p-3 mb-5 bg-body rounded " class="position=center"><b>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - Contact Us : 022-xxxxx - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</b><br><br>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>
