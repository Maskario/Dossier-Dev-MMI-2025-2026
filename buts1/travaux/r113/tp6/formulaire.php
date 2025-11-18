<?php 

$firstname = $_GET['prenom'];
$lastname = $_GET['nom'];


echo 'Vous vous appelez : '.$firstname.' '.$lastname.'<br><br>';

// Récupération des notes
$note = [
    'integration' => [
        $_GET['note1_inte'],
        $_GET['note2_inte'],
        $_GET['note3_inte']
    ],
    'dev' => [
        $_GET['note1_Dev'],
        $_GET['note2_Dev'],
        $_GET['note3_Dev']
    ],
    'mathematiques' => [
        $_GET['note1_Maths'],
        $_GET['note2_Maths'],
        $_GET['note3_Maths']
    ]
];

function calculMoyenne($notes = []){
    $nbNotes = count($notes);
    $somme = 0;
    foreach($notes as $note){
        $somme += $note;
    }
    $moyenne = $somme / $nbNotes;
    return $moyenne;
}

$tableauDeMesMoyennes = [];

foreach($note as $key => $notesMatieres){

    echo 'Notes de la matière : '.$key.'<br>';

    foreach($notesMatieres as $note){
        echo $note.'/20<br>';

    }
    
    $moyenne = calculMoyenne($notesMatieres);

    $tableauDeMesMoyennes[] = $moyenne;

    echo'Moyenne de la matière : '.$moyenne. ' /20<br><br>';
}

$moyenneGenerale = calculMoyenne($tableauDeMesMoyennes);
echo'Moyenne général : '.$moyenneGenerale. ' /20<br><br>';

if($moyenneGenerale>=10){
    echo 'SEMESTRE VALIDE';
}else{
    echo 'SEMESTRE NON VALIDE';
}


?>
