<?php
 
 
include_once("../source/database.php");
 
$connection = database_connect();
 
$result = $connection->query("SELECT B.naam,B.img,B.text, C.naam as catNaam from boek B
JOIN boek_has_catogorie ON boek_has_catogorie.boek_boekID=B.boekID
JOIN catogorie C ON boekID=catogorieID");
?>
 
 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boekwinkel</title>
</head>
<body>
<h1 class="title">boeken winkel</h1>
 
    <section>
   
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
               
            ?>
 
        <div class="boeken__full">
       
            <div class="boek__title"><?php echo$rows['naam']?></div>
            <div class="boek__foto"><img class="boek__img" src="<?php echo$rows['img']?>" alt=""> </div>
            <div class="boek__text"><?php echo$rows['text']?></div>
            <div class="boek__catogorie"><?php echo$rows['catNaam']?></div>
        </div>
        <?php
                }
            ?>
    </section>
 
 
</body>
</html>