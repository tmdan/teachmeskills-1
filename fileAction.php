<?php

require "vendor\autoload.php";

use App\Components\FileUploader;

FileUploader::to($_FILES['image']);