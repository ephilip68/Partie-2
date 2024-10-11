<h1>Exerecice 14</h1>

<h2>Résultat</h2>

<?php


$mail = "elan@elan-formation.fr";

// Filter var filtre la variable avec un filter spécifique.
// Dans ce cas précis c'est filter_validate_email qui est utilisé afin de vérifier si l'email est valide ou pas.
if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
    echo "L'adresse $mail est une adresse e-mail valide";
}
else {
    echo "L'adresse $mail est une adresse e-mail invalide";
}







    

