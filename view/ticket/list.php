<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/styles.css" />
    <title>Tickets</title>
</head>

<body>
    <h1>liste des tickets</h1>
    <?php
    require_once('../../inc/ticket/ticketTools.php');
    require_once('../../model/ticket.php');
    $tickets = getAll();
    ?>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Date</th>
        </tr>
        <?php
        // parcour tu tableau $res qui correspond au tableau retourné par le SELECT
        foreach($tickets as $ticket){
            $id = $ticket->getIdTicket();
            echo '<tr>'
                . '<td><a href="detail.php?id=' . $id . '">' . $id . '</a></td>'
                . '<td>' . $ticket->getDate() . '</td>'
                . '</tr>';
        }
        ?>
    </table>

</body>

</html>