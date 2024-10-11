<h1>Exercice 6</h1>

<h2>Résultat</h2>

<?php

$elements = ["Monsieur", "Madame", "Mademoiselle"];

echo alimenterListeDeroulant($elements);

function alimenterListeDeroulant($elements) {

    // Ouverture HTML et création d'une liste déroulante
    $result = "<select>";

    // Boucle utilisé pour parcourir le tableau $éléments et afficher les valeurs qu'il contient
    foreach($elements as $civilite) {

        // Création des options que contiendra la liste, les valeurs de la variable $civilité seront donc affiché en option
        $result .= "<option>$civilite</option>";
    }

    // Fermeture HTML
    $result .= "</select>";

    return $result;

}