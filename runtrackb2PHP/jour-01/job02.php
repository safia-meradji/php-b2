<?php
function my_str_reverse(string $string): string {
    $reversedString = ''; // Initialiser la chaîne inversée à vide

    // Parcourir la chaîne de caractères de la fin à l'envers
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $reversedString .= $string[$i]; // Ajouter chaque caractère à la chaîne inversée
    }

    return $reversedString; // Retourner la chaîne inversée
}

// Utilisation de la fonction pour inverser la chaîne 'Hello'
$resultat = my_str_reverse('Hello');

// Vérification du résultat
if ($resultat === 'olleH') {
    echo "La chaîne inversée est correcte : $resultat";
} else {
    echo "La chaîne inversée est incorrecte : $resultat";
}
?>
