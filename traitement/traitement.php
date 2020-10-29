
// recupere et traite la data et redirige vers la page message.php
<?php

$validation=["idtrue", "titic", "arte", 32];

$mess=[" "," "," "," ",];

require ('testemess.php');
testevalide($validation, $mess);
var_dump($mess);
//require ('../message.php');
?> 