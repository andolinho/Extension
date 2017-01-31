<?php

class pig
{
	private $name="babe";
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
  
  function happyPig()
  {
	  echo "Yeah, whole ".$this->weight." Kilogramms. Just ". (2 * $this->weight)/3 . " to go. Iam ".$this->name."."; 
  }
}


$oinki = new wildpig;
$oinki->setweight(42);
$oinki -> happyPig();

?>