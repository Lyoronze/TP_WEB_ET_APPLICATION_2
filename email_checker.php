<?php
session_start();
$received_email= $_POST['email'];
if($received_email == 'ftoure@gmail.com'){
    echo "email not exist";
    echo json_encode(['disponibilite' => false, 'email' => $received_email]); //json_encode va convertir en chaine de caractere
}else{
    echo "email already exist";
    echo json_encode(['disponibilite'=> true, 'email' => $received_email]);
}
//echo 'you have sent'.$received_email;
echo $received_email;
?>