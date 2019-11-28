<?php
class car{
    //properties
    public $name;
    public $color="red";
    public $hasallowwheels=true;

    //methods 
    function set_name($name){
        $this->name=$name;
    }
    function get_name(){
        return $this->name;
    }
    public function hello(){
        return "beep \n";
    }
}
$bmw = new car();
$bmw->set_name('M30i');
echo $bmw->get_name() ."\n";
echo $bmw->hello();

//adding constructors and destructors
class car_1{
    public $name;
    public $color;

    //constructor 
    function __construct($name, $color){
        //this function for initializing properties
        $this->name=$name;
        $this->color=$color;
    }
    function show_details(){
        echo $this->name." : ";
        echo "The color of the car is ".$this->color."\n";
    }
    function __destruct(){
        echo "This car is {$this->name}." ."\n";//object is destroyed here
    }
}

$bmw = new car_1("M30i","red");
echo $bmw->show_details();

//adding the convert to string object
class car_2{
    public $name;
    public $color;

    //constructor
    function __construct($name, $color){
        $this->name=$name;
        $this->color=$color;
    }
    public function __tostring(){
        try
        {
            //return(string) $this->name;
            return "The color of the car is: {$this->color}. .\n";
        }
        catch(Exception $exception){
            return '';
        }
    }
}
$bmw = new car_2("M30i","red");
echo $bmw;

class car_3{
    public $name;
    public $price;

    function __construct($name, $color){
        $this->name=$name;
        $this->color=$color;
    }
    function addprice($amount){
        $this->price = $this->price + $amount;
        echo "$amount  added to the car price .\n";
    }
    public function __clone(){
      $this->price=10;
      echo"The price has been added to the cloned car .\n";
    }
}

$bmw = new car_3("M30i","red");
$bmw->addprice(100);
$mercedes = clone $bmw;

?>
