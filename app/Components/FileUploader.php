<?php
namespace App\Components;

class FileUploader
{
    static function to($name, $url)
    {
        $extention = pathinfo($name['name'], PATHINFO_EXTENSION);
        $failname = uniqid() . '.' . $extention;

        move_uploaded_file($name['tmp_name'], $url . $failname);
    }
    static function remove($url)
    {
        unlink($url);
    }
}
FileUploader::to($_FILES['image'],'../../uploads/');
