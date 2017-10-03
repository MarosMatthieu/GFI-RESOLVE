<?php
$phone = $_POST['phone'];

//fonction pour vérifier la conformité d'un numéro de tel Français
function VerifTelFr($phone){
    $regex = "#^0[1-68]([-. ]?[0-9]{2}){4}$#";
    if (preg_match($regex,$phone)){
        echo 'Ce numéro est correct.';
    } else {
        echo 'Ce numéro est incorrect.';
    }
}
echo VerifTelFr($phone)
?> 