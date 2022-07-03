<html>
    <body>
         <h2> Insert Into DB NIM and NAME</h2>
         <form action = "models/insertname.php" method = "POST">
            nim: <input type = "text" name = "nim" /> 
            name: <input type = "text" name = "name" />  
            <input type = "submit" />
         </form>
         <h2> Insert Into DB NIM and Class</h2>
         <form action = "models/insertclass.php" method = "POST">
            nim: <input type = "text" name = "nim" /> 
            class: <input type = "text" name = "class" />  
            <input type = "submit" />
         </form>      
         <h2> Update Name</h2>
         <form action = "models/updatename.php" method = "POST">
            nim: <input type = "text" name = "nim" /> 
            name: <input type = "text" name = "name" />
            <input type = "submit" />
         </form>
         <h2> Update Class</h2>
         <form action = "models/updateclass.php" method = "POST">
            nim: <input type = "text" name = "nim" /> 
            class: <input type = "text" name = "class" />
            <input type = "submit" />
         </form>
         <h2> Select By NIM</h2>
         <form action = "models/select.php" method = "GET">
            NIM: <input type = "text" name = "nim" /> 
            <input type = "submit" />
         </form>
         <h2> Select All Data</h2>
         <form action = "models/selectall.php" method = "GET">
            <input type = "submit" />
         </form>
         <h2> Delete By ID</h2>
         <form action = "models/delete.php" method = "POST">
            nim: <input type = "text" name = "nim" /> 
            <input type = "submit" />
         </form>
    </body>
</html>  