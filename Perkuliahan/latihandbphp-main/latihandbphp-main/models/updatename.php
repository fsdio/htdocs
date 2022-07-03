<?php
     require '../controllers/database.php';
     if( !empty($_POST["nim"]) && !empty($_POST["name"])) {
         $nim = $_POST["nim"];
         $name = $_POST["name"];
         
         $db = new Database;
         $query = "select * from mahasiswa where nim=$nim";
         $db->query($query);
         $result = $db->resultSet();
         if($result != NULL ){
         $query = "update mahasiswa set  name ='$name' where nim='$nim'";
         $db->query($query);
         $db->execute();
         echo "Success Update";
         }
         else {
            echo "not Found";
         }
    }else {
        echo "Nim and name must not be Empty";
     }

?>
