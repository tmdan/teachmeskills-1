<?php

namespace App\Components;

class FileUploader
{
    static function to($image)
    {
        $tmp_name = $_FILES['image']['tmp_name'];
        $img_name = uniqid() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        move_uploaded_file($tmp_name, "upload/" . $img_name);
        return "/upload/" . $img_name;
    }

    static function remove($url)
    {
        unlink($url);
    }
}
\App\Components\FileUploader::to("image");
//\App\Components\FileUploader::remove("uploads/avatar");
