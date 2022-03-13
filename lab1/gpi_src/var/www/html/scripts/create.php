<?php
    include "connect.php";

    $pis6_ab__surname = isset($_GET["surname"]) ? $_GET["surname"] : "";
    $pis6_ab__name = isset($_GET["name"]) ? $_GET["name"] : "";
    $pis6_ab__middlename = isset($_GET["middlename"]) ? $_GET["middlename"] : "";

    $sql = "INSERT INTO `pis6_ab`
( `surname`, `name`, `middlename`)
VALUES ('$pis6_ab__surname','$pis6_ab__name','$pis6_ab__middlename');";

    $result = mysqli_query($connect, $sql);

    if ($result == true) :
        header('Location: /');
    else :
        echo "<script>alert('Элемент в базу данных не добавлен');</script>";
        echo "<p>\$sql = $sql</p>";
    endif;
