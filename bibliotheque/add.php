<?php

require "index.php"

 // Forms
 
 ?>

 <html>

    <head>

        <meta charset="UTF-8">
        <title>MyLibrary</title>
        <link rel="stylesheet" href="biblio.css">
        <script src="index.js"> </script>

    </head>

    <body>
    <!-- Bouton JavaS-->

        
            <button data-modal-target="#modal">Add a New Book </button>

             <div class="modal" id="modal">   

                <div  class="modal-header">Fill the forms</div>

            <button data-close-button class="close-button">&times;</button>

             
                    <div class="modal-form">

                        <form method="POST" action="add.php" >
                    
                            <label for="title" > Book Title </label>
                            <input type="text" name="title"/>
                    
                            <label for="price" > Price </label>
                            <input type="number" name="price" step=".01"/>
                    
                            <label for="date"> Year of publication </label>
                            <input type="year" name="date" placeholder="1997" maxlength="4"/>
                    
                            <label for="language"> Language </label>
                            <input type="texte" name="language"/>
                    
                            <label for="author" > Choose an Author </label>
                            <select name="author" id="author">

                                <?php
                                        $selection = $objetPdo->query('SELECT name FROM author');
                                    
                                    while ($donnees = $selection->fetch())
                                        {
                                 ?>     
                                   <option value= "<?php echo $donnees['name']?>"> </option>
                                        
                                    <?php
                                        } 
                                    ?>

                            </select>

                            <input type="submit" name="ADD" value="Add a New Book"/> 
                            
                        </form>
                        
                    </div>  

            </div>

            <div class="overlay" id="overlay"></div>
    </body>

</html>
 
 <?php


// récupérer information du forms book

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)){
    echo $_POST['title'];
    echo $_POST['price'];
    echo $_POST['date'];
    echo $_POST['language'];
   

    if(empty($_POST['title']) || empty($_POST['price']) || empty($_POST['date']) || empty($_POST['language']))
    { 
    } else {
        $title = $_POST['title'];
        $price = $_POST['price'];
        $date = $_POST['date'];
        $language = $_POST['language'];
        
        $sql= $objetPdo->prepare("INSERT INTO book (title, price, date, language) VALUES (:title, :price, :date, :language)");

        $sql->execute(array(':title' => $title, ':price' => $price, ':date' => $date, ':language' => $language));
    } 
}
?>

<!-- Form pour récupérer information de l'auteur-->

<html>
    
    <form method="POST" action="add.php" >
        
        <label for="name" > Author's name</label>
        <input type="text" name="name"/>

        <label for="date" > Year of date </label>
        <input type="year" name="date" maxlength="4"/>

        <label for="country"> Native Country </label>
        <input type="text" name="country" />

        <input type="submit" name="send" value="send"/> 
    </form>

</html>



<?php 

// récupérer information du forms auhtor

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)){
    echo $_POST['name'];
    echo $_POST['date'];
    echo $_POST['country'];

    if(empty($_POST['name']) || empty($_POST['date']) || empty($_POST['country']))
    { 
    } else {
        $authorName = $_POST['name'];
        $authorDate = $_POST['date'];
        $country = $_POST['country'];
        
        $sql1= $objetPdo->prepare("INSERT INTO author (name, date, country) VALUES (:name, :date, :country)");

        $sql1->execute(array(':name' => $authorName, ':date' => $authorDate, ':country' => $country));
    }
}

?>