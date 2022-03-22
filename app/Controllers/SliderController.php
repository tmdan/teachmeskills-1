<?php

namespace App\Controllers;

use App\Models\Sliders;

class SliderController
{
    public static function store()
    {

        if (isset($_POST['submit'])) {

            $filename = FileUploader::to($_FILES['image']);

            Sliders::addSlider($filename);
        }

        $slidersList = Sliders::all();

        require VIEW_ROOT . "sliders/index.php";

    }

    public static function destroy($id)
    {
        $slider = Sliders::getById($id);

        if (!empty($slider)) {
            try {

                FileUploader::remove($slider->url);
                Sliders::deleteById($slider->id);

                echo "Слайдер с id " . $slider->id . " успешно удален!";

                header("location:" . SITE_URL . '/sliders/');
            } catch (Exception $e) {
                echo 'Ошибка: ', $e->getMessage(), "\n";
            }
        }
    }
}