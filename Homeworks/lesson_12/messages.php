<?php
/*Если раньше я описывал каждый метод, и свойства, то тут подумайте сами и попытайтесь применить полученные знания для формирования архитектуры программы:
Домашку можно сделать двумя способами, через абстрактный класс, что более предпочтительнее так как код будет чище, и через интерфейсы.

Суть задания:

Представте что у вас есть сайт, и человек (Объект Human) регистрируется на вашем сайте, при этом у него есть возможность при регистрации или позже указать канал связи (класс SmsChannel, TelegramChannel, EmailChannel и т.д.). Так есть возможность отправить сообщения данному пользователю по определенному каналу (метод notification($message) у объекта Human или его родителя (абстракция предпочтительнее)).

Ваша задача:

предоставить возможность отправки сообщения пользователю в зависимости от канала связи это основная задача которая включает подзадачи, такие как:
дать возможность установки канала и его смены в случаи необходимости.
стандартизировать каналы связи, то есть предоставить возможность в случае необходимости создавать другие объекты канала (ViberChannel, SkypeChannel и т.д.), т.е. создать контракт для каналов. Подумайте какой интерфейс должны содержать все каналы? я думаю метод отправки сообщения (sendMessage(string $message)), тут именно интерфейс так как у разных каналов разная реализация логики отправки сообщения и абстракция не уместна.
PS Итого > есть пользователь у него есть каналы связи (SmsChannel, TelegramChannel) все каналы стандартизированы общим интерфейсом, у пользователя или у его родителя (абстрактный класс) есть методы отправки сообщения (notification($message)) в зависимости от канала высылается сообщения в определенный канал. Каналы можно менять у пользователя. Есть также возможность создавать свои каналы (ViberChannel).*/
interface SendMessage {
    public function sendMessage(string $message);
}

class User  {
    protected $userName;
    protected $connectTypes=[];

    public function __construct($userName, MessageChannel $connectType = null){
        $this->userName=$userName;
        if ($connectType === null){
            $this->connectTypes=[];
         } else $this->connectTypes[]=$connectType->getChannelName();
    }

    public function notification(SendMessage $messanger, $message){
        if(in_array($messanger->getChannelName(), $this->connectTypes)) {
            $messanger->sendMessage($message);
        } else echo 'Тип связи не совместим';
    }

    public function getConnectTypes(){
        if(empty($this->connectTypes)){
            return 'Нет типов связи';
        } else{
            return "Типы связи пользователя: ".implode(', ', $this->connectTypes);
        }
    }

    public function setConnectType(MessageChannel $connectType){
        if(!in_array($connectType->getChannelName(), $this->connectTypes)) {
            $this->connectTypes[] = $connectType->getChannelName();
            echo $connectType->getChannelName().' успешно добавлен';
        } else echo  $connectType->getChannelName().' уже в наличии у пользователя';
    }

}

abstract class MessageChannel implements SendMessage {
    protected $channelName;
    abstract protected function SendMessageRealization(string $message);

    public function sendMessage(string $message){
        $this->SendMessageRealization($message);
    }

    public function __construct($channelName){
        $this->channelName=$channelName;
    }
    public function getChannelName(){
        return $this->channelName;
    }
}

class SmsChannel extends MessageChannel {
    protected function SendMessageRealization($message){
       echo "Реализация метода отправки сообщения через $this->channelName. Ваше сообщение: ".$message;
    }
}

class TelegramChannel extends MessageChannel{
    protected function SendMessageRealization($message){
        echo "Реализация метода отправки сообщения через $this->channelName. Ваше сообщение: ".$message;
    }
}

class ViberChannel extends MessageChannel{
    protected function SendMessageRealization($message){
        echo "Реализация метода отправки сообщения через $this->channelName. Ваше сообщение: ".$message;
    }
}

//class EmailChannel extends MessageChannel{
//    protected function SendMessageRealization($message){
//        return "Реализация метода отправки сообщения через $this->channelName";
//    }
//}

$telegram=new TelegramChannel('Telegram');
$SMS=new SmsChannel('SMS-message');
$viber=new ViberChannel('Viber');

$vasia = new User('Vasia');

echo $vasia->getConnectTypes().'<br>';
echo $vasia->setConnectType($viber).'<br>';
echo $vasia->getConnectTypes().'<br>';
echo $vasia->setConnectType($telegram).'<br>';
echo $vasia->setConnectType($telegram).'<br>';
echo $vasia->getConnectTypes().'<br>';
echo $vasia->notification($telegram, 'Mess HELLO WORLD').'<br>';
echo $vasia->notification($SMS, 'Mess HELLO WORLD').'<br>';