<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
    <head>
        <meta charset="UTF-8">
        <title>Home | Pesan Food</title>
        <link rel="stylesheet" href="./css/style.css"/>
    </head>
    
    <body>
        
        <div>
            
            <header>
                    <h1>PESAN FOOD</h1>
                    <p>Pesan sekarang dan rasakan manfaatnya</p>
            </header>
            <?php require_once './view/nav.php';?>
            
            <div style="display: flex">
                <?php require_once './view/main/mainMain.php';?>
                <?php require_once './view/user/asideMain.php';?>
            </div>
            
            <?php require_once './view/footer.php';?>

        </div>
    </body>
</html>
