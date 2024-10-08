<h1>Exercice 7</h1>

<h2>Résultat</h2>

<?php

$elements = ["Choix 1", "Choix 2", "Choix 3"];

echo genererCheckbox($elements);

function genererCheckbox($elements) {

    $result = "<form>";
    
    foreach($elements as $choose) {
        
        $result .= "<input type=checkbox><label>$choose</label><br><br>";
        
    }

    $result .= "</form>";

    return $result;

}

