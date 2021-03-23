 
 
 <?php

// $serverName = "mysql:host=localhost;dbname=bibliotheque";
// $userName = "root";
// $password = "";
// $dbName = "bibliotheque";

// ouvrir base de donnée
// $objetPdo = new PDO($serverName, $userName, $password);

// var_dump($_POST);

// $arrayBookAuthor = $objetPdo->query('SELECT book.title, author.name, author.id FROM book INNER JOIN author ON book.author_id = author.id');

// echo $arrayBookAuthor->rowCount();
// $rows = $arrayBookAuthor->fetchAll(PDO::FETCH_ASSOC); => recupérer les enregistrements 

//  $stmt= $objetPdo->query(string($arrayBookAuthor));
//  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

// var_dump($rows);
// die();

$objetPdo = new PDO('mysql:host=localhost;dbname=bibliotheque','root','');

$sql = ('SELECT book.title, author.name, author.id FROM book INNER JOIN author ON book.author_id = author.id');
foreach  ($objetPdo->query($sql) as $row) {
    print $row['title'] . "\t" ;
    print $row['name'] . "\t" ;
    print $row['id'] . "\n" . "<br>";
}

        // Forms

$title = $_POST['title'];
$price = $_POST['price'];
$date = $_POST['date'];
$language = $_POST['language'];

?>
<html>
    <form method="POST" action="index.php" >

        <label for="title" > Book Title </label>
        <input type="text" name="title"/>

        <label for="price" > Price </label>
        <input type="number" name="price" step=".01"/>

        <label for="date"> Year of publication </label>
        <input type="year" name="date" placeholder="1997" maxlength="4"/>

        <label for="language"> Language </label>
        <input type="texte" name="language"/>


        <input type="submit" name="send" value="send">

    </form>
</html>

<?php

$sql="INSERT INTO book (title, price, date, language) VALUES ($title, $price, $date, $language)";

$objetPdo->prepare($sql)->execute([$title, $price, $date, $language]);

// if ($display = mysqli_query($objetPdo, $displayTitle)) //utiliser obj pdo = exécuter requete
// { 
//     if (mysqli_num_rows($display) > 0)
//    {
//         while ($dtitle = mysqli_fetch_array($result))
//         {
//             echo $dtitle["title"] . "<br>";
//         }
//    }
// }

// $title = $con->query("SELECT title FROM book");

// $donnee = $title->fetch();

