<h1>Exercice 9</h1>

<h2>Résultat</h2>

<?php

$elements = ["Masculin" => false, "Féminin" => false, "Autre" => false];

echo afficherRadio($elements);

function afficherRadio($elements) {

    // Ouverture HTML
    $result = "<form>";
    
    // Boucle utilisé pour parcourir le tableau $éléments et afficher les clefs et les valeurs qu'il contient
    foreach($elements as $choose => $booleen) {
        
        // Création input type radio déclarant la valeur false $booleen, ainsi une fois cliqué la trace du choix précédent disparait
        $result .= "<input type=radio name=choose $booleen><label>$choose</label><br><br>";
        
    }

    //Fermeture HTML
    $result .= "</form>";

    return $result;

}

