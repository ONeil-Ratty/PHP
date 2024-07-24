<?php


class Person {
    public $first = "O'Neil";
    private $last = "Ratty";
    private $age = "19";
}

class Pet extends Person {
    public $petType;
    
    // static property
    public static $ageOfPet = "2 months";

       // Applied a strict data type to set pet age
    public static function setNewAgeOfPet($petAge) {
        self::$ageOfPet=$petAge;

     }


    public function owner($nameOfOwner,$petType){
        if ($petType == "dog"){
            $this->petType= $petType;
            return "<br>Hello $nameOfOwner i am your dog";

        }elseif($petType == "cat"){
            $this->petType= $petType;
            return "<br>Hello $nameOfOwner i am your cat";

        }
        elseif($petType == "snake"){
            $this->petType= $petType;
            return "<br>Hello $nameOfOwner i am your snake";


        }

    }
    
 
}

?>