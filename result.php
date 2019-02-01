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
      <script type="text/javascript" src="https://vk.com/js/api/share.js?95" charset="windows-1251"></script>
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
      <div class="constructor page-3">
         <div class="wrapper">
            <div class="wrap-logo">
               <a href="https://e-dostavka.by/" target="_blank" rel="noopener noreferrer" class="logotype">
                   <img src="img/logotype.svg" alt="e-dostavka.by онлайн-гипермаркет">
               </a>
               </div>
            <div class="etaps">
               <div class="left-side">
                  <div class="card-v rotate-card" id="card">
                     <p class="text-card" id="text-card"></p>
                     <!-- <div class="decor decor-1"></div> -->
                     <div id="draggable3" style="left: 261px; top: 20px;" class="decor last-decor  draggable ui-widget-content decor-3 hidden">
                     </div>
                     <span class="alert-drag hidden">Передвигайте украшения, зажав левую кнопку мыши</span>
                  </div>
                  <a href="constructor.php" class="common edit">Редактировать</a>
               </div>
               <div class="right-side">
                  <div class="text-block">
                     <h2>Ваша валентинка готова к отправке!</h2>
                     <p>1. Поделитесь информацией о конкурсе <br> валентинок в одной из социальных сетей:</p>

                     <div class="social-network">                           
                        <div class="social-element fb"><img src="img/facebook.svg" class="facebook" alt="Поделиться в facebook">
                           <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.loveletters.by" class="fb-share fb-icon"></a>                            
                        </div>
                        <div class="social-element vk"><img src="img/vk.svg" class="vk" alt="Поделиться в вконтакте">
                           <div class="vk-link">
                              <script type="text/javascript">
                                 document.write(VK.Share.button(false,{type: "custom", text: "<img src=\"https://vk.com/images/share_32.png\" position=\"absolute\" width=\"100%\" height=\"100%\" />"}));
                              </script>
                           </div>
                        </div>
                        <div class="social-element od"><img src="img/odno.svg" class="odno" alt="Поделиться в одноклассники">
                        <div class="ok-link">
                           <div id="ok_shareWidget"></div>
                        </div>
                        </div>
                        <div class="social-element tw"><img src="img/twitter.svg" class="twitter" alt="Поделиться в twitter">
                           <div class="tw-icon">
                              <a href="https://twitter.com/share" class="twitter-share-button" data-via="Ваш ник" data-lang="ru"></a>
                           </div>
                        </div>

                     </div>
                     <p>2. Оставьте свое имя, e-mail и номер телефона, <br>чтобы мы могли связаться с вами в случае <br> выигрыша:</p>
                     <form action="index.php" method="POST" id="form" novalidate>
                        <div class="input-wrapper">
                           <label for="name">
                           <span class="required">*</span>
                           <img src="img/name-ico.svg" alt="Имя">
                           <input type="text" name="name" class="validate val-1 name" placeholder="Ваше имя..." maxlength="20">
                           </label>
                           <label for="phone">
                           <span class="repeat-phone hidden">Телефон уже участвовал в конкурсе</span>
                           <span class="required">*</span>
                           <img src="img/phone-icon.svg" alt="Телефон">
                           <input type="tel" name="phone" id="phone" class="validate val-2 phone" placeholder="Ваш телефон...">
                           </label>
                           <label for="email">
                           <span class="repeat-email hidden">E-mail уже участвовал в конкурсе</span>
                           <span class="required">*</span>
                           <img src="img/email-icon.svg" alt="Email">
                           <input type="email" name="email" class="validate val-3 email" placeholder="Ваш e-mail...">
                           </label>
                        </div>
                     </form>                     
                  </div>
               </div>
            </div>
            <div class="wrapp">
               <div class="btn-wrapper">
                  <button type="submit" form="form" class="btn btn-submit ready" disabled>Готово</button>
               </div>
               <div class="rules">
                  <a href="#" data-toggle="modal" data-target="#rules" class="common">Правила</a>
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
      <script src="js/jquery.maskedinput.min.js"></script>
      <script src="js/common.js"></script>
      <script>
         // Маска для телефона
         $(".phone").mask("+375 99 999-99-99");
      </script>
   </body>
</html>