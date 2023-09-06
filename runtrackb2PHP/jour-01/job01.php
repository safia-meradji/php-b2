<?php
function my_str_search(string $haystack, string $needle): int {
    $count = 0; // Initialiser le compteur à zéro

    // Parcourir la chaîne de caractères
    for ($i = 0; $i < strlen($haystack); $i++) {
        // Vérifier si le caractère actuel est égal à l'aiguille (needle)
        if ($haystack[$i] === $needle) {
            $count++; // Incrémenter le compteur si l'aiguille (needle) est trouvée
        }
    }

    return $count; // Retourner le nombre d'occurrences de l'aiguille (needle)
}

// Exemple d'utilisation de la fonction
$chaine = 'La Plateforme';
$lettre = 'a';
$occurrences = my_str_search($chaine, $lettre);
echo "Le nombre d'occurrences de la lettre '$lettre' dans la chaîne est : $occurrences";
?>
