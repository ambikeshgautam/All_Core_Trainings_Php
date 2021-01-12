<?php
echo "<br> ================================= Part-3(inheritance) ===============================<br>";

class AC1{

    public $model ="xyz";
    public $speed = 16;

    function speedUp(){
       echo $this->speed+1;

    }
    function speedDown(){
        echo $this->speed-1;

    }
    function __construct($model,$speed){
         echo $this->model=$model;
         echo $this->speed=$speed;
        // $this->speed=$speed;
        // $this->model=$model;

    }


}
class SmartAc extends AC1{//Drive class ,sub class ,child class
    public $time=true;
    public $wifi=true;
    // public $model1;
    // public $speed1;

    function __construct(){
        //echo "child_clss constructor";
     //   parent::__construct("samsung",15);//for call parent constuctor
    //  echo $this->model=$model1;
    //  echo $this->speed1=$speed1; ss

    }


}
// $ac1 = new SmartAc("daikin",10);
// echo $ac1->model;
// echo $ac1->speedUp();//there is not use of the $ sign

//$Ac1 = new SmartAc();//it willl not call parent class constructor
//echo $Ac1->model;
 $ambikesh = new AC1("voltas",15);
 echo "ambikesh model=". $ambikesh->model."<br>";
 echo "ambikesh speed=".$ambikesh->speed."<br>";

 $Ram = new SmartAc("samsung",13);
  echo"Ram(model)=".$Ram ->model."<br>";
  echo "Ram(speed)=".$Ram->speed."<br>";
  
  ?>