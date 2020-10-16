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

		//  ---> FIN
	?>
	<p class="validation">Point de validation n°1</p>

	<h1>Préparation N°1, partie 2</h1>
	<p class="question">7. Créez un tableau associatif $tab1<br/>
	    dont les clés sont 'id', 'nom', 'ipLocale' et 'actif'<br/>
	    contenant respectivement les valeurs 1, 'ExoDB', '192.168.200.107' et 1,<br/>
	    puis affichez-le simplement pour vérifier</p>
	<?php
		//  ---> A COMPLETER

		//  ---> FIN
	?>
	<?php
		$hashTab = isset($tab1) ? md5(json_encode($tab1)) : '';
		if($hashTab === '36358162cbcdbd0cc509406ce46e7007'):?>
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

		//  ---> FIN
	?>
	<?php
		$hashTab = isset($tab3) ? md5(json_encode($tab3)) : '';
		if($hashTab === '17e038cfc837b135b6cac907575d507b'):?>
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

		//  ---> FIN
	?>
	<?php
		$hashTab = isset($tab3) ? md5(json_encode($tab3)) : '';
		if($hashTab === 'aab1642363a745a315485e0f45979fa3'):?>
			<p class="bon">Tableau $tab3 correct</p>
	<?php else:?>
			<p class="bad">Tableau $tab3 incorrect</p>
	<?php endif;?>

	<p class="question">11. Affectez à une variable nommée $size la taille du tableau $tab3.<br/>
				--> Valeurs attendues: 3</p>
	<?php
		//  ---> A COMPLETER

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

		//  ---> FIN
	?>
	<p class="validation">Point de validation n°2</p>
    </body>
</html>
