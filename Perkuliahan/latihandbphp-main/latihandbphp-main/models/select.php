<?php
     require '../controllers/database.php';
     if( !empty($_GET["nim"]) ) {
         $nim = $_GET["nim"];
         $db = new Database;
         $query = "select a.nim,a.name,b.class from mahasiswa a left join class b on a.nim = b.nim  where a.nim ='$nim'";
         $db->query($query);
         $result = $db->resultSet();
         echo "</br>";
         if ( $result != NULL)
         {
         echo json_encode($result);
         echo "<br>";
         echo "NIM      : ".$result[0]['nim']."<br>";
         echo "Name     : ".$result[0]["name"]."<br>";
         echo "Class    :".$result[0]["class"]."<br>";
         }
         else {
            echo "not Found";
         }
    }else{
        echo "id must be not empty";
    }
?>
