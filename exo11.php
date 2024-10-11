<h1>Exercice 11</h1>

<h2>Résultat</h2>

<?php

$date = "2018-02-23";

echo formaterDateFr($date);

function formaterDateFr($date) {

    // Création d'une nouvelle variable times qui contient désormais la variable précente $date
    $times = new dateTime($date);

    // Modification de la langue de Us a FR
    $formatDate = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);

    // setPattern configure le modéle de format voulu
    $formatDate->setPattern("EEEE d MMMM Y");

    // Variable $formattedDate récuprère la variable $formaDate et le format de la date
    $formattedDate = $formatDate->format($times);

    return $formattedDate;
}

