<?php
    require '../controllers/database.php';
    $query = "select * from mahasiswa a left join class b on a.nim = b.nim";
    $db = new Database;
    $db->query($query);
    $result = $db->resultSet();
    if ( $result != NULL)
    {
        foreach($result as $x => $value){
            echo "nim = ".$value["nim"]." name = ".$value["name"]." class = ".$value['class']."</br>";
        }
    }
    else {
        echo "not Found";
    }
?>
