<?php
include "AccesDonnees.php";

$ip=explode(".",$_SERVER['SERVER_ADDR']);

switch ($ip[0]) {
    
    case 127 :
        $host = "127.0.0.1";
        $user = "root";
        $password = "workshopb3";
        $dbname = "gfi_resolve";
        $port='3306';
        break;
        
    case "::1":
        $host = "127.0.0.1";
        $user = "root";
        $password = "workshopb3";
        $dbname = "gfi_resolve";
        $port='3306';
        break;
        
    case 217 :
       
        $host = "217.182.75.177";
        $user = "root";
        $password = "workshopb3";
        $dbname = "gfi_resolve";
        $port='3306';
        break;
        
        
    default :
        exit ("Serveur non reconnu...");
        break;
}

$connexion=connexion($host,$port,$dbname,$user,$password);

?>

