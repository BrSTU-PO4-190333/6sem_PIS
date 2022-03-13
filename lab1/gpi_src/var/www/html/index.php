<?php
    $PAGE_TITLE = "Home";
    include "html/head.php";
?>

<h2>Create</h2>
<form action="scripts/create.php">
    <input type="text" name="surname" placeholder="Фамилия" />
    <input type="text" name="name" placeholder="Имя" />
    <input type="text" name="middlename" placeholder="Отчество" />
    <input type="reset" value="Сбросить форму" />
    <input type="submit" value="Добавить данные в БД" />
</form>

<h2>Read</h2>
<?php include "scripts/read.php"; ?>
