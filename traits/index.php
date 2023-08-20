<?php

trait science{
    public function mathematics()
    {
        return "My subject is mathematics";
    }
}

trait commerce{
    public function accounting()
    {
        return "My subject is accounting";
    }
}
trait arts{
    public function English()
    {
        return "My subject is English";
    }
}
class allgroups{
    use science,commerce,arts;
}

$mysubject=new allgroups();
echo $mysubject->English();
echo $mysubject->accounting();
echo $mysubject->mathematics();