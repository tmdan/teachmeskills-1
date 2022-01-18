<?php
/*
 Домашку можно сделать двумя способами, через абстрактный класс, что более предпочтительнее
так как код будет чище, и через интерфейсы.

Суть задания:

Представте что у вас есть сайт, и человек (Объект Human) регистрируется на вашем сайте,
при этом у него есть возможность при регистрации или позже указать канал связи
(класс SmsChannel, TelegramChannel, EmailChannel и т.д.). Так есть возможность отправить сообщения данному
пользователю по определенному каналу (метод notification($message) у объекта Human или его родителя
(абстракция предпочтительнее)).

Ваша задача:

предоставить возможность отправки сообщения пользователю в зависимости от канала связи это основная задача
которая включает подзадачи, такие как:
дать возможность установки канала и его смены в случаи необходимости.
стандартизировать каналы связи, так есть предоставить возможность в случаи необходимости создавать другие объекты канала
(ViberChannel, SkypeChannel и т.д.), так есть создать контракт для каналов. Подумайте какой интерфейс должны содержать
все каналы?
я думаю метод отправки сообщения (sendMessage(string $message)), тут именно интерфейс так как у разных каналов разная
реализация логики отправки сообщения и абстракция не уместна.
PS Итого > есть пользователь у него есть каналы связи (SmsChannel, TelegramChannel) все каналы стандартизированы
общим интерфейсом, у пользователя или у его родителя (абстрактный класс) есть методы отправки сообщения
(notification($message)) в зависимости от канала высылается сообщения в определенный канал.
Каналы можно менять у пользователя. Есть также возможность создавать свои каналы (ViberChannel).*/

class Human{
    private $name;
    private $channel;

    public function __construct($name, $channel=null){
        $this->name = $name;
        if (!is_null($channel)){
            $this->channel = $channel;
        }
    }

    public function designateChannel(ChannelInterface $channel){
        $this->channel = $channel;
    }

    public function notification(){

        if (is_null($this->channel)){
            echo "У пользователя " . $this->name . " не задан телеграмм канал" . '<br>';
        }else
            $this->channel->sendMessage();
    }

    public function showName(){
        return $this->name;
    }
}

interface ChannelInterface{

    public function sendMessage(); //
    public function displayStatus(); // отобразить статус сообщения

}

class SmsChannel implements ChannelInterface{
    public function sendMessage(){
        echo "Сообщение отправлено при помощи смс-канала" . '<br>';
    }

    public function displayStatus(){
        echo "Здесь отобразится статус сообщения: отправлено, доставлено, прочитано ";
    }
}

class TelegramChannel implements ChannelInterface{
    public function sendMessage(){
        echo "Сообщение отправлено при помощи телеграм-канала" . '<br>';
    }

    public function displayStatus(){
        echo "Здесь отобразится статус сообщения: отправлено, доставлено, прочитано " . '<br>';
    }

    public function sendFile(){
        echo "Файл отправлен пользователю при помощи телеграм." . '<br>';
    }
}

$Kate = new Human('Kate' , new TelegramChannel());
$Yuri = new Human('Yuri' );

echo '<pre>' . var_export($Kate, true) . '</pre>';

echo '<pre>' . var_export($Yuri, true) . '</pre>';

echo "Отправим сообщение " . $Kate->showName() . '<br>';
$Kate->notification();

echo "Отправим сообщение " . $Yuri->showName() . '<br>';
$Yuri->notification();

echo "Установим для пользователя " . $Yuri->showName() . ' канал для связи. ' . '<br>';
$Yuri->designateChannel(new SmsChannel());

echo "Отправим сообщение " . $Yuri->showName() . '<br>';
$Yuri->notification();