<h1>Exercice 9</h1>

<h2>Résultat</h2>

<?php

$elements = ["Masculin" => false, "Féminin" => false, "Autre" => false];

function afficherRadio($elements) {

    $result = "<form>";
    
    foreach($elements as $choose => $booleen) {
        
        $result .= "<input type=radio name=choose $booleen><label>$choose</label><br><br>";
        
    }

    $result .= "</form>";

    return $result;

}

echo afficherRadio($elements);