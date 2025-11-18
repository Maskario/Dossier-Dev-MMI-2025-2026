<?php
echo 'TP 5 LES TABLEAUX<br><br>';


$tab1 = [12, 56, 78.5];

foreach($tab1 as $val){
    echo $val.', ';
}

echo '<br><br>';


$tab=[11,13,14,16,17,14,18,13];

echo 'En MMI, j\'ai '.$tab[0].' en mathématiques, '.$tab[1]. ' en prog, '.$tab[2]. ' en reseau, ' .$tab[3]. ' en com, '.$tab[4].' en droit, '.$tab[6]. ' en anglais,'.$tab[7]. ' en lego, et
c’est bien comme cela.<br><br>';


echo 'En MMI, j’ai 7 matières, elles sont respectivement de 0 à 6 : mathématiques, prog, reseau, com, droit, anglais, et lego,<br><br>';




$tabAssociatif = [
    'maths' => 11,
    'prog' => 13, 
    'reseau' => 14, 
    'com' => 16, 
    'droit' => 17, 
    'anglais' => 14, 
    'lego' => 16,
];


echo 'En MMI, j’ai 7 matières, elles sont respectivement de 0 à 6 : mathématiques, prog, reseau, com, droit, anglais, et
lego, <br>';


foreach($tabAssociatif as $key => $note){
    echo 'Dans la matière '.$key.' j\'ai : '.$note.',<br>';
}

echo 'et c’est bien comme cela.';



  







?>