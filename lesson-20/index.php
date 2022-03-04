<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MVC Lesson 20</title>
  <link rel="stylesheet" href="chief-slider.css">
  <link rel="stylesheet" href="style.css">
  <style>
    *,
    *::before,
    *::after {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }
    body {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto,
        'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji',
        'Segoe UI Symbol';
    }
    .container {
      max-width: 700px;
      margin: 0 auto;
    }
    .slider__container {
      padding-left: 0;
      padding-right: 0;
    }

    .slider__items {
      counter-reset: slide;
    }

    .slider__item {
      -webkit-box-flex: 0;
      -ms-flex: 0 0 100%;
      flex: 0 0 100%;
      max-width: 100%;
      counter-increment: slide;
      height: 250px;
      position: relative;
    }
    .slider__item::before {
      content: counter(slide) "/5";
      position: absolute;
      top: 10px;
      right: 20px;
      color: #fff;
      font-style: italic;
      font-size: 32px;
      font-weight: bold;
      display: block;
    }
    .slider__item:nth-child(1) {
      background-color: #f44336;
    }
    .slider__item:nth-child(2) {
      background-color: #9c27b0;
    }
    .slider__item:nth-child(3) {
      background-color: #3f51b5;
    }
    .slider__item:nth-child(4) {
      background-color: #03a9f4;
    }
    .slider__item:nth-child(5) {
      background-color: #4caf50;
    }
  </style>
  <script defer src="chief-slider.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const slider = new ChiefSlider('.slider', {
        loop: false
      });
    });
  </script>
</head>
<body>
  <div class="container">
    <div class="slider">
      <div class="slider__container">
        <div class="slider__wrapper">
          <div class="slider__items">
            <div class="slider__item">
              <!-- Контент 1 слайда -->
            </div>
            <div class="slider__item">
              <!-- Контент 2 слайда -->
            </div>
            <div class="slider__item">
              <!-- Контент 3 слайда -->
            </div>
            <div class="slider__item">
              <!-- Контент 4 слайда -->
            </div>
            <div class="slider__item">
              <!-- Контент 5 слайда -->
            </div>
          </div>
        </div>
      </div>
      <a href="#" class="slider__control" data-slide="prev"></a>
      <a href="#" class="slider__control" data-slide="next"></a>
    </div>
  </div>
  <div class="wrapper-log">
      <form method="post">
          <p style="font-size:24px"><b>Форма</b></p>
          <input type="textarea" name="info" placeholder="Введите информацию"><br>
<!--          <input type="password" name="password" placeholder="Укажите пароль"><br><br>-->
          <input type="submit" value="Добавить">
      </form>
  </div>
</body>
</html>
