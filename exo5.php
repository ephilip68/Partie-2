<h1>Exercice 5</h1>

<h2>Résultat</h2>

<?php

$nomsInput = ["Nom", "Prénom", "Ville"];

echo afficherInputs($nomsInput);

// fonction personnalisée permettant de renvoyer des inputs dans un formulaire 
function afficherInputs($nomsInput) {

    //Création HTML
    $result = "<form>";

    // Boucle utilisé pour parcourir le tableau $nomsInput et afficher les valeurs qu'il contient
    foreach($nomsInput as $coordonnées){
        
        //Création de label et input de type text 
        $result .= "<label>$coordonnées</label><br><input type=text><br><br>";
        
    }
    
    //Fermeture HTML
    $result .= "</form>";
    
    return $result;
}

// echo afficherInput($nomsInput);

// function afficherInput($nomsInput) {
    
//     foreach($nomsInput as $coordonnées){
//         echo "<label>" .$coordonnées. "</label><br>";
//         echo "<input type=text><br><br>";
//     }

// }
