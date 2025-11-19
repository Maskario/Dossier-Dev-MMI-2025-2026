<?php 


// variable chaine de caractère
$lastname = 'Daif';
$name = 'Yassine';

echo 'Salut '. $lastname.' '.$name.'<br>';


// variable de type numérique - pas besoin des simples quotes => '



$age = 20;


// adition 
$adition = $age + 2 ;


// affichera 22
echo 'vous avez : '.$adition.' ans<br>';

//soustraction 

$soustraction = $age - 1 ;
$soustraction1 = $adition - 1 ;

//ou 

$soustraction = $age-- ;
$soustraction1 = $adition-- ;

// afficher les résultats 

echo 'résultat de la soustraction : '.$soustraction. '<br>';
echo 'résultat de la soustraction1 : '.$soustraction1. '<br>';

//multiplication 
$multiplication = $age * 4;

echo 'résultat de la multiplication : '.$multiplication. '<br>';


//division 
$division = $multiplication / 2;

echo 'résultat de la division: '.$division. '<br>';

//float

$float = 2.09;


// je peux faire des opérations mathématiques sur un float 

$additionsurfloat = $float * 4.4 ;

echo 'résultat du float: '.$additionsurfloat. '<br><br>';


// les tableaux 

// crée un tableau vide - en php un tableau est un array

// $tableauvide = [];

// crée un tableau avec des éléments
$tableau = [
    'Romain',
    'Méric',
    'Aylan',
    'Jimmy',
    'tzuyu',
];

// j'ajoute un element en plus dans le tableau
$tableau[] = 'Ana';

$nbElements = count($tableau);

echo 'Le nombre dans mon tableau : '.$nbElements. '<br>';

// affichage des éléments de mon tableau grace à la boucle foreach 
// (pour chaque éléments de mon tableau je fais ...)

foreach($tableau as $ligne){
    // pour chaque éléments de mon tableau ($tableau) comme $ligne
    echo $ligne.'<br>';
}

echo '<br>';

// utilisation de tableau cle (key) / valeur (value)
// la clé ne doit pas jamais contenir d'èspace ou de caractères spéciaux
// Création d'un nouveau tableau


$tableauCleValeur = [
    'firstname' => 'Romain',
    'lastname' => 'Delon',
    'email' => 'yassdaif10@gmail.com',
    'ville' => 'romilly sur seine',
    'children' => [
        'Noémie',
        'Morgane',
    ]
];

// je souhaite afficher uniquement le nom de famille grace à la clé 'lastname :

echo $tableauCleValeur['lastname'].'<br>';

echo $tableauCleValeur['email'].'<br>';

$children = $tableauCleValeur['children'];
echo 'Nombre d\'enfant : '.count($children).'<br>';

foreach($children as $ligne){
    echo $name.'<br>';
}
    


echo '___________________________________________________________________________________'









?>