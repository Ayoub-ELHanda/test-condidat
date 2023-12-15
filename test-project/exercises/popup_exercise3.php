<?php
// Exercice 3
class Calcul {
    public static function removeDoublon($array) {
        return implode(", ", array_unique($array));
    }
}

// Exemple d'utilisation de la classe
$prenomArray = ["Alice", "Bob", "Alice", "Charlie"];
$uniquePrenoms = Calcul::removeDoublon($prenomArray);

echo $uniquePrenoms; // Afficher le tableau sans doublons sous forme de chaîne
?>
