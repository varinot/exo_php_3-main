<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>message</title>
</head>
<body>
       <!-- message de succes ou d'erreur -->
    <div class="div_mess">
       <p>
        les résultats de votre saisie dans le formulaire
       </p>
       <p>
        <?php
        echo $mess[0];
        ?>
        </p>
        <?php
        echo $mess[1];
        ?>
        <p>
        <?php
        echo $mess[2];
        ?>
        </p>
        <p>
        <?php
        echo $mess[3];
        ?>
        </p>

    </div>
   
</body>
</html>