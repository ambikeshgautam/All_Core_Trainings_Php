<?php 
// type of inheritance in php
/*

    /single level inheritance:- if a class is derived fromone base class (Parent Class), it is called Single Inheritance/





	.Multiple inheritance (not support in php)
	. Multi-level inheritance
	.Hierarchical inheritance




*/

// Single  Inheritance

	// class Father{
	// 	public $a;
	// 	public $b;

	// 	function getValue($x,$y){
	// 		$this->a = $x;
	// 		$this->b = $y;
	// 	}
	// }
	// class Son extends Father{
	// 	function display(){
	// 		echo "Value of A:$this->a<br>";
	// 		echo "Value of B:$this->b<br>";
	// 	}
	// }

	// $obj = new Son;
	// $obj->getValue(10,20);
	// $obj->display();
// ===========================================Multiple inheritance ============================================================

/*
	if a class is derived from more than one parent class, then it is called multiple inheritance . (this is not support in PHP)
*/
echo"===========================================Multi level inheritance ============================================================";

/*
	IN mutli-level inheritance , the class inherits the feature of another deriverd class(child class)

Father(Parentclass)-->>Son(Childclass)-->>GrandSon(Grandchil Class)

--------------------------------------------------------------------------------------------------------------
syntax :-

			class Father{
				member of class Father
			}
			class Son extends Father{
			member of class Son
			}
			clss GrandSon extends Son{
				member of class GrandSon
			}


*/


// 	class Father{
// 		public $a;
// 		public $b;

// 		function getValue($x,$y){
// 			$this->a = $x;
// 			$this->b = $y;
// 		}
// 	}
// 	class Son extends Father{
// 		public $c = 30;
// 		public $sum;
// 		function add(){
// 			$this->sum = $this->a+ $this->b+$this->c;
// 			return $this->sum;
// 		}
// 	}
// 	class GrandSon extends Son{
// 		function display(){
// 			echo "Value of A:$this->a <br>";
// 			echo "Value of B:$this->b <br>";
// 			echo "Value of C:$this->c <br>";
// 			echo "Value of Sum: ".$this->add()." <br>";
// 		}
// 	}
// $obj = new GrandSon();
// $obj->getValue(10,20);
// $obj->display();

echo"===========================================Multi level inheritance ===========================================================";
/*
 ==================hierarchical Level inheritance ====================

 when One parents class is extends by the multiple chiled class then it called Mutliple inheritance

 Father(ParentClass)----->>>>Son(chiled class)
 Father(ParentClass)----->>>>duaghter(chiled class)
 Father(ParentClass)----->>>>Big_daughter(chiled class)
 Father(ParentClass)----->>>>Big_Son(chiled class)
Syntax :-

class Father {
	memebers of class Father 
}
class Son extends {
	memebers of class Son 
}
class Daughter extends Father {
	memebers of class daughter 
}


*/
	class Father{
		public $a;
		public $b;

		function getValue($x,$y){
			$this->a = $x;
			$this->b = $y;
		}
	}
	class Son extends Father{
		function add(){
			return $this->a + $this->b;
		}
		function display(){
			echo "Value of A: $this->a <br>";
			echo "Value of A: $this->a <br>";
			echo "Value of A:".$this->add() ." <br>";
		}



	}


	?>