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

  <div class="card">
      <div class="card-body">
        <h3 class="card-title" text align="center"><b>Trip Terbaru</b></h3>
    <div class="container mt-3 mb-3">
        <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card h-100">
              <img src="trip1.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title"><b>OPEN TRIP GOES TO YOGYAKARTA</b></h4>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">🔀 Harga Mulai</li>
                <li class="list-group-item">💵 345k</li>
                <li class="list-group-item">🚍 Start On The Road</li>
                <li class="list-group-item">🗓️ 16 - 17 Agustus 2022</li>
              </ul>
             
            </div>
          </div>
          
          <div class="col">
            <div class="card h-100">
              <img src="trip3.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h4 class="card-title"><b>OPEN TRIP TOUR BROMO</b></h4>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">🔀 Harga Mulai</li>
              <li class="list-group-item">💵 385k</li>
              <li class="list-group-item">🚍 Start On The Road</li>
              <li class="list-group-item">🗓️ 6 - 7 Agustus 2022</li>
            </ul>
           
            </div>
          </div>
          
          <div class="col">
            <div class="card h-100">
            <img src="trip2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-title"><b>OPEN TRIP ROAD TO DIENG</b></h4>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">🔀 Harga Mulai</li>
              <li class="list-group-item">💵 310k</li>
              <li class="list-group-item">🚍 Start On The Road</li>
              <li class="list-group-item">🗓️ 28 - 29 Agustus 2022</li>
            </ul>
            
        </div>
      </div>
    </div>



       <div class="card-body">
    <h4 class="card-title">Formulir Pemesanan</h4>
        <form action="insertformtrip.php" method="post">
          <div class="form-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" name="nama" id="nama">
          </div>
          <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin :</label>
            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
              <option>Laki-Laki</option>
              <option>Perempuan</option>
            </select>
          </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="text" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="no_wa">No.WhatsApp Penerima :</label>
            <input type="text" class="form-control" name="no_wa" id="no_wa">
        </div>
    <div class="form-group">
            <label for="rute">Rute :</label>
            <select class="form-control" name="rute" id="rute">
              <option>Yogyakarta</option>
              <option>Bromo</option>
              <option>Dieng</option>
            </select>
          </div>
    <br>
     <button type="reset" class="btn btn-primary" name="reset" id="reset">BATAL</button>
      <button type="submit" class="btn btn-primary" name="simpan" id="simpan">PESAN</button><br><br>
    </form>
    </div>        

<div class="center" class="shadow-lg p-3 mb-5 bg-body rounded " class="position=center"><b>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - Contact Us : 022-xxxxx - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</b>
</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> 
           
</body>
</html>