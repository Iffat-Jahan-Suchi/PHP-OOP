<?php

//static
//class Car{
//    public $name;
//    public $color;
//    public $message;
//
//
//    public function __construct()
//    {
//        echo $this->name="volvo ".   $this->color="red";;
//
//    }
//
//}
//$myCar=new Car();





//dynamic


//class Car{
//    public $name;
//    public $color;
//    public $message;
//
//    public function __construct($name,$color)
//    {
//        $this->name=$name;
//        $this->color=$color;
//    }
//
//    public function info()
//    {
//        return $this->message="The car name is ".$this->name." and color is".$this->color;
//    }
//}
//
//$myCar=new Car("Toyota",'red');
//echo $myCar->info();



//Destructor

class information{
    public function __construct()
    {
        echo "i am contructor ";
    }

    public function __destruct()
    {
        echo " i am destuctor";
    }

    public function ok()
    {
        echo " i am ok";
    }
    public function uk()
    {
        echo " i am uk";
    }
}
$myInfo=new information();
$myInfo->ok();
$myInfo->uk();

//destruct ta sobar pore call hbe always
?>
