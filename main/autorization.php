<?php
    try{
        $user = "root";
        $password = "";
        $host = "localhost";
        $db = "test";
        $pdo = new PDO("mysql:host=$host;dbname=$db;" , $user, $password);
    }
    catch(PDOException $e){
        echo "Нет подключения к базе данных";
    }


    $sql = "SELECT * FROM `Users` WHERE `Login`='".$_POST['Login']."' AND `Password`='".$_POST['Password']."' ";
    $result = $pdo -> query($sql);
    if($result -> fetchColumn() > 0){
        echo "1";
    }else{
        echo "0";
    }






?>