<?php
// Lien Delete

require "index.php";

$id = $_GET['idd']; 

$objetPdo = new PDO('mysql:host=localhost;dbname=bibliotheque','root','');

$sql = "DELETE FROM book WHERE id=?";

$stmt = $objetPdo->prepare($sql);

$stmt->bindValue(1, $id, PDO::PARAM_INT);

$stmt->execute();

