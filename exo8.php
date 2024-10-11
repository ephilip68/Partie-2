<h1>Exercice 8</h1>

<h2>Résultat</h2>

<?php

$url = "http://my.mobirise.com/data/userpic/764.jpg";

$repeter = 4;

echo repeterImage($url, $repeter);

function repeterImage($url, $repeter) {

    //Ouverture HTML
    $result = "<figure>";

    // Boucle For utilsé pour incrémenté 4 fois l'image contenu de l'url
    for($i = 0; $i < $repeter; $i++) {

        $result .= "<img src=$url>";
    }

    // Fermeture HTML
    $result .= "</figure>";

    return $result;

}


// repeterImage($url, $repeter);

// function repeterImage($url, $repeter) {

//     for($i = 0; $i < $repeter; $i++) {

//         echo "<img src='$url'>";
//    }

// }

