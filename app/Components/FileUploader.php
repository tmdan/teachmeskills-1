<?php

namespace App\Components;

class FileUploader
{
    public static function to($image, $uri)
    {

        $extension= pathinfo($image['image']['name'], PATHINFO_EXTENSION);
        $fname=$image['image']['tmp_name'];
        $newFileName = uniqid() . '.'. $extension;
        if(!file_exists($uri)){
            mkdir($uri, 0777,true);
            echo 'пришлось создать папку';
        }

        if(move_uploaded_file($fname, $uri.'/'.$newFileName)){
            echo 'файл успешно сохранён на сервере';
        } else echo 'что-то пошло не так';
    }

    public static function remove($url)
    {
        if(unlink($url)){
            echo 'файл успешно удалён';
        } echo 'файл не найден';
    }
}