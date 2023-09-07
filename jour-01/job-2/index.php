<?php

function stringLength($word) {
    $count = 0;

    do {
        $count += 1;
    } while ($word[$count] ?? false);

    return $count;

 }
function reverseWord(string $word): string {
    $reversedWord = '';
    $wordLength = stringLength($word);

    // Iterate through the characters of the word in reverse order
    for ($i = $wordLength - 1; $i >= 0; $i--) {
        $reversedWord .= $word[$i];  // ".=" operator to append the chare
    }

    return $reversedWord;
}


$originalWord = "hello";
$reversed = reverseWord($originalWord);

echo "Original word: $originalWord<br>";
echo "Reversed word: $reversed";



?>


