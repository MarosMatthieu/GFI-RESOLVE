<?php


//include le fichier de connexion
include 'connectAD.php';
//Creation et stockage de la requette dans une variable
$
sql = " SELECT ! FROM ! WHERE ! = ? LIMIT 5";
//execution de la requette avec executeSQL
$CompteurResultat = compteSQL($sql);
$Resultat = tableSQL($sql);
?>
<tbody>
<?php
$compteur=0;

    if ($Resultat>0) {
        foreach ($Resultat as $ligne) {
    		//on extrait chaque valeur de la ligne courante de chaque tournees.
    		$ETAT = $ligne[0];
    		$TITLE = $ligne[1];
    		$DATE = $ligne[2];
    		$CLIENT = $ligne[3];
    		$Prest_ID = $ligne[???]

		$compteur++;
		
			if ($compteur %2 == 0) {
			  //MESSAGE D'ERREUR
			} else {
?>	
	<tr>
    	<td><?php echo 'FUCK' ?></td>
    	<td><?php echo 'FUCK' ?></td>
    	<td><?php echo 'FUCK' ?></td>
    	<td><?php echo 'FUCK' ?></td>
    	<td> </td>
    </tr>
<?php 
		} 
	} 
?>