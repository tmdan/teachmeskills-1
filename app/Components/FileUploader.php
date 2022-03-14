<?php

namespace App\Components;

class FileUploader
{
    static function to($url)
    {
        $tmp_name = $_FILES['image']['tmp_name'];
        $img_name = $url . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        move_uploaded_file($tmp_name, $img_name);
    }

    static function remove($url)
    {
        unlink($url);
    }
}

\App\Components\FileUploader::to("uploads/avatar");
\App\Components\FileUploader::remove("uploads/avatar");
