<?php

  class FileUploader{
    function uploadFile($to_save){
      $tmp_name = $_FILES['image']['tmp_name'];
      $img_name = $to_save.'.'.pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
      move_uploaded_file($tmp_name,$img_name);
    }
    function deleteFile($from_remove){
      unlink($from_remove);
    }
  }

  $fileuploader = new FileUploader();
  $fileuploader->uploadFile('uploads/img_1');
  $fileuploader->deleteFile('uploads/img_1.jpg');
