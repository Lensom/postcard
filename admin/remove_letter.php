<?php

include_once "../libs/php/letter_class.php";

$letter = new Letter();

if(!empty($_POST['row_id']))
{
    $row_id = $_POST['row_id'];

    try{
        $letter->removeLetter($row_id);
    }
    catch (Exception $e)
    {
        exit($e->getMessage());
    }
    header("Location: /admin");
}