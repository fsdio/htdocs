<?php
     require '../controllers/database.php';

    if( isset($_POST["nim"]) ) {
         $nim = $_POST["nim"];
         $db = new Database;
         $query = "select * from mahasiswa where nim = '$nim'";
         $db->query($query);
         $result = $db->resultSet();
         if ( $result != NULL)
         {            
            $query = "delete from class where nim ='$nim'";
            $db->query($query);
            $result = $db->execute();
            $query = "delete from mahasiswa where nim ='$nim'";
            $db->query($query);
            $result = $db->execute();
            echo "Success delete nim = ".$nim;
         }else{
            echo "nim not Found ";
         }
    }
?>
