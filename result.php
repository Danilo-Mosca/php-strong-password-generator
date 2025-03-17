<?php

// richiamo la funzione per generare le password presente nel file functions.php:
require_once './functions.php';

/* La funzione isset() verifica se una variabile è definita e non è null
assegno alla variabile $pwd_lenght il valore 0 se questa non è definita, altrimenti il valore intero (con il casting a int) del parametro $_GET */
$pwd_lenght = isset($_GET['pwd_length']) ? (int) $_GET['pwd_length'] : 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result password</title>
</head>

<body>
    <h3>
        <?php
        echo "La password generata di '" . $pwd_lenght . "' caratteri è la seguente: " . generatePassword($pwd_lenght);
        ?>
    </h3>
</body>

</html>