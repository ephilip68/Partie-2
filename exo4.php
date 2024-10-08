<h1>Exercice 4</h1>

<h2>Résultat</h2>

<?php

// Tableau
$capitales = [

    // Clé et valeur
    "France" => "paris",
    "Allemagne" => "berlin",
    "USA" => "washington",
    "Italie" => "rome",
    "Espagne" => "madrid"

];


foreach($capitales as $pays => $capitale){

    echo "Le pays $pays a pour capitale: $capitale<br>";
    
}

echo afficherTableHTML($capitales);

function afficherTableHTML($capitales){

    // Tri les les valeurs de A à Z
    asort($capitales);

    // Création du tableau HTML
    $result = "<table border=1 style=margin-top:10px>
                    <thead>
                        <tr>
                            <th style=padding:10px>Pays</th>
                            <th style=padding:10px>Capitales</th>
                            <th style=padding:10px>Lien Wiki</th>
                        </tr>
                    </thead>
                <tbody>";
    
    // Boucle foreach effectuer afin de pourvoir parcourir le tableau et renvoyer les éléments contenu dans le tableau
    foreach($capitales as $pays => $capitale) {
    
        $result .= "<tr>
                        <td style=padding:5px>".mb_strtoupper($pays)."</td>
                        <td style=padding:5px>".ucfirst($capitale)."</td>
                        <td style=padding:5px><a href= https://en.wikipedia.org/wiki/$capitale target=_blank >Lien</a></td>
                    </tr>";

    }

    // Fermeture du tableau HTML
    $result .= "</tbody></table>";

    return $result;

}