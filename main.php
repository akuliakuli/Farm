<?php
//FIRST LAUNCH
class Farm{
    public static $sum =  array();
    public static $cowsum = 0;
    public static $chicksum = 0;
    public static $milksum = 0;
    public static $eggs = 0;
    public function addAnimalsByOne($obj){
        self::$sum[] = $obj;
    }

    public static function CountAnimals(){
        foreach(self::$sum as $animals){
            if(get_class($animals) == "Cow"){
                self::$cowsum++;
            }else{
                self::$chicksum++;
            }
        }
    }
    public static function showCows(){
        echo 'On this farm there is ' . self::$cowsum . " cows"; 
    }
    public static function showChick(){
        echo 'On this farm there is ' . self::$chicksum . " chicken"; 
    }
    public static function pickProduct($obj){
        for($i = 1; $i <=7; $i++){
            if(get_class($obj) == "Cow"){
                for($i = 1; $i <= 10;$i++){
                    self::$milksum += $obj -> milk();
                }
            }else{
                for($i = 1; $i <= 20;$i++){
                    self::$eggs += $obj->egglaid();
                }
            }
        }
    }
    public static function showMilkSum(){
        echo 'The cow produced ' . self::$milksum . " litres of milk";
    }
    public  static function showEggssum(){
        echo 'The chicken produced ' . self::$eggs . " eggs";
    }
}

$iter = 0;
class Cow extends Farm{
    public static $id;

    public function __construct(){
        $this -> id = rand(0,10000);
    }
    public function milk(){
        return rand(8,12);
    }
}

class Chicken extends Farm{
    public $id;

    public function __construct(){
        $this -> id = rand(0,10000);
    }
    public function egglaid(){
        return rand(0,1);
    }
}
//SECOND LAUNCH




// print_r(Farm::$sum);