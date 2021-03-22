<?php
//var
// $title = $_POST ['title'];
// $price = $_POST ['price'];
// $date = $_POST ['date'];
// $language = $_POST ['language'];

// //ouvrir base de donée
// $objetPdo = new PDO('mysql:host=localhost;dbname=bibliotheque','root','');

// //requette ajouter un livre

// $pdoStat = $objetPdo->prepare('INSERT INTO book VALUES (NULL, :title, :price, :date, :language,)');

// //on lie chaque marqueur à une valeur 

// $pdoStat->bindValue(':title', $_POST ['title'], PDO::PARAM_STR);
// $pdoStat->bindValue(':price', $_POST ['price'], PDO::PARAM_STR);
// $pdoStat->bindValue(':date', $_POST ['date'], PDO::PARAM_STR);
// $pdoStat->bindValue(':language', $_POST ['language'], PDO::PARAM_STR);

// //ex"cuter requete

// $insertisOk = $pdoStat->execute();

// if($insertIsok) {
//     echo "livre ajouter";
// }
// else {
//     echo "pbm";
// } 

// if(mysqli_connect_errno()){
//     echo "failed to connect";
//     exit();
// }
// echo "connection sucess";

if(isset($_POST['insert']))
{

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "bibliotheque";

$title = $_POST ['title'];
$price = $_POST ['price'];
$date = $_POST ['date'];
$language = $_POST ['language'];

// connection

$con = mysqli_connect($serverName, $userName, $password, $dbName);


$query = "INSERT INTO `book`(`title`, `price`, `date`, `language`) VALUES ('$title', '$price', '$date', '$language')";

$result = mysqli_query($con,$query);

if($result)
{
    echo "Data Inserted";
}
else {
    echo "Data Not Inserted";
}
}