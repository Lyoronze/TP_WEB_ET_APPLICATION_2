<?php
session_start();
$email= $_POST['email'];
$name=$_POST['f_name'];
$lastname=$_POST['l_name'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$remplir="Merci de remplir le champ vide.";
$cocher="Merci de cocher la case vide.";

if($name == ''){
    echo "Le champ prénom est manquant+ $remplir";
}
if($lastname == ''){
    echo "Le champ nom est manquant + $remplir";
}
if($email == ''){
    echo "Le champ email est manquant + $remplir";
}
if($age == ''){
    echo "Merci de choisir un age + $cocher";
}
if($sex=''){
    echo "Merci de choisir un sexe + $cocher";
}
if($email == 'ftoure@gmail.com'){ //remplir par l'email existant de la base de donnée
    echo "L'email choisit est déjà pris";
    //echo json_encode(['disponibilite' => false, 'email' => $received_email]); //json_encode va convertir en chaine de caractere
}else{
    //echo json_encode(['disponibilite'=> true, 'email' => $received_email]);
}
//echo 'you have sent'.$received_email;
echo $lastname . $age . $name . $email . $sex;
?>
