<?php
echo 'TP 4 - Les boucles<br><br>';


/*
echo 'Les Boucle for<br>';
for ($i=0; $i<5; $i++) {
    echo "Bonjour<br>\n";
}
echo '<br>';

echo 'Les Boucle while<br>';
$i=0;
while ($i<10) {
    echo "bonjour\n<br>"; 
    $i++;
}
*/

echo 'Exo 1<br>';
for ($i=0; $i<10; $i++) {
    echo $i.'<br>';
}

echo '<br>';

/*
$i++ = $i + 1
$i-- = $i - 1
$i-=10 = $i - 10
$i+=10 = $i + 10
$i*=10 = $i * 10
*/
echo 'Suite<br>';
for ($i=9; $i >=0; $i--) {
    echo $i.'<br>';
}


echo '<br>';

echo 'suite 2<br>';
for ($i=100; $i >=10; $i-=10){
    echo $i.'<br>';
}

echo '<br>';

echo 'Parti 2<br>';

$somme=0;
for ($i=0; $i <=100; $i++){
    $somme+=$i;
    //ou alors on peut faire : $somme=$somme+$i;
}
echo 'La somme des nombres de 1 à 100 est '.$somme;



?>