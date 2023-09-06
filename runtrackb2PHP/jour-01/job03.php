<?php
function my_is_multiple(int $divider, int $multiple): bool {
    return $multiple % $divider === 0; // Vérifie si $multiple est divisible par $divider
}

// Exemples d'utilisation de la fonction
$resultat1 = my_is_multiple(2, 4); // Devrait renvoyer true car 4 est un multiple de 2
$resultat2 = my_is_multiple(2, 5); // Devrait renvoyer false car 5 n'est pas un multiple de 2

// Affichage des résultats
echo "my_is_multiple(2, 4) : " . ($resultat1 ? 'true' : 'false') . "<br>";
echo "my_is_multiple(2, 5) : " . ($resultat2 ? 'true' : 'false') . "<br>";
?>
