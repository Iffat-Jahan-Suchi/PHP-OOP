<?php

//Inherite with Protected
//class Teacher{
//    public $name;
//    public $subject;
//    public $msg;
//
//    public function __construct($name,$subject)
//    {
//        $this->name=$name;
//        $this->subject=$subject;
//    }
//    protected function message()
//    {
//        return $this->msg=$this->name."
//        is teaches ".$this->subject;
//    }
//
//
//}
//class Student extends Teacher{
//    public $studentName;
//
//    public function myaccess()
//    {
//        return $this->message();
//    }
//    public function ts($studentName)
//    {
//        return $this->studentName=" to ".$studentName;
//    }
//}
//
//$myObj=new Student('Momtaj','English');
//
//echo $myObj->myaccess();
//echo $myObj->ts('karim');


//OVERRIDDING


class Teacher{
    public $name;
    public $email;
    public $mobile;

    public function __construct($name,$email)
    {
        $this->name=$name;
        $this->email=$email;
    }

}

class Student extends Teacher{
    public $mobile;
    public $msg;
    public function __construct($name, $email,$mobile)
    {

         parent::__construct($name, $email);
        $this->mobile=$mobile;
        //or
//        $this->name=$name;
//        $this->email=$email;
//        $this->mobile=$mobile;
//
    }
    public function message()
    {
        echo $this->msg=$this->name."<br>".
        $this->email.$this->mobile;
    }
}

 $myInfo=new Student('sultana','sultana@gmil.com','0175101010');
$myInfo->message();

//kono parent class k extends na korte dite chaile class er agee Final keyword use korte hoy.ex:
// Final class TV{
//     //....
//
//}