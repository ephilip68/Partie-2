<h1>Exercice 10</h1>

<h2>Résultat</h2>

<?php

$elements = ["Masculin", "Féminin", "Adresse E-mail", "Ville", "Sexe"];

$formations =["Développeur Logiciel", "Designer Web", "Intégrateur", "Chef de projet"];

echo afficherFormulaire($elements, $formations);

function afficherFormulaire($elements, $formations) {

    // Ouverture HTML
    $result = "<form>";

    // Boucle utilisé pour parcourir le tableau $éléments et afficher les valeurs qu'il contient
    foreach($elements as $coordonnées) {
        
        // Création label et input type texte
        $result .= "<label>$coordonnées</label><br><input type=text><br>"; 
        
    }

    // Création d'une liste déroulante
    $result .= "<br><select>";

    // Boucle utilisé pour parcourir le tableau $formations et afficher les valeurs qu'il contient
    foreach($formations as $formation){
        
        $result .= "<option>$formation</option>";

    }
    // Création d'un boutton de type submit et Fermeture HTML 
    $result .= "</select><br><br><input type=submit value=Subscribe style=cursor:pointer></form>";

    return $result;
      
}

