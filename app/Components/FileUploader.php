<?php

namespace App\Components;

class FileUploader
{
    public static function to($image){

        $extension = pathinfo($image['name'], PATHINFO_EXTENSION);
        $filename = uniqid() . '.'. $extension;

        $tmp_name = $image['tmp_name'];

        move_uploaded_file($tmp_name, 'upload/' . $filename);

        return '/upload/' .$filename;
    }

    public static function remove($url){

        if($url[0]==='/'){

            unlink(substr($url, 1));
        }
        else
            unlink($url);
    }
}