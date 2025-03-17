<?php

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
    if ($pwd_lenght == 0 || $pwd_char == '') {
        return "<h2>Lunghezza password o set di caratteri non definiti</h2>";
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
