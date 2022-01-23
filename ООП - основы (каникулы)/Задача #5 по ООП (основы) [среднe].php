<?php
//Создать объект Channel (канал на Youtube)
//
//PS >подсказка во вложенном файле
//
//Приватные свойства:
//- channel (string) - наименование канала
//- videos (массив из объектов Video)
//
//Публичные методы:
//- Получить название канала
//- Получить список видео
//- Получить общее количество просмотров на канале
//- Получить общий доход от канала
//- Получить самое популярное видео на канале
//- Получить самое доходное видео на канале
//
//Создать объект Video
//
//Приватные свойства:
//- name (string) - название видео
//- views (int) - количество просмотров (генериться рандомно от 1 до 200 000)
//- salery - доход от 1 просмотра в долларах (генериться рандомно от 1 до 3 долларов)
//
//Публичные методы:
//- Получить количество просмотров - для каждого видео генериться рандомно от 1 до 10000
// просмотров прямо в сеттере установите рандом
//- Установить имя видео
class Channel
{
    private string $channel;
    private array $videos=[];
    private int $generalAmountOfViews=0;
    private int $generalAmountOfIncome=0;
    private array $incomeVideo=[]; // массив для хранения дохода за каждое видео
    private array $viewsVideo=[];  // массив для хранения количество просмотро за каждое видео
    private array $theMostPopularVideo=[]; //массив для хранения 1-го самого популярного видео
    private array $theMostIncomeVideo=[];  //массив для хранения 1-го самого доходного видео
    public function __construct($channel)
    {
        $this->channel=$channel;
    }
    public function getChannel(){
        return $this->channel;
    }
    public function addVideo($video){
        array_push($this->videos,$video);
        $this->incomeVideo[]=$video->getIncomeForViews();
        $this->viewsVideo[]=$video->getViews();
    }
    public function showListOfVidios(){
        foreach ($this->videos as $video){
            var_dump($video); echo "<br>";
        }
    }
    private function setGeneralAmountOfViews(){ // общее количество просмотров
        foreach ($this->videos as $video){
            $this->generalAmountOfViews+=$video->getViews();
        }
    }
    public function getGeneralAmountOfViews(){
        $this->setGeneralAmountOfViews(); //вызываю здесь так как более удачного места не вижу
        return $this->generalAmountOfViews;
    }
    private function setGeneralAmountOfIncome(){
        foreach ($this->videos as $video){
            $this->generalAmountOfIncome+=$video->getIncomeForViews();
        }
    }
    public function getGeneralAmountOfIncome(){
        $this->setGeneralAmountOfIncome(); //вызываю здесь так как более удачного места не вижу
        return  $this->generalAmountOfIncome;
    }
    private function sortVideos(){ //сортировка
        sort($this->viewsVideo);
        sort($this->incomeVideo);
    }
    private function setTheMostVideo(){ //установка самого популярного и доходного видео
        $this->sortVideos();
        for ($i=0;$i<count($this->videos);$i++){
            if($this->videos[$i]->getIncomeForViews() === $this->incomeVideo[count($this->incomeVideo)-1]){
                $this->theMostIncomeVideo[]=$this->videos[$i];
            }
            if($this->videos[$i]->getViews() === $this->viewsVideo[count($this->viewsVideo)-1]){
                $this->theMostPopularVideo[]=$this->videos[$i];
            }
        }
    }
    public function showTheMostVideo(){
        $this->setTheMostVideo();
        echo "The most Popular video: ";
        var_dump($this->theMostPopularVideo);
        echo "<br>";
        echo "The most Income video: ";
        var_dump($this->theMostIncomeVideo);
        echo "<br>";
    }

}
class Video{
    private string $name;
    private int $views;
    private int $incomeForViews;
    public function __construct($name)
    {
        $this->name=$name;
        $this->setViews();
        $this->setIncomeForViews();
    }
    private function setViews(){
        $this->views=rand(1,10000);
    }
    private function setIncomeForViews(){
        $this->incomeForViews = rand(1,3)*$this->views;
    }
    public function getViews(){
        return $this->views;
    }
    public function getIncomeForViews(){
        return $this->incomeForViews;
    }
    public function getName(){
        return $this->name;
    }
}
$channel = new Channel("TheKing");
echo "Channel: ".$channel->getChannel()."<br>";// лень было создавать метод show (думаю не ошибка)
echo "Channel have videos: ".$channel->getChannel()."<br>";// лень было создавать метод show (думаю не ошибка)
$video_1 = new Video("I'm a KING");
$video_2 = new Video("My little pony");
$video_3 = new Video("Ilya know PhP");
$channel->addVideo($video_1);
$channel->addVideo($video_2);
$channel->addVideo($video_3);
$channel->showListOfVidios();
echo "General views: ".$channel->getGeneralAmountOfViews(); // лень было создавать метод show (думаю не ошибка)
echo "<br>";
echo "General income: ".$channel->getGeneralAmountOfIncome();// лень было создавать метод show (думаю не ошибка)
echo "<br>";
$channel->showTheMostVideo();
