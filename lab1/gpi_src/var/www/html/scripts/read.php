<?php
    include "connect.php";

    $sql = "SELECT * FROM `pis6_ab` ORDER BY `id` DESC;";
    $result = mysqli_query($connect, $sql);

    $array = array();
    $item = mysqli_fetch_assoc($result);
    $i = 0;
    while ($item != "") :
        $array[$i] = $item;
        $item = mysqli_fetch_assoc($result);
        $i += 1;
    endwhile;
?>

<table>
    <thead>
        <tr>
            <td>ИД</td>
            <td>Фамилия</td>
            <td>Имя</td>
            <td>Отчество</td>
            <td>Удалить</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($array as $item) : ?>
        <tr>
            <td><?php echo $item['id']; ?></td>
            <td><?php echo $item['surname']; ?></td>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['middlename']; ?></td>
            <td><a href="/scripts/delete.php?id=<?php echo $item['id']; ?>">Удалить</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
