<?php
class Test{
	public $a;
	
	function abc($product){
	$this->a=$product;
	//return $this->name;
	echo $product;
	
	}

}
$obj=new Test();
$obj->abc(9);

?>