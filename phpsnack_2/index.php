<?php
//Passare come parametri GET name, mail e age
$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];
var_dump($name, $email, $age);

//verifica che name sia più lungo di 3 caratteri, che maio contenga un punto e una chiocciola e age sia un numero
if (strlen($name) > 3 && strpos($email, "@") != false && strpos($email, ".") != false && is_numeric($age) == true) {
    echo "Accesso riuscito";
} else {
    echo "Accesso negato";
}