<?php

$value = 'World';

$db = new PDO('mysql:host=database;dbname=mydb;charset=utf8mb', 'myuser', 'secret');

$databaseTest = ($db->query('SELECT * FROM dockerSample'))->fetchAll(PDO::FETCH_OBJ);

?>

<html>
    <body>
        <h1>Hello, <?= $value ?>!</h1>

        <?php foreach($databaseTest as $row): ?>
            <h1>Hello, <?= $row->name ?> !</h1>
        <?php endforeach; ?>
    </body>
</html>