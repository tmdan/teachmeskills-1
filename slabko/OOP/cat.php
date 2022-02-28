<?php

class cat
{
    public $color;
    public $age;
    public $breed;
    public $placeOfBirth;
    public $sounds;

    public function __construct($color, $age, $breed, $placeOfBirth, $sounds)
    {
        $this->color = $color;
        $this->age = $age;
        $this->breed = $breed;
        $this->placeOfBirth = $placeOfBirth;
        $this->sounds = $sounds;
    }
}

    $myCat = new cat('brown', '10', 'lop-eared', 'Minsk', 'meow');

/*почему когда я написал так вылезла фатальная ошибка?*/
   /* $myCat->color = 'brown';
    $myCat->age = 10;
    $myCat->breed = 'lop-eared';
    $myCat->placeOfBirth = 'Minsk';
    $myCat->sounds = 'meow';*/

    echo 'My cat has '.$myCat->color.' color, he is '.$myCat->age.' years old, has '. $myCat->breed.' breed, was born in '.
    $myCat->placeOfBirth.' and makes sounds like '. $myCat->sounds;
?>