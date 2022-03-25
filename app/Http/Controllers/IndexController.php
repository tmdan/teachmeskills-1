<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $news = [
        'New 1',
        'New 2',
        'New 3',
        'New 4',
        'New 5'
    ];
    //
    public function index(){

        echo '<a href="'.route('news.create').'">Добавить новость</a><br>';

        foreach ($this->news as $key=>$elem){
            $key++;
            echo $elem  . "<a href='" . route('news.edit', ['id' => $key]). "'> Ред.</a>" . "<br>";
        }
    }

    public function create(){
        return '<h1> Форма добавления новости </h1><br><a href="' . route('news.index'). '">К новостям</a> ';
    }

    public function edit($id){
        return 'Редактировать новость №' . $id;
    }
}
