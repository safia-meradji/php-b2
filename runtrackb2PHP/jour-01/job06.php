<?php
function my_array_sort(array $arrayToSort, string $order): array {
    // Vérifier le paramètre $order
    if ($order === 'ASC') {
        // Tri croissant
        sort($arrayToSort);
    } elseif ($order === 'DESC') {
        // Tri décroissant
        rsort($arrayToSort);
    } else {
        // Valeur de paramètre $order incorrecte
        throw new InvalidArgumentException("Le paramètre \$order doit être 'ASC' ou 'DESC'.");
    }

    return $arrayToSort;
}

// Exemples d'utilisation de la fonction
$resultat1 = my_array_sort([2, 24, 12, 7, 34], 'ASC'); // Tri croissant
$resultat2 = my_array_sort([8, 5, 23, 89, 6, 10], 'DESC'); // Tri décroissant

// Affichage des résultats
echo "my_array_sort([2, 24, 12, 7, 34], 'ASC') : ";
print_r($resultat1);
echo "<br>";

echo "my_array_sort([8, 5, 23, 89, 6, 10], 'DESC') : ";
print_r($resultat2);
echo "<br>";
// Tri alphabétique croissant
$resultat3 = my_array_sort(['banana', 'apple', 'cherry', 'date'], 'ASC');

// Tri alphabétique décroissant
$resultat4 = my_array_sort(['banana', 'apple', 'cherry', 'date'], 'DESC');

?>
