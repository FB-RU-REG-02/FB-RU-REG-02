<?php
// Query params are: utm_source={campaign_type}&utm_campaign={campaign_id}&utm_medium={gbid}&utm_content={ad_id}&utm_term={keyword} 

require_once dirname(__FILE__) . '/kclient.php';
$client = new KClient('https://blackwordstrack.ru/api.php?', 'dvptv4vdpgpjjxjz2ntbztpglr34gq9t');
$client->sendAllParams();       // to send all params from page query
$client->forceRedirectOffer();       // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD');  // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->debug();              // to enable debug mode and show the errors
// $client->execute();             // request to api, show the output and continue
$client->executeAndBreak();     // to stop page execution if there is redirect or some output

?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Онлайн курс "KETOPLAN" эффективный план похудения</title>
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <meta name="format-detection" content="telephone=no"><link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!--<script charset="utf-8" async src="https://rbtwo.bid/pjs/A5Vkr3_7k.js"></script>-->
    <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '981147192680393');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=981147192680393&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
  </head>
  <body>
      <div class="getplan js-section active"><img class="getplan__img" src="img/plate.webp">
        <div class="container">
          <div class="getplan__header"><a class="logo--position logo" href="index.html"><img class="logo__img" src="img/logo.svg"></a>
          </div>
          <h1 class="getplan__title">ПОПРОБУЙТЕ ПЛАН ПИТАНИЯ
