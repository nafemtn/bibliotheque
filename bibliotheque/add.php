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

            <div>
            <button id="open-button" class="open-button" data-modal-target="#modal" onclick="openModal()">Add a New Book </button>
            </div> 

             <div class="modal" id="modal">   

                <div  class="modal-header">Fill the forms</div>

            <button data-close-button class="close-button">&times;</button>
 
             
                    <div id="modal-form" class="modal-form">

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
                            <select name="author_id" id="author">

                                <?php
                                        $selection = $objetPdo->query('SELECT name, id FROM author');
                                    
                                    while ($donnees = $selection->fetch())
                                        {
                                 ?>     
                                   <option value= "<?php echo $donnees['id']?>"> <?php echo $donnees['name']?>  </option>
                                        
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
        $author_id = $_POST['author_id'];
        
        $sql= $objetPdo->prepare("INSERT INTO book (title, price, date, language, author_id) VALUES (:title, :price, :date, :language, :author_id)");

        $sql->execute(array(':title' => $title, ':price' => $price, ':date' => $date, ':language' => $language, ':author_id' => $author_id));
    } 
}
?>

<html>
    <p>if the author of your book is not on the list, please inform him</p>
    
    <a href="author.php" target="_blank"> Add an Author </a>
</html>