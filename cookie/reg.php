<?php
function reg($value){
    if($_POST){
        if($_POST[$value]){
            setcookie($value,$_POST[$value],time()+1000);
        }
        else echo "empty";
    }
}
function checkAll($value1,$value2,$value3,$value4,$value5,$value6){
    if($_POST and $_FILES) {
        if ($_POST[$value1] and $_POST[$value2] and $_POST[$value3] and $_POST[$value4] and $_POST[$value5] and !empty($_FILES[$value6])) {
           header("Location: persanalPage.php");
        }
    }
}
function checkFile ($value){
    if($_FILES){
        if($_FILES[$value]["size"]!=0){
            $fileDir = $_FILES[$value]["tmp_name"];
            $fileName = $_FILES[$value]["name"];
            if(!file_exists("img")): mkdir("img");endif;
            move_uploaded_file($fileDir,"img/photo.jpg");
        }else echo "empty";
    }
}