ЗА 29 РУБЛЕЙ</h1>
        <p class="getplan__text"><br>Подписка на KETOPLAN - это:<br>- Личный кабинет с меню на завтрак, обед и ужин.<br>- Подробные рецепты каждого блюда.<br>- Консультация по любым вопросам.<br>- Видео с рецептами от лучших поваров.</p>
          <div class="getplan__choose">
            <button class="getplan__item js-next-section" value="2">
              <svg class="getplan__item-img" width="42" height="56" viewBox="0 0 42 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.0417 32.75C13.2605 33.0832 15.9688 32.5728 18.9271 32.3958C19.4792 32.5207 20.0313 32.6042 20.6042 32.6042C21.1875 32.6042 21.7605 32.5207 22.3334 32.3854C30.0313 32.7604 36.0313 34.9375 36.0313 19.2708C36.0313 8.63542 29.125 0 20.6042 0C12.0834 0 5.17712 8.63542 5.17712 19.2708C5.17712 27.8229 6.81254 31.1458 9.46879 32.3021C9.95837 32.5313 10.4896 32.6667 11.0417 32.75ZM8.58337 13.2604C10.198 15.5 14.3855 15.0208 18 12.1875C18.9167 11.4688 19.7188 10.6458 20.3646 9.8125C20.448 9.82292 20.5313 9.83333 20.6146 9.85417C20.9688 9.91667 21.2917 10.0417 21.6563 10.1563C21.9793 10.3125 22.3334 10.4375 22.6459 10.6354C22.9689 10.8021 23.2605 11.0313 23.5521 11.2292C23.8125 11.4583 24.1042 11.6771 24.323 11.9271C24.552 12.1563 24.7709 12.4063 24.9374 12.6458C25.1249 12.875 25.2605 13.1146 25.3958 13.3229C25.5311 13.5313 25.6457 13.7188 25.7083 13.8854C25.8645 14.2083 25.9582 14.3958 25.9582 14.3958C25.9582 14.3958 25.9269 14.1979 25.8645 13.8333C25.8437 13.6458 25.7916 13.4375 25.7291 13.1875C25.6665 12.9375 25.5936 12.6458 25.4687 12.3542C25.3645 12.0521 25.2187 11.7396 25.052 11.4063C24.8958 11.0729 24.6666 10.75 24.4478 10.3958C24.1873 10.0729 23.9477 9.71875 23.6352 9.40625C23.3436 9.07292 22.9894 8.79167 22.6457 8.48958C22.3227 8.26042 21.9791 8.01042 21.6145 7.8125C21.7708 7.48958 21.8957 7.15625 21.9998 6.84375C23.2915 7.42708 24.6145 8.16667 25.6665 9.21875C29.5312 13.0833 28.0103 17.5729 30.9895 14.6042C31.4583 14.1354 31.8436 13.6458 32.1458 13.1563C32.2499 13.1563 32.3541 13.1458 32.4374 13.1667C32.8437 13.2708 33.1041 13.5833 33.2499 13.8333C33.6562 14.5104 33.75 15.4896 33.4999 16.4688C33.1249 17.9271 32.1666 18.7917 31.3958 18.8854L30.7708 18.9688L30.6042 19.5833C29.125 24.9479 25.1355 30.6562 20.625 30.6562C16.1146 30.6562 12.1355 24.9479 10.6459 19.5833L10.4792 18.9688L9.85421 18.8854C9.09379 18.7813 8.12504 17.9167 7.75004 16.4688C7.50004 15.4896 7.59379 14.5104 8.00004 13.8333C8.09379 13.6458 8.30212 13.4063 8.58337 13.2604Z"></path>
                <path d="M32.1979 34.1562C30.9896 36.2186 29.5833 37.9583 27.7292 38.9166C23.8958 40.8749 21.0418 42.4791 21.0418 42.4791L21.0313 42.4686V42.4373L21 42.4581L20.9688 42.4373V42.4686L20.9584 42.4791C20.9584 42.4791 18.1146 40.8957 14.2709 38.9166C12.4167 37.9583 11.0209 36.2186 9.8021 34.1562C4.12502 36.4686 0.166687 41.7603 0.166687 46.3957C0.166687 51.2708 0.166687 55.9999 0.166687 55.9999H20.9584H21.0417H41.8334C41.8334 55.9999 41.8334 51.2708 41.8334 46.3957C41.8334 41.7708 37.8646 36.4688 32.1979 34.1562Z"></path>
              </svg>
              <div class="getplan__item-text">План для женщин</div>
            </button>
            <button class="getplan__item js-next-section" value="1">
              <svg class="getplan__item-img" width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.1321 20.1215C12.6394 22.1189 13.9287 23.6618 15.4822 24.2114C17.2893 30.1612 21.9498 36.3223 28.2273 36.3223C34.5153 36.3223 39.1652 30.1612 40.9724 24.2114C42.5258 23.683 43.8152 22.1189 44.3223 20.1215C44.9777 17.4901 44.0794 15.0277 42.2616 14.1506C42.2616 14.0449 42.2828 13.9498 42.2828 13.8441C42.2828 10.7054 40.7715 7.88375 38.3304 5.77014C38.3514 5.62219 38.362 5.47424 38.362 5.30515C38.3619 3.27609 33.5957 0 27.7199 0C21.8441 0 17.0779 3.27609 17.0779 5.30515C17.0779 5.51651 17.0991 5.6856 17.1202 5.84412C14.7213 7.94716 13.2417 10.7477 13.2417 13.8336C13.2417 14.1506 13.2629 14.4571 13.3052 14.7741C12.0898 15.926 11.5826 17.9762 12.1321 20.1215ZM14.0766 17.7966C14.214 16.856 14.679 16.1162 15.3342 15.9577C15.4082 15.9472 15.4716 15.9366 15.5561 15.9366C15.6196 15.9366 15.6724 15.9366 15.7358 15.9472L16.7292 16.0423L16.8772 15.0594C17.2153 12.7979 17.9657 10.79 19.0119 9.10964C20.9353 8.85601 24.1057 7.34478 27.6988 7.34478C32.021 7.34478 35.7411 9.53236 37.4107 9.07794C38.4675 10.7583 39.2285 12.7767 39.5666 15.0489L39.7146 16.0317L40.708 15.9366C40.8452 15.926 41.0038 15.926 41.1094 15.9472C41.4159 16.0317 41.6696 16.2431 41.8704 16.5178C42.367 17.2153 42.5468 18.3989 42.2614 19.5931C41.8599 21.1995 40.8031 22.1506 39.9682 22.2668L39.2707 22.362L39.0806 23.0383C37.5693 28.576 33.342 34.1981 28.1955 34.1981C23.0489 34.1981 18.8322 28.5865 17.3104 23.0383L17.1202 22.362L16.4227 22.2668C15.5879 22.1506 14.5416 21.1995 14.1295 19.5931C14.0132 18.9802 13.9921 18.3567 14.0766 17.7966Z"></path>
                <path d="M40.3698 31.8521C39.0277 34.1453 37.4848 36.0687 35.424 37.1149C31.1863 39.2814 28.0264 41.0462 28.0264 41.0462L28.0158 41.0356V40.9934L27.9736 41.0144L27.9313 40.9934V41.0356L27.9207 41.0462C27.9207 41.0462 24.7609 39.2814 20.5231 37.1149C18.4729 36.0581 16.9194 34.1347 15.5773 31.8521C9.29986 34.3989 4.94583 40.2642 4.94583 45.3897C4.94583 50.7794 4.94583 56 4.94583 56H27.9524H28.0475H51.0543C51.0543 56 51.0543 50.7794 51.0543 45.3897C51.0224 40.2642 46.6472 34.3989 40.3698 31.8521Z"></path>
              </svg>
              <div class="getplan__item-text">План для мужчин</div>
            </button>
          </div>
        </div>
      </div>
      <div class="scene js-section">
        <div class="container">
            <div class="question js-stage active">
              <div class="question__content"><a class="logo--center logo" href="index.html"><img class="logo__img" src="img/logo.svg"></a>
                <h2 class="question__content-title">Физическая активность</h2>
                <div class="question__choose">
                  <label class="question__option question__option--active">Минимальная физическая активность
                    <input class="question__input" type="radio" name="activity" value="1">
                  </label>
                  <label class="question__option question__option--active">Я часто хожу пешком
                    <input class="question__input" type="radio" name="activity" value="2">
                  </label>
                  <label class="question__option question__option--active">Я занимаюсь 1–2 раза в неделю
                    <input class="question__input" type="radio" name="activity" value="3">
                  </label>
                  <label class="question__option question__option--active">Я занимаюсь 3–5 раз в неделю
                    <input class="question__input" type="radio" name="activity" value="4">
                  </label>
                  <label class="question__option question__option--active">Я занимаюсь 5–7 раз в неделю
                    <input class="question__input" type="radio" name="activity" value="5">
                  </label>
                </div>
                <div class="question__btn-inner">
                  <button class="question__btn question__btn--prev js-prev-section">Назад</button>
                  <div class="question__percent">12%</div>
                  <button class="question__btn question__btn--next js-next-stage" data-check="activity">Продолжить</button>
                </div>
              </div><img class="question__img" src="img/active.webp">
            </div>
            <div class="question js-stage">
              <div class="question__content"><a class="logo--center logo" href="index.html"><img class="logo__img" src="img/logo.svg"></a>
                <h2 class="question__content-title">Источник белков</h2>
                <div class="question__content-text">Выберите продукты, которые вы хотели ли бы включить в план</div>
                <div class="question__choose question__choose--multiple">
                  <label class="question__option question__option--multiple">
                    <div class="question__option-text">Курица</div><img class="question__option-icon" src="img/chic.png"><img class="question__option-hover" src="img/chic-hover.png">
                    <input class="js-protein question__input" type="checkbox" name="meat" value="1">
                  </label>
                  <label class="question__option question__option--multiple">
                    <div class="question__option-text">Свинина</div><img class="question__option-icon" src="img/pig.png"><img class="question__option-hover" src="img/pig-hover.png">
                    <input class="js-protein question__input" type="checkbox" name="meat" value="1">
                  </label>
                  <label class="question__option question__option--multiple">
                    <div class="question__option-text">Говядина</div><img class="question__option-icon" src="img/cow.png"><img class="question__option-hover" src="img/cow-hover.png">
                    <input class="js-protein question__input" type="checkbox" name="meat" value="1">
                  </label>
                  <label class="question__option question__option--multiple">
                    <div class="question__option-text">Индейка</div><img class="question__option-icon" src="img/turkey.png"><img class="question__option-hover" src="img/turkey-hover.png">
                    <input class="js-protein question__input" type="checkbox" name="meat" value="1">
                  </label>
                  <label class="question__option question__option--multiple">
                    <div class="question__option-text">Бекон</div><img class="question__option-icon" src="img/becon.png"><img class="question__option-hover" src="img/becon-hover.png">
                    <input class="js-protein question__input" type="checkbox" name="meat" value="1">
                  </label>
                  <label class="question__option question__option--multiple">
                    <div class="question__option-text">Без мяса</div><img class="question__option-icon" src="img/refuse.png"><img class="question__option-hover" src="img/refuse-hover.png">
                    <input class="js-protein question__input" type="checkbox" name="meat" value="1">
                  </label>
                  <label class="question__option question__option--multiple">
                    <div class="question__option-text">Рыба</div><img class="question__option-icon" src="img/fish.png"><img class="question__option-hover" src="img/fish-hover.png">
                    <input class="js-protein question__input" type="checkbox" name="meat" value="1">
                  </label>
                  <label class="question__option question__option--multiple">
                    <div class="question__option-text">Морепродукты</div><img class="question__option-icon" src="img/lobster.png"><img class="question__option-hover" src="img/lobster-hover.png">
                    <input class="js-protein question__input" type="checkbox" name="meat" value="1">
                  </label>
                  <label class="question__option question__option--multiple">
                    <div class="question__option-text">Без рыбы</div><img class="question__option-icon" src="img/refuse2.png"><img class="question__option-hover" src="img/refuse2-hover.png">
                    <input class="js-protein question__input" type="checkbox" name="meat" value="1">
                  </label>
                </div>
                <div class="question__btn-inner">
                  <button class="question__btn question__btn--prev js-prev-stage">Назад</button>
                  <div class="question__percent">24%</div>
                  <button class="question__btn question__btn--next js-next-stage" data-check="protein">Продолжить</button>
                </div>
              </div><img class="question__img" src="img/meat.webp">
            </div>
            <div class="question js-stage">
              <div class="question__content"><a class="logo--center logo" href="index.html"><img class="logo__img" src="img/logo.svg"></a>
                <h2 class="question__content-title">Овощи</h2>
                <div class="question__content-text">Выберите продукты, которые вы хотели ли бы включить в план</div>
                <div class="question__choose question__choose--multiple">
                  <label class="question__option question__option--multiple">
                    <div class="question__option-text">Брокколи</div><img class="question__option-icon" src="img/broccoli.png"><img class="question__option-hover" src="img/broccoli-hover.png">
                    <input class="question__input" type="checkbox" name="vegetables" value="1">
                  </label>
                  <label class="question__option question__option--multiple">
                    <div class="question__option-text">Грибы</div><img class="question__option-icon" src="img/mushroom.png"><img class="question__option-hover" src="img/mushroom-hover.png">
                    <input class="question__input" type="checkbox" name="vegetables" value="1">
                  </label>
                  <label class="question__option question__option--multiple">
                    <div class="question__option-text">Цуккини</div><img class="question__option-icon" src="img/zucchini.png"><img class="question__option-hover" src="img/zucchini-hover.png">
                    <input class="question__input" type="checkbox" name="vegetables" value="1">
                  </label>
                  <label class="question__option question__option--multiple">
                    <div class="question__option-text">Цв.капуста</div><img class="question__option-icon" src="img/cabbage.png"><img class="question__option-hover" src="img/cabbage-hover.png">
                    <input class="question__input" type="checkbox" name="vegetables" value="1">
                  </label>
                  <label class="question__option question__option--multiple">
                    <div class="question__option-text">Спаржа</div><img class="question__option-icon" src="img/asparagus.png"><img class="question__option-hover" src="img/asparagus-hover.png">
                    <input class="question__input" type="checkbox" name="vegetables" value="1">
                  </label>
                  <label class="question__option question__option--multiple">
                    <div class="question__option-text">Авокадо</div><img class="question__option-icon" src="img/avo.png"><img class="question__option-hover" src="img/avo-hover.png">
                    <input class="question__input" type="checkbox" name="vegetables" value="1">
                  </label>
                  <label class="question__option question__option--multiple">
                    <div class="question__option-text">Болг. перец</div><img class="question__option-icon" src="img/pepper.png"><img class="question__option-hover" src="img/pepper-hover.png">
                    <input class="question__input" type="checkbox" name="vegetables" value="1">
                  </label>
                  <label class="question__option question__option--multiple">
                    <div class="question__option-text">Баклажан</div><img class="question__option-icon" src="img/eggplant.png"><img class="question__option-hover" src="img/eggplant-hover.png">
                    <input class="question__input" type="checkbox" name="vegetables" value="1">
                  </label>
                  <label class="question__option question__option--multiple">
                    <div class="question__option-text">Огурцы</div><img class="question__option-icon" src="img/cucumber.png"><img class="question__option-hover" src="img/cucumber-hover.png">
                    <input class="question__input" type="checkbox" name="vegetables" value="1">
                  </label>
                </div>
                <div class="question__btn-inner">
                  <button class="question__btn question__btn--prev js-prev-stage">Назад</button>
                  <div class="question__percent">37%</div>
                  <button class="question__btn question__btn--next js-next-stage" data-check="vegetables">Продолжить</button>
                </div>
              </div><img class="question__img" src="img/veg.webp">
            </div>
            <div class="question js-stage">
              <div class="question__content"><a class="logo--center logo" href="index.html"><img class="logo__img" src="img/logo.svg"></a>
                <h2 class="question__content-title">Продукты</h2>
                <div class="question__content-text">Выберите продукты, которые вы хотели ли бы включить в план</div>
                <div class="question__choose question__choose--multiple">
                  <label class="question__option question__option--multiple">
                    <div class="question__option-text">Яйца</div><img class="question__option-icon" src="img/eggs.png"><img class="question__option-hover" src="img/eggs-hover.png">
                    <input class="question__input" type="checkbox" name="food" value="1">
                  </label>
                  <label class="question__option question__option--multiple">
                    <div class="question__option-text">Орехи</div><img class="question__option-icon" src="img/nuts.png"><img class="question__option-hover" src="img/nuts-hover.png">
                    <input class="question__input" type="checkbox" name="food" value="1">
                  </label>
                  <label class="question__option question__option--multiple">
                    <div class="question__option-text">Сыр</div><img class="question__option-icon" src="img/cheese.png"><img class="question__option-hover" src="img/cheese-hover.png">
                    <input class="question__input" type="checkbox" name="food" value="1">
                  </label>
                  <label class="question__option question__option--multiple">
                    <div class="question__option-text">Творог</div><img class="question__option-icon" src="img/curd.png"><img class="question__option-hover" src="img/curd-hover.png">
                    <input class="question__input" type="checkbox" name="food" value="1">
                  </label>
                  <label class="question__option question__option--multiple">
                    <div class="question__option-text">Слив. масло</div><img class="question__option-icon" src="img/butter.png"><img class="question__option-hover" src="img/butter-hover.png">
                    <input class="question__input" type="checkbox" name="food" value="1">
                  </label>
                  <label class="question__option question__option--multiple">
                    <div class="question__option-text">Кокос</div><img class="question__option-icon" src="img/coconat.png"><img class="question__option-hover" src="img/coconat-hover.png">
                    <input class="question__input" type="checkbox" name="food" value="1">
                  </label>
                </div>
                <div class="question__btn-inner">
                  <button class="question__btn question__btn--prev js-prev-stage">Назад</button>
                  <div class="question__percent">50%</div>
                  <button class="question__btn question__btn--next js-next-stage" data-check="food">Продолжить</button>
                </div>
              </div><img class="question__img" src="img/eat.webp">
            </div>
            <div class="question js-stage">
              <div class="question__content"><a class="logo--center logo" href="index.html"><img class="logo__img" src="img/logo.svg"></a>
                <h2 class="question__content-title">Ваш типичный день</h2>
                <div class="question__content-text"></div>
                <div class="question__choose">
                  <label class="question__option question__option--day">В офисе
                    <input class="question__input" type="radio" name="labor" value="1">
                  </label>
                  <label class="question__option question__option--day">В офисе, но регулярно выхожу
                    <input class="question__input" type="radio" name="labor" value="2">
                  </label>
                  <label class="question__option question__option--day">Большую часть дня провожу на ногах
                    <input class="question__input" type="radio" name="labor" value="3">
                  </label>
                  <label class="question__option question__option--day">Ручной труд
                    <input class="question__input" type="radio" name="labor" value="4">
                  </label>
                  <label class="question__option question__option--day">Большую часть дня провожу дома
                    <input class="question__input" type="radio" name="labor" value="5">
                  </label>
                </div>
                <div class="question__btn-inner">
                  <button class="question__btn question__btn--prev js-prev-stage">Назад</button>
                  <div class="question__percent">62%</div>
                  <button class="question__btn question__btn--next js-next-stage" data-check="labor">Продолжить</button>
                </div>
              </div><img class="question__img" src="img/day.webp">
            </div>
            <div class="question js-stage">
              <div class="question__content"><a class="logo--center logo" href="index.html"><img class="logo__img" src="img/logo.svg"></a>
                <h2 class="question__content-title">Плохие привычки</h2>
                <div class="question__content-text">Выберите одну или несколько привычек, которые у вас есть</div>
                <div class="question__choose">
                  <label class="question__option question__option--habits">Я часто не высыпаюсь
                    <input class="question__input" type="checkbox" name="habbits" value="1">
                  </label>
                  <label class="question__option question__option--habits">Я ем поздно ночью
                    <input class="question__input" type="checkbox" name="habbits" value="2">
                  </label>
                  <label class="question__option question__option--habits">Я употребляю много соли
                    <input class="question__input" type="checkbox" name="habbits" value="3">
                  </label>
                  <label class="question__option question__option--habits">Я часто ем сладкое
                    <input class="question__input" type="checkbox" name="habbits" value="4">
                  </label>
                  <label class="question__option question__option--habits">Я люблю газировки
                    <input class="question__input" type="checkbox" name="habbits" value="5">
                  </label>
                  <label class="question__option question__option--habits">Ничего из перечисленного
                    <input class="question__input" type="checkbox" name="habbits" value="6">
                  </label>
                </div>
                <div class="question__btn-inner">
                  <button class="question__btn question__btn--prev js-prev-stage">Назад</button>
                  <div class="question__percent">75%</div>
                  <button class="question__btn question__btn--next js-next-stage" data-check="habbits">Продолжить</button>
                </div>
              </div><img class="question__img" src="img/habits.webp">
            </div>
            <div class="question js-stage">
              <div class="question__content"><a class="logo--center logo" href="index.html"><img class="logo__img" src="img/logo.svg"></a>
                <h2 class="question__content-title">Параметры</h2>
                <div class="question__content-text"></div>
                <div class="question__choose">
                  <input class="question__option question__option--param" placeholder="Ваш возраст" name="person-data" type="number" id="age">
                  <input class="question__option question__option--param" placeholder="Ваш рост, см" name="person-data" type="number" id="height">
                  <input class="question__option question__option--param" placeholder="Ваш вес, кг" name="person-data" type="number" id="weight">
                  <input class="question__option question__option--param" placeholder="Желаемый вес, кг" name="person-data" type="number" id="wish-weight">
                </div>
                <div class="question__btn-inner">
                  <button class="question__btn question__btn--prev js-prev-stage">Назад</button>
                  <div class="question__percent">87%</div>
                  <button class="question__btn question__btn--next js-count-start" data-check="person-data">Продолжить</button>
                </div>
              </div><img class="question__img" src="img/param.webp">
            </div>
        </div>
      </div>
      <div class="creation js-section">
        <div class="container">
          <div class="creation__inner">
            <div class="creation__content"><a class="logo--creation logo" href="/"><img class="logo__img" src="img/logo.svg"></a>
              <div class="fill-box">
                <div class="fill-box__loader load-animation">
                  <svg width="226" height="226" viewport="0 0 113 113" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <circle r="103" cx="112" cy="112" fill="transparent" stroke-dasharray="765.48"></circle>
                    <circle class="fill-box__line" r="103" cx="112" cy="112" fill="transparent" stroke-dasharray="0,765.48"></circle>
                  </svg>
                </div>
                <div class="fill-box__progress"></div>
              </div>
              <div class="creation__text-holder">
                <p class="creation__text fade-animation">Обрабатываем введенные данные...</p>
                <p class="creation__text fade-animation">Подсчитываем профиль питания...</p>
                <p class="creation__text fade-animation">Рассчитываем количество еды...</p>
                <p class="creation__text fade-animation">Выбираем подходящие рецепты...</p>
              </div>

              <div class="creation__success censor active" style="display: block;"></div>
            </div><img class="creation__img" src="img/creation.webp">
          </div>
        </div>
      </div>
      <div class="resume-content js-section">
        <div class="resume">
          <h2 class="resume__title">Резюме вашего профиля</h2>
          <div class="resume__inner">
            <div class="resume__item resume__item_1">
              <div class="resume__item-top">
                <div class="resume__item-name">Ваш ИМТ</div><img class="resume__item-help" src="img/help.png">
                <div class="resume__popup">
                  <div class="resume__popup-descr">Индекс массы тела (ИМТ) — величина, позволяющая оценить, насколько ваш вес соответствует вашему росту. Она говорит о том, является ли ваш вес недостаточным, нормальным или избыточным.</div><img class="resume__popup-close" src="img/close.png">
                </div>
              </div>
              <div class="resume__item-content">
                <div class="resume__item-num">16,53</div>
                <div class="resume__item-line"><img class="resume__item-img" src="img/line.png"><img class="resume__item-drop resume__item-drop--veryfat resume__item-drop--skin" src="img/drop.png"></div>
              </div>
              <div class="resume__item-text">Недостаточная (дефицит) масса тела</div>
            </div>
            <div class="resume__item resume__item_2">
              <div class="resume__item-top">
                <div class="resume__item-name">Метаболический возраст</div><img class="resume__item-help" src="img/help.png">
                <div class="resume__popup">
                  <div class="resume__popup-descr">Метаболический возраст — это показатель возраста вашего организма. Если он выше фактического возраста, значит ваш метаболизм работает медленнее, чем должен. В этом случае необходимо перейти на план питания с ограничением калорий и повысить физическую активность. Это ускорит физиологические процессы, тем самым ускорится метаболизм и общее самочувствие. Если ваш метаболический возраст равен или выше фактического, то это означает, что ваш организм прекрасно себя чувствует. Впредь и дальше придерживайтесь такого правильного образа жизни.</div><img class="resume__popup-close" src="img/close.png">
                </div>
              </div>
              <div class="resume__item-content resume__item-content--age">
                <svg class="resume__item-look resume__item-look--young resume__item-look--woman" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20.625 48.4938C19.5293 48.419 18.4617 48.1135 17.4923 47.5973C16.523 47.0811 15.6736 46.3659 15 45.4985C13.8476 44.0527 13.0804 42.3384 12.7703 40.5157C11.9594 35.9391 14.1078 31.6094 17.6625 30.286C18.253 26.8049 19.4179 23.4462 21.1094 20.3469C12.7875 21.3157 6.24998 30.0094 6.24998 40.5625C6.17628 44.1141 6.52084 47.6619 7.27654 51.1329C7.37498 50.1813 7.4531 49.2501 7.4531 48.4376C7.44864 46.7496 7.57506 45.0638 7.83123 43.3954C7.88747 43.0394 8.06501 42.7139 8.33378 42.4738C8.60255 42.2338 8.94602 42.0941 9.30602 42.0782C9.66602 42.0624 10.0204 42.1715 10.3092 42.3871C10.598 42.6026 10.8034 42.9114 10.8906 43.261L14.9234 59.3751H18.0484L16.7984 53.2001C16.7282 52.8483 16.7812 52.4831 16.9484 52.1658C17.1157 51.8485 17.387 51.5984 17.7169 51.4574C18.0467 51.3165 18.415 51.2934 18.7599 51.3919C19.1048 51.4904 19.4053 51.7046 19.6109 51.9985L25.625 60.6469L27.5 60.0219L21.7187 48.4594C21.3563 48.5079 20.9898 48.5194 20.625 48.4938Z" style="fill-opacity: 0.4;"></path>
                  <path d="M49.9996 83.5781C49.7943 83.5787 49.591 83.5385 49.4014 83.4599C49.2118 83.3813 49.0396 83.2659 48.8949 83.1203L36.9418 71.1672L24.1059 74.4484C24.0311 74.4686 23.9548 74.4828 23.8777 74.4906C22.8161 74.5956 21.8217 75.0584 21.0579 75.8032C20.2941 76.548 19.8063 77.5304 19.6746 78.589L17.4355 93.75H82.5637L80.3293 78.6187C80.2014 77.555 79.715 76.5667 78.9501 75.8165C78.1852 75.0664 77.1875 74.5993 76.1215 74.4922C76.0444 74.4843 75.9681 74.4702 75.8934 74.45L63.0574 71.1687L51.1043 83.1219C50.9595 83.2672 50.7873 83.3823 50.5976 83.4606C50.408 83.5389 50.2048 83.5789 49.9996 83.5781Z" style="fill-opacity: 0.4;"></path>
                  <path d="M40.9371 23.0187C43.7614 21.4008 46.4648 19.5804 49.0262 17.5719C49.3023 17.3531 49.6442 17.2341 49.9965 17.2341C50.3488 17.2341 50.6907 17.3531 50.9668 17.5719C53.5297 19.5814 56.2347 21.4028 59.0605 23.0219C65.3506 26.5143 72.2411 28.7934 79.373 29.7406C78.5372 26.1135 77.0139 22.6802 74.8855 19.6266C74.3762 18.8422 73.8116 18.0609 73.1918 17.2828C69.451 12.6189 64.3931 9.18888 58.6762 7.43906C56.6106 6.80074 54.4783 6.40279 52.3215 6.25312C52.257 6.2481 52.1928 6.23923 52.1293 6.22656C50.7521 6.12447 49.3695 6.12082 47.9918 6.21562C47.8882 6.25094 47.7806 6.2735 47.6715 6.28281C43.6331 6.60028 39.702 7.73831 36.1186 9.62727C32.5352 11.5162 29.3748 14.1164 26.8309 17.2687C26.8121 17.2922 26.7809 17.3266 26.7512 17.3578C26.192 18.0658 25.6704 18.8028 25.1887 19.5656C25.1472 19.6321 25.1007 19.6953 25.0496 19.7547C23.0631 22.8294 21.6777 26.2529 20.9668 29.8437C28.0175 28.9464 34.812 26.6243 40.9371 23.0187Z" style="fill-opacity: 0.4;"></path>
                  <path d="M79.0211 20.3546C80.7642 23.3526 81.9862 26.6245 82.6352 30.0312C86.1336 31.3546 88.068 35.7593 87.2273 40.5343C86.9163 42.3434 86.1549 44.0452 85.0133 45.4827C84.3286 46.3625 83.4645 47.0865 82.4785 47.6067C81.4926 48.1269 80.4072 48.4314 79.2945 48.4999C78.9601 48.5189 78.6247 48.5053 78.293 48.4593L72.5117 60.0218L74.4602 60.6702L80.0852 53.6749C80.3044 53.4019 80.609 53.2104 80.9501 53.1311C81.2911 53.0519 81.649 53.0896 81.9661 53.238C82.2832 53.3865 82.5413 53.6372 82.6989 53.9499C82.8565 54.2626 82.9045 54.6192 82.8352 54.9624L81.957 59.3749H85.082L89.1101 43.2609C89.1936 42.9093 89.398 42.5983 89.6877 42.3824C89.9774 42.1664 90.3338 42.0592 90.6945 42.0796C91.0543 42.0953 91.3977 42.2348 91.6665 42.4746C91.9353 42.7143 92.113 43.0395 92.1695 43.3952C92.4257 45.0637 92.5521 46.7495 92.5476 48.4374C92.5476 49.2499 92.6258 50.1874 92.7242 51.1421C93.48 47.668 93.8246 44.117 93.7508 40.5624C93.7508 30.0624 87.2836 21.4062 79.0211 20.3546Z" style="fill-opacity: 0.4;"></path>
                  <path d="M54.6875 67.8125V62.125C53.1359 62.3613 51.5694 62.4867 50 62.5C48.4306 62.4867 46.8641 62.3613 45.3125 62.125V67.8125C45.3126 68.1595 45.1971 68.4967 44.9844 68.7708C44.7716 69.045 44.4737 69.2405 44.1375 69.3266L40.4609 70.2641L50 79.8063L59.5312 70.2672L55.8547 69.3297C55.5194 69.242 55.2228 69.0454 55.0116 68.7708C54.8003 68.4961 54.6863 68.159 54.6875 67.8125Z" style="fill-opacity: 0.4;"></path>
                  <path d="M75.5153 44.2688C75.7473 44.2198 75.9874 44.2239 76.2177 44.2807C76.4479 44.3375 76.6623 44.4456 76.845 44.5969C77.163 44.8592 77.5277 45.0591 77.92 45.1859C78.0945 45.2561 78.2756 45.3085 78.4606 45.3422C78.6776 45.3809 78.8982 45.3956 79.1184 45.386C79.7978 45.3392 80.4594 45.1477 81.0587 44.8243C81.6581 44.5009 82.1813 44.0531 82.5934 43.5109C83.0513 42.9406 83.42 42.3043 83.6872 41.6234C83.9002 41.1087 84.0538 40.5714 84.145 40.0219C84.6965 36.8828 83.5965 33.8844 81.645 33.0297C73.1545 32.4173 64.9067 29.9232 57.4997 25.7281C54.8997 24.236 52.3948 22.5839 49.9997 20.7812C47.6046 22.5855 45.0998 24.2392 42.4997 25.7328C34.0434 30.5938 24.6544 33.0422 19.4403 33.0219C19.4044 33.0313 19.3747 33.0531 19.3387 33.0594C16.8169 33.5141 15.2528 36.6281 15.8497 39.9984C16.0676 41.2861 16.6048 42.4986 17.4122 43.525C17.8127 44.0542 18.3203 44.4931 18.9018 44.8129C19.4833 45.1328 20.1258 45.3264 20.7872 45.3813C21.0383 45.4051 21.2915 45.3919 21.5387 45.3422C21.6892 45.3181 21.8368 45.2788 21.9794 45.225C22.4055 45.0937 22.8023 44.8815 23.1481 44.6C23.4292 44.3656 23.7837 44.2373 24.1497 44.2375C24.443 44.2374 24.7305 44.3198 24.9792 44.4753C25.2279 44.6309 25.4277 44.8533 25.5559 45.1172C27.3909 48.6577 30.0133 51.7303 33.2215 54.0988C36.4297 56.4673 40.1383 58.0686 44.0622 58.7797C47.9811 59.5695 52.0182 59.5695 55.9372 58.7797C59.8602 58.0674 63.5677 56.4652 66.7748 54.0962C69.9819 51.7271 72.6031 48.6544 74.4372 45.1141C74.5409 44.9005 74.6918 44.7134 74.8787 44.567C75.0655 44.4205 75.2832 44.3185 75.5153 44.2688Z" style="fill-opacity: 0.4;"></path>
                </svg>
                <svg class="resume__item-look resume__item-look--young resume__item-look--man" width="72" height="99" viewBox="0 0 72 99" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: block;">
                  <path d="M70.4255 87.119V97.3916C70.4255 98.3519 69.6469 99.1305 68.6866 99.1305H1.7389C0.778593 99.1305 0 98.3519 0 97.3916V87.119C0 77.2012 8.0296 69.1714 17.9476 69.1714C19.3864 69.1714 20.7562 68.7577 21.9232 67.9935C22.5531 67.5809 23.3778 67.6446 23.9616 68.1202C31.3043 72 39.1304 72 46.3759 68.0685C46.9647 67.5859 47.8011 67.5229 48.433 67.9474C49.6187 68.7438 51.014 69.1714 52.4777 69.1714C62.3957 69.1714 70.4255 77.2007 70.4255 87.119ZM46.6927 26.087H24.5217C17.8096 26.087 11.955 24.8713 11.955 31.5813V45.9534C11.955 58.097 22.0793 68.9438 35.2128 68.9438C47.9763 68.9438 58.3706 58.6104 58.4706 45.8686V31.5813C58.4706 24.8692 53.4049 26.087 46.6927 26.087Z" style="fill-opacity: 0.4;"></path>
                  <path d="M14.7778 12.0815C14.6655 12.0815 14.5691 12.0386 14.4611 12.0245C13.818 13.324 13.301 14.6823 12.9766 16.1087H21.1299C20.1955 13.77 17.7149 12.0815 14.7778 12.0815Z" style="fill-opacity: 0.4;"></path>
                  <path d="M35.2914 0C27.6391 0 20.9086 3.2488 16.6953 8.19533C22.0096 9.09787 26.0342 13.1469 26.0342 18V24H58.4344V20C58.4344 8.9544 48.0728 0 35.2914 0Z" style="fill-opacity: 0.4;"></path>
                  <path d="M21.545 20.1359H12.5215V24.163H21.545V20.1359Z" style="fill-opacity: 0.4;"></path>
                  <path d="M69.0408 18.7826H60.0635V24.163H69.0408C70.6753 24.163 72.0003 22.9584 72.0003 21.4728C72.0003 19.987 70.6753 18.7826 69.0408 18.7826Z" style="fill-opacity: 0.4;"></path>
                </svg>
                <svg class="resume__item-look resume__item-look--adult resume__item-look--woman" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M50 0C32.2303 0 17.7734 14.6521 17.7734 32.4219C17.7734 50.4836 23.69 62.7209 23.9418 63.2244C24.4396 64.2172 25.4523 64.8438 26.5625 64.8438H34.6625C29.7408 60.5443 26.5625 54.1035 26.5625 47.0703V44.0232C26.5625 39.4227 30.1588 35.5689 34.7508 35.2543C42.2295 34.7508 51.359 32.582 54.592 28.0074C58.6797 22.2135 67.6805 23.3775 70.0672 30.1703C71.8754 35.3516 73.4375 39.8205 73.4375 46.375C73.4375 53.7965 70.2732 60.451 65.3094 64.8438H73.4375C74.5477 64.8438 75.5604 64.2172 76.0582 63.2244C76.31 62.7209 82.2266 50.4836 82.2266 32.4219C82.2266 14.6521 67.7697 0 50 0V0Z" style="fill-opacity: 0.4;"></path>
                  <path d="M21.7109 79.5727C40.3355 83.3756 59.6053 83.3539 78.2465 79.552C75.9445 78.4094 73.5102 77.668 71.2174 76.9832C66.5621 75.5936 61.2635 74.2234 58.2545 69.1336C55.6885 70.1033 52.9322 70.7031 50 70.7031C47.118 70.7031 44.3873 70.1098 41.835 69.1539C38.8662 74.1815 33.5029 75.5758 28.7797 76.986C26.4742 77.674 24.0248 78.4182 21.7109 79.5727Z" style="fill-opacity: 0.4;"></path>
                  <path d="M14.9408 100L85.0595 99.9996C86.715 99.9996 88.0982 98.6145 87.9949 96.9627C87.6291 91.1111 86.1867 87.1434 84.1537 84.3535C72.9568 87.025 61.4904 88.3643 50.0259 88.3643C38.5611 88.3643 27.1246 86.9037 15.939 84.243C13.8591 87.0389 12.3767 91.0268 12.0054 96.9627C11.9021 98.6145 13.2853 100 14.9408 100Z" style="fill-opacity: 0.4;"></path>
                  <path d="M67.5789 46.375C67.5789 40.816 66.2371 36.9736 64.5377 32.1099C63.7648 29.9074 60.7812 29.4009 59.3793 31.3861C53.9719 39.0421 40.6367 40.7302 35.1551 41.0992C33.6158 41.205 32.4229 42.481 32.4229 44.0232V47.0703C32.4229 56.7634 40.3078 64.8437 50.001 64.8437C60.3588 64.8437 67.5789 56.0542 67.5789 46.375Z" style="fill-opacity: 0.4;"></path>
                </svg>
                <svg class="resume__item-look resume__item-look--adult resume__item-look--man" width="68" height="100" viewBox="0 0 68 100" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: block;">
                  <path d="M39.2146 69.7125C35.7782 71.178 31.9222 71.1509 28.515 69.6565C28.0559 69.4551 28.2706 68.7629 28.7614 68.8651C32.1391 69.5692 35.6255 69.5807 38.9763 68.9189C39.4688 68.8216 39.6762 69.5157 39.2146 69.7125ZM64.7392 16.6005C61.5854 11.5908 56.7486 8.09332 51.1764 6.706C52.1127 5.9211 51.9182 4.44671 50.8327 3.92303C39.5821 -1.49084 24.2943 -2.07139 14.7624 7.11844C7.04052 14.5612 6.41143 25.1536 6.50309 29.3822C6.50309 38.7151 6.50017 38.1042 6.50975 38.3198C6.56287 39.525 8.37784 39.4646 8.37784 38.2581V30.2654C8.37784 21.9977 15.1051 15.2674 23.3759 15.2674H44.6231C52.9099 15.2674 59.6211 22.0146 59.6211 30.2654V38.2581C59.6211 39.4644 61.4363 39.5248 61.4892 38.3198C61.4988 38.1006 61.4959 38.8851 61.4959 26.6534C61.4959 23.7579 62.6145 21.027 64.6454 18.9669C64.9037 18.7044 65.0683 18.3628 65.1141 17.9962C65.1895 17.3767 65.0554 17.1013 64.7392 16.6005ZM67.745 88.489V98.3335C67.745 99.2538 66.9989 100 66.0786 100H1.92035C1.00006 100 0.253906 99.2538 0.253906 98.3335V88.489C0.253906 78.9844 7.94894 71.2892 17.4537 71.2892C18.8325 71.2892 20.1453 70.8928 21.2636 70.1604C21.8673 69.765 22.6576 69.826 23.2171 70.2818C29.4946 75.3943 38.3362 75.4464 44.6974 70.2322C45.2617 69.7698 46.0633 69.7094 46.6688 70.1162C47.8052 70.8794 49.1423 71.2892 50.545 71.2892C60.0498 71.2892 67.745 78.984 67.745 88.489ZM52.5387 93.1259C52.5387 92.2056 51.7926 91.4595 50.8723 91.4595H45.8729C44.9526 91.4595 44.2065 92.2056 44.2065 93.1259C44.2065 94.0462 44.9526 94.7924 45.8729 94.7924H50.8723C51.7926 94.7924 52.5387 94.0462 52.5387 93.1259ZM44.6231 18.6003H23.3759C16.9434 18.6003 11.7107 23.835 11.7107 30.2654V44.0386C11.7107 55.6762 21.4132 66.0711 33.9995 66.0711C46.2312 66.0711 56.1924 56.1683 56.2882 43.9574V30.2654C56.2882 23.8329 51.0556 18.6003 44.6231 18.6003Z" style="fill-opacity: 0.4;"></path>
                </svg>
                <svg class="resume__item-look resume__item-look--old resume__item-look--woman" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M58.6366 6.9541C56.5523 -2.33606 43.4085 -2.30899 41.3574 6.98215C47.0407 5.44873 53.0728 5.48208 58.6366 6.9541Z" style="fill-opacity: 1;"></path>
                  <path d="M51.6267 83.5057C48.8084 82.0967 47.0577 79.2639 47.0577 76.1129V73.333C44.3308 72.9911 41.7471 72.1819 39.3904 70.9867C37.9468 73.076 35.7237 74.6075 33.0855 75.135L18.8443 77.9833C14.7182 78.8086 11.748 82.4315 11.748 86.6393V99.9998H52.9426V85.6349C52.9426 84.7274 52.4385 83.9116 51.6267 83.5057Z" style="fill-opacity: 1;"></path>
                  <path d="M81.156 77.9833L66.9146 75.135C64.2766 74.6073 62.0534 73.076 60.6097 70.9867C58.253 72.1819 55.6693 72.9911 52.9424 73.333V76.1129C52.9424 77.0203 53.4465 77.8362 54.2583 78.242C57.0766 79.6511 58.8273 82.4839 58.8273 85.6347V99.9996H88.252V86.6391C88.2522 82.4315 85.2821 78.8086 81.156 77.9833Z" style="fill-opacity: 1;"></path>
                  <path d="M51.1522 35.2844C50.0378 34.4295 48.5089 34.4548 47.4347 35.3456C39.9706 41.536 28.2674 43.8113 27.0573 44.0331L26.4629 44.1718C26.5051 47.3856 29.1221 49.9783 32.3459 49.9783C32.3459 59.7287 40.2501 67.6331 50.0007 67.6331C59.7512 67.6331 67.6555 59.7287 67.6555 49.9783C70.9056 49.9783 73.5404 47.3434 73.5404 44.0934V41.187C71.6404 41.4814 69.8788 41.6146 68.2503 41.6146C59.4031 41.6146 54.3738 37.7557 51.1522 35.2844Z" style="fill-opacity: 1;"></path>
                  <path d="M54.7344 30.6151C58.4339 33.4528 63.0385 36.9842 73.0545 35.3064L73.152 35.2917L73.5407 35.2397V31.3107C73.5245 20.5369 63.0016 11.726 50.001 11.726C37.0004 11.726 26.3959 20.8149 26.4612 31.3107V38.1519C28.7246 37.6837 37.9792 35.5422 43.6784 30.8158C46.8804 28.1601 51.4267 28.0775 54.7344 30.6151Z" style="fill-opacity: 1;"></path>
                </svg>
                <svg class="resume__item-look resume__item-look--old resume__item-look--man" width="78" height="100" viewBox="0 0 78 100" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: block;">
                  <path d="M64.7209 27.9159V43.5882C64.7209 44.2595 64.6984 44.9255 64.6543 45.5858C74.2045 43.4803 74.332 30.1399 64.7209 27.9159Z" style="fill-opacity: 1;"></path>
                  <path d="M13.2782 27.916C3.66059 30.1438 3.8016 43.4848 13.3448 45.5859C13.3008 44.9256 13.2782 44.2596 13.2782 43.5883V27.916Z" style="fill-opacity: 1;"></path>
                  <path d="M44.7057 49.4252H41.9336C42.0535 52.2324 44.3748 54.4793 47.2109 54.4793H49.983C49.8631 51.672 47.5418 49.4252 44.7057 49.4252Z" style="fill-opacity: 1;"></path>
                  <path d="M28.0156 54.4795H30.7877C33.6238 54.4795 35.9451 52.2326 36.065 49.4254H33.293C30.4568 49.4254 28.1354 51.6723 28.0156 54.4795Z" style="fill-opacity: 1;"></path>
                  <path d="M62.8617 43.5881V23.8624C61.5471 -7.80211 16.4394 -7.7777 15.1367 23.8624V43.5881C16.4514 75.2526 61.559 75.2282 62.8617 43.5881ZM55.8475 60.3386H47.2112C43.9643 60.3386 41.0376 58.9425 38.9993 56.7193C36.961 58.9425 34.0343 60.3386 30.7874 60.3386H22.1511V54.7074C22.1511 48.5639 27.1492 43.5658 33.2927 43.5658H44.7059C50.8495 43.5658 55.8475 48.5639 55.8475 54.7074V60.3386Z" style="fill-opacity: 1;"></path>
                  <path d="M59.7187 73.3098H51.0074V74.8801C50.3459 90.814 27.6474 90.8017 26.9919 74.8801V73.3098H18.2808C8.5652 73.3098 0.661133 81.2141 0.661133 90.9295V99.9997H77.3386V90.9295C77.3384 81.2141 69.4341 73.3098 59.7187 73.3098Z" style="fill-opacity: 1;"></path>
                  <path d="M39 81.0288C42.3902 81.0288 45.1484 78.2706 45.1484 74.8804V73.3101H32.8516V74.8804C32.8516 78.2706 35.6098 81.0288 39 81.0288Z" style="fill-opacity: 1;"></path>
                </svg>
              </div>
              <div class="resume__item-text">53 года</div>
            </div>
            <div class="resume__item resume__item_3">
              <div class="resume__item-top">
                <div class="resume__item-name">Рекомендуемое количество калорий</div><img class="resume__item-help" src="img/help.png">
                <div class="resume__popup">
                  <div class="resume__popup-descr">Калории находятся в пределах рекомендованного диапазона +/- 100, так как их невозможно точно отслеживать. Следуя плану питания с ограничением калорий, количество потребляемых вами калорий не должно быть ниже этого значения. Ежедневное количество калорий рассчитывается на основе вашего целевого веса, физической активности, текущих измерений и образа жизни.</div><img class="resume__popup-close" src="img/close.png">
                </div>
              </div>
              <div class="resume__item-content resume__item-content--calories"><img class="resume__item-calories" src="img/calories.png"></div>
              <div class="resume__item-text">163-263</div>
            </div>
            <div class="resume__item resume__item_4">
              <div class="resume__item-top">
                <div class="resume__item-name">Рекомендуемое количество воды</div><img class="resume__item-help" src="img/help.png">
                <div class="resume__popup">
                  <div class="resume__popup-descr">Даже если такое количество воды кажется для вас чрезмерным, поверьте, что это научно обоснованно, посчитано индивидуально для вас, и потреблять воду нужно именно в таком объеме, часто и небольшими порциями.</div><img class="resume__popup-close" src="img/close.png">
                </div>
              </div>
              <div class="resume__item-content resume__item-content--water"><img class="resume__item-bottle" src="img/bottle.png">
                <div class="resume__item-scale-holder"><span class="resume__item-scale" style="height: 0px;"></span></div>
                <div class="resume__item-liters">
                  <div class="resume__item-liter">5 л</div>
                  <div class="resume__item-liter">0 л</div>
                </div>
              </div>
              <div class="resume__item-text"> л</div>
            </div>
            <div class="resume__item resume__item_5">
              <div class="resume__item-top">
                <div class="resume__item-name">Похудение в зонах</div><img class="resume__item-help" src="img/help.png">
                <div class="resume__popup">
                  <div class="resume__popup-descr">Следуя плану вы похудеете в целом и тем самым улучшите свою фигуру. Общеизвестно, что женщины в последнюю очередь сбрасывают жир в нижней части тела, а мужчины в области живота. Степень потери веса не равномерна для разных частей тела, определяется генами, гормонами и прочими факторами.</div><img class="resume__popup-close" src="img/close.png">
                </div>
              </div>
              <div class="resume__item-content"><img class="resume__item-body" src="img/body.png"></div>
              <div class="resume__item-text"></div>
            </div>
            <div class="resume__item resume__item_6">
              <div class="resume__item-top">
                <div class="resume__item-name">Достижимый вес после 28 дней <span class="version1">диеты</span><span class="censor">питания</span></div><img class="resume__item-help" src="img/help.png">
                <div class="resume__popup">
                  <div class="resume__popup-descr">Вес, которого вы можете достигнуть следуя 28-дневному плану кето <span class="version1">диеты</span><span class="censor">питания</span>, не подвергая риску здоровье. Результаты могут отличаться.</div><img class="resume__popup-close" src="img/close.png">
                </div>
              </div>
              <div class="resume__item-content"><img class="resume__item-scales" src="img/scales.png"></div>
              <div class="resume__item-text">5 кг</div>
            </div>
            <div class="resume__item resume__item_7">
              <div class="resume__item-top">
                <div class="resume__item-name">Ваш вес после&nbsp;КЕТО-ПЛАНА</div><img class="resume__item-help" src="img/help.png">
                <div class="resume__popup">
                  <div class="resume__popup-descr">Похудение — это не всегда линейный процесс. Сначала вы сбрасываете вес быстро, потом все медленнее и медленнее. И это нормально, иначе резкая потеря веса влияет на здоровье и грозит срывами, в результате которых вес возвращается. Будьте терпеливы и строги в соблюдении <span class="version1">диеты</span><span class="censor">питания</span>, старайтесь чаще передвигаться и разогнать метаболизм!</div><img class="resume__popup-close" src="img/close.png">
                </div>
              </div>
              <div class="resume__item-content resume__item-content--plan">
                <div class="resume__item-weeks"><span class="resume__item-week">Неделя 1</span><span class="resume__item-week">Неделя 2</span><span class="resume__item-week">Неделя 3</span><span class="resume__item-week">Неделя 4</span></div><img class="resume__item-plan" src="img/plan.png">
              </div>
              <div class="resume__item-text">5 кг</div>
            </div>
            <div class="resume__item resume__item_8">
              <div class="resume__item-top">
                <div class="resume__item-name version1">Кетогенная диета</div>
                <div class="resume__item-name censor">Кетогенное питание</div><img class="resume__item-help" src="img/help.png">
                <div class="resume__popup">
                  <div class="resume__popup-descr">Кето <span class="version1">диета</span><span class="censor">питание</span> — это план питания, где баланс питательных веществ распределяется в соотношении 75% – жиры, 20% – белки и 5% – углеводы.</div><img class="resume__popup-close" src="img/close.png">
                </div>
              </div>
              <div class="resume__item-content resume__item-content--chart">
                <div class="resume__item-percents resume__item-percents--fat">
                  <div class="resume__item-percent">75%</div>
                  <div class="resume__item-substance">жиры</div>
                </div><img class="resume__item-chart" src="img/chart.png">
                <div class="resume__item-percents-holder">
                  <div class="resume__item-percents resume__item-percents--protein">
                    <div class="resume__item-percent">20%</div>
                    <div class="resume__item-substance">белки</div>
                  </div>
                  <div class="resume__item-percents resume__item-percents--carb">
                    <div class="resume__item-percent">5%</div>
                    <div class="resume__item-substance">углеводы</div>
                  </div>
                </div>
              </div>
              <div class="resume__item-text version1">Ваша диета</div>
              <div class="resume__item-text censor">Ваше питание</div>
            </div>
          </div>
     <center>       <a class="form__btn btn" href="https://clickfrm.com/C2yv?utm_content=<?php echo $client->getSubId() ?>">Получить за 29 рублей</a>  </center> 
        </div>
        
        <div class="get">
          <div class="container">
            <h2 class="get__title">Что вы получаете</h2>
            <div class="get__content">
              <div class="get__item"><img class="get__img" src="img/clipboard.png">
                <div class="get__text">Индивидуальный план питания на&nbsp;28&nbsp;дней</div>
              </div>
              <div class="get__item"><img class="get__img" src="img/food.png">
                <div class="get__text">Размеры порций и&nbsp;их&nbsp;КБЖУ рассчитаны специально под вас</div>
              </div>
              <div class="get__item"><img class="get__img" src="img/recipe-book.png">
                <div class="get__text">Простые рецепты для&nbsp;приготовления вкустных и сытных блюд</div>
              </div>
              <div class="get__item"><img class="get__img" src="img/cupcake.png">
                <div class="get__text">Советы, как следовать <span class="version1">диете</span><span class="censor">питанию</span> и не сорваться</div>
              </div>
            </div>
         <center>   <a class="form__btn btn" href="https://clickfrm.com/C2yv?utm_content=<?php echo $client->getSubId() ?>">Получить за 29 рублей</a> </center>
          </div>
        </div>
      </div>
      <div class="contacts js-section">
        <div class="container">
          <div class="contacts__inner">
            <div class="contacts__data"><a class="logo--center logo" href="index.html"><img class="logo__img" src="img/logo.svg"></a>
              <h2 class="contacts__title">Контактные данные</h2>
              <h2 class="contacts__text">Укажите ваше имя и E-mail, куда мы отправим ваш персональный план <span class="version1">диеты</span><span class="censor">питания</span></h2>
                <form class="form js-orderform" id="form">
                  <input class="name form__input" placeholder="Ваше имя" name="order[name]" type="text" id="name">
                  <input class="email form__input" placeholder="Ваш E-mail" name="order[email]" type="email" autocomplete="on" required id="email">
                  <input type="hidden" id="js-product-id" name="order[products][]" value="">
                  <div class="error"></div>
                  <div class="form__check">
                    <input class="form__check-input" type="checkbox" id="checkbox">
                    <label class="form__check-box" for="checkbox"></label>
                    <div class="form__text">Даю согласие на&ensp;<a class="form__text form__text--data js-destPermission" href="permission.pdf" target="_blank">обработку персональных данных,</a>&ensp;а также ознакомлен с&ensp;<a class="form__text form__text--data js-destOffer" href="offer.pdf" target="_blank">публичной офертой</a> и<a class="form__text form__text--data" href="tariff.pdf" target="_blank"> тарифами</a></div>
                  </div>
                    <a class="form__btn btn" href="https://clickfrm.com/C2yv?utm_content=<?php echo $client->getSubId() ?>">Получить за 29 рублей</a>
                </form>
            </div><img class="contacts__img" src="img/contacts.webp">
          </div>
        </div>
      </div>
      <div class="progress-bar">
        <div class="container">
          <div class="progress-bar__inner">
            <div class="progress-bar__arrows"></div>
            <div class="progress-bar__slider js-progress-bar-slider">
              <div class="progress-bar__item">
                <svg class="progress-bar__img active" width="64" height="55" viewBox="0 0 63 55" xmlns="http://www.w3.org/2000/svg">
                  <path class="progress-bar__img-border" fill-rule="evenodd" clip-rule="evenodd" d="M34.1396 0.789216C39.0254 1.6774 42.4786 5.13502 46.5603 7.9817C52.2921 11.9793 60.5449 13.7193 62.3887 20.4911C64.4724 28.1441 60.9585 36.3305 55.9459 42.4531C50.41 49.2146 42.8388 55.202 34.1396 54.9948C25.5571 54.7903 19.3976 47.5657 13.3411 41.4381C7.3052 35.3313 -0.60427 29.0835 0.0365938 20.4911C0.663283 12.0887 8.99025 6.66378 16.2474 2.4712C21.6488 -0.649294 28.0116 -0.324769 34.1396 0.789216Z"></path>
                  <path class="progress-bar__img-elem" d="M31.8789 20.9688C31.8789 16.5747 28.3304 13 23.9688 13C19.5953 13 16 16.5964 16 20.9688C16 25.0356 19.1079 28.3949 23.0898 28.8306V34.1523H20.4531C19.9677 34.1523 19.5742 34.5459 19.5742 35.0312C19.5742 35.5166 19.9677 35.9102 20.4531 35.9102H23.0898V38.5469C23.0898 39.0323 23.4834 39.4258 23.9688 39.4258C24.4541 39.4258 24.8477 39.0323 24.8477 38.5469V35.9102H27.4844C27.9698 35.9102 28.3633 35.5166 28.3633 35.0312C28.3633 34.5459 27.9698 34.1523 27.4844 34.1523H24.8477V28.8298C28.7972 28.3912 31.8789 25.0333 31.8789 20.9688ZM17.7578 20.9688C17.7578 17.544 20.5441 14.7578 23.9688 14.7578C27.3612 14.7578 30.1211 17.544 30.1211 20.9688C30.1211 24.3612 27.3612 27.1211 23.9688 27.1211C20.5441 27.1211 17.7578 24.3612 17.7578 20.9688Z"></path>
                  <path class="progress-bar__img-elem" d="M38.9102 27.1694V19.5749L40.9254 21.5902C41.2686 21.9334 41.8251 21.9335 42.1684 21.5902C42.5116 21.2469 42.5116 20.6905 42.1684 20.3472L38.6528 16.8316C38.3096 16.4883 37.753 16.4883 37.4098 16.8316L33.8942 20.3472C33.5509 20.6905 33.5509 21.2469 33.8942 21.5902C34.2374 21.9334 34.7939 21.9334 35.1371 21.5902L37.1523 19.5749V27.1702C33.2028 27.6088 30.1211 30.9666 30.1211 35.0312C30.1211 39.4252 33.6696 43 38.0312 43C42.4047 43 46 39.4035 46 35.0312C46 30.9644 42.8921 27.6051 38.9102 27.1694ZM38.0312 41.2422C34.6388 41.2422 31.8789 38.456 31.8789 35.0312C31.8789 31.6388 34.6388 28.8789 38.0312 28.8789C41.4559 28.8789 44.2422 31.6388 44.2422 35.0312C44.2422 38.456 41.4559 41.2422 38.0312 41.2422Z"></path>
                </svg>
                <div class="progress-bar__num">01</div>
                <div class="progress-bar__text">Пол</div>
              </div>
              <div class="progress-bar__item">
                <svg class="progress-bar__img" width="65" height="57" viewBox="0 0 65 57" xmlns="http://www.w3.org/2000/svg">
                  <path class="progress-bar__img-border" fill-rule="evenodd" clip-rule="evenodd" d="M35.1396 1.78922C40.0254 2.6774 43.4786 6.13502 47.5603 8.9817C53.2921 12.9793 61.5449 14.7193 63.3887 21.4911C65.4724 29.1441 61.9585 37.3305 56.9459 43.4531C51.41 50.2146 43.8388 56.202 35.1396 55.9948C26.5571 55.7903 20.3976 48.5657 14.3411 42.4381C8.3052 36.3313 0.39573 30.0835 1.03659 21.4911C1.66328 13.0887 9.99025 7.66378 17.2474 3.4712C22.6488 0.350706 29.0116 0.675231 35.1396 1.78922Z"></path>
                  <g clip-path="url(#clip0)">
                    <path class="progress-bar__img-elem" d="M34.1539 35.7017C35.0951 36.6442 35.0893 38.1603 34.1539 39.0957L32.0373 41.2124C31.1097 42.1423 29.585 42.1541 28.6433 41.2124L19.7872 32.3563C18.8518 31.4204 18.8518 29.8977 19.7872 28.9624L21.9039 26.8457C22.8393 25.9102 24.3554 25.9045 25.2979 26.8457L34.1539 35.7017ZM20.144 34.6628C19.9275 34.4463 19.5675 34.4861 19.4003 34.7427C18.7364 35.7618 18.9411 36.9903 19.702 37.7513L23.2484 41.2977C24.0027 42.0519 25.2303 42.2689 26.2566 41.5997C26.5133 41.4323 26.5535 41.0724 26.3369 40.8557L20.144 34.6628ZM35.6094 22.1222C35.2345 21.7478 34.6267 21.7478 34.2517 22.1222L29.122 27.2519C28.7471 27.6268 28.7471 28.2346 29.122 28.6096L32.39 31.8776C32.7638 32.2513 33.3715 32.2526 33.7478 31.8776L38.8774 26.7479C39.2524 26.3729 39.2524 25.7651 38.8774 25.3902L35.6094 22.1222ZM47.8566 19.3358C48.0733 19.5525 48.4334 19.5121 48.6007 19.2554C49.2694 18.2288 49.0498 17.0009 48.2975 16.2485L44.7511 12.7021C43.9921 11.9437 42.7643 11.7346 41.7439 12.3992C41.4872 12.5664 41.4473 12.9264 41.6639 13.143L47.8566 19.3358ZM39.3562 12.7873C38.4203 11.852 36.8976 11.8514 35.9622 12.7873L33.8455 14.904C32.9101 15.8394 32.9043 17.3555 33.8455 18.298L42.7016 27.1541C43.6449 28.0962 45.1612 28.0885 46.0956 27.1541L48.2123 25.0374C49.1476 24.102 49.1476 22.5793 48.2123 21.6434L39.3562 12.7873Z"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0">
                      <rect class="progress-bar__img-elem" width="30" height="30" transform="translate(19 12)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                <div class="progress-bar__num">02</div>
                <div class="progress-bar__text">Физическая активность</div>
              </div>
              <div class="progress-bar__item">
                <svg class="progress-bar__img" width="65" height="57" viewBox="0 0 65 57" xmlns="http://www.w3.org/2000/svg">
                  <path class="progress-bar__img-border" fill-rule="evenodd" clip-rule="evenodd" d="M35.1396 1.78922C40.0254 2.6774 43.4786 6.13502 47.5603 8.9817C53.2921 12.9793 61.5449 14.7193 63.3887 21.4911C65.4724 29.1441 61.9585 37.3305 56.9459 43.4531C51.41 50.2146 43.8388 56.202 35.1396 55.9948C26.5571 55.7903 20.3976 48.5657 14.3411 42.4381C8.3052 36.3313 0.39573 30.0835 1.03659 21.4911C1.66328 13.0887 9.99025 7.66378 17.2474 3.4712C22.6488 0.350706 29.0116 0.675231 35.1396 1.78922Z"></path>
                  <path class="progress-bar__img-elem" d="M47.9696 19.7618C47.9528 18.9926 47.7183 18.2037 47.2296 17.506C46.3715 16.278 45.0398 15.6086 43.516 15.698C41.6102 15.8165 39.1959 16.6311 36.8611 17.4183L35.7004 17.8071C34.7409 18.1262 33.8237 18.1717 32.6625 18.2295C31.1549 18.3046 29.2808 18.3969 26.6387 19.1608C22.654 20.3151 19.9038 22.3085 18.6883 24.9236C18.2364 25.8933 18.0237 26.9382 18.0165 28.0081C18.0136 28.011 18 28.0235 18 28.0235V31.2636C17.9941 32.4339 18.2525 33.638 18.7729 34.8122C20.1669 37.9462 24.2022 40.3098 28.1606 40.3098C30.921 40.3098 33.4844 39.2162 35.5739 37.1458C37.4032 35.3347 38.0601 34.1675 38.7606 32.9326C39.245 32.0771 39.7411 31.1951 40.7123 30.0122C41.544 28.998 42.6087 28.5024 43.7356 27.9779C45.3319 27.2344 46.9827 26.4656 47.798 24.2334C47.9469 23.821 48.0129 23.3794 47.992 22.9325L47.9997 19.7936C47.9904 19.7787 47.9773 19.7712 47.9696 19.7618ZM20.1572 25.6069C21.1705 23.4287 23.5672 21.7379 27.0888 20.7178C29.5487 20.0052 31.2438 19.9217 32.7411 19.8466C33.9755 19.7862 35.0426 19.7323 36.2098 19.344L37.3782 18.9529C39.6132 18.1988 41.9242 17.4183 43.6158 17.3136L43.7854 17.3089C44.6316 17.3089 45.4006 17.7188 45.9005 18.4336C46.3472 19.0725 46.4903 19.8391 46.2743 20.4333C45.6889 22.0339 44.5255 22.5777 43.0487 23.2645C41.8665 23.8161 40.5253 24.4411 39.4582 25.7407C38.4009 27.0313 37.8645 27.9763 37.3481 28.8932C36.681 30.076 36.1018 31.0974 34.4318 32.7508C32.6522 34.516 30.4843 35.4461 28.1595 35.4461C24.4727 35.4461 21.2437 33.1389 20.2533 30.9107C19.6826 29.6228 19.2024 27.662 20.1572 25.6069Z"></path>
                  <path class="progress-bar__img-elem" d="M28.1608 33.8241C30.0756 33.8241 31.8019 33.0764 33.2919 31.5971C34.7995 30.1058 35.3014 29.2198 35.9347 28.0986C36.4609 27.1661 37.0558 26.1124 38.206 24.7112C39.5071 23.126 41.0937 22.3875 42.3664 21.7945C43.9017 21.0782 44.4269 20.7719 44.7516 19.8771C44.7661 19.8146 44.7308 19.5857 44.5725 19.3617C44.4595 19.1993 44.205 18.9274 43.7867 18.9274C42.2388 19.0222 40.032 19.7666 37.9007 20.4864L36.7228 20.8813C35.3433 21.3391 34.1216 21.3998 32.8257 21.4649C31.4116 21.5349 29.817 21.615 27.5405 22.2734C24.4815 23.159 22.4362 24.5469 21.6252 26.2881C20.9276 27.791 21.2995 29.2734 21.7351 30.2514C22.4988 31.9702 25.1731 33.8241 28.1608 33.8241ZM28.0172 24.8311C30.1285 24.8311 31.8402 26.0321 31.8402 27.5166C31.8402 28.9982 30.1285 30.2012 28.0172 30.2012C25.904 30.2012 24.192 28.998 24.192 27.5166C24.192 26.0321 25.904 24.8311 28.0172 24.8311Z"></path>
                  <defs>
                    <clipPath id="clip0">
                      <rect class="progress-bar__img-elem" width="30" height="30" fill="white" transform="translate(18 13)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                <div class="progress-bar__num">03</div>
                <div class="progress-bar__text">Источники белков</div>
              </div>
              <div class="progress-bar__item">
                <svg class="progress-bar__img" width="65" height="57" viewBox="0 0 65 57" xmlns="http://www.w3.org/2000/svg">
                  <path class="progress-bar__img-border" fill-rule="evenodd" clip-rule="evenodd" d="M35.1396 1.78922C40.0254 2.6774 43.4786 6.13502 47.5603 8.9817C53.2921 12.9793 61.5449 14.7193 63.3887 21.4911C65.4724 29.1441 61.9585 37.3305 56.9459 43.4531C51.41 50.2146 43.8388 56.202 35.1396 55.9948C26.5571 55.7903 20.3976 48.5657 14.3411 42.4381C8.3052 36.3313 0.39573 30.0835 1.03659 21.4911C1.66328 13.0887 9.99025 7.66378 17.2474 3.4712C22.6488 0.350706 29.0116 0.675231 35.1396 1.78922Z"></path>
                  <g clip-path="url(#clip0)">
                    <path class="progress-bar__img-elem" d="M25.3897 33.0309L25.352 32.9551C24.7074 33.1468 24.0289 33.2506 23.3349 33.2546L23.2919 33.2548C22.0619 33.2548 20.9039 32.9446 19.8975 32.402C20.1641 35.1907 22.5509 37.375 25.4381 37.3748C25.4491 37.3748 25.4606 37.3747 25.4716 37.3747C26.0037 37.3716 26.5239 37.2949 27.0205 37.1504C26.5619 35.5833 25.9515 34.1628 25.3897 33.0309Z"></path>
                    <path class="progress-bar__img-elem" d="M43.1645 33.5123L43.1249 33.5125C42.3723 33.5125 41.6379 33.387 40.9483 33.1526C40.8793 33.3401 40.8122 33.5264 40.7498 33.7071C40.5107 34.3983 40.2092 35.365 39.9451 36.4973C40.4677 36.7079 41.0385 36.8248 41.6364 36.8248C41.6453 36.8248 41.6545 36.8248 41.6634 36.8247C42.861 36.8177 43.9846 36.3514 44.8273 35.5116C45.5627 34.7787 46.0073 33.8381 46.1063 32.8251C45.2053 33.2683 44.2031 33.5062 43.1645 33.5123Z"></path>
                    <path class="progress-bar__img-elem" d="M39.364 32.3678C38.9234 32.0707 38.5192 31.7214 38.1627 31.3253C37.9732 31.3442 37.7825 31.3542 37.5908 31.3553L37.5542 31.3554C36.5245 31.3555 35.524 31.0971 34.6447 30.6147L33.5835 34.1715L31.5886 30.4476C31.3471 30.3883 31.1089 30.3168 30.8758 30.2303C30.2162 30.5037 29.5083 30.6585 28.7838 30.6856C28.2735 31.3106 27.6557 31.8379 26.9641 32.2494C28.1936 34.7265 29.6043 38.4286 29.4961 42.223C29.4903 42.4277 29.5678 42.626 29.7109 42.7725C29.8531 42.918 30.048 43 30.2513 43H30.2554H32.7128L32.6935 39.1707C32.689 38.6853 33.0787 38.2882 33.5641 38.2837C34.05 38.2792 34.4466 38.669 34.4511 39.1543L34.4705 43.0001H36.8329C37.0378 42.9989 37.2336 42.9146 37.3751 42.7663C37.5167 42.618 37.5919 42.4186 37.5836 42.2138C37.4428 38.7616 38.3205 35.3537 39.0885 33.1328C39.1802 32.8676 39.2724 32.6127 39.364 32.3678Z"></path>
                    <path class="progress-bar__img-elem" d="M43.1249 31.7547C41.3544 31.7548 39.7421 30.8169 38.9094 29.381C38.4846 29.5212 38.0364 29.5949 37.5804 29.5976C37.5718 29.5976 37.5629 29.5977 37.5542 29.5977C36.5187 29.5977 35.5434 29.2369 34.7895 28.5891C34.2761 28.7769 33.7283 28.8762 33.1753 28.8794C32.3523 28.8853 31.5386 28.6747 30.8325 28.2808C30.1679 28.6995 29.3887 28.9273 28.5796 28.9321C28.3499 28.9328 28.1208 28.9167 27.8956 28.8822C27.0012 30.4619 25.254 31.4856 23.3246 31.497C23.3137 31.4971 23.3027 31.4971 23.2918 31.4971C20.4255 31.4971 18.0845 29.29 18.0664 26.5624C18.0526 24.4781 19.3934 22.6519 21.3671 21.913C21.3278 21.7022 21.3073 21.4872 21.3058 21.2688C21.2991 20.2491 21.712 19.2909 22.4684 18.5707C23.21 17.8647 24.1959 17.4725 25.2444 17.4663C25.4827 17.4654 25.7172 17.4833 25.9473 17.5211C26.2401 16.4182 26.8606 15.4133 27.7517 14.6205C28.9157 13.5849 30.4363 13.0094 32.0335 13.0001C32.0464 13 32.0595 13 32.0726 13C33.5606 13 35.004 13.4991 36.141 14.4078C37.0281 15.1167 37.6882 16.0396 38.056 17.0677C38.4072 17.0008 38.7652 16.9661 39.1271 16.964C39.1388 16.9639 39.1507 16.9638 39.1625 16.9638C42.247 16.9638 44.766 19.3372 44.7856 22.2701C44.7869 22.4729 44.7761 22.6753 44.7532 22.8765C45.51 23.1358 46.1936 23.5747 46.7329 24.1562C47.5 24.9834 47.9264 26.0471 47.9337 27.1517C47.942 28.3839 47.4423 29.5424 46.5271 30.4137C45.6267 31.2709 44.4288 31.7471 43.1543 31.7546C43.1445 31.7547 43.1346 31.7547 43.1249 31.7547Z"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0">
                      <rect class="progress-bar__img-elem" width="30" height="30" fill="white" transform="translate(18 13)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                <div class="progress-bar__num">04</div>
                <div class="progress-bar__text">Овощи</div>
              </div>
              <div class="progress-bar__item">
                <svg class="progress-bar__img" width="65" height="57" viewBox="0 0 65 57" xmlns="http://www.w3.org/2000/svg">
                  <path class="progress-bar__img-border" fill-rule="evenodd" clip-rule="evenodd" d="M35.1396 1.78922C40.0254 2.6774 43.4786 6.13502 47.5603 8.9817C53.2921 12.9793 61.5449 14.7193 63.3887 21.4911C65.4724 29.1441 61.9585 37.3305 56.9459 43.4531C51.41 50.2146 43.8388 56.202 35.1396 55.9948C26.5571 55.7903 20.3976 48.5657 14.3411 42.4381C8.3052 36.3313 0.39573 30.0835 1.03659 21.4911C1.66328 13.0887 9.99025 7.66378 17.2474 3.4712C22.6488 0.350706 29.0116 0.675231 35.1396 1.78922Z"></path>
                  <g clip-path="url(#clip0)">
                    <path class="progress-bar__img-elem" d="M34.025 27.4583C32.6699 27.4583 31.376 27.3657 30.1623 27.1938V38.3492C30.3033 38.3461 30.4442 38.3441 30.5868 38.3441H37.4627C42.7299 38.3441 47.0001 34.0739 47.0001 28.8067V25.3562C47.0001 24.515 46.8802 23.7037 46.676 22.9268C44.9931 25.6145 40.1117 27.4583 34.025 27.4583Z"></path>
                    <path class="progress-bar__img-elem" d="M34.5081 20.977C34.4973 21.0104 34.4824 21.0403 34.4654 21.0706C34.4556 21.0876 34.453 21.1066 34.4412 21.1231L30.773 26.1742C30.7709 26.1778 30.7679 26.1809 30.7658 26.1839L30.7375 26.223C31.784 26.3562 32.8854 26.4288 34.025 26.4288C40.2846 26.4288 45.4443 24.2813 46.1861 21.5088C46.2463 21.283 46.2813 21.0535 46.2813 20.8205C46.2813 17.7233 40.794 15.2122 34.025 15.2122C27.256 15.2122 21.7687 17.7229 21.7687 20.8205C21.7687 21.0536 21.8037 21.2831 21.8639 21.5089C22.1355 22.5235 22.9972 23.4541 24.2901 24.2263L33.831 20.3441C33.8475 20.3374 33.8649 20.3395 33.882 20.3344C33.918 20.3236 33.953 20.3158 33.991 20.3133C34.0224 20.3112 34.0522 20.3128 34.0831 20.3164C34.117 20.3205 34.1489 20.3262 34.1819 20.337C34.2148 20.3478 34.2442 20.3622 34.274 20.3792C34.2915 20.3889 34.311 20.3915 34.3275 20.4039C34.3388 20.4121 34.3439 20.4244 34.3548 20.4332C34.3805 20.4548 34.4011 20.48 34.4227 20.5073C34.4448 20.5356 34.4649 20.5634 34.4808 20.5948C34.4865 20.6066 34.4968 20.6143 34.5019 20.6267C34.5091 20.6447 34.507 20.6632 34.5122 20.6812C34.522 20.7162 34.5297 20.7496 34.5323 20.7857C34.5344 20.8186 34.5328 20.8495 34.5292 20.8814C34.5246 20.9147 34.5184 20.9456 34.5081 20.977Z"></path>
                    <path class="progress-bar__img-elem" d="M29.3726 27.0704L29.3705 27.0015L29.3669 26.8847L29.3659 26.8477L29.3556 26.5339L29.351 26.3811L29.3391 26.0035L29.3036 24.8974L29.2625 24.8989C29.4312 24.8315 29.5264 24.7935 29.5274 24.793C29.5572 24.7749 30.4282 24.4184 30.8012 24.243C30.8573 24.2168 30.9021 24.1988 30.9535 24.1751L32.5504 21.9768L25.497 24.847C25.5001 24.8486 25.5032 24.8496 25.5062 24.8512C25.4203 24.8841 25.3339 24.916 25.2474 24.9489C25.108 25.0019 24.9685 25.0554 24.8286 25.1068C24.6151 25.1855 24.399 25.257 24.1835 25.3306C24.168 25.3357 24.1526 25.3414 24.1377 25.3465C24.1192 25.3362 24.1002 25.326 24.0816 25.3157C23.9869 25.2925 23.9016 25.2431 23.8331 25.1716C22.7409 24.5265 21.9013 23.7686 21.3745 22.9275C21.1703 23.7043 21.0504 24.5156 21.0504 25.3568V27.8649L18.3438 28.9155L17.3148 29.3147L17.0453 29.4181L17.1502 29.5251L17 29.4828L17.3138 36.1308L17.3148 36.1519L17.3503 36.209C17.6369 36.6653 17.9775 37.081 18.3427 37.4761C19.9438 39.2084 22.2574 40.3475 25.0433 40.7189L25.0454 40.7878L25.3103 40.7708C25.335 40.7693 25.3582 40.7662 25.3792 40.7626L25.5608 40.7863L25.5567 40.6772C25.5937 40.6381 25.6077 40.5918 25.6138 40.5465L25.8674 40.0305L26.6186 38.503L29.1333 33.3876L29.548 32.5444L29.3798 27.2802L29.3726 27.0704ZM25.7728 38.4753L25.5006 39.0289L25.4811 38.4465L25.2656 32.0675L28.1152 26.8127L28.3751 26.3332L28.5654 25.9823L28.5783 26.3785L28.5958 26.9192L28.7707 32.3787L25.7728 38.4753Z"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0">
                      <rect class="progress-bar__img-elem" width="30" height="30" fill="white" transform="translate(17 13)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                <div class="progress-bar__num">05</div>
                <div class="progress-bar__text">Продукты</div>
              </div>
              <div class="progress-bar__item">
                <svg class="progress-bar__img" width="65" height="57" viewBox="0 0 65 57" xmlns="http://www.w3.org/2000/svg">
                  <path class="progress-bar__img-border" fill-rule="evenodd" clip-rule="evenodd" d="M35.1396 1.78922C40.0254 2.6774 43.4786 6.13502 47.5603 8.9817C53.2921 12.9793 61.5449 14.7193 63.3887 21.4911C65.4724 29.1441 61.9585 37.3305 56.9459 43.4531C51.41 50.2146 43.8388 56.202 35.1396 55.9948C26.5571 55.7903 20.3976 48.5657 14.3411 42.4381C8.3052 36.3313 0.39573 30.0835 1.03659 21.4911C1.66328 13.0887 9.99025 7.66378 17.2474 3.4712C22.6488 0.350706 29.0116 0.675231 35.1396 1.78922Z"></path>
                  <path class="progress-bar__img-elem" d="M36.5632 31.7832C36.5632 32.5383 35.9511 33.1504 35.196 33.1504H32.804C32.0489 33.1504 31.4368 32.5383 31.4368 31.7832V30.2449L20 25.842V25.8425V39.4532C20 39.7552 20.2448 40 20.5469 40H47.4531C47.7552 40 48 39.7552 48 39.4532V25.8425V25.842L36.5632 30.2449V31.7832Z"></path>
                  <path class="progress-bar__img-elem" d="M40.5898 17.3506V13.9141C40.5898 12.857 39.7329 12 38.6758 12H29.3242C28.2671 12 27.4102 12.857 27.4102 13.9141V17.3506H20.5469C20.2448 17.3506 20 17.5955 20 17.8975V24.0843L31.4368 28.4866V28.2362C31.4368 27.4811 32.0489 26.869 32.804 26.869H35.196C35.9511 26.869 36.5632 27.4811 36.5632 28.2362V28.4866L48 24.0843V17.8975C48 17.5955 47.7552 17.3506 47.4531 17.3506H40.5898ZM29.0508 17.3506V13.9141C29.0508 13.7633 29.1734 13.6406 29.3242 13.6406H38.6758C38.8266 13.6406 38.9492 13.7633 38.9492 13.9141V17.3506H29.0508Z"></path>
                  <path class="progress-bar__img-elem" d="M33.0774 28.5096V31.5097H34.9226C34.9226 30.8805 34.9226 29.1393 34.9226 28.5096H33.0774Z"></path>
                </svg></svg>
                <div class="progress-bar__num">06</div>
                <div class="progress-bar__text">Ваш день</div>
              </div>
              <div class="progress-bar__item">
                <svg class="progress-bar__img" width="65" height="57" viewBox="0 0 65 57" xmlns="http://www.w3.org/2000/svg">
                  <path class="progress-bar__img-border" fill-rule="evenodd" clip-rule="evenodd" d="M35.1396 1.78922C40.0254 2.6774 43.4786 6.13502 47.5603 8.9817C53.2921 12.9793 61.5449 14.7193 63.3887 21.4911C65.4724 29.1441 61.9585 37.3305 56.9459 43.4531C51.41 50.2146 43.8388 56.202 35.1396 55.9948C26.5571 55.7903 20.3976 48.5657 14.3411 42.4381C8.3052 36.3313 0.39573 30.0835 1.03659 21.4911C1.66328 13.0887 9.99025 7.66378 17.2474 3.4712C22.6488 0.350706 29.0116 0.675231 35.1396 1.78922Z"></path>
                  <g clip-path="url(#clip0)">
                    <path class="progress-bar__img-elem" d="M44.458 34.3181C44.9944 34.3199 45.4299 33.8862 45.4299 33.3503V15.9031C45.4299 14.2998 44.1301 13 42.5268 13H25.4709C23.8675 13 22.5677 14.2998 22.5677 15.9031V40.0959C22.5677 41.6993 23.8675 42.999 25.4709 42.999H35.7812C36.3171 42.999 36.7507 42.5636 36.7489 42.0271C36.7453 41.1368 36.7507 39.3163 36.7507 35.489C36.7507 34.843 37.2739 34.3199 37.9199 34.3199C41.7465 34.3199 43.5677 34.3144 44.458 34.3181ZM34.1827 19.1692H40.5938C41.1282 19.1692 41.5615 19.6024 41.5615 20.1369C41.5615 20.6713 41.1282 21.1046 40.5938 21.1046H34.1827C33.6482 21.1046 33.215 20.6713 33.215 20.1369C33.215 19.6024 33.6482 19.1692 34.1827 19.1692ZM31.359 35.1554L28.7885 37.7259C28.4106 38.1037 27.7979 38.1037 27.4199 37.7259L26.543 36.8489C26.1651 36.4709 26.1651 35.8582 26.543 35.4803C26.9209 35.1024 27.5336 35.1024 27.9115 35.4803L28.1042 35.673L29.9904 33.7868C30.3684 33.4089 30.9811 33.4089 31.359 33.7868C31.7369 34.1647 31.7369 34.7774 31.359 35.1554ZM31.359 27.2927L28.7885 29.8632C28.4106 30.2411 27.7979 30.2411 27.4199 29.8632L26.543 28.9862C26.1651 28.6083 26.1651 27.9956 26.543 27.6176C26.9209 27.2397 27.5336 27.2397 27.9115 27.6176L28.1042 27.8104L29.9904 25.9241C30.3684 25.5462 30.9811 25.5462 31.359 25.9241C31.7369 26.3021 31.7369 26.9148 31.359 27.2927ZM31.359 19.4301L28.7885 22.0006C28.4106 22.3784 27.7979 22.3784 27.4199 22.0006L26.543 21.1236C26.1651 20.7456 26.1651 20.1329 26.543 19.755C26.9209 19.3771 27.5336 19.3771 27.9115 19.755L28.1042 19.9477L29.9904 18.0615C30.3684 17.6836 30.9811 17.6836 31.359 18.0615C31.7369 18.4394 31.7369 19.0521 31.359 19.4301ZM34.6665 36.8299H34.1827C33.6482 36.8299 33.215 36.3966 33.215 35.8622C33.215 35.3277 33.6482 34.8945 34.1827 34.8945H34.6665C35.201 34.8945 35.6342 35.3277 35.6342 35.8622C35.6342 36.3966 35.201 36.8299 34.6665 36.8299ZM34.1827 28.9672C33.6482 28.9672 33.215 28.5339 33.215 27.9995C33.215 27.4651 33.6482 27.0318 34.1827 27.0318H40.5938C41.1282 27.0318 41.5615 27.4651 41.5615 27.9995C41.5615 28.5339 41.1282 28.9672 40.5938 28.9672H34.1827ZM45.1462 36.7881L39.219 42.7154C38.6093 43.3248 37.5672 42.89 37.5672 42.0313V36.1041C37.5672 35.5694 38.0003 35.1364 38.535 35.1364H44.4622C45.3096 35.1364 45.7644 36.1698 45.1462 36.7881Z"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0">
                      <rect class="progress-bar__img-elem" width="30" height="30" fill="white" transform="translate(19 13)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                <div class="progress-bar__num">07</div>
                <div class="progress-bar__text">Плохие привычки</div>
              </div>
              <div class="progress-bar__item progress-bar__item--last">
                <svg class="progress-bar__img" width="65" height="57" viewBox="0 0 65 57" xmlns="http://www.w3.org/2000/svg">
                  <path class="progress-bar__img-border" fill-rule="evenodd" clip-rule="evenodd" d="M35.1396 1.78922C40.0254 2.6774 43.4786 6.13502 47.5603 8.9817C53.2921 12.9793 61.5449 14.7193 63.3887 21.4911C65.4724 29.1441 61.9585 37.3305 56.9459 43.4531C51.41 50.2146 43.8388 56.202 35.1396 55.9948C26.5571 55.7903 20.3976 48.5657 14.3411 42.4381C8.3052 36.3313 0.39573 30.0835 1.03659 21.4911C1.66328 13.0887 9.99025 7.66378 17.2474 3.4712C22.6488 0.350706 29.0116 0.675231 35.1396 1.78922Z"></path>
                  <g clip-path="url(#clip0)">
                    <path class="progress-bar__img-elem" d="M37.6263 29.8539H39.6077V27.7151C39.0549 28.5099 38.3875 29.2299 37.6263 29.8539Z"></path>
                    <path class="progress-bar__img-elem" d="M30.1457 19.6387C28.6951 19.6387 27.3914 20.2815 26.6584 21.358C26.1726 22.0718 26.153 22.9748 26.6088 23.6585C27.3207 24.7266 28.676 25.3901 30.1457 25.3901C31.5874 25.3901 32.888 24.7741 33.6247 23.7425C34.1419 23.0183 34.1209 22.0254 33.5724 21.272C32.8279 20.2493 31.547 19.6387 30.1457 19.6387Z"></path>
                    <path class="progress-bar__img-elem" d="M37.8431 18.171C36.1729 15.8765 33.3458 14.3653 30.1458 14.3653C26.8437 14.3653 23.9386 15.9745 22.2921 18.3929C20.6102 20.8633 20.556 24.0938 22.2135 26.5806C23.8439 29.0267 26.7895 30.6634 30.1458 30.6634C33.3985 30.6634 36.2656 29.1261 37.9235 26.8046C39.7673 24.2228 39.7103 20.736 37.8431 18.171ZM35.0576 24.7632C33.9913 26.2564 32.1551 27.1478 30.1458 27.1478C28.0945 27.1478 26.1779 26.184 25.1437 24.6325C24.2894 23.3507 24.3127 21.6774 25.203 20.3696C26.2639 18.8113 28.1118 17.8809 30.1458 17.8809C32.1083 17.8809 33.9214 18.7621 34.996 20.2382C35.9903 21.6041 36.015 23.4225 35.0576 24.7632Z"></path>
                    <path class="progress-bar__img-elem" d="M34.6068 31.6108C33.2817 32.1324 31.8249 32.4213 30.2967 32.4213C26.4011 32.4213 22.9699 30.5451 21 27.7169V31.8992C21 36.1646 24.4789 39.6347 28.755 39.6347H31.6151V35.2536C31.6151 34.7682 32.0096 34.3747 32.4963 34.3747C32.9829 34.3747 33.3774 34.7682 33.3774 35.2536V39.6347H35.1397V37.0114C35.1397 36.526 35.5342 36.1325 36.0208 36.1325C36.5075 36.1325 36.9019 36.526 36.9019 37.0114V39.6347H38.6642V35.2536C38.6642 34.7682 39.0587 34.3747 39.5453 34.3747C40.032 34.3747 40.4265 34.7682 40.4265 35.2536V39.6347H42.1887V37.0114C42.1887 36.526 42.5832 36.1325 43.0699 36.1325C43.5565 36.1325 43.951 36.526 43.951 37.0114V39.6347H45.7133V35.2536C45.7133 34.7682 46.1078 34.3747 46.5944 34.3747C47.081 34.3747 47.4755 34.7682 47.4755 35.2536V39.6347H50.1189C50.6055 39.6347 51.0001 39.2411 51.0001 38.7557V31.6116H34.6247C34.6187 31.6116 34.6129 31.6109 34.6068 31.6108Z"></path>
                  </g>
                  <defs>
                    <clipPath id="clip0">
                      <rect class="progress-bar__img-elem" width="30" height="30" fill="white" transform="translate(21 12)"></rect>
                    </clipPath>
                  </defs>
                </svg>
                <div class="progress-bar__num">08</div>
                <div class="progress-bar__text">Параметры</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer">
        <div class="container">
          <div class="footer__inner">
            <div class="footer__item footer__item--start">
              <div class="footer__info footer__info--legal js-legal">2021 ООО "Техноиндекс"<br>
                ИНН: 7839141703<br>
                ОГРН: 1217800097888<br>
                Тел.: +7 (499) 653-77-01<br>
                E-mail: support@plandietpro.com<br>
              </div>
            </div>
            <div class="footer__item footer__item--middle">
              <div class="footer__info footer__info--grey">Принимаем к оплате:</div>
              <div class="footer__pay"><img class="footer__img" src="img/fvisa.png"><img class="footer__img" src="img/fmc.png"><img class="footer__img" src="img/fmir.png"></div>
              <div class="footer__info footer__info--grey">Платеж защищен</div>
              <div class="footer__pay"><img class="footer__img" src="img/flock.png"><img class="footer__img" src="img/flock2.png"><img class="footer__img" src="img/fsecure.png"><img class="footer__img" src="img/fpci.png"></div>
            </div>
            <div class="footer__item"><a class="footer__info footer__info--link footer__info--mb js-destPolicy" href="/policy.pdf" target="_blank">Политика конфиденциальности</a><a class="footer__info footer__info--link footer__info--mb js-destOffer" href="/offer.pdf" target="_blank">Оферта</a><a class="footer__info footer__info--link footer__info--mb js-unsubscribe" href="https://client.plandietpro.com/unsubscribe" target="_blank">Отменить подписку</a><a class="footer__info footer__info--link footer__info--mb js-destPermission" href="/permission.pdf" target="_blank">Политика обработки данных</a><a class="footer__info footer__info--link footer__info--mb" href="/about.html" target="_blank">О продукте</a></div>
          </div>
        </div>
      </div>
    <script src="js/jquery.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/landSettings.js"></script>
    <script src="js/docs.js"></script>
  </body>
</html>
