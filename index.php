<?php
include_once "libs/php/letter_class.php";

$letter = new Letter();

$random_letters = $letter->getRandomLetters();

?>
<!DOCTYPE html>
<html lang="ru">
   <head>
      <?php include_once('head.php'); ?>
    <script>
        function setCookie (name, value, expires, path, domain, secure) {
                document.cookie = name + "=" + escape(value) +
                    ((expires) ? "; expires=" + expires : "") +
                    ((path) ? "; path=" + path : "") +
                    ((domain) ? "; domain=" + domain : "") +
                    ((secure) ? "; secure" : "");
            }
        var two = document.cookie.split(';');
        while(name = two.pop()) setCookie(name.split('=')[0], '' , "Mon, 18-Jan-2020 00:00:00 GMT", "/");   
        
    </script>
</head>
<body>
<div class="greeting">
    <div class="wrapper">
        <div class="wrap-logo">
        <a href="https://e-dostavka.by/" target="_blank" rel="noopener noreferrer" class="logotype">
            <img src="img/logotype.svg" alt="e-dostavka.by онлайн-гипермаркет">
        </a>
        </div>
        <div class="sides">
            <div class="left-side">
                <div class="slots">
                    <div class="slots-s">
                      <?php include_once('download_more_letters.php'); ?>
                    </div>
                </div>
                <div class="wrapper-show">
                    <a href="#" class="common show-more">Показать ещё</a>
                </div>
            </div>
            <div class="right-side">
                <div class="text-block">
                    <h1>Создай свою уникальную <br>валентинку и выиграй приз!</h1>
                    <h2 class="title-width">Авторы самых креативных валентинок поборются за 15 сертификатов номиналом 100 рублей на покупки в ювелирных салонах "Золотая мечта" и 10 сертификатов на покупки в онлайн-гипермаркете "Е-доставка"</h2>
                    <a href="constructor.php" class="btn btn-submit">Создать валентинку</a>
                    <div class="rules">
                        <a href="#" data-toggle="modal" data-target="#rules" class="common">Правила</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once("rules.php"); ?>
<?php include_once("footer.php"); ?>
</body>
</html>