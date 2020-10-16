<!DOCTYPE html>
<?php
if (version_compare(phpversion(), '7.1', '>=')) {
    ini_set( 'serialize_precision', -1 );
}

//  Fonction à utiliser à la place de var_dump si son affichage n'est pas lisible
function dump_var($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/styles.css" />
        <title>Préparation 2</title>
    </head>
    <body>
	<h1>Préparation N°2</h1>
	<p class="question">13. Connectez-vous, dans une variable nommée $db,
	    à la base de données "interventions" en PDO.<br/>
	</p>
	<?php
	    //  ---> A COMPLETER
	    $dbInfos = array(
		'host'   => 'localhost',
		'dbname' => 'db_exercise',
		'user'   => 'root',
		'pass'   => ''
		);
        $dsn = "mysql:host={$dbInfos['host']}; dbname={$dbInfos['dbname']}; charset=UTF8";
        $db = new PDO($dsn, $dbInfos['user'], $dbInfos['pass']);
	    //  ---> FIN
	?>
	<?php
		if(isset($db) && $db != FALSE)
		{
		    $cla = get_class($db);
		    switch ($cla) {
			case 'mysqli':
			    echo '<p class="bon">Connection BDD en MySQLi correcte</p>';
			    break;
			case 'PDO':
			    echo '<p class="bon">Connection BDD en PDO correcte</p>';
			    break;
			default:
			    echo '<p class="bad">Connection BDD étrange...</p>';
			    break;
		    }
		}
		else
		    echo '<p class="bad">Connection BDD incorrecte</p>';
	?>

	<p class="question">14. Exécutez une requête SQL pour récupérer,<br/>
	    dans une variable nommée $res, l'idTechnicien et le nom de tous les techniciens.</p>
	<?php
	    //  ---> A COMPLETER
        $rqt = "SELECT * FROM `technicien`";
        $res = $db->query($rqt);
	    //  ---> FIN
	?>
	<?php
		$hashTab = isset($res) ? md5(json_encode($res)) : '';
		if($hashTab === '592ea61dd3c8c6dc593f4e34632f7b69'):?>
			<p class="bon">$res correct</p>
	<?php else:?>
			<p class="bad">$res incorrect</p>
	<?php endif;?>

	<p class="question"><img class='imgAttendu' style='max-width: 40%;' src="../img/img2.png"/>
		15. Rangez les résultats précédents dans un tableau nommé $techs.<br/>
		Affichez simplement ce tableau.<br/>
		--> Extrait des valeurs attendues: </p>
	<?php
	    //  ---> A COMPLETER
        $techs = array();
        while ($val = $res->fetch(PDO::FETCH_ASSOC)) {
            $techs[] = array(
                'idTechnicien' => $val['idTechnicien'],
                'nom' => $val['nom']
            );
        }
		dump_var($techs);
	    //  ---> FIN
	?>
	<?php
		$hashTab = isset($techs) ? md5(json_encode($techs)) : '';
		if($hashTab === 'ba3bc1901cf15a2049ea10d60479af62'):?>
			<p class="bon">Tableau $techs correct</p>
	<?php else:?>
			<p class="bad">Tableau $techs incorrect</p>
	<?php endif;?>
	<p class="validation">Point de validation n°3</p>

	<p class="question"><img class='imgAttendu' src="../img/img5.png"/>
	    16. Affichez le contenu de $techs dans une table html.<br/>
	    La ligne de titre contient 'id' et 'Nom'<br/>
	    les autres lignes contiennent les valeurs issues des lignes de $techs.<br/>
	    --> Valeurs attendues:  </p>
	<?php
	    //  ---> A COMPLETER
    ?>
    <table>
        <tr>
            <th>id</th>
            <th>Nom</th>
        </tr>
        <tr>
            <?php
            foreach($techs as $tech){
                echo "<tr>";
                echo "<td>".$tech['idTechnicien']."</td>";
                echo "<td>".$tech['nom']."</td>";
                echo "</tr>";
            }
            ?>
        </tr>
    </table>
    <?php
	    //  ---> FIN
	?>
	<p class="validation">Point de validation n°4</p>
    </body>
</html>