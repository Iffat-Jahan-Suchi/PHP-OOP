<?php
//static
//class Student{
//    public $name="jahan";
//    public $age=15;
//    public $roll=20;
//
//    function message()
//    {
//        return "hi i am ".$this->name." my age is ".$this->age." my roll no is ".$this->roll;
//    }
//}
//
//$mystudent=new Student();
//echo $mystudent->message();

//Dynamic

class Student{
    public $name;
    public $age;
    public $roll;
    public $information;

    function info($name,$age,$roll)
    {
        return $this->information=$this->name=$name."<br>". $this->age=$age. "<br>". $this->roll=$roll;


    }

}
$mystudent=new Student();
 echo $mystudent->info("jahan",15,20);

?>

