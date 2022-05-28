
<div class="container-fluid" style="background-color: #E0E0E0">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card p-4">

                <div class="d-flex">
                    <h4 class="flex-grow-1">{{$weather->coordinates()->getCityName()}}</h4>
                    <h6>Время последнего обновления: {{$weather->date()->getCurrentDate()}}</h6>
                </div>

                <div class="d-flex flex-column temp mt-5 mb-3">
                    <h1 class="mb-0 font-weight-bold" id="heading"> {{$weather->temperature()->getCurrentTemperature()}}&deg;C </h1>
                    "по ащущэнням"<p class='font-weight-bold'> {{$weather->temperature()->getFeelsLikeTemperature()}}&deg;C </p>
                    <div>
                        <img src="{{'http://openweathermap.org/img/wn/'.$weather->cloudiness()->getIcon().'.png'}}" >
                    </div>
                    <span class="">{{$weather->cloudiness()->getDescription()}}</span>
                </div>

                <div class="">
                    <div class=" flex-grow-1">
                        <p class="">
                            <img src="https://i.imgur.com/B9kqOzp.png" height="30px" >

                            <span>{{$weather->temperature()->getWindSpeed()}} м/с</span>
                        </p>

                        <p class="my-1">
                            <i class="fa fa-tint mr-2" aria-hidden="true"></i>
                            Влажность:
                            <span>{{$weather->temperature()->getHumidity()}}% </span>
                        </p>
                        <p class="my-1">
                            <i class=""></i>
                            Давление:
                            <span>{{$weather->temperature()->getPressure()}} hPa </span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>


</div>
