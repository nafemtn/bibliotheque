 


    <html>

    <link rel="stylesheet" href="tab.css">

<body>
   <img src="library.jpg" class="bg"/>
    <h1>Book's List</h1>

    <table  class="tab">
        
        <thead>
            <tr>
                <th>Book's Title</th>
                <th> Author's name</th>
                <th>Book's ID</th>
            </tr>
      
 
        <?php

$objetPdo = new PDO('mysql:host=localhost;dbname=bibliotheque','root','');

$sql = ('SELECT book.title, author.name, book.id FROM book LEFT JOIN author ON book.author_id = author.id');
foreach  ($objetPdo->query($sql) as $row) {

        echo "<tr><td>" .

                $row['title'] .  "</td><td>" . 
                $row['name'] .  "</td><td>" . 
                $row['id'];

}
?>
    </thead>
    </tbody>    

    </table>   
    </body>
    </html>

