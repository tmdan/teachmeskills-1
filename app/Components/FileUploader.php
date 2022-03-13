<?php

namespace App\Components;

class FileUploader
{
    public static function to($url){
        $uploads_dir = '../../uploads';
        if (!file_exists("$uploads_dir")){
            mkdir("$uploads_dir");
        }
        $tmp_name = $url["tmp_name"];
        $file_name = basename($url["name"]);
        move_uploaded_file($tmp_name, "$uploads_dir/$file_name");
    }
    public static function remove($url){
        unlink($url);
    }
}

//FileUploader::to($_FILES["file"]);
//FileUploader::remove();


