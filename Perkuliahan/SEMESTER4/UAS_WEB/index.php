<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home | </title>
        <link rel="stylesheet" href="./css/style.css"/>
    </head>
    
    <body>
        
        <div>
            
            <?php require_once './view/header.php';?>
            <?php require_once './view/nav.php';?>
            
            <div style="display: flex">
                <?php require_once './view/main.php';?>
                <?php require_once './view/aside.php';?>
            </div>
            
            <?php require_once './view/footer.php';?>
        </div>
    </body>
</html>
