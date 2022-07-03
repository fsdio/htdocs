<?php
     require '../controllers/database.php';
     if( !empty($_POST["nim"]) && !empty($_POST["class"]))  {
        $nim = $_POST["nim"];
        $class = $_POST["class"];
        $db = new Database;
        $query = "select * from class where nim=$nim";
        $db->query($query);
        $result = $db->resultSet();
        if($result != NULL ){
        $query = "update class set  class = '$class' where nim=$nim";
        $db->query($query);
        $db->execute();
        echo "Success Update";
        }
        else {
           echo "not Found";
        }
    }else {
       echo "Nim and class must not be Empty";
    }
    
?>
