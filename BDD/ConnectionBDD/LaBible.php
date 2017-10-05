<?php 
/**
 *
 *Retourne le nombre de lignes d'une requete MySQL.
 * @param sql string
 *  <p>Requete SQL.</p>
 *
 *
 * @return Le nombre de lignes dans un jeu de résultats en cas de succès
 *         ou FALSE si une erreur survient.
 */
function compteSQL($sql) {
    global $modeacces, $connexion;
    
    if ($modeacces="pdo") {
        //utilisation d'une requete prepare
        $reqprep=$connexion->prepare($sql);
        //execution de la requete preparee
        $reqprep->execute();
        $num_rows=$reqprep->rowCount();
    }
    if ($modeacces=="mysql") {
        $result = executeSQL($sql);
        $num_rows = mysql_num_rows($result);
    }
    if ($modeacces=="mysqli") {
        $result = executeSQL($sql);
        $num_rows = $connexion->affected_rows;
        
    }
    
    return $num_rows;
}
/**
 *
 *Retourne un tableau résultat d'une requete MySQL.
 * @param sql string
 *  <p>Requete SQL.</p>
 *
 *
 * @return un tableau résultat de la requete MySQL.
 *
 * exemple : 	$sql = "select * from user";
 $results = tableSQL($sql);
 foreach ($results as $ligne) {
 //on extrait chaque valeur de la ligne courante
 $login = $ligne['login'];
 $password = $ligne[3];
 
 echo $login." ".$password."<br />";
 }
 */
function tableSQL($sql) {
    global $modeacces, $connexion;
    
    $result = executeSQL($sql);
    $rows=array();
    
    if ($modeacces=="pdo") {
        $rows = $result->fetchAll(PDO::FETCH_BOTH);
    }
    if ($modeacces=="mysql") {
        while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
            array_push($rows,$row);
        }
    }
    if ($modeacces=="mysqli") {
        while ($row = $result->fetch_array(MYSQLI_BOTH)) {
            array_push($rows,$row);
        }
    }

?>