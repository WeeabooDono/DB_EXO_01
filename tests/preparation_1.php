<!DOCTYPE html>
<?php
//  Nécessaire pour éviter le "bug" du json_encode qui travaille différement
//  avec les float (pb de précision) à partir de PHP7.1 
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
        <title>Préparation 1</title>
    </head>
    <body>
	<h1>Préparation N°1, partie 1</h1>
	<p class="question">1. Créez un tableau scalaire (indexé...) $tab0<br/>
	    contenant les 8 valeurs suivantes : 8.3 5.1 13.8 17.9 2.1 4.0 1.1 15.5<br/>
	    puis affichez-le simplement pour vérifier.</p>
	<?php
		//  ---> A COMPLETER
        $tab0 = array(8.3, 5.1, 13.8, 17.9, 2.1, 4.0, 1.1, 15.5);
		//  ---> FIN
	?>
	<?php
		$hashTab = isset($tab0) ? md5(json_encode($tab0)) : '';
		if($hashTab === 'fbca7ad2ec5af06268a55ddfaa7b71a8'):?>
			<p class="bon">Tableau $tab0 correct</p>
	<?php else:?>
			<p class="bad">Tableau $tab0 incorrect</p>
	<?php endif;?>

	<p class="question">2. Ajoutez 3 lignes à $tab0,<br/>
	    avec respectivement les valeurs 4.2 6.9 5.4<br/>
	    puis vérifiez simplement.</p>
	<?php
		//  ---> A COMPLETER
	    $tab0[] = 4.2;
        $tab0[] = 6.9;
        $tab0[] = 5.4;
        dump_var($tab0);
		//  ---> FIN
	?>
	<?php
		$hashTab = isset($tab0) ? md5(json_encode($tab0)) : '';
		if($hashTab === '4dbf7ff336a8af021d346fa5f554f99c'):?>
			<p class="bon">Tableau $tab0 correct</p>
	<?php else:?>
			<p class="bad">Tableau $tab0 incorrect</p>
	<?php endif;?>

	<p class="question">3. Recherchez puis affectez à une variable nommée $max<br/>
	    la plus grande valeur contenue dans le tableau $tab0.<br/>
		--> Valeurs attendues: 17.9</p>
	<?php
		//  ---> A COMPLETER
        $max = max($tab0);
		//  ---> FIN
	?>
	<?php
		$hashTab = isset($max) ? md5(json_encode($max)) : '';
		if($hashTab === '5d93f7609c95588e766ce570e9b035a2'):?>
			<p class="bon">$max correct</p>
	<?php else:?>
			<p class="bad">$max incorrect</p>
	<?php endif;?>


	<p class="question">4. Supprimez (attention, pas vider...) du tableau $tab0 les cases contenant des valeurs >= 10.<br/>
	    Vérifiez simplement.</p>
	<?php
		//  ---> A COMPLETER
        for($i = 0; $i < sizeof($tab0); $i++){
            if($tab0[$i] >= 10) unset($tab0[$i]);
        }
        dump_var($tab0);
		//  ---> FIN
	?>
	<?php
		$hashTab = isset($tab0) ? md5(json_encode($tab0)) : '';
		if($hashTab === 'acf252899e3632c3a52ccc2649ae57d1'):?>
			<p class="bon">Tableau $tab0 correct</p>
	<?php else:?>
			<p class="bad">Tableau $tab0 incorrect</p>
	<?php endif;?>

	<p class="question">5. Affectez à une variable nommée $size la taille du tableau $tab0<br/>
	    --> Valeurs attendues: 8</p>
	<?php
		//  ---> A COMPLETER
        $size = sizeof($tab0);
		//  ---> FIN
	?>
	<?php
		$hashTab = isset($size) ? md5(json_encode($size)) : '';
		if($hashTab === 'c9f0f895fb98ab9159f51fd0297e236d'):?>
			<p class="bon">Taille tableau $tab0 correct</p>
	<?php else:?>
			<p class="bad">Taille tableau $tab0 incorrecte</p>
	<?php endif;?>

	<p class="question"><img class='imgAttendu' src="../img/img0.png"/>
	    6. Affichez le contenu de $tab0 dans une table html.<br/>
	    Chaque valeur de $tab0 dans un cellule de la table html.<br/>
	    Une ligne de titre occupe la largeur de toutes les colonnes.<br/>
	    --> Valeurs attendues:</p>
	<?php
		//  ---> A COMPLETER
    ?>
        <table>
            <tr>
                <th colspan="8">Tableau :</th>
            </tr>
            <tr>
                <?php
                foreach($tab0 as $elm){
                    echo "<td>".$elm."</td>";
                }
                ?>
            </tr>
        </table>
    <?php
		//  ---> FIN
	?>
	<p class="validation">Point de validation n°1</p>

	<h1>Préparation N°1, partie 2</h1>
	<p class="question">7. Créez un tableau associatif $tab1<br/>
	    dont les clés sont 'id', 'nom', 'ipLocale' et 'actif'<br/>
	    contenant respectivement les valeurs 1, 'EvalSnir', '192.168.200.107' et 1,<br/>
	    puis affichez-le simplement pour vérifier</p>
	<?php
		//  ---> A COMPLETER
        $tab1 = array(
            'id' => 1,
            'nom' => 'EvalSnir',
            'ipLocale' => '192.168.200.107',
            'actif' => 1
        );
        dump_var($tab1);
		//  ---> FIN
	?>
	<?php
		$hashTab = isset($tab1) ? md5(json_encode($tab1)) : '';
		if($hashTab === '1b6b2228dd367fb50f1660e143168c5c'):?>
			<p class="bon">Tableau $tab1 correct</p>
	<?php else:?>
			<p class="bad">Tableau $tab1 incorrect</p>
	<?php endif;?>

	<p class="question">8. Créez un deuxième tableau vide $tab2.<br/>
	    Ajoutez-lui successivement des éléments dont les clés sont 'id', 'nom', 'ipLocale' et 'actif'<br/>
	    contenant respectivement les valeurs 4, 'Edisson', '192.168.200.54' et 0.<br/>
	    Affichez-le simplement pour vérifier</p>
	<?php
	//  ---> A COMPLETER
        $tab2 = array(
            'id' => 4,
            'nom' => 'Edisson',
            'ipLocale' => '192.168.200.54',
            'actif' => 0
        );
        dump_var($tab2);
	//  ---> FIN
	?>
	<?php
		$hashTab = isset($tab2) ? md5(json_encode($tab2)) : '';
		if($hashTab === '34dd204d610eaa590cc9b78aaf8ea839'):?>
			<p class="bon">Tableau $tab2 correct</p>
	<?php else:?>
			<p class="bad">Tableau $tab2 incorrect</p>
	<?php endif;?>

	<p class="question">9. Créez un troisième tableau, scalaire, nommé $tab3,<br/>
	    dont le premier élément est le tableau $tab1 et le deuxième le tableau $tab2.<br/>
	    Affichez-le simplement pour vérifier</p>
	<?php
		//  ---> A COMPLETER
        $tab3 = array($tab1, $tab2);
        dump_var($tab3);
		//  ---> FIN
	?>
	<?php
		$hashTab = isset($tab3) ? md5(json_encode($tab3)) : '';
		if($hashTab === 'afbc6168931516768654432e3e6bd691'):?>
			<p class="bon">Tableau $tab3 correct</p>
	<?php else:?>
			<p class="bad">Tableau $tab3 incorrect</p>
	<?php endif;?>

	<p class="question">10. Ajoutez à $tab3 un élément qui est un tableau associatif,<br/>
	    et dont les clés sont 'id', 'nom', 'ipLocale' et 'actif',<br/>
	    contenant respectivement les valeurs 25, 'Radiateur Lyon', '192.168.1.31' et 1.<br/>
	    Affichez-le simplement pour vérifier</p>
	<?php
		//  ---> A COMPLETER
        $tab3[] = array(
            'id' => 25,
            'nom' => 'Radiateur Lyon',
            'ipLocale' => '192.168.1.31',
            'actif' => 1
        );
        dump_var($tab3);
		//  ---> FIN
	?>
	<?php
		$hashTab = isset($tab3) ? md5(json_encode($tab3)) : '';
		if($hashTab === '889d451b7d717567c9ef6c800b3ddc1c'):?>
			<p class="bon">Tableau $tab3 correct</p>
	<?php else:?>
			<p class="bad">Tableau $tab3 incorrect</p>
	<?php endif;?>

	<p class="question">11. Affectez à une variable nommée $size la taille du tableau $tab3.<br/>
				--> Valeurs attendues: 3</p>
	<?php
		//  ---> A COMPLETER
        $size = sizeof($tab3);
        echo $size;
		//  ---> FIN
	?>
	<?php
		$hashTab = isset($size) ? md5(json_encode($size)) : '';
		if($hashTab === 'eccbc87e4b5ce2fe28308fd9f2a7baf3'):?>
			<p class="bon">Tableau $tab3 correct</p>
	<?php else:?>
			<p class="bad">Tableau $tab3 incorrect</p>
	<?php endif;?>

	<p class="question"><img class='imgAttendu' src="../img/img1.png"/>
	    12. Affichez le contenu de $tab3 dans une table html.<br/>
	    La ligne de titre contient 'ID', 'Dénomination', 'Adr. IP' et 'Actif'<br/>
	    les autres lignes contiennent les valeurs issues des lignes de $tab3.<br/>
	    N'utilisez aucun style.<br/>
	    --> Valeurs attendues:  </p>
	<?php
		//  ---> A COMPLETER
		?>
    <table>
        <tr>
            <th>ID</th>
            <th>Dénomination</th>
            <th>Adr. IP</th>
            <th>Actif</th>
        </tr>
        <?php
        foreach($tab3 as $tab){
            echo "<tr>";
            echo "<td>".$tab['id']."</td>";
            echo "<td>".$tab['nom']."</td>";
            echo "<td>".$tab['ipLocale']."</td>";
            echo "<td>".$tab['actif']."</td>";
            echo "</tr>";
        }

        ?>
    </table>
        <?php
		//  ---> FIN
	?>
	<p class="validation">Point de validation n°2</p>
    </body>
</html>
