<h1>Exercice 1</h1>

<h2>Résultat</h2>

<style>
    .red {
        color: red;
    }
</style>

<?php

$text = "Mon texte en paramètre";

//Affiche le résultat de la fonction convertirMajRouge
echo convertirMajRouge($text);
echo convertirMajRouge2($text);

echo convertirMajColor($text, 'blue');

function convertirMajRouge($text){
    // Conertir en majuscule
    $result = mb_strtoupper($text); 

    // Modifier la couleur en appelant la classe CSS 'red'
    $result = "<p class='red'>$result</p>";

    // Renvoie le résultat
    return $result;

}

// Fonction écrite de façon optimisée
function convertirMajRouge2($text){

    return "<p class='red'>".mb_strtoupper($text)."</p>";
}

//fonction qui revoie la couleur de texte choisit
function convertirMajColor($text, $color) {

    return "<p style='color:$color'>".mb_strtoupper($text)."</p>";
    
}
