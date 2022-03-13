<?php
    include 'connect.php';
    
    $id = isset($_GET["id"]) ? $_GET["id"] : "-1";

    if ($id != "-1") :
        $sql = "DELETE FROM `pis6_ab` WHERE `id`='$id';";
        $result = mysqli_query($connect, $sql);
    endif;

    header('Location: /');
