<?php 
$bdd = mysqli_connect("217.182.75.177", "admin", "workshopb3", "gfi_resolve");

if (mysqli_connect_errno()) {
    printf("Echec de la connexion : ", mysqli_connect_error());
    exit();
}

?>