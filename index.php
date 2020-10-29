<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index formulaire exo_php_3-main</title>
</head>
<body>

<!-- formulaire de contact, d'inscription, format libre  -->

<form id="identification" name="identification" method="post" action="traitement/traitement.php">
		<input type="text" id="identifiant" name="identifiant" maxlength="10" value='Votre identifiant' required/><br>
    <input type="password" id="motPasse" name="motPasse" maxlength="10" value='' required/><br>
    <input type="text" name="nom" id="nom" value='Votre nom' /><br>
    <input type="number" name="age" id="age" value='votre âge' ><br>
    <input type="submit" value="envoyer"><br>
</form>
</body>
</html>