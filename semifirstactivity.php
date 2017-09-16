<?php 
	/**
	* 
	*/
	class calculator
	{
				
		function __construct()
		{
		}
		private  $quotient=0;
		private  $sum=0;
		private  $difference=0;
		private  $product=1;

		public function add($x,$y){
			$this->sum = $x + $y;
			return $this->sum;
		}

		public function divide($x,$y){
			$this->quotient = $x/$y;
			return $this->quotient;
		}

		public function minus($x,$y){
			$this->difference = $x-$y;
			return $this->difference;
		}

		public function multiply($x,$y){
			$this->product = $x*$y;
			echo $this->product;
		}
	}

	$calc = new calculator();
	
	echo $calc->add(5,5);
	echo $calc->divide(5,5);
	echo $calc->minus(5,5);
	echo $calc->multiply(5,5);
?>