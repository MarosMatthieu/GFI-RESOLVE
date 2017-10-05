<?php
$bdd = mysqli_connect("127.0.0.1", "admin", "workshopb3", "gfi_resolve");

if (mysqli_connect_errno()) {
    printf("Echec de la connexion : ", mysqli_connect_error());
    exit();
}
$company = $_POST['company-name'];
$description = $_POST['description'];
$description = $_POST['contact-name'];
$description = $_POST['contact-surname'];
$description = $_POST['mail'];
$description = $_POST['phone'];
$sql = (mysqli_query($bdd, "INSERT INTO client(cl_Id, cl_Nom, Cl_Desc)
VALUES (NULL, '$company', '$description')"));
$sql2= (mysqli_query($bdd, "INSERT INTO contact(ctc_cl_Id, ctc_Nom, ctc_Prenom, ctc_Mail, ctc_phone)
VALUES (
    (SELECT cl_Id
        FROM client
        WHERE cl_Nom = '$company'
        ), '$contact-name', '$contact-surname', '$mail', '$phone')"));
?>
