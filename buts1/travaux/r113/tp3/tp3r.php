<?php

$firtname = $_GET['prenom'];

$lastname = $_GET['nom'];

$age = $_GET['age'];

$ville =$_GET['ville'];

echo 'Vous vous appelez : <br><br>'.$firtname.' '. $lastname. ' et vous avez '. $age. ' ans,<br> ';

switch ($firtname){
    case 'victor':
    case 'hector':
    case 'yassine':
    echo 'vous êtes un Homme<br><br>';
    break;
} 

switch strtoupper($firtname){
    case 'elodi':
    case 'sophie':
    echo 'vous êtes une Femme<br><br>';
    break;
} 


if ($age > 18) {
    echo 'vous êtes Majeur parce que vous avez '. $age. ' ans<br><br>';
} elseif ($age == 18) {
    echo 'vous êtes tout juste Majeur parce que vous avez pile '. $age. ' ans<br><br>';
} else {
    echo 'vous êtes Mineur parce que vous avez '. $age. ' ans<br><br>';
}

switch ($ville){
    case 'Troyes': echo 'Vous êtes un troyen car vous habitez à '. $ville; break;
    case 'Romilly-sur-seine': echo 'Vous êtes un Romillon car vous habitez à '. $ville; break;
    case 'Bar-sur-Aube': echo 'Vous êtes un Baralbin car vous habitez à '. $ville; break;
    default: echo 'ailleurs';
}



?>