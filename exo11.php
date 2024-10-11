<h1>Exercice 11</h1>

<h2>Résultat</h2>

<?php

$date = "2018-02-23";



echo formaterDateFr($date);



function formaterDateFr($date) {

    $times = strtotime($date);

    $formattedDate = date("l d F Y", $times);

    return $formattedDate;
}

