<?php

// Avviamo la sessione:
session_start();
// alla lunghezza della password gli assegno il valore della sessione $_SESSION['pwd_length'] ricevuto dalla funzione verifyAddForm():
$pwd_lenght = $_SESSION['pwd_length'];


// richiamo la funzione per generare le password presente nel file functions.php:
require_once './functions.php';

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

        $password = generatePassword($pwd_lenght, $_SESSION['maiuscole'], $_SESSION['minuscole'], $_SESSION['simboli'], $_SESSION['numeri']);
        if ($pwd_lenght > 0 && $password) {
            echo "La password generata di '" . $pwd_lenght . "' caratteri è la seguente: " . $password;
        } else {
            echo generatePassword($pwd_lenght, false, false, false, false);
        }

        ?>
    </h3>

    <nav><a href="./index.php">Torna alla homepage</a></nav>
</body>

</html>