<?php
interface calculate
{
    public function result();
}

class radiusCal implements calculate
{
    private $radius;
    private $finalResult;
    public function __construct($radius)
    {
        return $this->radius=$radius;
    }
    public function result()
    {
        return $this->finalResult="The radius is ".number_format(pi()*($this->radius)**2,2);
    }
}

class area implements calculate
{
    private $height;
    private $width;

    public function __construct($height,$width)
    {
        $this->height=$height;
        $this->$width=$width;
        return $this->res=0.5*$this->height*$this->$width;
    }
    public function result()
    {
        return " The area is ".$this->res;
    }
}
class rectangle implements calculate
{
    private $height;
    public $res;
    public function __construct($height,$width)
    {
        $this->height=$height;
        $this->$width=$width;
        return $this->res=$this->height*$this->$width;
    }
    public function result()
    {
        return " The area of rectangle ".$this->res;
    }
}

$radius=new radiusCal('4');
$area=new area(4,4);
$rectangle=new rectangle(5,5);

$datas=[$radius,$area,$rectangle];
foreach ($datas as $data)
{
    echo $data->result();
}