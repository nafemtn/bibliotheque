<?php

$i = $_GET['idd'];
$title = $_GET['title'];
$price = $_GET['price'];
$date = $_GET['date'];
$language = $_GET['language'];
$author_id = $_GET['author_id'];


$objetPdo = new PDO('mysql:host=localhost;dbname=bibliotheque','root','');
 
$sql = "UPDATE book SET title=:title, date=:date, langugae=:langugae, author_id=:author_id WHERE id=id ";


$sql= $objetPdo->prepare($sql);


$sql->bindValue('i', $i, PDO::PARAM_INT);
$sql->bindValue('title', $title, PDO::PARAM_STR);
$sql->bindValue('price', $price, PDO::PARAM_STR);
$sql->bindValue('date', $date, PDO::PARAM_STR);
$sql->bindValue('language', $language, PDO::PARAM_STR);
$sql->bindValue('author_id', $author_id, PDO::PARAM_STR);