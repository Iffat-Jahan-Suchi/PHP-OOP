<?php
interface Calculator
{
    public function result();
}

class add implements Calculator
{
    private $firstNum;
    private $lastNum;
    private $result;
    public function __construct($firstNum,$lastNum)
    {
        $this->firstNum=$firstNum;
        $this->$lastNum=$lastNum;
        $this->result=$this->firstNum + $this->$lastNum;
    }
    public function result()
    {
        return "The adding no is ".$this->result;
    }
}
class sub implements Calculator
{
    private $firstNum;
    private $lastNum;
    private $result;
    public function __construct($firstNum,$lastNum)
    {
        $this->firstNum=$firstNum;
        $this->$lastNum=$lastNum;
        $this->result=$this->firstNum - $this->$lastNum;
    }
    public function result()
    {
        return " The sub no is ".$this->result;
    }
}

class mul implements Calculator
{
    private $firstNum;
    private $lastNum;
    private $result;
    public function __construct($firstNum,$lastNum)
    {
        $this->firstNum=$firstNum;
        $this->$lastNum=$lastNum;
        $this->result=$this->firstNum * $this->$lastNum;
    }
    public function result()
    {
        return " The mul no is ".$this->result;
    }
}

class division implements Calculator
{
    private $firstNum;
    private $lastNum;
    private $result;
    public function __construct($firstNum,$lastNum)
    {
        $this->firstNum=$firstNum;
        $this->$lastNum=$lastNum;
        $this->result=$this->firstNum / $this->$lastNum;
    }
    public function result()
    {
        return " The division no is ".$this->result;
    }
}

$adding=new add('100',200);
$sub=new sub('500',171);
$mul=new mul('500',205);
$div=new division('500',2);
$datas=[$adding,$sub,$mul,$div];
foreach ($datas as $data)
{
    echo $data->result();
}