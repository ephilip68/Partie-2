<h1>Exercice 8</h1>

<h2>Résultat</h2>

<?php

$url = "http://my.mobirise.com/data/userpic/764.jpg";

$repeter = 4;

 function repeterImage($url, $repeter) {

     for($i = 0; $i < $repeter; $i++) {

         echo "<img src='$url'>";
    }

}

repeterImage($url, $repeter);

// function repeterImage($url, $repeter) {

//     $result = "<figure>";

//     for($i = 0; $i < $repeter; $i++) {

//         $result .= "<img src='$url'>";
//     }

//     $result .= "</figure>";

//     return $result;

// }

// echo repeterImage($url, $repeter);