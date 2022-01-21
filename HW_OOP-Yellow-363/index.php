<?php
    class Channel {
        private string $channel;
        private $videos = [];

        function __construct($channel, $videos) {
            $this->channel = $channel;
            $this->videos = $videos;
        }
        function getName() : string {
            return $this->channel;
        }
        function getVideos() : array {
            return $this->videos;
        }
        function allViews() : int {
            $allViews = 0;
            foreach ($this->videos as $video) {
                $allViews += $video->setViews();
            }
            return $allViews;
        }
        function allIncome() : int {
            $allIncome = 0;
            foreach ($this->videos as $video) {
                $allIncome += $video->setSalary();
            }
            return $allIncome;
        }
        function mostPopularVideo() {
            $arr = [];
            foreach ($this->videos as $video) {
                array_push($arr, $video->setViews());
            }
            return max($arr);
        }

        function mostIncomeVideo() {
            $arr = [];
            foreach ($this->videos as $video) {
                array_push($arr, $video->setSalary());
            }
            return max($arr);
        }
    }

    class Video {
        private string $name;
        private int $views;
        private int $salary;

        function setName($name) {
            $this->name = $name;
        }
        function views() {
            $this->views = rand(1, 200000);
        }
        function setViews() {
            return $this->views;
        }
        function setSalary() {
            return $this->salary;
        }
        function salary() {
            $this->salary = $this->views * rand(1,3);
        }
        function __construct($name) {
            $this->name = $name;
            $this->views();
            $this->salary();
        }
    }

    $videos  = [
        new Video('MyLife'),
        new Video('Hobby'),
        new Video('KVN'),
        new Video('Obj'),
    ];

    $channel = new Channel('MyChannel', $videos);
    echo '<pre>';
    print_r($channel);
    echo '</pre>';
    echo 'Общее количество просмотров состовляет ' .$channel->allViews();
    echo '<br>';
    echo 'Общий доход составил ' .$channel->allIncome() . '$';
    echo '<br>';
    echo 'Самое популярное видео набрало ' . $channel->mostPopularVideo() . ' просмотров';
    echo '<br>';
    echo 'Самый большой доход за видео ' . $channel->mostIncomeVideo() . '$';