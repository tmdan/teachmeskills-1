<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<aside class="widget border">
    <h3 class="widget-title text-uppercase text-center">Погода</h3>
    <div class="media">
        <img class="media-object pull-left" src="{{\App\Facade\WeatherFacade::temperature()->getIcon()}}" alt="...">
        <div class="media-body">
            <h4 class="media-heading text-uppercase">{{\App\Facade\WeatherFacade::coordinates()->getCityName()}}</h4>
            <p>Широта: {{\App\Facade\WeatherFacade::coordinates()->getLat()}} Долгота: {{\App\Facade\WeatherFacade::coordinates()->getLon()}}</p>
            <h5 class="text-uppercase text-justify" >{{\App\Facade\WeatherFacade::temperature()->getDescription()}} {{\App\Facade\WeatherFacade::temperature()->getCurrentTemperature()}}&degC</h5>
            <h6 class="text-uppercase text-justify" >Ощущается как {{\App\Facade\WeatherFacade::temperature()->getFeelsLikeTemperature()}}&degC</h6>
        </div>
    </div>
    <ul>
        <li>
            <span class="pull-right"> <strong>{{\App\Facade\WeatherFacade::temperature()->getMaxTemperature()}}&degC</strong></span>
            <strong class="text-info">Макс. темп. воздуха</strong>
        </li>
        <li>
            <span class="pull-right"> <strong>{{\App\Facade\WeatherFacade::temperature()->getMinTemperature()}}&degC</strong></span>
            <strong class="text-info">Мин. темп. воздуха</strong>
        </li>
        <li>
            <span class="pull-right"> <strong>{{\App\Facade\WeatherFacade::time()->getSunriseTime()}}</strong></span>
            <strong class="text-info">Рассвет</strong>
        </li>
        <li>
            <span class="pull-right"> <strong>{{\App\Facade\WeatherFacade::time()->getSunsetTime()}}</strong></span>
            <strong class="text-info">Закат</strong>
        </li>
        <li>
            <span class="pull-right"> <strong>{{\App\Facade\WeatherFacade::temperature()->getHumidity()}}%</strong></span>
            <strong class="text-info">Влажность воздуха</strong>
        </li>
        <li>
            <span class="pull-right"> <strong>{{\App\Facade\WeatherFacade::temperature()->getPressure()}} мм рт. ст.</strong></span>
            <strong class="text-info">Атмосферное давление</strong>
        </li>
    </ul>
</aside>
</body>
</html>
