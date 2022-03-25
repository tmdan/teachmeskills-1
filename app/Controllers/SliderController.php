<?php

namespace App\Controllers;

use App\Components\FileUploader;
use App\Models\Slider;

class SliderController
{
    // загружает изображения в папку uploads и внесения данных слайдера в таблицу sliders
    public static function store(){

        if (isset($_POST['submit'])){

            $filename = FileUploader::to($_FILES['image']);

            Slider::addSlider($filename);
        }

        $slidersList = Slider::all();

        require VIEW_ROOT . "slider/slider.php";
    }

    // удаляет элемент слайдера по id из таблицы бд sliders;
    public static function destroy($id){
        $slider = Slider::getById($id);

        if(!empty($slider)){
            try {

                FileUploader::remove($slider->url);
                Slider::deleteById($slider->id);

                echo "Слайдер с id " . $slider->id . " успешно удален!";

                header("location:" . SITE_URL . '/sliders/');
            }
            catch (Exception $e){
                echo 'Ошибка: ',  $e->getMessage(), "\n";
            }
        }


    }

}