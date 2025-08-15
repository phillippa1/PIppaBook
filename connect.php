<?php 

//part 22- Classes

//Project in segments
//blueprint
//where to declare varaibles
class myclass
{
    public $name = "someone";
    function one()
    {
        //referencing variables
        echo $this->name;
    }

    function two()
    {
        echo " two <br>";
    }
}

$a = new myclass();

//now you can access the functions inside the class
// $a->one();
// $a->two();
echo $a->name;


//$b = new myclass();