<?php 
$bdd = mysqli_connect("127.0.0.1", "admin", "workshopb3", "gfi_resolve");

if (mysqli_connect_errno()) {
    printf("Echec de la connexion : ", mysqli_connect_error());
    exit();
}
?>