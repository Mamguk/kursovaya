<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="main/img/logotype.svg">
  <link rel="stylesheet" href="main/diagnostica.css">
  <link rel="stylesheet" href="test.css">

  <title>Диагностика</title>
</head>
<body>
<header>
    <div class="shapka">
     <div class="menu">
      <a href="index.html"><img class="logotype" src="main/img/logotype.svg"></a>
        <ul class="list">
          <li><a href="index.html #techob"><b>Услуги</b></a></li>
          <li><a href="diagnostica.php"><b>Диагностика</b></a></li>
          <li><a href="index.html #photo"><b>Фотогалерея</b></a></li>
          <li><a href="kuzov.php"><b>Кузовной ремонт</b></a></li>
          <li><a href="index.html #komp"><b>О компании</b></a></li>
        </ul>
          <div class="contacts">
            <div class="contacts-vk">
            <a href="https://vk.com/mamguk"><img src="main/img/vk.svg"></a>
           </div>
            <div class="contacts-phone">
              <a href="tel:+79300667048">+7 919 499-43-29</a><br>
              <span>Телефон для консультации</span>
            </div>
          </div>
     </div> 
   </div>
 </header>
<!--Главная-->
<div class="main section">
  <div class="content">
      <div class="main__wrapper _obs">
        <h1>Диагностика авто в&nbsp;Автосервисе <span>MAMGUK</span> в Пыскоре</h1>
          <ul>
            <li>Осмотр авто по 40 пунктам</li>
            <li>Компьютерная диагностика</li>
            <li>Современное оборудование</li>
            <li>Наш сервис имеет удобное местоположение</li>
          </ul>
        
      </div>
  </div>
</div>

<!--Услуги-->
<section>
  <div id="techob" class="uslugi">
    <img class="bg" src="main/img/backg.jpg">
    <div class="uslugi1">
      <h2>Выполняем все виды диагностики авто</h2>
    </div>
    <div class="karts">
      <a class="carta" data-bs-toggle="modal" data-bs-target="#exampleModal" data-label="Диагностика двигателя" onclick="sendLabel(this.getAttribute('data-label'))">
        <div class="carta-img">
          <img src="main/img/diagnos/item1.png" alt="Диагностика двигателя">
        </div>
        <p class="services__caption">Диагностика двигателя</p>
      </a>
      <a class="carta" data-bs-toggle="modal" data-bs-target="#exampleModal" data-label="Диагностика тормозной системы" onclick="sendLabel(this.getAttribute('data-label'))">
        <div class="carta-img">
          <img src="main/img/diagnos/item2.png" alt="Диагностика тормозной системы">
        </div>
        <p class="services__caption">Диагностика тормозной системы</p>
      </a>
      <a class="carta" data-bs-toggle="modal" data-bs-target="#exampleModal" data-label="Диагностика и ремонт генератора" onclick="sendLabel(this.getAttribute('data-label'))">
        <div class="carta-img">
          <img src="main/img/diagnos/item3.png" alt="Диагностика и ремонт генератора" >
      </div>
      <div class="services__caption">Диагностика и ремонт генератора</div>
      </a>
      <a class="carta" data-bs-toggle="modal" data-bs-target="#exampleModal" data-label="Диагностика КПП" onclick="sendLabel(this.getAttribute('data-label'))">
        <div class="carta-img">
          <img src="main/img/diagnos/item4.png" alt="Диагностика КПП">
      </div>
      <div class="services__caption">Диагностика КПП</div>
      </a>
      <a class="carta" data-bs-toggle="modal" data-bs-target="#exampleModal" data-label="Диагностика выхлопной системы" onclick="sendLabel(this.getAttribute('data-label'))">
        <div class="carta-img">
          <img src="main/img/diagnos/item5.png" alt="Диагностика выхлопной системы">
      </div>
      <div class="services__caption">Диагностика выхлопной системы</div>
      </a>
      <a class="carta" data-bs-toggle="modal" data-bs-target="#exampleModal" data-label="Диагностика топливной системы" onclick="sendLabel(this.getAttribute('data-label'))">
        <div class="carta-img">
          <img src="main/img/diagnos/item6.png" alt="Диагностика топливной системы">
      </div>
      <div class="services__caption">Диагностика топливной системы</div>
      </a>

     <!-- Modal -->
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header-">
        
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body">
        <form class="send-form" method="POST"  action="vendor/mail.php">
        <label class="modal-title h2" for="inputField" id="outputLabel" name="nazv"></label>
          <div class="form__wrapper">
              <div class="form__block-half">
                  <label >
                      <span>Марка авто:</span>
                      <input type="text"  name="marka" class="input js-brand" autocomplete="off" maxlength="50" required  placeholder="Марка авто">
                  </label>
              </div>
              <div class="form__block-half">
                  <label >
                      <span>Модель авто:</span>
                      <input type="text" name="model" class="input js-model" autocomplete="off" maxlength="50" required  placeholder="Модель авто">
                  </label>
              </div>
              <div class="form__block-half">
                  <label >
                      <span>Комментарий (не обязательно):</span>
                      <input type="text" name="text" class="input" autocomplete="off"  maxlength="50"  placeholder="Комментарий ">
                  </label>
              </div>
              <div class="form__block-half">
                  <label >
                      <span>Ваш телефон*:</span>
                      <input type="tel" pattern="[78][0-9]{10}"  name="phone" class="input" autocomplete="off"  maxlength="11" required placeholder="7 (___) ___-____" title="Неверно введен номер телефона. Пожалуйста, введите номер, начинающийся с 7 или 8 и состоящий из 11 цифр.">
                  </label>
              </div>
              <div class="form__block-wide center">
                  <button class="button" type="submit">Оставить заявку</button>
                  <br><br>
                  <p>Оперативно перезваниваем в рабочее время</p>
              </div>
          </div>
          <div class="form__politic">
              Нажимая на кнопку, вы соглашаетесь с политикой конфиденциальности
          </div>
          <div class="form__security">
              <i></i>
              <p>Гарантируем сохранность персональных данных</p>
          </div>
            <input type="hidden" id="nazv" name="nazv" value="">
                                 
                                 <?php 
                        if (isset($_SESSION['error'])) {
                            echo '<p class="form__error"> ' . $_SESSION['error'] . ' </p>';
                            unset($_SESSION['error']);
                        }

                        if (isset($_SESSION['message'])) {
                            echo '<p class="form__message"> ' . $_SESSION['message'] . ' </p>';
                            unset($_SESSION['message']);
                        }
                    ?>
      </form>


      </div>
    </div>
  </div>
