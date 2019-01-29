<?php
include_once 'libs/php/letter_class.php';

$letter = new Letter();

$random_letters = $letter->getRandomLetters();
?>

<?php foreach($letter->slot_array as $slot):?>
    <div class="<?=$slot;?>">
        <?php
        $rand_row = rand(0,32);
        $rand_text = json_decode($random_letters[$rand_row]['letter_data']);
        $rand_name = $random_letters[$rand_row]['user_name'];
        ?>
        <div class="<?=$rand_text->background;?> card-v center">

            <p class="text-card" style="color: <?=$rand_text->colorText;?>">
              
                <?= strip_tags($rand_text->message);?>
            </p>
            <div style="top: <?=$rand_text->posTop;?>; left: <?=$rand_text->posLeft;?>" class="decor <?=$rand_text->sticker;?>"></div>
        </div>
    </div>
<?php endforeach;?>
