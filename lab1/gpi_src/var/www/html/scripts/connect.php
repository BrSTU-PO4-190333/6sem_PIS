<?php
    include 'env.php';

    $connect = new mysqli($MYSQL_SERVER, $MYSQL_USERNAME, $MYSQL_PASSWORD, $MYSQL_DATABASE);
    if ($connect->connect_errno) :
        printf(
            "Не удалось подключиться: %s\n",
            $connect->connect_error
        );
        exit();
    endif;
