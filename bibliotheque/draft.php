<?php

//requette ajouter un livre

$pdoStat = $objetPdo->prepare('INSERT INTO book VALUES (NULL, :title, :price, :date, :language,)');

//on lie chaque marqueur à une valeur 

$pdoStat->bindValue(':title', $_POST ['title'], PDO::PARAM_STR);
$pdoStat->bindValue(':price', $_POST ['price'], PDO::PARAM_STR);
$pdoStat->bindValue(':date', $_POST ['date'], PDO::PARAM_STR);
$pdoStat->bindValue(':language', $_POST ['language'], PDO::PARAM_STR);

//ex"cuter requete

$insertisOk = $pdoStat->execute();

if($insertIsok) {
    echo "livre ajouter";
}
else {
    echo "pbm";
} 

if(mysqli_connect_errno()){
    echo "failed to connect";
    exit();
}
echo "connection sucess"; -->

if(isset($_POST['insert']))
{

    $dbh= beginTransaction();

$query = "INSERT INTO `book`(`title`, `price`, `date`, `language`) VALUES (':title', ':price', '$date', '$language')";

$result = mysqli_query($con, $query);

if($result)
{
    echo "Data Inserted";
}
else {
    echo "Data Not Inserted";
}


 $sth = $dbh->prepare($query);

foreach ($book as $book) {
    $sth->execute(array(
        $book->title,
        $book->price,
        $book->date,
        $book->language,
    ));
}

// /* Valider les modifications */
 $dbh->commit();

