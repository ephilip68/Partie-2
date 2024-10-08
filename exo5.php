<h1>Exercice 5</h1>

<h2>Résultat</h2>

<?php

$nomsInput = ["Nom", "Prénom", "Ville"];

function afficherInput($nomsInput) {
    
    foreach($nomsInput as $coordonnées){
        echo "<label>" .$coordonnées. "</label><br>";
        echo "<input type=text><br><br>";
    }

}

echo afficherInput($nomsInput);

/*
// fonction personnalisée permettant de renvoyer des inputs dans un formulaire 
function afficherInputs($nomsInput) {

    $result = "<form>";

    foreach($nomsInput as $coordonnées){

        $result .= "<label>$coordonnées</label><br><input type=text><br><br>";

    }

    $result .= "</form>";

    return $result;
}

echo afficherInputs($nomsInput);*/