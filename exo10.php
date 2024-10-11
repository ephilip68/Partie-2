<h1>Exercice 10</h1>

<h2>Résultat</h2>

<?php

$elements = ["Masculin", "Féminin", "Adresse E-mail", "Ville", "Sexe"];

$formations =["Développeur Logiciel", "Designer Web", "Intégrateur", "Chef de projet"];

echo afficherFormulaire($elements, $formations);

function afficherFormulaire($elements, $formations) {

    $result = "<form>";
    
    foreach($elements as $coordonnées) {
        
        $result .= "<label>$coordonnées</label><br><input type=text><br>"; 
        
    }

    $result .= "<br><select>";

    foreach($formations as $formation){

        $result .= "<option>$formation</option>";

    }

    $result .= "</select><br><br><input type=submit value=Subscribe style=cursor:pointer></form>";

    return $result;
      
}

