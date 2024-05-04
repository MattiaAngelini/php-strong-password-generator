<?php
// Creo funzione per generare una password che avrà come parametri
// i caratteri contenuti in $characters e la lunghezza di $userNumber
function passwordRandom($lunghezza, $caratteri) {
    if ($lunghezza === '') {
        return 'Nessun valore inserito';
    }
    $stringaRandom = '';
    $lunghezzaCaratteri = count($caratteri);
    for ($i = 0; $i < $lunghezza; $i++) {
        $stringaRandom .= $caratteri[rand(0, $lunghezzaCaratteri - 1)];
    }
    return $stringaRandom;

}

?>