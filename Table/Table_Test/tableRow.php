<?php 
//include le fichier de connexion
include 'baseConnect.php';


//execution de la requette avec executeSQL
$result = (mysqli_query($bdd, "SELECT prest_Statut,prest_Titre,prest_Date, cl_Nom
    FROM `prestation`, `client`
    WHERE prestation.prest_cl_Id = client.cl_Id"));

if (!$result) {
    echo "Impossible d'exécuter la requête ($sql) dans la base : " . mysql_error();
    exit;
}

$row = mysqli_fetch_assoc($result);
foreach ($result as $ligne) {

?>
	<tr>
	

    		
    	<td><?php echo $ligne['prest_Statut'] ?></td>
    	<td><?php echo $ligne['prest_Titre'] ?></td>
    	<td><?php echo $ligne['prest_Date'] ?></td>
    	<td><?php echo $ligne['cl_Nom'] ?></td>
    	<td><?php echo '<a href="tableRow.php">Supprimer</a>'?>
    </tr>
<?php 
}
?>
<tbody>
<?php
/*
$compteur=0;

if (!isset($execSql)) {
    foreach ($Resultat as $ligne) {
    		//on extrait chaque valeur de la ligne courante de chaque tournees.
    		$etat = $ligne[0];
    		$titre = $ligne[1];
    		$date = $ligne[2];
    		$client = $ligne[3];
    		$prest_ID = $ligne[4];
    		$compteur++;
		
			if ($compteur %2 == 0) {
			  //MESSAGE D'ERREUR
			} else {

		} 
      }
	} 
*/	
?>
