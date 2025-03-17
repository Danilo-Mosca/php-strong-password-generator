<?php

// Avviamo la sessione:
session_start();
/* Assegno alla sessione $_SESSION['maiuscole'] il parametro GET della super variabile globale $_GET['lettere_maiuscole'] ricevuto:
   se spuntato sarà "true", altrimenti sarà "false". Attenzione, al primo caricamento della pagina, il suo valore sarà sempre false.
   Col la funzione isset() verifico se la super variabile globale è definita o meno, e le assegno i valori corrispondenti: */
$_SESSION['maiuscole'] = isset($_GET['lettere_maiuscole']) ? $_GET['lettere_maiuscole'] : false;
// var_dump($_SESSION['maiuscole']);

// Faccio lo stesso con le sessioni successive per le minuscole, i simboli e le lettere:
$_SESSION['minuscole'] = isset($_GET['lettere_minuscole']) ? $_GET['lettere_minuscole'] : false;
// var_dump($_SESSION['minuscole']);
$_SESSION['simboli'] = isset($_GET['lettere_simboli']) ? $_GET['lettere_simboli'] : false;
// var_dump($_SESSION['simboli']);
$_SESSION['numeri'] = isset($_GET['numeri']) ? $_GET['numeri'] : false;
// var_dump($_SESSION['numeri']);
// ------------------------------------------------------------------------------------


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

        $password = generatePassword($pwd_lenght, $_SESSION['maiuscole'], $_SESSION['minuscole'], $_SESSION['simboli'], $_SESSION['numeri']);
        if ($pwd_lenght > 0 && !$password) {
            echo "La password generata di '" . $pwd_lenght . "' caratteri è la seguente: " . $password;
        } else {
            echo generatePassword($pwd_lenght, false, false, false, false);
        }
        ?>
    </h3>
</body>

</html>