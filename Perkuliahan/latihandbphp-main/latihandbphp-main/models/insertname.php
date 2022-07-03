<?php
    require '../controllers/database.php';
    if( !empty($_POST["nim"]) || !empty($_POST["name"]) ) {
        $nim = $_POST["nim"];
        $name = $_POST["name"];
        $db = new Database;
        $query = "insert into mahasiswa (nim,name) values ('$nim','$name')";
        $db->query($query);
        $db->execute();
        echo "Success insert into DB";
    }else{
        echo "NIM and Name must be not empty";
    }
?>