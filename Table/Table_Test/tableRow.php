<?php

//include le fichier de connexion

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

$host = "217.182.75.177";
$user = "root";
$password = "workshopb3";
$dbname = "gfi_resolve";
$port='3306';
break;
?


//Creation et stockage de la requette dans une variable
$sql= "SELECT prest_Statut,prest_Titre,prest_Date, prest_cl_Id 
FROM `prestation`, `client`
WHERE prestation.prest_cl_Id = client.cl_Id;";

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
    		$etat = $ligne[0];
    		$titre = $ligne[1];
    		$date = $ligne[2];
    		$client = $ligne[3];
    		$prest_ID = $ligne[4];
    		$compteur = $compteur+1;
		
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
    }
?>