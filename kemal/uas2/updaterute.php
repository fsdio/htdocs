<?php
     require 'admin.php';
     if( !empty($_POST["jadwal_pilihan"]) && !empty($_POST["no_reg"]) && !empty($_POST["rute"]) ) {
         $jadwal_pilihan= $_POST["jadwal_pilihan"];
         $no_reg = $_POST["no_reg"];
         $rute = $_POST["rute"];
         
         $db = new Database;

         $query = "UPDATE pemesanan SET jadwal_pilihan='$jadwal_pilihan',rute='$rute' WHERE no_reg='$no_reg'";
         $db->query($query);
         $db->execute();
         echo "Jadwal berhasil dirubah";
         }
         else {
            echo "Maaf , Terjadi kesalahan";
         }

?>
