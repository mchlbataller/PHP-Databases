<?php
echo "alert('nice')";

$sql = new PDO("mysql:host=localhost;dbname=web", 'root', '');
$state = $sql->query("SELECT * FROM web");

foreach($state as $row) {
    echo $row;
}