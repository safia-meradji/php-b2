<?php
function my_is_prime(int $number): bool {
    // Vérifier si le nombre est inférieur ou égal à 1
    if ($number <= 1) {
        return false;
    }

    // Vérifier s'il existe un diviseur autre que 1 et le nombre lui-même
    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

// Exemples d'utilisation de la fonction
$resultat1 = my_is_prime(3); // Devrait renvoyer true car 3 est premier
$resultat2 = my_is_prime(12); // Devrait renvoyer false car 12 n'est pas premier

// Affichage des résultats
echo "my_is_prime(3) : " . ($resultat1 ? 'true' : 'false') . "<br>";
echo "my_is_prime(12) : " . ($resultat2 ? 'true' : 'false') . "<br>";
?>
