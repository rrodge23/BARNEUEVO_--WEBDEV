<?php 
	/**
	* 
	*/
	class calculator
	{
		private $x;
		private $y;		
		function __construct($x,$y)
		{
			$this->x =$x;
			$this->y =$y;
		}
		

		public function addition(){
			return $this->x + $this->y;
		}

		public function division(){
			return $this->x / $this->y;
		}

		public function subtraction(){
			return $this->x - $this->y;
		}

		public function multiplication(){
			return $this->x * $this->y;
		}
	}

	$calc = new calculator(5,5);
	echo "Addition: " . $calc->addition() ."<br>";
	echo "division: " . $calc->division() . "<br>";
	echo "subtraction: " . $calc->subtraction() . "<br>";
	echo "multiplication: " . $calc->multiplication() . "<br>";
?>