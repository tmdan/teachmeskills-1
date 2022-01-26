<?php
//Домашку можно сделать двумя способами, через абстрактный класс,
//что более предпочтительнее так как код будет чище, и через интерфейсы.
//
//Суть задания:
//
//Представте что у вас есть сайт, и человек (Объект Human) регистрируется на вашем сайте,
//при этом у него есть возможность при регистрации или позже указать канал связи (класс SmsChannel,
//TelegramChannel, EmailChannel и т.д.). Так есть возможность отправить сообщения данному пользователю
//по определенному каналу (метод notification($message) у объекта Human или его родителя (абстракция предпочтительнее)).
//
//Ваша задача:
//
//предоставить возможность отправки сообщения пользователю в зависимости от канала связи это основная задача которая
//включает подзадачи, такие как:
//дать возможность установки канала и его смены в случаи необходимости.
//стандартизировать каналы связи, так есть предоставить возможность в случаи необходимости создавать другие объекты канала
//(ViberChannel, SkypeChannel и т.д.), так есть создать контракт для каналов.
//Подумайте какой интерфейс должны содержать все каналы? я думаю метод отправки сообщения (sendMessage(string $message)),
//тут именно интерфейс так как у разных каналов разная реализация логики отправки сообщения и абстракция не уместна.
//PS Итого > есть пользователь у него есть каналы связи (SmsChannel, TelegramChannel)
//все каналы стандартизированы общим интерфейсом, у пользователя или у его родителя (абстрактный класс)
//есть методы отправки сообщения (notification($message)) в зависимости от канала высылается сообщения в определенный канал.
//Каналы можно менять у пользователя. Есть также возможность создавать свои каналы (ViberChannel).

interface GeneralChannelInterface{ //балванка для всех каналов
    public function sendMessage($message);
    public function getChannel();
}
class TelegramChannel implements  GeneralChannelInterface{
    public function sendMessage($message){return $message;}
    public function getChannel(){return "Telegram";}
}
class ViberChannel implements  GeneralChannelInterface{
    public function sendMessage($message){return $message;}
    public function getChannel(){return "Viber";}
}
class WhatsUpChannel implements  GeneralChannelInterface{
    public function sendMessage($message){return $message;}
    public function getChannel(){return "WhatsUp";}
}
class Site{
    private string $name;
    private array $userStorage=[]; //массив хранения зарешистрированных пользователей
    public string $channelConnect="";//сохранение выбранного канала
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function registration(Human $human,GeneralChannelInterface $channel){
        $this->channelConnect=$channel->getChannel(); //установка канала при регистрации
        array_push($this->userStorage,$human);
    }
    private function checkUserOnRegistration(GeneralChannelInterface $channel,Human $human){ // проверка на регистрацию
        foreach ($this->userStorage as $index){
            if($index===$human) {
                if($this->checkConnect($channel)) return true;
            }
        }
        return false;
    }
    private function checkConnect(GeneralChannelInterface $channel){ //совпадения каналов админа с пользователем
        if($this->getChannelConnect()===$channel->getChannel())
            return true;
    }
    public function getCheckUser(GeneralChannelInterface $channel,Human $human){
        return $this->checkUserOnRegistration($channel,$human);
    }
    public function getChannelConnect(){
        return $this->channelConnect;
    }
}
class User extends Human {
    private string $name;
    private string $logo;
    private int $password;
    public function __construct($name,$login,$password)
    {
        parent::__construct($name,$login,$password);
    }
    public function changeChannelConnect(GeneralChannelInterface $channel,Site $site){ //изменение канала связи
        $site->channelConnect=$channel->getChannel();
    }
    public function sendMessage(GeneralChannelInterface $channel, Human $human, $message) //здесь ошибка!!!!!
    {
        return $channel->sendMessage($message);
    }
}
class Admin extends Human {
    private $site;
    public function __construct($name,$login,$password,Site $site)
    {
        parent::__construct($name,$login,$password);
        $this->site=$site;
    }
    public function sendMessage(GeneralChannelInterface $channel,Human $human,$message){
        if($this->site->getCheckUser($channel,$human))
            return $channel->sendMessage($message);
        else return "Incorrect channel connection or do not registered!!!";
    }
}
abstract class Human{ //балванка для пользователей, админа,модератора и др...
    private string $name;
    private string $login;
    private int $password;
    public function __construct($name,$login,$password)
    {
        $this->name=$name;
        $this->login=$login;
        $this->password=$password;
    }
    public abstract function sendMessage(GeneralChannelInterface $channel,Human $human,$message);//разная реалицазация

}
$site = new Site("TeachMeSkills");
$user = new User("Ilya","Proshka",33202803);
$site->registration($user,new TelegramChannel());
$admin = new Admin("Ilya","Admin","1111",$site);
echo $admin->sendMessage(new TelegramChannel(),$user,"Hi");
$user->changeChannelConnect(new ViberChannel(),$site);
echo $admin->sendMessage(new TelegramChannel(),$user,"Hi");

