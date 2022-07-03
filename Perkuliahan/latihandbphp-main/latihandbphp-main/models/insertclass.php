<?php
    require '../controllers/database.php';
    if( !empty($_POST["nim"]) || !empty($_POST["class"]) ) {
        $nim = $_POST["nim"];
        $class = $_POST["class"];
        $db = new Database;
        $query = "insert into class (nim,class) values ('$nim','$class')";
        $db->query($query);
        $db->execute();
        echo "Success insert into DB";
    }else{
        echo "NIM and Class must be not empty";
    }
?>