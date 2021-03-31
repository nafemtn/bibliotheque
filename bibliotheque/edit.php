<?php

//lien edit

require "index.php";


$id = $_GET['idd']; 

$objetPdo = new PDO('mysql:host=localhost;dbname=bibliotheque','root','');

$sql = "SELECT * FROM book WHERE id=?";

$stmt = $objetPdo->prepare($sql);

$stmt->bindValue(1, $id, PDO::PARAM_INT);

$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_OBJ);

?>

<html>
        <form  action="save.php" >
                
                <input type="hidden" name="idd" value="<?= $id ?>">
                        
                <label for="title" > Book Title </label>
                <input type="text" name="title" value="<?= $row->title?>"/>
        
                <label for="price" > Price </label>
                <input type="number" name="price" step=".01" value="<?= $row->price?>"/>
        
                <label for="date"> Year of publication </label>
                <input type="year" name="date" placeholder="1997" maxlength="4" value="<?= $row->date?>"/>
        
                <label for="language"> Language </label>
                <input type="texte" name="language" value="<?= $row->language?>"/>
        
                <label for="author" > Choose an Author </label>
                <select name="author_id" id="author" value="<?= $row->author_id?>">

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

                <input type="submit" name="ADD" value="Save Changes"/> 
                        
        </form>
<html>

