<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="post">
            <select name="PhoneMark" id="PhoneMark"><option value="Iphone">Iphone</option><option value="Sumsung">Sumsung</option><option value="Huawei">Huawei</option></select>
            <select name="PhoneModel" id="PhoneModel"><option value="13">13</option><option value="12">12</option><option value="14 pro">14 pro</option></select>
            <input type="date" id="DateOrder" name="DateOrder" placeholder="Дата заказа">
            <input type="date" id="DateDeviliry" name="DateDeviliry" placeholder="Дата доставки">
            <button id="Send" type="submit">Создать заказ</button>
        </form>
        <a href="main.php?Login=<?=$_GET['Login']?>">Вернуться</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- <script src="../script/createOrder.js"></script> -->
</body>
</html>
<?php
try{
    $user = "root";
    $password =  "";
    $db = "test";
    $host = "localhost";
    $pdo = new PDO("mysql:host=$host;dbname=$db;",  $user,$password);
}catch(PDOException $e){
    echo "Нет подключения к базе данных";
}
    $sql = "INSERT INTO `Orders`(`PhoneMark`, `PhoneModel`, `DateOrder`, `DateDeviliry`,`Login`) VALUES ('".$_POST["PhoneMark"]."','".$_POST["PhoneModel"]."','".$_POST["DateOrder"]."','".$_POST["DateDeviliry"]."','".$_GET["Login"]."');";
    $result = $pdo -> query($sql);
    

?>