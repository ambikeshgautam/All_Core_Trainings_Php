<?php
echo "<br> ================================= Part Two (constructor) ===============================<br>";

class AC1{

    public $model ="xyz";
    public $speed = 16;

    function speedUp(){
       echo $this->speed+1;

    }
    function speedDown(){
        echo $this->speed-1;

    }
    function __construct($speed, $model){
        // echo $this->model=$model;
        // echo $this->speed=$speed;
        $this->speed=$speed;
        $this->model=$model;

    }


}
$Ac_one = new AC1;//here constructor call itself
echo $Ac_one->model;//using only object access constructor value
$Ac_one = new AC1("samsung","18");
echo $Ac_one->model."<br>";
echo $Ac_one->speed;


?>