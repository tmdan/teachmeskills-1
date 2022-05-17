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
{{--        <img class="media-object pull-left" src="{{$weather->temperature()->getIcon()}}" alt="...">--}}
        <div class="media-body">
            <h4 class="media-heading text-uppercase">{{$weather->coordinates()->getCityName()}}</h4>
            <p>Широта: {{$weather->coordinates()->getLat()}} Долгота: {{$weather->coordinates()->getLon()}}</p>
{{--            <h5 class="text-uppercase text-justify" >{{$weather->temperature()->getDescription()}} {{$weather->temperature()->getCurrentTemperature()}}&degC</h5>--}}
            <h6 class="text-uppercase text-justify" >Ощущается как {{$weather->temperature()->getFeelsLikeTemperature()}}&degC</h6>
        </div>
    </div>
    <ul>
        <li>
            <span class="pull-right"> <strong>{{$weather->temperature()->getMaxTemperature()}}&degC</strong></span>
            <strong class="text-info">Макс. темп. воздуха</strong>
        </li>
        <li>
            <span class="pull-right"> <strong>{{$weather->temperature()->getMinTemperature()}}&degC</strong></span>
            <strong class="text-info">Мин. темп. воздуха</strong>
        </li>
{{--        <li>--}}
{{--            <span class="pull-right"> <strong>{{$weather->time()->getSunriseTime()}}</strong></span>--}}
{{--            <strong class="text-info">Рассвет</strong>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <span class="pull-right"> <strong>{{$weather->time()->getSunsetTime()}}</strong></span>--}}
{{--            <strong class="text-info">Закат</strong>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <span class="pull-right"> <strong>{{$weather->temperature()->getHumidity()}}%</strong></span>--}}
{{--            <strong class="text-info">Влажность воздуха</strong>--}}
{{--        </li>--}}
{{--        <li>--}}
{{--            <span class="pull-right"> <strong>{{$weather->temperature()->getPressure()}} мм рт. ст.</strong></span>--}}
{{--            <strong class="text-info">Атмосферное давление</strong>--}}
{{--        </li>--}}
    </ul>
</aside>
</body>
</html>