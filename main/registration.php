<?php
    try{
        $user = "root";
        $password = "";
        $host = "localhost";
        $db = "test";
        $pdo = new PDO("mysql:host=$host;dbname=$db;" , $user, $password);
    }
    catch(PDOException $e){
        echo "Нет подключение к базе данных";
    }
    $sql = "INSERT INTO Users ( `Name`, `Lastname`, `Middlename`, `Login`, `Password`, `Email`, `Number`) VALUES ('".$_POST['Name']."','".$_POST['Lastname']."','".$_POST['Middlename']."','".$_POST['Login']."','".$_POST['Password']."','".$_POST['Email']."','".$_POST['Number']."');";
    $result = $pdo -> query($sql);
    echo $sql;

?>