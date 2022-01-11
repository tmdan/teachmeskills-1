<?php
/* Создать объект Channel (канал на Youtube)
Приватные свойства:
- channel (string) - название канала
- videos (массив из объектов Video)

Публичные методы:
- Получить название канала
- Получить список видео
- Получить общее количество просмотров на канале
- Получить общий доход от канала
- Получить самое популярное видео на канале
- Получить самое доходное видео на канале


Создать объект Video
Приватные свойства:
- name (string) - название видео
- views (int) - количество просмотров (генериться рандомно от 1 до 200 000)
- salery - доход от 1 просмотра в долларах (генериться рандомно от 1 до 3 долларов)

Публичные методы:
- Получить количество просмотров - для каждого видео генериться рандомно от 1 до 10000 просмотров
прямо в сеттере установите рандом
- Установить имя видео
 */

class Channel{
    private $channel;
    private $videos = [];

    public function __construct($name, $videos){
        $this->channel = $name;
        $this->videos = $videos;
    }

    public function getChannel() {
        return $this->channel;
    }

    public function getVideos(){
        foreach ($this->videos as $video)
           echo $video->getName() . "<br>";

    }

    public function getQuantityViews(){
        $sum = 0;
        foreach ($this->videos as $video){
            $sum += $video->getViews();
        }
        return $sum;
    }

    public function getTotalIncome(){
        $sum = 0;
        foreach ($this->videos as $video){
            $sum += $video->getViews()*$video->getSalery();
        }
        return $sum;
    }

    public function getPopularVideo(){
        $maxQuantityViews = 0;
        $popularVideo = null;
        foreach ($this->videos as $video){
            if ($maxQuantityViews<$video->getViews()){
                $maxQuantityViews = $video->getViews();
                $popularVideo = $video->getName();
            }
        }
        return $popularVideo;
    }

    public function getMaxSalery(){
        $maxSalery = 0;
        $saleryVideo = null;
        foreach ($this->videos as $video){
            if($maxSalery < $video->getViews()*$video->getSalery()){
                $maxSalery = $video->getViews()*$video->getSalery();
                $saleryVideo = $video->getName();
            }

        }
        return $saleryVideo;
    }
}

class Video{
    private $name;
    private $views;
    private $salery; //от 1 до 3 баксов за 1 просмотр

    public function __construct($name){
        $this->name = $name;
        $this->setSalery();
        $this->setViews();
    }

    public function setViews(){
        $this->views = rand(1, 10000);
    }

    public function setSalery(){
        $this->salery = rand(1,3);
    }

    public function getName(){
        return $this->name;
    }

    public function getViews(){
        return $this->views;
    }

    public function getSalery(){
        return $this->salery;
    }
}

$arr_videos = [
    new Video('Охота и рыбалка'),
    new Video('Тимон и Пумба'),
    new Video('Санта-Барбара'),
    new Video('Лига чемпионов')];

echo "Видео на канале";
echo '<pre>' . var_export($arr_videos, true) . '</pre>';

$Channel1 = new Channel('World' , $arr_videos);

echo "Название канала " . $Channel1->getChannel() . "<br>";
echo "Список видео на канале " . $Channel1->getChannel() . ":<br>";
echo $Channel1->getVideos() . "<br>";
echo "Общее количество просмотров на канале: " . $Channel1->getQuantityViews() . "<br>";
echo "Общий доход от количества просмотров: " . $Channel1->getTotalIncome(). "<br>";
echo "Самое популярное видео: " . $Channel1->getPopularVideo() . "<br>";
echo 'Самое доходное видео: ' . $Channel1->getMaxSalery() . "<br>";