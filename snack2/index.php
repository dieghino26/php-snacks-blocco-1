<?php
// Con un form passare come parametri GET name, mail e age e verificare
//  (cercando i metodi che non conosciamo nella documentazione)
//   che name sia più lungo di 3 caratteri,
//  che mail contenga un punto e una chiocciola e che age sia un numero. 
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

$name = $_GET["name"] ?? "";
$email = $_GET["email"] ?? "";
$age = $_GET["age"] ?? "";


$is_name_valid = mb_strlen(trim($name)) > 3;
$is_email_valid = str_contains($email, "@") && str_contains($email, ".");
$is_age_valid = is_numeric($age) && $age > 0;

$is_form_invalid = !$is_name_valid || !$is_email_valid || !$is_age_valid;

$message = $is_form_invalid ? "Accesso Negato" : "Accesso Riuscito";

echo $message;
?>

