<h1>Exercice 6</h1>

<h2>Résultat</h2>

<?php

$elements = ["Monsieur", "Madame", "Mademoiselle"];

echo alimenterListeDeroulant($elements);

function alimenterListeDeroulant($elements) {

    $result = "<select>";

    foreach($elements as $civilite) {
        $result .= "<option>$civilite</option>";
    }

    $result .= "</select>";

    return $result;

}