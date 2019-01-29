<?php

include_once "../libs/php/letter_class.php";

$letter = new Letter();

try{
    $all_letters = $letter->getAllLetters();
}
catch (Exception $e)
{
    echo $e->getMessage();
}
?>

<table style="width: 1200px; margin: 0 auto; padding: 10px 15px; font-weight: bold;">
    <tbody>
        <tr>
            <td style="width: 40px;">ID</td>
            <td style="width: 190px;">Имя</td>
            <td style="width: 360px;">Сообщение</td>
            <td style="width: 220px;">Телефон</td>
            <td style="width: 220px;">Email</td>
            <td>Удалить</td>
        </tr>
    </tbody>
</table>

<?php foreach($all_letters as $letter):?>
<?php
    $letter_data = json_decode($letter['letter_data']);
?>

<form action="remove_letter.php" method="POST" style="margin: 0; margin-top: -5px;">

<table style="width: 1200px; margin: 0 auto;">
    <tbody>        
        <tr style="display: table-cell; padding: 10px 15px; border: 1px solid black; border-top: 0">
            <td style="width: 40px;"><input type="text" name="row_id" value="<?=$letter['id'];?>" hidden/><?=$letter['id'];?></td>
            <td style="width: 190px;"><?=$letter['user_name'];?></td>
            <td style="width: 360px;"><?=$letter_data->message;?></td>
            <td style="width: 220px;"><?=$letter['user_phone'];?></td>
            <td style="width: 220px;"><?=$letter['user_email'];?></td>
            <td><button>Удалить</button></td>
        </tr>
    </tbody>
</table>

</form>
<?php endforeach;?>

