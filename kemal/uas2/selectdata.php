<?php
    require 'admin.php';
    $query = "select * from pemesanan ";
    $db = new Database;
    $db->query($query);
    $result = $db->resultSet();
    if ( $result != NULL)
    {
        foreach($result as $x => $value){
            echo "no_reg = ".$value["no_reg"]." nama = ".$value["nama"]." rute = ".$value['rute']." jadwal_pilihan = ".$value["jadwal_pilihan"]."
            email = ".$value["email"]." no_wa = ".$value["no_wa"]."</br>";
        }
    }
    else {
        echo "not Found";
    }
?>
