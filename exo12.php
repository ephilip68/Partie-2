<h1>Exercice 12</h1>

<h2>Résultat</h2>

<?php

$tableauValeur = [true, "texte", 10 ,25.369,["valeur1","valeur2"]];


// Boucle foreach afin de parcourir les information du tableau 
// Var_dump $valeur pour affcher les informations structurées des valeurs y compris leur type.
foreach($tableauValeur as $valeur) {
    var_dump($valeur);
}


