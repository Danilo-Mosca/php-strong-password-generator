<?php

// variabile contenente tutti i caratteri per generare una password casuale (composta da lettere minuscole, maiuscole, numeri e/o simboli)
$pwd_char = 'abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ0123456789!@#$%&*?';
// var_dump($pwd_char);
// echo strlen($pwd_char);

// Funzione che genera una password con la lunghezza specificata
function generatePassword(int $pwd_lenght)
{
    $password = "";
    global $pwd_char;
    if ($pwd_lenght == 0 || $pwd_lenght == null) {
        return "<h2> Lunghezza password non definita";
    } else {
        for ($i = 0; $i < $pwd_lenght; $i++) {
            $randomNum = rand(0, 63);
            $password .= $pwd_char[$randomNum];
        }
        return $password;
    }
}

?>