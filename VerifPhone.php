<?php
$phone = $_POST['phone'];

//fonction pour v�rifier la conformit� d'un num�ro de tel Fran�ais
function VerifTelFr($phone){
    $regex = "#^0[1-68]([-. ]?[0-9]{2}){4}$#";
    if (preg_match($regex,$phone)){
        echo 'Ce num�ro est correct.';
    } else {
        echo 'Ce num�ro est incorrect.';
    }
}
echo VerifTelFr($phone)
?> 