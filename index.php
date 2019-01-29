<?php
include_once 'libs/php/letter_class.php';

$letter = new Letter();

$random_letters = $letter->getRandomLetters();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>dostavka.by онлайн-гипермаркет</title>
    <meta name="description" content="dostavka.by онлайн-гипермаркет">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:image" content="path/to/image.jpg">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.min.css">
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
        <a href="https://e-dostavka.by/" target="_blank" class="logotype">
            <img src="img/logotype.svg" alt="dostavka.by онлайн-гипермаркет">
        </a>
        </div>
        <div class="sides">
            <div class="left-side">
                <div class="slots">
                    <div class="slots-s">
                    <?php foreach($letter->slot_array as $slot):?>
                    <div class="<?=$slot;?>">
                        <?php
                                    $rand_row = rand(0,32);
                                    $rand_text = json_decode($random_letters[$rand_row]['letter_data']);
                                    $rand_name = $random_letters[$rand_row]['user_name'];
                        ?>
                        <div class="card-v center <?=$rand_text->background;?>">
                            
                            <p class="text-card main" style="color: <?=$rand_text->colorText;?>"><?= strip_tags($rand_text->message);?>
                            </p>
                            <div style="top: <?=$rand_text->posTop;?>; left: <?=$rand_text->posLeft;?>" class="decor <?=$rand_text->sticker;?>"></div>
                        </div>
                    </div>
                    <?php endforeach;?>
                    </div>
                </div>
                <div class="wrapper-show">
                    <a href="#" class="common show-more">Показать ещё</a>
                </div>
            </div>
            <div class="right-side">
                <div class="text-block">
                    <h1>Создай свою уникальную <br>валентинку и выиграй что-то <br>очень крутое!</h1>
                    <h2>Еще какой-то дополнительный текст, который может быть в три строки.</h2>
                    <a href="step-1.html" class="btn btn-submit">Создать валентинку</a>
                    <div class="rules">
                        <a href="#" data-toggle="modal" data-target="#rules" class="common">Правила</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="rules" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
            <div class="modal-body">
                <h3>ПРАВИЛА АКЦИИ</h3>
                <h3>«Создай свою валентинку»</h3>
                <p>Далее текст для примера.</p>
                <p>Настоящие Правила и условия рекламной акции (далее — Акция) составлены с учетом требований действующего законодательства Российской Федерации, в том числе Федерального закона от 13.03.2006 № 38-ФЗ «О рекламе».</p>
                <h4>1.ОБЩИЕ ПОЛОЖЕНИЯ</h4>
                <p>1.1. Организатором Акции является Go Travel Un Limited (Гоу Трэвел Ан Лимитед), гонконгская корпорация под номером 1658681, имеющая юридический адрес: Suite 1504, 15/F, Chinachem Tower, 34-37 Connaught Rd Central, Hong Kong, действующая
                    под зарегистрированным товарным знаком Aviasales.
                </p>
                <p>1.2. Акция является мероприятием рекламного характера, направленным на стимулирование потребления услуг сайта aviasales.ru.</p>
                <p>1.3. Акция не является лотереей, тотализатором или иной основанной на риске азартной игрой.</p>
                <h4>1.ОБЩИЕ ПОЛОЖЕНИЯ</h4>
                <p>1.1. Организатором Акции является Go Travel Un Limited (Гоу Трэвел Ан Лимитед), гонконгская корпорация под номером 1658681, имеющая юридический адрес: Suite 1504, 15/F, Chinachem Tower, 34-37 Connaught Rd Central, Hong Kong, действующая
                    под зарегистрированным товарным знаком Aviasales.
                </p>
                <p>1.2. Акция является мероприятием рекламного характера, направленным на стимулирование потребления услуг сайта aviasales.ru.</p>
                <p>1.3. Акция не является лотереей, тотализатором или иной основанной на риске азартной игрой.</p>
                <h4>1.ОБЩИЕ ПОЛОЖЕНИЯ</h4>
                <p>1.1. Организатором Акции является Go Travel Un Limited (Гоу Трэвел Ан Лимитед), гонконгская корпорация под номером 1658681, имеющая юридический адрес: Suite 1504, 15/F, Chinachem Tower, 34-37 Connaught Rd Central, Hong Kong, действующая
                    под зарегистрированным товарным знаком Aviasales.
                </p>
                <p>1.2. Акция является мероприятием рекламного характера, направленным на стимулирование потребления услуг сайта aviasales.ru.</p>
                <p>1.3. Акция не является лотереей, тотализатором или иной основанной на риске азартной игрой.</p>
                <h4>1.ОБЩИЕ ПОЛОЖЕНИЯ</h4>
                <p>1.1. Организатором Акции является Go Travel Un Limited (Гоу Трэвел Ан Лимитед), гонконгская корпорация под номером 1658681, имеющая юридический адрес: Suite 1504, 15/F, Chinachem Tower, 34-37 Connaught Rd Central, Hong Kong, действующая
                    под зарегистрированным товарным знаком Aviasales.
                </p>
                <p>1.2. Акция является мероприятием рекламного характера, направленным на стимулирование потребления услуг сайта aviasales.ru.</p>
                <p>1.3. Акция не является лотереей, тотализатором или иной основанной на риске азартной игрой.</p>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="/js/common.js"></script>
</body>
</html>