<?php

include_once "libs/php/letter_class.php";

$letter = new Letter();


$all_letters = $letter->getAllLetters();
var_dump($all_letters);
foreach($all_letters as $letter)
{
    echo $letter['user_name'];
}