</div>



    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<!-- JS к секции Услуги -->
<script>
  window.onload = function() {
      var links = document.querySelectorAll('a');

      links.forEach(function(link) {
          link.addEventListener('click', function(event) {
              

              var label = link.getAttribute('data-label');
              document.getElementById('outputLabel').innerHTML = label;
          });
      });
  };
  function sendLabel(label) {
  document.getElementById('nazv').value = label;
}
</script>
</section>
<!-- Подвал -->
<footer class="main_footer1">
  <div class="container1">
      <div class="footer_content1">
          <div class="row1">
              <div class="col-md-41 col-sm-121">
                  <div class="footer_about1">
                      <div class="footer_logo1">
                          <img src="main/img/logotype.svg" alt="Автосервис" class="logo_light">
                      </div>
                      <div class="footer_description1">Наша компания предоставляет все виды услуг по обслуживанию
                          Вашего автомобиля, включая диагностику, ремонт, а также шиномонтаж и
                          мойку.
                      </div>
                      <div class="header__social1 _footer1">
                      </div>
                  </div>
              </div>
              <div class="col-md-41 col-sm-41">
                  <div class="footer_block1">
                      <h2 class="title1">Разделы</h2>
                      <ul class="footer_menu_list1">
                          <li class="menu-item"><a href="index.html #techob">&#128504;  Услуги</a></li>
                          <li class="menu-item"><a href="diagnostica.php">&#128504;  Диагностика</a></li>
                          <li class="menu-item"><a href="index.html #photo">&#128504;  Фотогалерея</a></li>
                          <li class="menu-item"><a href="kuzov.php">&#128504;  Кузовной ремонт</a></li>
                          <li class="menu-item"><a href="index.html #komp">&#128504;  О компании</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-41 col-sm-41">
                  <div class="footer_block1">
                      <h2 class="title1">Контакты</h2>

                      <ul class="footer_contacts1">
                          <li class="phone1"><a href="tel:89194994329" class="zphone1">&#9742;   8 (919) 499-43-29</a></li>
                          <li class="address1">	&#128205;   Пыскор, ул.Гагарина,&nbsp;
                              д.6
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer_meta1">
          <div class="copy1">MAMGUK © , 2024. Договор оферты</div>
          <div class="copy1">Информация на сайте не является публичной офертой</div>
      </div>
  </div>
</footer>
</body>
</html>