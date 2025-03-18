<?php

// verifico se i valori passati come parametri GET della super variabile globale sono stati inseriti
function verifyAddForm()
{
    if (isset($_GET['pwd_length'])) {
        if (isset($_GET['lettere_maiuscole']) || isset($_GET['lettere_minuscole']) || isset($_GET['lettere_simboli']) || isset($_GET['numeri'])) {

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
            /* La funzione isset() verifica se una variabile è definita e non è null assegno alla variabile $pwd_lenght il valore 0 se questa non è definita, altrimenti il valore intero (con il casting a int) del parametro $_GET */
            $_SESSION['pwd_length'] = isset($_GET['pwd_length']) ? (int) $_GET['pwd_length'] : 0;
            // ------------------------------------------------------------------------------------

            // dirottiamo l'utente alla pagina result.php:
            header('Location: ./result.php');
        }
    }
}

// variabile contenente tutti i caratteri per generare una password casuale (composta da lettere minuscole, maiuscole, numeri e/o simboli)
$pwd_char = '';
// var_dump($pwd_char);
// echo strlen($pwd_char);

// Funzione che genera una password con la lunghezza specificata
function generatePassword(int $pwd_lenght, $maiuscole, $minuscole, $simboli, $numeri)
{
    // inizializzo password a null, perchè inizialmente vuota:
    $password = null;
    global $pwd_char;
    if ($maiuscole) {
        $pwd_char .= "ABCDEFGHJKMNPQRSTUVWXYZ";
    }
    if ($minuscole) {
        $pwd_char .= "abcdefghjkmnpqrstuvwxyz";
    }
    if ($simboli) {
        $pwd_char .= "!@#$%&*?";
    }
    if ($numeri) {
        $pwd_char .= "0123456789";
    }

    // Se la lunghezza di $pwd_char è uguale a zero, allora significa che o non ho definito una lunghezza, oppure non ho selezionato nessuna checkbox riguardante il set di caratteri che possono essere ammessi alla password, quindi restituirò un messaggio:
    if ($pwd_lenght == 0) {
        return "<h2>Lunghezza password non definita</h2>";
    }
    // Altrimenti seleziono i caratteri in base al set che ho definito:
    else {
        for ($i = 0; $i < $pwd_lenght; $i++) {
            $randomNum = rand(0, strlen($pwd_char) - 1);
            $password .= $pwd_char[$randomNum];
        }
        return $password;
    }
}
