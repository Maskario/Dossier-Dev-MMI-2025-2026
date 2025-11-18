<?php 

$firtname = $_GET['prenom'];

$lastname = $_GET['nom'];

$age = $_GET['age'];

echo 'Vous vous appelez : '.$firtname.' '. $lastname. " et vous avez ". $age. " ans<br>";


$note1 = $_GET['hebergement'];
$note2 = $_GET['intégration'];
$note3 = $_GET['devweb'];


echo '<br> Votre note d\'hebergement est de : '. $note1. " /20<br>";
echo '<br> Votre note d\'intégration est de : '. $note2. " /20<br>";
echo '<br> Votre note de DevWeb est de : '. $note3. " /20<br>";

$moyenne = round(($note1+$note2+$note3)/3,2);

echo '<br> Votre moyenne général est donc de : '. $moyenne. " /20 <br>";


?>
