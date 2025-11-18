<?php 

// je récupère la valeur sélectionnée par l'utilisateur
$type_emails = $_GET['type_emails'];

// je test en affichant la valeur
//echo 'L\'email que vous avez sélectionné est une adresse mail : '.$type_emails. '<br><br>';

// tableau contenant les différentes adresses emails
$tabEMails = [
    'corto.maltese@univ-reims.fr',
    'corto.maltese@gmail.com',
    'pandora.groovesnore@univ-reims.fr',
    'pandora.groovesnore@yahoo.fr',
    'shangai.li@univ-reims.fr',
    'shangai.li@hotmail.com',
    'raspoutine@univ-reims.fr',
    'raspoutine@yahoo.fr'
];

function sortEmails($tabEMails = [], $type_emails='Professionel'){
    $resultat = [];
    foreach($tabEMails as $email/*la valeur ici peut être nomer comme on veut*/){
        $domain = strstr($email,'@');

        if ($type_emails== 'Professionel' && $domain == '@univ-reims.fr' ){
            $resultat[] = $email;
        }elseif ($type_emails == 'Personnel' && $domain!='@univ-reims.fr'){
            $resultat[] = $email;
        }
    }
    return $resultat;
}

$tri = sortEmails($tabEMails, $type_emails);
foreach($tri as $email){
    echo $email. '<br>';
}




?>