<?php
function my_closest_to_zero(array $array): int {
    // Vérifier si le tableau est vide
    if (empty($array)) {
        throw new InvalidArgumentException("Le tableau ne peut pas être vide.");
    }

    $closest = $array[0]; // Initialiser la valeur la plus proche à la première valeur du tableau

    // Parcourir le tableau pour trouver le nombre le plus proche de zéro
    foreach ($array as $value) {
        if (abs($value) < abs($closest) || ($value === $closest && $value < 0)) {
            $closest = $value;
        }
    }

    return $closest;
}

// Exemples d'utilisation de la fonction
$resultat1 = my_closest_to_zero([2, -1, 5, 23, 21, 9]); // Devrait renvoyer -1
$resultat2 = my_closest_to_zero([234, -142, 512, 1223, 451, -59]); // Devrait renvoyer -59

// Affichage des résultats
echo "my_closest_to_zero([2, -1, 5, 23, 21, 9]) : $resultat1<br>";
echo "my_closest_to_zero([234, -142, 512, 1223, 451, -59]) : $resultat2<br>";
?>
