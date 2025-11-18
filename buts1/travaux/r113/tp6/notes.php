<?php


function sayHello($param1 = 'Prénom par defaut', $param2 = 'Nom par defaut'){
    return 'bonjour'.$param1;
}

$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];

$message = sayHello($firstname, $lastname);

echo $message;


$notes = [12,13,14]

function calculMoyenne($notes = []){
    $nbNotes = count($notes);
    $somme = 0;
    foreach ()
}




?>