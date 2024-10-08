<h1>Exercice 3</h1>

<h2>Résultat</h2>

<?php

$text = "Elan Formation";

echo afficherLien($text);

// fonction pour afficher un lien on utilisant un target _blank pour ouvrir le lien dans une autre page
function afficherLien($text) {

    $result = "<a href= https://office.elan-formation.fr/accueil target=_blank>$text</a>";

    return $result;

}


