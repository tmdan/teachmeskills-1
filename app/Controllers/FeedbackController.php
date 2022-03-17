<?php

namespace App\Controllers;

use App\Models\Feedback;

class FeedbackController
{
    public function store()
    {
        $errors = [];

        if(isset($_POST['save_review'])){

            if ( !Feedback::checkFirstnameAndLastname($_POST['firstname']) ){
                $errors[] = "Имя пользователя введено некорректно";
            }

            if ( !Feedback::checkFirstnameAndLastname($_POST['lastname']) ){
                $errors[] = "Фамилия пользователя введена некорректно";
            }

            if (!Feedback::checkEmail($_POST['email'])){
                $errors[] = "Электронная почта введена некорректно";
            }

            if (!Feedback::checkPhoneNumber($_POST['phone'])){
                $errors[] = "Номер телефона введен некорректно";
            }

            if (empty($errors)){
                Feedback::create($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['phone'],$_POST['comment']);
                header("location:" . SITE_URL . '/feedback/list');
            }


        }
       // else{
            require VIEW_ROOT . "feedback/review.php";
      //  }
    }

    public function index()
    {
        $feedbacksList = Feedback::all();

        require VIEW_ROOT . "feedback/list.php";

    }
}