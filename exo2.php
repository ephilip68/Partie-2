<h1>Exercice 1</h1>

<h2>Résultat</h2>

<table border=1>
    <!--Entête du Tableau -->
    <thead>
        <tr>
            <th>Pays</th>
            <th>$capitales</th>
        </tr>
    </thead>
    <!-- Corps du Tableau-->
    <tbody>
        <tr>
            <td>France</td>
            <td>Paris</td>
        </tr>
        <tr>
            <td>Allemagne</td>
            <td>Berlin</td>
        </tr>
        <tr>
            <td>USA</td>
            <td>Washington</td>
        </tr>
        <tr>
            <td>Italie</td>
            <td>Rome</td>
        </tr>
    </tbody>
</table>

<?php

$capitales = [

    "France" => "paris",
    "Allemagne" => "berlin",
    "USA" => "washington",
    "Italie" => "rome"

];

foreach($capitales as $pays => $capitale){

    echo "Le pays $pays a pour capitale: $capitale<br>";

}

echo afficherTableHTML($capitales);

function afficherTableHTML($capitales){

    ksort($capitales);

    $result = "<table border=1>
                    <thead>
                        <tr>
                            <th>Pays</th>
                            <th>Capitales</th>
                        </tr>
                    </thead>
                <tbody>";
    
    foreach($capitales as $pays => $capitale) {
        $result .= "<tr>
                        <td>".mb_strtoupper($pays)."</td>
                        <td>".ucfirst($capitale)."</td>
                    </tr>";
    }

    $result .= "</tbody></table>";

    return $result;

}