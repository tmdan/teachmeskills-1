<?php
namespace App\Components;
class FileUploader{
    public static function to($url){
        $uploads_dir = '/uploads';
        $tmp_name = $url["tmp_name"];
        $name = basename($url["name"]);
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
    }
    public static function remove($url){
        unlink($url);
    }
}