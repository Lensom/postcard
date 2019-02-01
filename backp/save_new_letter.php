<?php
include_once 'libs/php/letter_class.php';

$data = $_POST['data'];

try{
    $letter = new Letter($data);
    $letter->saveDataToDB();
}
catch (Exception $e)
{
    echo $e->getMessage();
}