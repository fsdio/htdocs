<?php
     require 'admin.php';

    if( isset($_POST["no_reg"]) ) {
         $no_reg = $_POST["no_reg"];
         $db = new Database;
         $query = "select * from pemesanan where no_reg = '$no_reg'";
         $db->query($query);
         $result = $db->resultSet();
         if ( $result != NULL)
         {            
            $query = "delete from pemesanan where no_reg='$no_reg'";
            $db->query($query);
            $result = $db->execute();
            echo "Berhasil menghapus no registrasi = ".$no_reg;
         }else{
            echo "No registrasi tidak ditemukan";
         }
    }
?>
