<?php
include "baseConnect.php";
$company = $_POST['company-name'];
$description = $_POST['description'];
$contactname = $_POST['contact-name'];
$contactsurname = $_POST['contact-surname'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$sql = (mysqli_query($bdd, "INSERT INTO client(cl_Id, cl_Nom, Cl_Desc)
VALUES (NULL, '$company', '$description')"));
$sql2= (mysqli_query($bdd, "INSERT INTO contact(ctc_cl_Id, ctc_Nom, ctc_Prenom, ctc_Mail, ctc_Phone, ctc_Desc)
VALUES (
    (SELECT cl_Id
        FROM client
        WHERE cl_Nom = '$company'
        ), '$contactname', '$contactsurname', '$mail', '$phone', '$description')"));
?>
