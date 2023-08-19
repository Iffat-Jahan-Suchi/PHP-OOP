<?php

class Teacher
{
    private $name;
    private $subject;
    private $message;

    public function info($name,$subject)
    {
        return $this->message=$this->name=$name."<br>".$this->subject=$subject;
    }
}

$myTeacher=new Teacher();
echo $myTeacher->info('Belal',"Mathematics");
