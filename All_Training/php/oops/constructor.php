<?php
class Fruit{
    public $name;
    public $color;
    function __construct($name) {
        $this->name = $name;

    }
    function get_name(){
        return $this->name;

    }
}
$apple = new Fruit("Apple");
echo $apple->get_name();
$mango = new Fruit("Mango");
echo $mango->get_name();
$banana = new Fruit("Banana");
echo $banana->get_name();

?>