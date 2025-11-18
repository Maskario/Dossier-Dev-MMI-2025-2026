<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="tp1r.php">

        <h3>Veuillez vos informations :</h3>
        <label for="">Nom</label>
        <input type="text" id="nom" name="nom">

        <label for="">Prénom</label>
        <input type="text" id="prenom" name="prenom">

        <label for="">Age</label>
        <input type="number" id="age" name="age">
 

        <h3>Veuillez entrer les notes des matières suivantes :</h3>
        <label for="">Hebergement</label>
        <input type="number" step='0.1' id="hebergement" name="hebergement">

        <label for="">Intégration</label>
        <input type="number" step='0.1' id="inégration" name="intégration">

        <label for="">Développemnt Web</label>
        <input type="number" step='0.1' id="devweb" name="devweb">

        <button type="submit">Envoyer</button>
    </form>
    

</body>
</html>