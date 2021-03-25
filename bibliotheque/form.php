<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=bibliotheque','root','');

$title = $_POST ['title'];
$price = $_POST ['price'];
$date = $_POST ['date'];
$language = $_POST ['language'];

$sql="INSERT INTO book VALUES('', $title, $price, $date, $language)";

$objetPdo->exec($sql);

header('location="index.php"');