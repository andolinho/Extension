<?php

class pig
{
	public $name="";
	public $weight="";
	
	public function setweight($weight)
	{
		$this->weight = $weight;
		
	}
	function showWeight()
	{
		echo "Whaat? ".$this->weight." Kilogramms? i weigh way to much :(";
	}
}
 
class wildpig extends pig {
  // The  child can use the parent's class code
}


$oinki = new wildpig;
$oinki->setweight(42);
$oinki -> showWeight();

?>