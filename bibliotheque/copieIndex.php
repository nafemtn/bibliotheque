<?php

//ouvrir base de donnée
$objetPdo = new PDO('mysql:host=localhost;dbname=bibliotheque','root','');

//var_dump($_POST);

echo "<br>";

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "bibliotheque";

$title = $_POST ['title'];
$price = $_POST ['price'];
$date = $_POST ['date'];
$language = $_POST ['language'];

$displayTitle = "SELECT title * FROM book";

if ($display = mysqli_query($objetPdo, $displayTitle)) //utiliser obj pdo = exécuter requete
{ 
    if (mysqli_num_rows($display) > 0)
   {
        while ($dtitle = mysqli_fetch_array($result))
        {
            echo $dtitle["title"] . "<br>";
        }
   }
}

$title = $con->query("SELECT title FROM book");

$donnee = $title->fetch();

?> 



<html>
        <form method="POST" action="">
                <label for="title" > Book Title </label>
                <input type="text" name="title"/>

                <label for="price" > Price </label>
                <input type="number" name="price" step=".01"/>

                <label for="date"> Year of publication </label>
                <input type="year" name="date" placeholder="1997" maxlength="4"/>

                <label for="language"> Language </label>
                <input type="texte" name="language"/>

                <select name="author" action="index.php"> Author  </select>
                <option value="">Choose an Author </option>
                <option value=

                <input type="submit">

        </form>

 </html>

<?php

//Selectionner un auteur 

$sql = "SELECT * FROM author";

if ($result = mysqli_query($con, $sql)) //utiliser obj pdo = exécuter requete
{ 
    if (mysqli_num_rows($result) > 0)
   {
        while ($row = mysqli_fetch_array($result))
        {
            echo $row["name"] . "<br>";
        }
   }
}

$title = $con->query("SELECT title FROM book");

$donnee = $title->fetch();


// // // ?> 

//  <html>

//      <form method="POST" action="index.php">
//                 <label for="title" > Book Title </label>
//                 <input type="text" name="title"/>

//                 <label for="price" > Price </label>
//                 <input type="number" name="price" step=".01"/>

//               <label for="date"> Year of publication </label>
//               <input type="year" name="date" placeholder="1997" maxlength="4"/>

//                <label for="language"> Language </label>
//                 <input type="texte" name="language"/>


//                     <input type="submit">

//        </form>

//  </html> 

// // <?php

//      //Selectionner un auteur 

//  $sql = "SELECT * FROM author";

//  if ($result = mysqli_query($con, $sql)) //utiliser obj pdo = exécuter requete
//  { 
//     if (mysqli_num_rows($result) > 0)
//    {
//        while ($row = mysqli_fetch_array($result))
//      {
//            echo $row["name"] . "<br>";
//         }
//    }
//  }

//  $title = $con->query("SELECT title FROM book");

// $donnee = $title->fetch();

