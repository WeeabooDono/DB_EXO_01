<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/styles.css" />
        <title>CR</title>
    </head>
    <body>
	<h1>Contenu fichier</h1>
	<?php
    require_once 'inc/fct_utiles.php';
    $db = bdd();
    $path = $_POST['path'];
    $_idTechnicien = 0;
    echo "<table  border=\"1\">";
    // lecture d'un fichier
    if ($fd = fopen($path, 'r')) {
        //  Tant que ce n'est pas la fin du fichier
        while (!feof($fd)) {
            $csv_row = fgetcsv($fd, 0, ",", '"');
            echo "<tr>";
            if ($csv_row) {
                // affichage des colonnes
                foreach ($csv_row as $csv_col){
                    echo "<td>".$csv_col."</td>";
                }
                //Si le premier elément n'est pas le header (On peut déclarer un header)
                if($csv_row[0] != 'idMateriel'){
                    // var_dump($csv_row);
                    // effectuer l'update
                    $rqt = "UPDATE `intervention` SET `date` = '$csv_row[4]',`diagnostic` = '$csv_row[5]', `action` = '$csv_row[6]' WHERE `idIntervention` = $csv_row[2]";
                    $res = $db->query($rqt);

                    $rqt2 = "SELECT * FROM `intervention` WHERE `idIntervention` = $csv_row[2]";
                    // récupération des données
                    $res2 = $db->query($rqt2);
                    while ($val = $res2->fetch(PDO::FETCH_ASSOC)) {
                        $_idTechnicien = $val['Technicien_idTechnicien'];
                    }
                }
            }
            echo "</tr>";
        }
    }
    fclose($fd);
    echo "</table>";
    echo "<form method=\"post\" action=\"interventions.php\">";
    echo "<input type=\"hidden\" value=\"".$_idTechnicien."\" name=\"Technicien_idTechnicien\">";
    echo "<input type=\"submit\" value=\"Consulter\"/>";
    echo "</form>";


	?>

    </body>
</html>
