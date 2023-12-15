
<?php
// Exercice 2
$random_words = ["ape", "apple", "zoo", "pie", "elephant", "banana", "picnic", "eye"];

usort($random_words, function($a, $b) {
    if (strlen($a) == strlen($b)) {
        return strcmp($a, $b);
    }
    return strlen($a) - strlen($b);
});

echo implode(", ", $random_words); // Display the sorted array as a string
?>