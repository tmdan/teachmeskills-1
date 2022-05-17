<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/weather.css">
</head>
<body>
<div class="weather-wrapper">
    <div class="weather-main">
        <div class="weather-main-image">
            <img src="{{asset("storage/weather-icons/". $weatherService->generalInformation()->getIcon().'.png')}}"
                 alt="weather-icon">
        </div>
        <div class="weather-main-info">
            <h1>{{$weatherService->generalInformation()->getNameCity()}}</h1>
            <p>{{$weatherService->generalInformation()->getDescription()}}</p>
        </div>
    </div>
    <div class="weather-date">
        <p>температура {{$weatherService->temperatures()->getTemperature()}} °C, ощущается
            как {{$weatherService->temperatures()->getFeelsLikeTemperature()}} °C</p>
        <p>давление {{$weatherService->pressure()->getPressure()}},
            влажность {{$weatherService->pressure()->getHumidity()}} %</p>

    </div>
</div>

</body>
</html>
