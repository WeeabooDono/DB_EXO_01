<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/styles.css" />
        <title>Choix</title>
    </head>
    <body>
	<h1>Choisir un fichier</h1>
	<?php
    require_once 'inc/fct_utiles.php';
    $csvs = getFiles();
	?>
    <form method="post" action="extract.php">
        <select name="path">
            <?php
            foreach ($csvs as $csv){
                echo "<option>".$csv."</option>";
            }
            ?>
        </select>
        <input type="submit" value="Traiter"/>
    </form>
    </body>
</html>
