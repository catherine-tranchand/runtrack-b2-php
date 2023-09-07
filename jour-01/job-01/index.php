<?php
 
 function stringLength($word) {
    $count = 0;

    do {
        $count += 1;
    } while ($word[$count] ?? false);

    return $count;

 }


 function my_letter_search(string $letter, string $word) : int {
     $count = 0;


     $wordLength = stringLength($word);

     for($i=0; $i<$wordLength; $i++){
        if($word[$i] === $letter){
            $count++;
        }
     }
     return $count;
}
    
$letter = 'e';
$word ='La Platerrreeeeereeforme';
$total = stringLength($word);
$count = my_letter_search($letter, $word);

echo "Le total de lettres dans le mot ($word) est $total" . "<br/>";
echo "Le nombre d occurrence de la lettre : $letter dans le mot: $word est $count ";

?>