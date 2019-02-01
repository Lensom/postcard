<?php
include_once "libs/php/letter_class.php";

$letter = new Letter();

$random_letters = $letter->getRandomLetters();

?>
<!DOCTYPE html>
<html lang="ru">
   <head>
      <meta charset="utf-8">
      <title>Создай свою валентинку</title>
      <meta name="description" content="e-dostavka.by Онлайн-гипермаркет.">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
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
      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
      <link rel="stylesheet" href="css/main.min.css?v=1">
      <link rel="canonical" href="http://loveletters.by/">
      <meta property="og:url"           content="http://loveletters.by/" />
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="Онлайн-гипермаркет e-dostavka.by" />
      <meta property="og:description"   content="Создай свою уникальную валентинку и выиграй приз!" />
      <meta property="og:image"         content="http://loveletters.by/img/edostavka.jpg" />
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
    <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133567449-1"></script>
      <script>
       window.dataLayer = window.dataLayer || [];
       function gtag(){dataLayer.push(arguments);}
       gtag('js', new Date());
       gtag('config', 'UA-133567449-1');
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
                    <h2 class="title-width">15 сертификатов номиналом 100 рублей на покупки в ювелирных салонах "Золотая мечта" и 10 сертификатов на покупки в онлайн-гипермаркете "Е-доставка"</h2>
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
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="/js/common.js"></script>
</body>
</html>