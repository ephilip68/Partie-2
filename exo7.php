<h1>Exercice 7</h1>

<h2>Résultat</h2>

<?php

$elements = ["Choix 1", "Choix 2", "Choix 3"];

echo genererCheckbox($elements);

function genererCheckbox($elements) {

    // Ouverture HTML
    $result = "<form>";
    
    // Boucle utilisé pour parcourir le tableau $éléments et afficher les valeurs qu'il contient
    foreach($elements as $choose) {
        
        // Création d'un input type checkbox et d'un label $chose qui affichera les informations contenu dans cette variable
        $result .= "<input type=checkbox><label>$choose</label><br><br>";
        
    }

    // Fermeture HTML
    $result .= "</form>";

    return $result;

}

