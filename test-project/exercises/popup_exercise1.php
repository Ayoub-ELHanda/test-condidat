<?php
// Exercice 1
$messyArray = [
    "Marguerite" => "Orange",
    "Fruits" => [
        "Kiwi",
        "Pomme",
        [
            "Prune",
            "Cerise" => "Cerise"
        ]
    ]
];

// Afficher "Kiwi"
echo $messyArray["Fruits"][0];

// Afficher "Cerise"
echo $messyArray["Fruits"][2]["Cerise"];

// Supprimer    "Prune"
unset($messyArray["Fruits"][2][0]);

print_r($messyArray); // Print the updated array
?>
