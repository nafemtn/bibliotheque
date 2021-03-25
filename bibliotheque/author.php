


<!-- Form pour récupérer information de l'auteur-->

<html>
    
    <form method="POST" action="add.php" >
        
        <label for="name" > Author's name</label>
        <input type="text" name="name"/>

        <label for="date-birth" > Year of date </label>
        <input type="year" name="date_birth" maxlength="4"/>

        <label for="country"> Native Country </label>
        <input type="text" name="country" />

        <input type="submit" name="send" value="send"/> 

    </form>

</html>



<?php 
require "index.php";
// récupérer information du forms auhtor

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)){

var_dump($_POST);
    echo $_POST['name'];
    echo $_POST['date_birth'];
    echo $_POST['country'];

    if(empty($_POST['name']) || empty($_POST['date_birth']) || empty($_POST['country']))
    { 
    } else {
        $authorName = $_POST['name'];
        $authorDate = $_POST['date_birth'];
        $country = $_POST['country'];
        
        $sql1= $objetPdo->prepare("INSERT INTO author (name, date_birth, country) VALUES (:name, :date_birth, :country)");

        $sql1->execute(array(':name' => $authorName, ':date_birth' => $authorDate, ':country' => $country));
    }
}
?>