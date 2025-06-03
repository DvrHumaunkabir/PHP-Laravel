<?php

function findLongestWords($sentence) {
    $words = explode(" ", trim($sentence)); 

    $maxLength = 0;
    $longestWords = [];

    foreach ($words as $word) {
        $length = strlen($word);

        if ($length > $maxLength) {
            $maxLength = $length;
            $longestWords = [$word]; 
        } elseif ($length === $maxLength) {
            $longestWords[] = $word; 

        }
    }

    return $longestWords;
}

print_r(findLongestWords("The quick brown fox jumps over the lazy dog"));

 echo "<br>";
print_r(findLongestWords("Bangladesh is a beautiful country"));
