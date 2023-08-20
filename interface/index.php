<?php

interface language{
    public function lan();
}

class php implements language{
    public function lan()
    {
        return "i am php ";
    }
}
class java implements language
{
    public function lan()
    {
        return "i am java ";
    }
}
class python implements language
{
    public function lan()
    {
        return "i am python ";
    }
}

$php=new php();
$python=new python();
$java=new java();
$datas=[$php,$python,$java];
foreach ($datas as $data)
{
    echo $data->lan();
}