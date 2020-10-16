<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/styles.css" />
        <title>Interventions</title>
    </head>
    <body>
	<h1>Interventions technicien</h1>
	<?php
	    require_once 'inc/fct_utiles.php';
	    $db = bdd();
        $_idTechnicien = $_POST['Technicien_idTechnicien'];
        //var_dump($_idTechnicien);
        $rqt = "SELECT * FROM `intervention` WHERE `Technicien_idTechnicien` = '".$_idTechnicien."'";
        //$rqt = "SELECT * FROM `intervention`";
        $res = $db->query($rqt);
	?>
    <table border="1">
        <tr>
            <th>idIntervention</th>
            <th>Materiel_idMateriel</th>
            <th>Technicien_idTechnicien</th>
            <th>Ticket_idTicket</th>
            <th>date</th>
            <th>diagnostic</th>
            <th>action</th>
        </tr>
        <?php
        // parcour tu tableau $res qui correspond au tableau retourné par le SELECT
        while ($val = $res->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr>'
                . '<td>' . $val['idIntervention'] . '</td>'
                . '<td>' . $val['Materiel_idMateriel'] . '</td>'
                . '<td>' . $val['Technicien_idTechnicien'] . '</td>'
                . '<td>' . $val['Ticket_idTicket'] . '</td>'
                . '<td>' . $val['date'] . '</td>'
                . '<td>' . $val['diagnostic'] . '</td>'
                . '<td>' . $val['action'] . '</td>'
                . '</tr>';
        }
        ?>
    </table>
    </body>
</html>
