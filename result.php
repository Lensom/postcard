<!DOCTYPE html>
<html lang="ru">
   <head>
      <?php include_once('head.php'); ?>
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
                     <span class="alert-drag hidden">Передвигайте украшения, зажав левую кнопку мыши</span>
                  </div>
                  <a href="constructor.php" class="common edit">Редактировать</a>
               </div>
               <div class="right-side">
                  <div class="text-block">
                     <h2>Ваша валентинка готова к отправке!</h2>
                     <p>1. Поделитесь информацией о конкурсе <br> валентинок в одной из социальных сетей (обязательно):</p>

                     <div class="social-network">                           
                        <div class="social-element fb"><img src="img/facebook.svg" class="facebook" alt="Поделиться в facebook">
                           <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.loveletters.by" class="fb-share fb-icon"></a>                            
                        </div>
                        <div class="social-element vk"><img src="img/vk.svg" class="vk" alt="Поделиться в вконтакте">
                           <div class="vk-link">
                              <script type="text/javascript">
                                 try {
                                    document.write(VK.Share.button({url: "http://loveletters.by", title: "Онлайн-гипермаркет e-dostavka.by", image: "http://loveletters.by/img/edostavka.jpg?v=1.01" },{type: "custom", text: "<img src=\"https://vk.com/images/share_32.png\" position=\"absolute\" width=\"100%\" height=\"100%\" />"}));
                                 } catch (error) {
                                    console.log('vk is block')
                                 }
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
                              <div id="tw-btn"></div>
                           </div>
                        </div>

                        <div id="tweet-container"></div>

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
                  <button type="submit" form="form" class="btn btn-submit ready disabled" >Готово</button>
                        <div class="input-mess">
                           Заполните все поля
                        </div>
               </div>
               <div class="rules">
                  <a href="#" data-toggle="modal" data-target="#rules" class="common">Правила</a>
               </div>
            </div>
         </div>
      </div>
      
<?php include_once("rules.php"); ?>
<?php include_once("footer.php"); ?>
   </body>
</html>