<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Bizup studio</title>

  <link rel="shortcut icon" href="/src/img/favicon.svg" type="image/png">
  <link rel="stylesheet" href="css/style.css">

</head>
<body>

  <main>
  <div class="main">
    <div class="container">
      <a href="index.php"><div class="main__logo"></div></a>
      <div class="main__title">ВЫВЕСТИ БИЗНЕС НА СЛЕДУЮЩИЙ УРОВЕНЬ </div>
      <div class="mian__game game">
        <div class="game__title">НАЧАТЬ ИГРУ</div>
        <div class="game__link game__link-no">
          <span>НЕ ЗНАЮ ЧЕГО ХОЧУ</span>
          <div class="game__help-no"></div>
        </div>
        <div class="game__link game__link-yes"> 
          <span>ЗНАЮ ЧЕГО ХОЧУ</span>
          <div class="game__help-yes"></div>
        </div>
      </div>
    </div>
  </div>
</main>
<footer>
  <div class="footer">
    <div class="container">
      <div class="footer__nav">
        <div class="footer__links links">
          <a href="https://www.youtube.com/channel/UCJbUInuP8Ubl_lplQggQT7w" target="_blank"><span class="links-you"></span></a>
          <a href="https://www.facebook.com/bizupstudio/?eid=ARCPF706XjExwMHzvlVx" target="_blank"><span class="links-face"></span></a>
          <a href="https://vk.com/club188161415" target="_blank"><span class="links-vk"></span></a>
          <a href="https://www.instagram.com/biz_up.by/" target="_blank"><span class="links-inst"></span></a>
        </div>
        <div class="footer__adress ">Г. МИНСК УЛ. ТИМИРЯЗЕВА 65A</div>
        <div class="footer__email">
          <a href="mailto:project.bizup@gmail.com">project.bizup@gmail.com</a>
        </div> 
      </div>
      <div class="footer__copyr">
        <div class="footer__copyr-item copyr__icon">
          <a href="viber://chat?number=375296386774" target="_blank"><span class="copyr__icon-viber"></span></a>
          <a href="https://wa.me/375296386774" target="_blank"><span class="copyr__icon-whatsapp"></span></a>
          <a href="https://t.me/" target="_blank"><span class="copyr__icon-teleg"></span></a>
        </div>
        <div class="footer__copyr-item copyr__text">
          ©2020   Разработано BizUp Studio 
        </div>
        <div class="footer__copyr-item copyr__tel">
          <a href="tel:+375 29 638 6774">+375 29 638 6774</a>
        </div>
        
      </div>
    </div>
  </div>
</footer>

<div class="modal">
    <div class="modal__bg"></div>
    <div class="modal__content content">
      <form action="">
        <input type="hidden" class="content-site" name="nameSite">
        <div class="content__title">ОБРАТНАЯ СВЯЗЬ</div>
        <div class="content__input">
          <label>
            <span>ФИО</span>
            <input type="text" class="content__input-fio" name="fio" >
          </label>
        </div>
        <div class="content__input">
          <label>
            <span>Почта</span>
            <input type="email" class="content__input-email"  name="email"required>
          </label>
        </div>
        <div class="content__input">
          <label>
            <span>Телефон</span>
            <input type="text" class="content__input-tel" name="tel" required >
          </label>
        </div>
        <div class="content__input content__input-btn">
          <input type="submit" value="ОТПРАВИТЬ">
        </div>  
        <div class="reviews">
          <h2>Спасибо.</h2>
          <h3>Мы с Вами свяжемся в самое ближайшее время!</h3>
          <input type="submit" value="">
        </div>
      
      </form>
    </div>
</div>
  
  <script src="js/app.js"></script>
</body>
</html>  
