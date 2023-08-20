<?php
abstract class Teacher
{
    public $name;
    public $subject;

    public function __construct($name,$subject)
    {
        $this->name=$name;
        $this->subject=$subject;
    }

    abstract public function info();

}

class student extends Teacher{
    public function info()
    {
        return $this->name.$this->subject;
    }
}

$myInformation=new Student('Bornali','Networking');
echo $myInformation->info();