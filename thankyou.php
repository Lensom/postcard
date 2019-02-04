<!DOCTYPE html>
<html lang="ru">
   <head>
      <?php include_once('head.php'); ?>
   </head>
   <body>
      <div class="greeting last-main">
         <div class="wrapper">
            <div class="wrap-logo">
               <a href="https://e-dostavka.by/" target="_blank" rel="noopener noreferrer" class="logotype">
                   <img src="img/logotype.svg" alt="e-dostavka.by онлайн-гипермаркет">
               </a>
               </div>
            <h2>Ваша валентинка отправлена!</h2>
            <div class="sides last-page">
               <div class="left-side">
                  <div class="slots">
                     <div class="slot slot-1 slot-xxl my-card">
                        <div class="card-v center bgc6" id="card">
                           <p class="text-card card-last" id="text-card"></p>
                           <div id="draggable3" style="left: 261px; top: 20px;" class="decor last-decor draggable ui-widget-content ">
                           </div>
                        </div>
                     </div>
                     <div class="slots-s">
                      <?php include_once('download_more_letters.php'); ?>                        
                     </div>
                     
                  </div>
                  <div class="text-block">
                     <a href="#" class="common show-more">Показать ещё</a>
                     <p>14 февраля мы объявим результаты конкурса валентинок! <br>
                        Следите за новостями на сайте <a href="https://e-dostavka.by/" class="common" target="_blank" rel="noopener noreferrer">e-dostavka.by</a> и в социальных сетях. 
                     </p>
                     <div class="social-network">                           
                           <a href="https://www.facebook.com/edostby" target="_blank" rel="noopener noreferrer" class="social-element"><img src="img/facebook.svg" class="facebook fb-i" alt="">
                           </a>
                           <a href="https://vk.com/edostby" target="_blank" rel="noopener noreferrer" class="social-element"><img src="img/vk.svg" class="vk vk-i" alt="">
                           </a>
                           <a href="https://ok.ru/edostby" target="_blank" rel="noopener noreferrer" class="social-element"><img src="img/odno.svg" class="odno ok-i" alt="">
                           </a>   
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