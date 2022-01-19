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
//- Получить количество просмотров - для каждого видео генериться рандомно от 1 до 10000 просмотров прямо в сеттере установите рандом
//- Установить имя видео
class Channel{
    private string $name;
    private $video;
    private array $videos=[];
    private int $generalViews=0;
    private int $generalIncome=0;
    private array $mostPopularVideo=[];
    private array $mostIncomeVideo=[];
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function addVideo($video){
        $this->video=$video;
        array_push($this->videos,$video);
        array_push($this->mostPopularVideo,$video->getAmountOfViews());
        array_push($this->mostIncomeVideo,$video->getAmountOfViews()*$video->getIncomeForOneVideo());
    }
    public function generalViews(){
        foreach ($this->videos as $index)
            $this->generalViews+=$index->getAmountOfViews();
    }
    public function getGeneralViews(){
        return $this->generalViews;
    }
    public function generalIncome(){
        foreach ($this->videos as $index)
            $this->generalIncome+=$index->getIncomeForOneVideo()*$index->getAmountOfViews();
    }
    public function getGeneralIncome(){
        return $this->generalIncome;
    }
    public function show(){
        echo "channel: ".$this->name."<br>";
        foreach ($this->videos as $index){
            var_dump($index);
            echo "<br>";
        }
        echo "general views: ".$this->getGeneralViews()."<br>";
        echo "general income: ".$this->getGeneralIncome()."<br>";
        echo "the most popular video: ";
        var_dump($this->theMostPopularVideo());
        echo "<br> the most income video: ";
        var_dump($this->theMostIncomeVideo());

    }
    public function theMostPopularVideo(){
        for($a=0;$a<count($this->videos)-1;$a++){

            for($i=0;$i<count($this->mostIncomeVideo)-1;$i++){
                $elem1=$this->mostPopularVideo[$i];
                $elem2=$this->mostPopularVideo[$i+1];
                if($elem1<$elem2){
                    $this->mostPopularVideo[$i]=$elem2;
                    $this->mostPopularVideo[$i+1]=$elem1;
                }
            }
        }
        return $this->checkTheMostPopularVideo();
    }
    private function checkTheMostPopularVideo(){
        for($a=0;$a<count($this->videos);$a++){
            if($this->videos[$a]->getAmountOfViews()===$this->mostPopularVideo[0]){
                return $this->videos[$a];
            }
        }
    }
    public function theMostIncomeVideo(){
        for($a=0;$a<count($this->videos)-1;$a++){

            for($i=0;$i<count($this->mostIncomeVideo)-1;$i++){
                $elem1=$this->mostIncomeVideo[$i];
                $elem2=$this->mostIncomeVideo[$i+1];
                if($elem1<$elem2){
                    $this->mostIncomeVideo[$i]=$elem2;
                    $this->mostIncomeVideo[$i+1]=$elem1;
                }
            }
        }
        return $this->checkTheMostIncomeVideo();
    }
    private function checkTheMostIncomeVideo(){
        for($a=0;$a<count($this->videos);$a++){
            if($this->videos[$a]->getIncomeForOneVideo()*$this->videos[$a]->getAmountOfViews()===$this->mostIncomeVideo[0]){
                return $this->videos[$a];
            }
        }
    }

}
class Video{
    private string $name;
    private int $amountOfViews;
    private int $incomeForOne;
    public function __construct($name)
    {
        $this->name=$name;
        $this->amountOfViews=rand(1,10000);
        $this->incomeForOne=rand(1,3);
    }
    public function show(){
        echo "video: ".$this->name." ,amount of income for a video: ".$this->getIncomeForOneVideo()."$<br>";
    }
    public function getAmountOfViews(){
        return $this->amountOfViews;
    }
    public function getIncomeForOneVideo(){
        return $this->incomeForOne;
    }
}
$video_1 = new Video("My little pony");
$video_2 = new Video("Me and you");
$channel = new Channel("Prushak");
$channel->addVideo($video_1);
$channel->addVideo($video_2);
$video_1->show();
$video_2->show();
$channel->generalViews();
$channel->generalIncome();
$channel->theMostIncomeVideo();
$channel->theMostPopularVideo();
$channel->show();