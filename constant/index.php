<?php

//class Teacher
//{
//    const Name="abc";
//
//}
//e
//
//echo Teacher::Name;

class Teacher
{
    const Name="Farida Yasmin";

    public function info()
    {
        return self::Name;
    }
}
$myTeacher=new Teacher();
echo $myTeacher->info();