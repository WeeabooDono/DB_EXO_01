<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/styles.css" />
    <title>Tickets</title>
    <?php $id = $_GET["id"]; ?>
</head>

<body>
    <h1><?php echo "Ticket numéro " . $id; ?></h1>
    <?php
    require_once('../../inc/ticket/ticketTools.php');
    require_once('../../model/ticket.php');
    $ticket = get($id);
    ?>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Date</th>
        </tr>
        <?php
        // on récupère les éléments du ticket
        echo '<tr>'
            . '<td>' . $id . '</td>'
            . '<td>' . $ticket->getDate() . '</td>'
            . '</tr>';
        ?>
    </table>

</body>

</html>