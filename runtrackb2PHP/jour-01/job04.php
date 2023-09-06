<?php
function my_fizz_buzz(int $length): array {
    $result = array();

    for ($i = 1; $i <= $length; $i++) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            $result[] = 'Fizz Buzz';
        } elseif ($i % 3 === 0) {
            $result[] = 'Fizz';
        } elseif ($i % 5 === 0) {
            $result[] = 'Buzz';
        } else {
            $result[] = $i;
        }
    }

    return $result;
}

// Exemple d'utilisation de la fonction
$resultat = my_fizz_buzz(15);

// Affichage du résultat
print_r($resultat);
?>
